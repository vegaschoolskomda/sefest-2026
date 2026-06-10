@extends('dashboard.layouts.user-layout')
<?php $active='profesi'; ?>
@section('title','Jelajahi Profesi')
@section('content')

  <section class="sija-header-card sija-profesi-hero">
    <div>
      <h1 class="sija-h1">Jelajahi Profesi</h1>
      <p class="sija-lead">Temukan berbagai profesi dari berbagai bidang industri. Pelajari tugas, skill yang dibutuhkan, prospek karier, serta coba simulasi pekerjaan secara langsung—meskipun profesi tidak direkomendasikan oleh AI.</p>
    </div>
  </section>

  <section class="sija-card sija-profesi-card">
    <div class="sija-card-head">
      <h2 class="sija-h2">Search & Filter</h2>
      <p class="sija-muted">Cari profesi, lalu saring berdasarkan kategori, tingkat kesulitan, dan bidang industri.</p>
    </div>

    <div class="sija-profesi-search">
      <div class="sija-profesi-searchbox" aria-label="Cari profesi">
        <i data-lucide="search" class="sija-search-icon"></i>
        <input id="profesi-search" type="text" placeholder="Ketik nama profesi..." aria-label="Cari profesi" />
      </div>

      <div class="sija-profesi-filters">
        <div class="sija-field">
          <label class="sija-label" for="kategori">Filter kategori</label>
          <select id="kategori" class="sija-select" aria-label="Filter kategori">
            <option value="all">Semua</option>
            <option value="Teknologi">Teknologi</option>
            <option value="Desain">Desain</option>
            <option value="Bisnis">Bisnis</option>
            <option value="Marketing">Marketing</option>
            <option value="Data">Data</option>
            <option value="Keuangan">Keuangan</option>
            <option value="Pendidikan">Pendidikan</option>
            <option value="Kesehatan">Kesehatan</option>
            <option value="AI">AI</option>
            <option value="Cyber Security">Cyber Security</option>
          </select>
        </div>

        <div class="sija-field">
          <label class="sija-label" for="level">Filter tingkat kesulitan</label>
          <select id="level" class="sija-select" aria-label="Filter tingkat kesulitan">
            <option value="all">Semua</option>
            <option value="Pemula">Pemula</option>
            <option value="Menengah">Menengah</option>
            <option value="Profesional">Profesional</option>
            <option value="Statistik Ringkas">Statistik Ringkas</option>
          </select>
        </div>
      </div>

      <div class="sija-field">
        <label class="sija-label" for="industri">Filter bidang industri</label>
        <select id="industri" class="sija-select" aria-label="Filter bidang industri">
          <option value="all">Semua</option>
          <option value="Teknologi">Teknologi</option>
          <option value="Desain">Desain</option>
          <option value="Data">Data</option>
          <option value="Bisnis">Bisnis</option>
          <option value="Marketing">Marketing</option>
          <option value="Keuangan">Keuangan</option>
          <option value="Pendidikan">Pendidikan</option>
          <option value="Kesehatan">Kesehatan</option>
          <option value="AI">AI</option>
          <option value="Cyber Security">Cyber Security</option>
        </select>
      </div>
    </div>
  </section>

  <section class="sija-card sija-profesi-stats" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Statistik Ringkas</h2>
      <p class="sija-muted">Gambaran aktivitas SIJA untuk inspirasi langkah pertamamu.</p>
    </div>

    <div class="sija-profesi-stat-grid" role="list">
      <div class="sija-stat-card" role="listitem">
        <div class="sija-stat-top">
          <div class="sija-stat-icon" aria-hidden="true"><i data-lucide="briefcase" class="sija-stat-lucide"></i></div>
          <div class="sija-stat-label">Total Profesi</div>
        </div>
        <div class="sija-stat-value">120+</div>
      </div>
      <div class="sija-stat-card" role="listitem">
        <div class="sija-stat-top">
          <div class="sija-stat-icon" aria-hidden="true"><i data-lucide="flame" class="sija-stat-lucide"></i></div>
          <div class="sija-stat-label">Simulasi Tersedia</div>
        </div>
        <div class="sija-stat-value">80+</div>
      </div>
      <div class="sija-stat-card" role="listitem">
        <div class="sija-stat-top">
          <div class="sija-stat-icon" aria-hidden="true"><i data-lucide="building" class="sija-stat-lucide"></i></div>
          <div class="sija-stat-label">Industri</div>
        </div>
        <div class="sija-stat-value">25+</div>
      </div>
      <div class="sija-stat-card" role="listitem">
        <div class="sija-stat-top">
          <div class="sija-stat-icon" aria-hidden="true"><i data-lucide="graduation-cap" class="sija-stat-lucide"></i></div>
          <div class="sija-stat-label">Skill yang Dipelajari</div>
        </div>
        <div class="sija-stat-value">300+</div>
      </div>
    </div>
  </section>

  <section class="sija-card" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Daftar Profesi</h2>
      <p class="sija-muted">Klik <b>Lihat Detail</b> untuk tugas, skill (progress), tools, dan preview simulasi.</p>
    </div>
    <div class="sija-profesi-grid" id="profesi-grid" role="list"></div>
  </section>

  <!-- Modal -->
  <div class="sija-modal" id="profesi-modal" aria-hidden="true">
    <div class="sija-modal-overlay" data-close-modal aria-hidden="true"></div>
    <div class="sija-modal-panel" role="dialog" aria-modal="true" aria-label="Detail profesi">
      <button class="sija-modal-close" type="button" aria-label="Tutup" data-close-modal>
        <i data-lucide="x" class="sija-modal-close-icon"></i>
      </button>

      <div class="sija-modal-header">
        <div class="sija-modal-icon" aria-hidden="true" id="modal-icon-wrap"><i data-lucide="briefcase" class="sija-modal-icon-lucide"></i></div>
        <div>
          <h3 class="sija-modal-title" id="modal-title">-</h3>
          <div class="sija-modal-sub" id="modal-sub">-</div>
        </div>
        <span class="sija-tag" id="modal-level-badge">Pemula</span>
      </div>

      <div class="sija-modal-body">
        <div class="sija-modal-two-col">
          <div>
            <h4 class="sija-modal-section-title">Tentang Profesi</h4>
            <p class="sija-modal-paragraph" id="modal-desc"></p>

            <h4 class="sija-modal-section-title" style="margin-top:14px;">Tugas Utama</h4>
            <ul class="sija-modal-list" id="modal-tugas"></ul>

            <h4 class="sija-modal-section-title" style="margin-top:14px;">Skill yang Dibutuhkan</h4>
            <div id="modal-skill-progress"></div>

            <h4 class="sija-modal-section-title" style="margin-top:14px;">Tools yang Digunakan</h4>
            <div class="sija-modal-skill-badges" id="modal-tools"></div>
          </div>

          <div>
            <h4 class="sija-modal-section-title">Prospek Karier</h4>
            <ol class="sija-career" id="modal-career"></ol>

            <h4 class="sija-modal-section-title" style="margin-top:14px;">Simulasi Preview</h4>
            <div id="modal-sim"></div>

            <div class="sija-modal-actions" id="modal-actions"></div>
            <div class="sija-modal-note">Simulasi tetap bisa dicoba meskipun profesi tidak direkomendasikan oleh AI.</div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <section class="sija-card" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Profesi Populer Minggu Ini</h2>
      <p class="sija-muted">Data contoh: jumlah pengguna yang sedang menjalani simulasi.</p>
    </div>
    <div class="sija-popular-list" id="popular-list" role="list"></div>
  </section>

  <section class="sija-card" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Career Insight</h2>
      <p class="sija-muted">Tren permintaan pasar kerja (data contoh).</p>
    </div>
    <div class="sija-insight-grid" id="insight-grid" role="list"></div>
  </section>

  <section class="sija-card sija-profesi-cta" style="margin-top:16px;">
    <div class="sija-profesi-cta-inner">
      <div>
        <div class="sija-cta-title">Siap Mencoba Profesi Impianmu?</div>
        <div class="sija-cta-desc">Jangan hanya membaca deskripsi pekerjaan. Rasakan langsung pengalaman kerja melalui simulasi interaktif SIJA.</div>
      </div>
      <div class="sija-cta-actions">
        <button type="button" class="sija-btn is-primary" id="cta-mulai">Mulai Simulasi Sekarang</button>
      </div>
    </div>
  </section>

  <script>
    const profesiData = [
      {
        title: 'Frontend Developer',
        icon: 'monitor',
        desc: 'Membangun tampilan website dan aplikasi modern menggunakan teknologi web, fokus pada performa, responsif, dan kualitas UI.',
        kategori: 'Teknologi',
        industri: 'Teknologi',
        level: 'Pemula',
        gaji: 'Rp 6 Juta - Rp 15 Juta',
        permintaan: 'Tinggi',
        tasks: ['Menganalisis kebutuhan klien','Membuat struktur halaman','Mengembangkan tampilan website','Menyelesaikan revisi mentor','Presentasi hasil'],
        skills: [
          {name:'HTML',p:90},{name:'CSS',p:85},{name:'JavaScript',p:80},{name:'Git',p:70}
        ],
        tools: ['VS Code','Figma','GitHub','Chrome DevTools'],
        career: ['Junior Frontend Developer','Frontend Developer','Senior Frontend Developer','Lead Frontend Engineer'],
        sim: { steps: ['Menganalisis kebutuhan klien','Membuat struktur halaman','Mengembangkan tampilan website','Revisi mentor','Presentasi hasil'], estimate: '2-4 jam' }
      },
      {
        title: 'UI/UX Designer',
        icon: 'pen-tool',
        desc: 'Merancang pengalaman pengguna yang nyaman dan mudah digunakan.',
        kategori: 'Desain',
        industri: 'Desain',
        level: 'Pemula',
        gaji: 'Rp 7 Juta - Rp 18 Juta',
        permintaan: 'Tinggi',
        tasks: ['Menerjemahkan kebutuhan pengguna','Membuat wireframe','Mendesain UI','Revisi mentor','Presentasi prototipe'],
        skills: [
          {name:'Design Thinking',p:88},{name:'User Research',p:84},{name:'Figma',p:82},{name:'Wireframing',p:78}
        ],
        tools: ['Figma','Miro','Notion','Chrome DevTools'],
        career: ['Junior UI/UX Designer','UI/UX Designer','Senior Product Designer','Lead Product Design'],
        sim: { steps: ['Riset cepat','Membuat wireframe','Mendesain UI','Iterasi revisi mentor','Presentasi prototipe'], estimate: '2-3 jam' }
      },
      {
        title: 'Data Analyst',
        icon: 'chart-column',
        desc: 'Mengolah data menjadi informasi yang berguna untuk pengambilan keputusan.',
        kategori: 'Data',
        industri: 'Data',
        level: 'Menengah',
        gaji: 'Rp 9 Juta - Rp 22 Juta',
        permintaan: 'Tinggi',
        tasks: ['Mengumpulkan & membersihkan data','Membuat metrik','Menganalisis tren','Menyusun laporan insight','Revisi mentor'],
        skills: [
          {name:'SQL',p:86},{name:'Excel',p:80},{name:'Data Visualization',p:82},{name:'Problem Solving',p:78}
        ],
        tools: ['SQL','Excel','Power BI','Google Sheets'],
        career: ['Junior Data Analyst','Data Analyst','Senior Data Analyst','Lead Data Analyst'],
        sim: { steps: ['Tentukan KPI','Membersihkan dataset','Membuat dashboard','Revisi mentor','Presentasi insight'], estimate: '3-5 jam' }
      },
      {
        title: 'Product Manager',
        icon: 'layers',
        desc: 'Mengelola pengembangan produk digital dari ide hingga peluncuran.',
        kategori: 'Bisnis',
        industri: 'Bisnis',
        level: 'Profesional',
        gaji: 'Rp 15 Juta - Rp 35 Juta',
        permintaan: 'Sedang',
        tasks: ['Analisis kebutuhan','Menyusun roadmap','Menulis PRD','Mengelola feedback','Presentasi rencana produk'],
        skills: [
          {name:'Product Strategy',p:88},{name:'Roadmapping',p:84},{name:'Communication',p:82},{name:'Leadership',p:80}
        ],
        tools: ['Notion','Jira','Figma','Miro'],
        career: ['Associate PM','Product Manager','Senior PM','Group PM'],
        sim: { steps: ['Analisis kebutuhan','Menyusun roadmap','Menulis PRD','Revisi mentor','Presentasi rencana'], estimate: '3-4 jam' }
      },
      {
        title: 'Digital Marketing Specialist',
        icon: 'megaphone',
        desc: 'Membantu bisnis berkembang melalui strategi pemasaran digital.',
        kategori: 'Marketing',
        industri: 'Marketing',
        level: 'Pemula',
        gaji: 'Rp 5 Juta - Rp 14 Juta',
        permintaan: 'Tinggi',
        tasks: ['Analisis audiens','Merancang campaign','Menentukan kanal & budget','Optimasi berbasis data','Laporan & presentasi'],
        skills: [
          {name:'Content Strategy',p:84},{name:'SEO',p:78},{name:'Analytics',p:82},{name:'Communication',p:80}
        ],
        tools: ['Google Analytics','Google Ads','Canva','Excel'],
        career: ['Junior Digital Marketer','Digital Marketing Specialist','Senior Digital Marketing','Growth Marketing Lead'],
        sim: { steps: ['Analisis audiens','Rencana campaign','Menyusun konten','Revisi mentor','Presentasi strategi'], estimate: '2-4 jam' }
      },
      {
        title: 'AI Engineer',
        icon: 'cpu',
        desc: 'Membangun solusi berbasis AI: mulai dari data, pelatihan model, hingga evaluasi dan deployment.',
        kategori: 'AI',
        industri: 'AI',
        level: 'Menengah',
        gaji: 'Rp 20 Juta - Rp 50 Juta',
        permintaan: 'Tinggi',
        tasks: ['Analisis problem AI','Menyiapkan dataset & fitur','Melatih & evaluasi','Dokumentasi hasil','Rekomendasi implementasi'],
        skills: [
          {name:'Python',p:88},{name:'Machine Learning',p:82},{name:'Data Preparation',p:80},{name:'MLOps Basics',p:72}
        ],
        tools: ['VS Code','Python','GitHub','Jupyter Notebook'],
        career: ['AI Engineer (Junior)','AI Engineer','Senior AI Engineer','Lead AI Architect'],
        sim: { steps: ['Definisi problem & metrik','Siapkan dataset','Latih model','Revisi mentor','Presentasi evaluasi'], estimate: '3-6 jam' }
      }
    ];

    const els = {
      grid: document.getElementById('profesi-grid'),
      search: document.getElementById('profesi-search'),
      kategori: document.getElementById('kategori'),
      level: document.getElementById('level'),
      industri: document.getElementById('industri'),
      modal: document.getElementById('profesi-modal'),
      title: document.getElementById('modal-title'),
      sub: document.getElementById('modal-sub'),
      desc: document.getElementById('modal-desc'),
      iconWrap: document.getElementById('modal-icon-wrap'),
      levelBadge: document.getElementById('modal-level-badge'),
      tugas: document.getElementById('modal-tugas'),
      skillProg: document.getElementById('modal-skill-progress'),
      tools: document.getElementById('modal-tools'),
      career: document.getElementById('modal-career'),
      sim: document.getElementById('modal-sim'),
      actions: document.getElementById('modal-actions'),
    };

    const esc = (s) => String(s).replace(/[&<>"']/g, (c) => ({'&':'&amp;','<':'<','>':'>','"':'"',"'":'&#39;'}[c]));

    function cardHTML(p){
      const skillPreview = p.skills.slice(0,4).map(s => s.name).join(' • ');
      return `
        <div class="sija-profesi-carditem" role="listitem">
          <div class="sija-profesi-card-top">
            <div class="sija-profesi-icon" aria-hidden="true"><i data-lucide="${esc(p.icon)}" class="sija-profesi-icon-lucide"></i></div>
            <div class="sija-profesi-cardsmeta" style="flex:1;">
              <div class="sija-profesi-title">${esc(p.title)}</div>
              <div class="sija-profesi-sub">${esc(p.kategori)} • ${esc(p.industri)}</div>
              <div class="sija-profesi-sub" style="margin-top:4px;color:#2563EB;font-weight:950;">${esc(p.gaji)}</div>
              <div class="sija-profesi-sub">Tingkat Permintaan: ${esc(p.permintaan)}</div>
            </div>
            <span class="sija-tag" style="white-space:nowrap;">${esc(p.level)}</span>
          </div>
          <p class="sija-profesi-desc">${esc(p.desc)}</p>
          <div class="sija-profesi-skills">
            <div class="sija-profesi-skill-label">Skill Utama</div>
            <div class="sija-profesi-skill-line">${esc(skillPreview)}</div>
          </div>
          <div class="sija-profesi-actions">
            <button class="sija-btn is-secondary" type="button" data-action="detail" data-title="${esc(p.title)}">Lihat Detail</button>
            <button class="sija-btn is-primary" type="button" data-action="simulasi" data-title="${esc(p.title)}">Mulai Simulasi</button>
          </div>
        </div>
      `;
    }

    function render(list){
      els.grid.innerHTML = list.map(cardHTML).join('');
      window.lucide?.createIcons?.();
    }

    function filter(){
      const q = (els.search?.value || '').trim().toLowerCase();
      const kategori = els.kategori?.value || 'all';
      const level = els.level?.value || 'all';
      const industri = els.industri?.value || 'all';

      const filtered = profesiData.filter(p => {
        const matchQ = !q || p.title.toLowerCase().includes(q) || p.desc.toLowerCase().includes(q);
        const matchKategori = kategori === 'all' || p.kategori === kategori;
        const matchLevel = level === 'all' || p.level === level;
        const matchIndustri = industri === 'all' || p.industri === industri;
        return matchQ && matchKategori && matchLevel && matchIndustri;
      });

      render(filtered);
    }

    function openModal(p, mode){
      els.modal.setAttribute('aria-hidden','false');
      els.modal.classList.add('is-open');
      els.title.textContent = p.title;
      els.sub.textContent = `${p.level} • ${p.industri}`;
      els.levelBadge.textContent = p.level;
      els.desc.textContent = p.desc;
      els.iconWrap.innerHTML = `<i data-lucide="${esc(p.icon)}" class="sija-modal-icon-lucide"></i>`;

      els.tugas.innerHTML = p.tasks.map(t => `<li>${esc(t)}</li>`).join('');
      els.skillProg.innerHTML = p.skills.map(s => `
        <div class="sija-skill-prog-item">
          <div class="sija-skill-prog-top"><span>${esc(s.name)}</span><span>${esc(s.p)}%</span></div>
          <div class="sija-skill-prog-bar"><div class="sija-skill-prog-fill" style="--w:${esc(s.p)}%"></div></div>
        </div>
      `).join('');

      els.tools.innerHTML = p.tools.map(t => `<span class="sija-skill-badge">${esc(t)}</span>`).join('');
      els.career.innerHTML = p.career.map(x => `<li>${esc(x)} <span class="sija-career-arrow">↓</span></li>`).join('');

      els.sim.innerHTML = `
        <div class="sija-sim-est">Estimasi waktu: <b>${esc(p.sim.estimate)}</b></div>
        <div class="sija-sim-steps-title" style="margin-top:10px; font-weight:950; color:#0F172A;">Simulasi akan mencakup:</div>
        <ul class="sija-modal-list" style="margin-top:8px;">${p.sim.steps.map(s => `<li>${esc(s)}</li>`).join('')}</ul>
      `;

      els.actions.innerHTML = `
        <button class="sija-btn is-primary sija-btn-full" type="button" data-modal-action="start">${mode === 'detail' ? 'Mulai Simulasi' : 'Mulai Simulasi Sekarang'}</button>
      `;

      window.lucide?.createIcons?.();
    }

    function closeModal(){
      els.modal.classList.remove('is-open');
      els.modal.setAttribute('aria-hidden','true');
    }

    document.addEventListener('click', (e) => {
      const c = e.target.closest('[data-close-modal]');
      if (c) closeModal();

      const a = e.target.closest('[data-action]');
      if (!a) return;
      const action = a.getAttribute('data-action');
      const title = a.getAttribute('data-title');
      const p = profesiData.find(x => x.title === title);
      if (!p) return;
      openModal(p, action === 'detail' ? 'detail' : 'simulasi');
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeModal();
    });

    els.modal?.addEventListener('click', (e) => {
      const start = e.target.closest('[data-modal-action="start"]');
      if (!start) return;
      alert(`Mulai simulasi: ${els.title.textContent}`);
      closeModal();
    });

    // Popular + Insight (simple rendering)
    const popular = [
      {title:'Frontend Developer', users:1200},
      {title:'UI/UX Designer', users:860},
      {title:'Data Analyst', users:740},
      {title:'AI Engineer', users:640},
      {title:'Product Manager', users:520}
    ];

    document.getElementById('popular-list').innerHTML = popular.map(p => `
      <div class="sija-popular-item" role="listitem">
        <div class="sija-popular-left"><i data-lucide="sparkles" class="sija-popular-icon"></i>
          <div><div class="sija-popular-title">${esc(p.title)}</div><div class="sija-popular-sub">sedang simulasi</div></div>
        </div>
        <div class="sija-popular-users">${esc(p.users.toLocaleString('id-ID'))} pengguna</div>
        <button class="sija-btn is-secondary sija-popular-btn" type="button" data-action="detail" data-title="${esc(p.title)}">Lihat</button>
      </div>
    `).join('');

    const insight = [
      {title:'Frontend Developer', up:23},
      {title:'Data Analyst', up:18},
      {title:'AI Engineer', up:45},
      {title:'UI/UX Designer', up:12}
    ];

    document.getElementById('insight-grid').innerHTML = insight.map(i => `
      <div class="sija-insight-item" role="listitem">
        <div class="sija-insight-top"><div class="sija-insight-title">${esc(i.title)}</div><div class="sija-insight-up">+${esc(i.up)}%</div></div>
        <div class="sija-insight-bar"><div class="sija-insight-fill" style="width:${esc(i.up)}%"></div></div>
        <div class="sija-insight-sub">Permintaan naik (data contoh)</div>
        <button class="sija-btn is-secondary sija-insight-btn" type="button" data-action="detail" data-title="${esc(i.title)}">Detail</button>
      </div>
    `).join('');

    window.lucide?.createIcons?.();

    // initial
    els.search?.addEventListener('input', filter);
    els.kategori?.addEventListener('change', filter);
    els.level?.addEventListener('change', filter);
    els.industri?.addEventListener('change', filter);

    render(profesiData);

    document.getElementById('cta-mulai')?.addEventListener('click', () => openModal(profesiData[0], 'simulasi'));
  </script>

@endsection

