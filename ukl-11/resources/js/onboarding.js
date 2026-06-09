(function () {
  'use strict';

  const $ = (sel, root = document) => root.querySelector(sel);
  const $$ = (sel, root = document) => Array.from(root.querySelectorAll(sel));

  const STORAGE_KEY = 'sija_onboarding_v1';

  const DEFAULT_STATE = {
    profile: {},
    consultation: {
      activities: [],
      learning: [],
      environment: [],
      workStyle: [],
      careerGoal: [],
      technologies: [],
      skillToLearn: '',
      interest: ''
    }
  };

  function loadState() {
    try {
      const raw = localStorage.getItem(STORAGE_KEY);
      if (!raw) return structuredClone(DEFAULT_STATE);
      const parsed = JSON.parse(raw);
      return {
        ...structuredClone(DEFAULT_STATE),
        ...parsed,
        consultation: { ...structuredClone(DEFAULT_STATE.consultation), ...(parsed.consultation || {}) }
      };
    } catch {
      return structuredClone(DEFAULT_STATE);
    }
  }

  function saveState(next) {
    localStorage.setItem(STORAGE_KEY, JSON.stringify(next));
  }

  function setProgress(stepNum) {
    const bar = $('#onbProgressFill');
    if (!bar) return;
    const pct = Math.round(((stepNum - 1) / 3) * 100);
    bar.style.width = pct + '%';
  }

  function normalizeText(s) {
    return String(s || '').trim();
  }

  function getCheckedValues(name) {
    return $$(`input[name="${CSS.escape(name)}"]:checked`).map((i) => i.value);
  }

  function validateStep1() {
    const required = ['full_name', 'username', 'email', 'phone', 'birth_date', 'gender', 'city', 'school', 'major', 'education_level'];
    let ok = true;
    required.forEach((k) => {
      const el = document.querySelector(`[name="${k}"]`);
      if (!el) return;
      const val = normalizeText(el.value);
      if (!val) {
        ok = false;
        el.style.borderColor = 'rgba(239,68,68,.9)';
        el.style.boxShadow = '0 0 0 4px rgba(239,68,68,.14)';
      }
    });

    // Professional accounts optional, but if present should be filled.
    return ok;
  }

  function clearValidationStyles() {
    $$('input,textarea,select').forEach((el) => {
      el.style.borderColor = '';
      el.style.boxShadow = '';
    });
  }

  function initChipMultiSelect() {
    // For chips with hidden inputs.
    $$('.chip').forEach((chip) => {
      const input = $('input', chip);
      if (!input) return;

      const sync = () => {
        chip.classList.toggle('selected', input.checked);
      };

      chip.addEventListener('click', () => {
        input.checked = !input.checked;
        sync();
      });

      input.addEventListener('change', sync);
      sync();
    });
  }

  function initChoiceCheckboxes() {
    // For card-like checkbox items.
    $$('.choice').forEach((choice) => {
      const input = $('input', choice);
      if (!input) return;

      const sync = () => {
        choice.classList.toggle('selected', input.checked);
      };

      choice.addEventListener('click', (e) => {
        // prevent double-toggle when clicking on input
        if (e.target && e.target.tagName === 'INPUT') return;
        input.checked = !input.checked;
        sync();
      });

      input.addEventListener('change', sync);
      sync();
    });
  }

  function initStepNavigation() {
    // Step 1 continue
    const btn1 = $('#onbStep1Continue');
    if (btn1) {
      btn1.addEventListener('click', (e) => {
        clearValidationStyles();
        if (!validateStep1()) {
          e.preventDefault();
          $('#onbStep1Error')?.classList.remove('hidden');
          return;
        }

        const state = loadState();
        const profileKeys = [
          'full_name',
          'username',
          'email',
          'phone',
          'birth_date',
          'gender',
          'city',
          'school',
          'major',
          'education_level',
          'github',
          'linkedin',
          'portfolio'
        ];

        profileKeys.forEach((k) => {
          const el = document.querySelector(`[name="${k}"]`);
          if (el) state.profile[k] = el.value;
        });

        state.profile.skills = getCheckedValues('skills');
        saveState(state);

        // Allow normal navigation (formless). Redirect is via href in button.
      });
    }

    // Step 2 start analysis
    const btn2 = $('#onbStep2Continue');
    if (btn2) {
      btn2.addEventListener('click', () => {
        const state = loadState();
        state.consultation.activities = getCheckedValues('activities');
        state.consultation.learning = getCheckedValues('learning');
        state.consultation.environment = getCheckedValues('environment');
        state.consultation.workStyle = getCheckedValues('work_style');
        state.consultation.careerGoal = getCheckedValues('career_goal');
        state.consultation.technologies = getCheckedValues('technologies');
        state.consultation.skillToLearn = $('#skill_to_learn')?.value || '';
        state.consultation.interest = $('#interest_text')?.value || '';

        saveState(state);
      });
    }

    // Step 4 recommendations
    const btnReset = $('#onbReset');
    if (btnReset) {
      btnReset.addEventListener('click', () => {
        localStorage.removeItem(STORAGE_KEY);
      });
    }
  }

  function renderRecommendations() {
    const root = document.getElementById('onbRecGrid');
    if (!root) return;

    const state = loadState();
    const skills = (state.profile.skills || []).map(String);

    const interestText = normalizeText(state.consultation.interest).toLowerCase();

    // Heuristic scoring:
    const careers = [
      {
        id: 'uiux',
        name: 'UI/UX Designer',
        base: 78,
        matchSignals: ['UI/UX Design', 'Content Creation', 'Digital Marketing', 'Data Analyst', 'Data Science'],
        demand: 'Tinggi',
        salary: 'Rp6.000.000 - Rp15.000.000',
        difficulty: 'Sedang',
        required: ['Figma', 'User Research', 'Design Thinking', 'Frontend Developer']
      },
      {
        id: 'data_analyst',
        name: 'Data Analyst',
        base: 76,
        matchSignals: ['Data Analyst', 'Data Science', 'Networking', 'Cyber Security', 'Artificial Intelligence'],
        demand: 'Tinggi',
        salary: 'Rp8.000.000 - Rp18.000.000',
        difficulty: 'Sedang',
        required: ['SQL', 'Data Visualization', 'Statistics', 'Business Thinking']
      },
      {
        id: 'dm',
        name: 'Digital Marketing Specialist',
        base: 74,
        matchSignals: ['Digital Marketing', 'Content Creation', 'Networking', 'Data Analyst'],
        demand: 'Sedang',
        salary: 'Rp5.500.000 - Rp14.000.000',
        difficulty: 'Mudah - Sedang',
        required: ['Content Strategy', 'SEO/SEM', 'Analytics', 'Copywriting']
      },
      {
        id: 'product_designer',
        name: 'Product Designer',
        base: 72,
        matchSignals: ['UI/UX Design', 'Frontend Development', 'Mobile Development', 'Digital Marketing'],
        demand: 'Sedang',
        salary: 'Rp7.500.000 - Rp17.000.000',
        difficulty: 'Sedang',
        required: ['Product Thinking', 'UX Flows', 'Prototyping', 'User Research']
      },
      {
        id: 'ai_engineer',
        name: 'AI Engineer (Early)',
        base: 70,
        matchSignals: ['Artificial Intelligence', 'Data Science', 'Backend Development', 'Cyber Security'],
        demand: 'Tinggi',
        salary: 'Rp10.000.000 - Rp22.000.000',
        difficulty: 'Sulit',
        required: ['Python', 'Machine Learning Basics', 'Evaluation', 'Project Building']
      }
    ];

    function scoreCareer(c) {
      let score = c.base;

      const activeSkills = new Set(skills);
      c.matchSignals.forEach((s) => {
        if (activeSkills.has(s)) score += 7;
      });

      // Technology preferences influence
      (state.consultation.technologies || []).forEach((t) => {
        const txt = String(t).toLowerCase();
        if (txt.includes('data') && (c.id === 'data_analyst' || c.id === 'ai_engineer')) score += 4;
        if (txt.includes('design') && (c.id === 'uiux' || c.id === 'product_designer')) score += 4;
        if (txt.includes('marketing') && c.id === 'dm') score += 4;
        if (txt.includes('ai') && c.id === 'ai_engineer') score += 5;
      });

      // Text interest keyword hints
      if (interestText.includes('design') && (c.id === 'uiux' || c.id === 'product_designer')) score += 6;
      if (interestText.includes('data') && (c.id === 'data_analyst' || c.id === 'ai_engineer')) score += 6;
      if (interestText.includes('marketing') && c.id === 'dm') score += 6;
      if (interestText.includes('ai') && c.id === 'ai_engineer') score += 6;

      // Clamp & round
      score = Math.max(55, Math.min(96, score));
      return Math.round(score);
    }

    const ranked = careers
      .map((c) => ({ ...c, match: scoreCareer(c) }))
      .sort((a, b) => b.match - a.match)
      .slice(0, 5);

    root.innerHTML = '';
    ranked.forEach((c) => {
      const card = document.createElement('article');
      card.className = 'rec-card';
      card.innerHTML = `
        <div class="rec-top">
          <div>
            <div class="rec-name">${c.name}</div>
            <div class="notice" style="margin-top:6px">Industry Demand: ${c.demand}</div>
          </div>
          <div class="badge"><strong>${c.match}%</strong></div>
        </div>

        <div class="kv">
          <div class="kv-row">
            <div class="k">Difficulty Level</div>
            <div class="v">${c.difficulty}</div>
          </div>
          <div class="kv-row">
            <div class="k">Salary Range</div>
            <div class="v">${c.salary}</div>
          </div>
          <div class="kv-row">
            <div class="k">Required Skills</div>
            <div class="v">${c.required.length} items</div>
          </div>
        </div>

        <div class="skill-list" aria-label="Required skills">
          ${c.required.map((s) => `<span class="skill">${escapeHtml(s)}</span>`).join('')}
        </div>

        <div class="row" style="margin-top:14px;justify-content:flex-start">
          <a class="btn" href="#" onclick="return false;">Lihat Detail Karier</a>
          <a class="btn btn-primary" href="#" onclick="return false;">Mulai Simulasi Karier</a>
        </div>
      `;
      root.appendChild(card);
    });
  }

  function escapeHtml(str) {
    return String(str)
      .replaceAll('&', '&amp;')
      .replaceAll('<', '<')
      .replaceAll('>', '>')
      .replaceAll('"', '"')
      .replaceAll("'", '&#039;');
  }

  function initAnalysisAnimation() {
    const messages = [
      'Menganalisis minat pengguna...',
      'Memetakan kemampuan yang dimiliki...',
      'Membandingkan tren industri masa depan...',
      'Menentukan profesi yang sesuai...',
      'Menyusun roadmap pembelajaran...'
    ];

    const msgEl = $('#onbRotatingMessage');
    const procFill = $('#onbAnalysisProgressFill');
    if (!msgEl || !procFill) return;

    // total duration 6.5s
    const total = 6500;
    const per = Math.floor(total / messages.length);

    let idx = 0;
    const start = performance.now();

    function setMsg(i) {
      msgEl.textContent = messages[i];
      // subtle emphasis
      msgEl.style.opacity = '0.92';
      msgEl.style.transform = 'translateY(1px)';
      setTimeout(() => {
        msgEl.style.transform = 'translateY(0)';
        msgEl.style.opacity = '1';
      }, 90);
    }

    setMsg(0);

    const tick = () => {
      const now = performance.now();
      const elapsed = now - start;
      const p = Math.max(0, Math.min(1, elapsed / total));
      procFill.style.width = Math.round(p * 100) + '%';

      const i = Math.min(messages.length - 1, Math.floor(elapsed / per));
      if (i !== idx) {
        idx = i;
        setMsg(idx);
      }

      if (elapsed < total) {
        requestAnimationFrame(tick);
      } else {
        procFill.style.width = '100%';
        // keep final message
      }
    };

    requestAnimationFrame(tick);
  }

  function hydrateStep1() {
    // restore filled inputs if user returned
    const state = loadState();
    if (!state?.profile) return;

    const map = {
      full_name: 'full_name',
      username: 'username',
      email: 'email',
      phone: 'phone',
      birth_date: 'birth_date',
      gender: 'gender',
      city: 'city',
      school: 'school',
      major: 'major',
      education_level: 'education_level',
      github: 'github',
      linkedin: 'linkedin',
      portfolio: 'portfolio'
    };

    Object.keys(map).forEach((k) => {
      const el = document.querySelector(`[name="${map[k]}"]`);
      if (el && state.profile[k] != null) el.value = state.profile[k];
    });

    const wantedSkills = new Set((state.profile.skills || []).map(String));
    $$('input[name="skills"]').forEach((input) => {
      input.checked = wantedSkills.has(String(input.value));
    });
  }

  function hydrateStep2() {
    const state = loadState();
    const c = state.consultation || {};

    const setGroup = (name, values) => {
      const wanted = new Set((values || []).map(String));
      $$(`input[name="${name}"]`).forEach((input) => {
        input.checked = wanted.has(String(input.value));
      });
    };

    setGroup('activities', c.activities);
    setGroup('learning', c.learning);
    setGroup('environment', c.environment);
    setGroup('work_style', c.workStyle);
    setGroup('career_goal', c.careerGoal);
    setGroup('technologies', c.technologies);

    const skillToLearn = $('#skill_to_learn');
    if (skillToLearn && c.skillToLearn != null) skillToLearn.value = c.skillToLearn;

    const interestText = $('#interest_text');
    if (interestText && c.interest != null) interestText.value = c.interest;
  }

  // init
  document.addEventListener('DOMContentLoaded', function () {
    initChipMultiSelect();
    initChoiceCheckboxes();

    // Step detect by page title marker.
    const h1 = $('#onbH1');
    const stepNum = h1?.dataset?.step ? Number(h1.dataset.step) : null;
    if (stepNum) setProgress(stepNum);

    initStepNavigation();

    hydrateStep1();
    hydrateStep2();

    initAnalysisAnimation();
    renderRecommendations();
  });
})();

