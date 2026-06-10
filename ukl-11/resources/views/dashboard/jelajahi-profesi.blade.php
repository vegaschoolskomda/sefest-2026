@extends('dashboard.layouts.user-layout')
<?php $active='profesi'; ?>
@section('title','Jelajahi Profesi')
@section('content')

  <section class="sija-header-card sija-profesi-hero">
    <div>
      <h1 class="sija-h1">Jelajahi Profesi</h1>
      <p class="sija-lead">Temukan berbagai profesi dari berbagai bidang industri dan rasakan pengalaman kerjanya melalui simulasi interaktif SIJA.</p>
    </div>
  </section>

  <!-- SEARCH + FILTER -->
  <section class="sija-card sija-profesi-card">
    <div class="sija-card-head">
      <h2 class="sija-h2">Cari & Saring Profesi</h2>
      <p class="sija-muted">Gunakan pencarian dan filter agar menemukan profesi yang paling cocok.</p>
    </div>

    <div class="sija-profesi-search">
      <div class="sija-profesi-searchbox" aria-label="Cari profesi">
        <i data-lucide="search" class="sija-search-icon"></i>
        <input id="profesi-search" type="text" placeholder="Cari profesi yang ingin kamu pelajari..." aria-label="Cari profesi" />
      </div>

      <div class="sija-profesi-filters">
        <div class="sija-field">
          <label class="sija-label" for="kategori">Kategori</label>
          <select id="kategori" class="sija-select" aria-label="Filter kategori">
            <option value="all">Semua</option>
            <option value="Teknologi">Teknologi</option>
            <option value="Desain">Desain</option>
            <option value="Data">Data</option>
            <option value="Bisnis">Bisnis</option>
            <option value="Marketing">Marketing</option>
            <option value="AI">AI</option>
            <option value="Cyber Security">Cyber Security</option>
          </select>
        </div>

        <div class="sija-field">
          <label class="sija-label" for="level">Level</label>
          <select id="level" class="sija-select" aria-label="Filter level">
            <option value="all">Semua</option>
            <option value="Pemula">Pemula</option>
            <option value="Menengah">Menengah</option>
            <option value="Profesional">Profesional</option>
          </select>
        </div>
      </div>
    </div>
  </section>

  <!-- STATISTICS (4 cards) -->
  <section class="sija-card sija-profesi-stats" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Statistik Singkat</h2>
      <p class="sija-muted">Gambaran aktivitas SIJA untuk inspirasi langkah pertamamu.</p>
    </div>

    <div class="sija-profesi-stat-grid" role="list">
      <div class="sija-stat-card" role="listitem">
        <div class="sija-stat-top">
          <div class="sija-stat-icon" aria-hidden="true">
            <i data-lucide="briefcase" class="sija-stat-lucide"></i>
          </div>
          <div class="sija-stat-label">Total Profesi</div>
        </div>
        <div class="sija-stat-value">120+</div>
      </div>

      <div class="sija-stat-card" role="listitem">
        <div class="sija-stat-top">
          <div class="sija-stat-icon" aria-hidden="true">
            <i data-lucide="flame" class="sija-stat-lucide"></i>
          </div>
          <div class="sija-stat-label">Simulasi Aktif</div>
        </div>
        <div class="sija-stat-value">80+</div>
      </div>

      <div class="sija-stat-card" role="listitem">
        <div class="sija-stat-top">
          <div class="sija-stat-icon" aria-hidden="true">
            <i data-lucide="building" class="sija-stat-lucide"></i>
          </div>
          <div class="sija-stat-label">Industri</div>
        </div>
        <div class="sija-stat-value">25+</div>
      </div>

      <div class="sija-stat-card" role="listitem">
        <div class="sija-stat-top">
          <div class="sija-stat-icon" aria-hidden="true">
            <i data-lucide="graduation-cap" class="sija-stat-lucide"></i>
          </div>
          <div class="sija-stat-label">Skill Yang Dipelajari</div>
        </div>
        <div class="sija-stat-value">300+</div>
      </div>
    </div>
  </section>

  <!-- PROFESI POPULER -->
  <section class="sija-card sija-profesi-card" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Profesi Populer</h2>
      <p class="sija-muted">Pilih profesi, pelajari skill yang dibutuhkan, lalu langsung mulai simulasi.</p>
    </div>

    <div class="sija-profesi-grid" id="profesi-grid" role="list"></div>
  </section>

  <!-- KARIER MASA DEPAN -->
  <section class="sija-profesi-future" aria-label="Karier Masa Depan">
    <div class="sija-card-head">
      <h2 class="sija-h2">Karier Masa Depan</h2>
      <p class="sija-muted">Profesi yang diprediksi akan terus berkembang dalam beberapa tahun ke depan.</p>
    </div>

    <div class="sija-future-grid" role="list">
      @php
        $future=[
          ['title'=>'AI Engineer','icon'=>'cpu','badge'=>'HIGH DEMAND','tag'=>'AI'],
          ['title'=>'Prompt Engineer','icon'=>'wand-2','badge'=>'HIGH DEMAND','tag'=>'AI'],
          ['title'=>'Cloud Engineer','icon'=>'cloud','badge'=>'HIGH DEMAND','tag'=>'Teknologi'],
          ['title'=>'Machine Learning Engineer','icon'=>'sparkles','badge'=>'HIGH DEMAND','tag'=>'AI'],
          ['title'=>'AI Product Designer','icon'=>'pen-tool','badge'=>'HIGH DEMAND','tag'=>'Desain'],
          ['title'=>'Cyber Security Specialist','icon'=>'shield-check','badge'=>'HIGH DEMAND','tag'=>'Cyber Security'],
        ];
      @endphp
      @foreach($future as $f)
        <div class="sija-future-card" role="listitem">
          <div class="sija-future-top">
            <div class="sija-future-badge">{{ $f['badge'] }}</div>
            <div class="sija-future-icon" aria-hidden="true">
              <i data-lucide="{{ $f['icon'] }}" class="sija-future-lucide"></i>
            </div>
          </div>

          <div class="sija-future-title">{{ $f['title'] }}</div>
          <div class="sija-future-tag">Kategori: {{ $f['tag'] }}</div>

          <div class="sija-future-preview">
            <div class="sija-preview-line"></div>
            <div class="sija-preview-text">Preview Simulasi</div>
          </div>

          <div class="sija-future-actions">
            <button type="button" class="sija-btn is-secondary" data-action="detail" data-profesi="{{ $f['title'] }}">Lihat Detail</button>
            <button type="button" class="sija-btn is-primary" data-action="simulasi" data-profesi="{{ $f['title'] }}">Mulai Simulasi</button>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="sija-card sija-profesi-how" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Bagaimana Simulasi Bekerja?</h2>
      <p class="sija-muted">Alur ringkas untuk memandu kamu dari pilihan profesi sampai feedback.</p>
    </div>

    <ol class="sija-steps" aria-label="Langkah Simulasi">
      <li class="sija-step">
        <div class="sija-step-num">1</div>
        <div class="sija-step-body">
          <div class="sija-step-title">Pilih Profesi</div>
          <div class="sija-step-sub">Tentukan arah kariermu dari katalog profesi SIJA.</div>
        </div>
      </li>
      <li class="sija-step">
        <div class="sija-step-num">2</div>
        <div class="sija-step-body">
          <div class="sija-step-title">Baca Brief Project</div>
          <div class="sija-step-sub">Pelajari tujuan, konteks, dan output yang diharapkan.</div>
        </div>
      </li>
      <li class="sija-step">
        <div class="sija-step-num">3</div>
        <div class="sija-step-body">
          <div class="sija-step-title">Kerjakan Tugas Dari Mentor</div>
          <div class="sija-step-sub">Dapat arahan dan fokus tugas dari mentor AI.</div>
        </div>
      </li>
      <li class="sija-step">
        <div class="sija-step-num">4</div>
        <div class="sija-step-body">
          <div class="sija-step-title">Upload Hasil</div>
          <div class="sija-step-sub">Kirim karya atau jawaban tugas untuk dinilai.</div>
        </div>
      </li>
      <li class="sija-step">
        <div class="sija-step-num">5</div>
        <div class="sija-step-body">
          <div class="sija-step-title">Dapat Feedback dan Sertifikat</div>
          <div class="sija-step-sub">Terima feedback dan sertifikat kompetensi.</div>
        </div>
      </li>
    </ol>
  </section>

  <!-- SKILLS BADGES -->
  <section class="sija-card sija-profesi-skills" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Skill Yang Akan Dipelajari</h2>
      <p class="sija-muted">Skill yang muncul dari simulasi nyata lintas profesi.</p>
    </div>

    <div class="sija-skill-badges" aria-label="Daftar Skill">
      @php
        $skills=['HTML','CSS','JavaScript','UI Design','User Research','Data Analysis','Communication','Problem Solving','Leadership','Team Collaboration'];
      @endphp
      @foreach($skills as $s)
        <span class="sija-skill-badge">{{ $s }}</span>
      @endforeach
    </div>
  </section>

  <!-- CTA -->
  <section class="sija-card sija-profesi-cta" style="margin-top:16px;">
    <div class="sija-profesi-cta-inner">
      <div>
        <div class="sija-cta-title">Siap Menjelajahi Karier Impianmu?</div>
        <div class="sija-cta-desc">Pilih profesi yang menarik bagimu dan rasakan langsung pengalaman kerja melalui simulasi interaktif SIJA.</div>
      </div>

      <div class="sija-cta-actions">
        <button type="button" class="sija-btn is-primary" id="cta-mulai">Mulai Simulasi</button>
        <a class="sija-btn is-secondary" href="{{ Route::has('dashboard.jelajahi-profesi') ? route('dashboard.jelajahi-profesi') : '#' }}">Lihat Semua Profesi</a>
      </div>
    </div>
  </section>

  <script>
    // Dummy handler untuk tombol aksi (placeholder agar UX ready untuk integrasi backend)
    document.addEventListener('click', (e) => {
      const btn = e.target.closest('[data-action]');
      if (!btn) return;
      const action = btn.getAttribute('data-action');
      const profesi = btn.getAttribute('data-profesi');
      // eslint-disable-next-line no-alert
      alert(`${action === 'simulasi' ? 'Mulai simulasi' : 'Lihat detail'}: ${profesi}`);
    });

    const profesiData = [
      {
        title: 'Frontend Developer',
        icon: 'monitor',
        desc: 'Membangun tampilan website dan aplikasi modern menggunakan teknologi web.',
        skills: ['HTML','CSS','JavaScript','Git'],
        level: 'Pemula',
        kategori: 'Teknologi',
        industri: 'Tinggi',
        pct: 92,
      },
      {
        title: 'UI/UX Designer',
        icon: 'pen-tool',
        desc: 'Merancang pengalaman pengguna yang nyaman dan mudah digunakan.',
        skills: ['Design Thinking','User Research','Wireframing','Figma'],
        level: 'Pemula',
        kategori: 'Desain',
        industri: 'Tinggi',
        pct: 89,
      },
      {
        title: 'Data Analyst',
        icon: 'chart-column',
        desc: 'Mengolah data menjadi informasi yang berguna untuk pengambilan keputusan.',
        skills: ['Excel','SQL','Data Visualization','Problem Solving'],
        level: 'Menengah',
        kategori: 'Data',
        industri: 'Tinggi',
        pct: 86,
      },
      {
        title: 'Product Manager',
        icon: 'layers',
        desc: 'Mengelola pengembangan produk digital dari ide hingga peluncuran.',
        skills: ['Product Strategy','Roadmapping','Communication','Leadership'],
        level: 'Profesional',
        kategori: 'Bisnis',
        industri: 'Tinggi',
        pct: 83,
      },
      {
        title: 'Digital Marketing',
        icon: 'megaphone',
        desc: 'Membantu bisnis berkembang melalui strategi pemasaran digital.',
        skills: ['Content Strategy','SEO','Analytics','Communication'],
        level: 'Pemula',
        kategori: 'Marketing',
        industri: 'Tinggi',
        pct: 80,
      },
      {
        title: 'Cyber Security Analyst',
        icon: 'shield-check',
        desc: 'Melindungi sistem dan data perusahaan dari ancaman digital.',
        skills: ['Threat Analysis','Risk Mitigation','Security Testing','Problem Solving'],
        level: 'Menengah',
        kategori: 'Cyber Security',
        industri: 'Tinggi',
        pct: 78,
      },
    ];

    const grid = document.getElementById('profesi-grid');
    const searchInput = document.getElementById('profesi-search');
    const kategoriSelect = document.getElementById('kategori');
    const levelSelect = document.getElementById('level');

    function cardHTML(p){
      const skillPreview = p.skills.slice(0,4).join(' • ');
      return `
        <div class="sija-profesi-carditem" role="listitem" data-kategori="${p.kategori}" data-level="${p.level}" data-title="${p.title}">
          <div class="sija-profesi-card-top">
            <div class="sija-profesi-icon" aria-hidden="true">
              <i data-lucide="${p.icon}" class="sija-profesi-icon-lucide"></i>
            </div>
            <div class="sija-profesi-cardsmeta">
              <div class="sija-profesi-title">${p.title}</div>
              <div class="sija-profesi-sub">Level: ${p.level} • Industri: ${p.industri}</div>
            </div>
          </div>

          <p class="sija-profesi-desc">${p.desc}</p>

          <div class="sija-profesi-skills">
            <div class="sija-profesi-skill-label">Skill Utama</div>
            <div class="sija-profesi-skill-line">${skillPreview}</div>
          </div>

          <div class="sija-profesi-actions">
            <button type="button" class="sija-btn is-secondary" data-action="detail" data-profesi="${p.title}">Lihat Detail</button>
            <button type="button" class="sija-btn is-primary" data-action="simulasi" data-profesi="${p.title}">Mulai Simulasi</button>
          </div>
        </div>
      `;
    }

    function render(list){
      grid.innerHTML = list.map(cardHTML).join('');
      if (window.lucide && window.lucide.createIcons) window.lucide.createIcons();
    }

    function applyFilter(){
      const q = (searchInput.value || '').trim().toLowerCase();
      const kategori = kategoriSelect.value;
      const level = levelSelect.value;

      const filtered = profesiData.filter(p => {
        const matchQ = !q || p.title.toLowerCase().includes(q) || p.desc.toLowerCase().includes(q);
        const matchKategori = kategori === 'all' || p.kategori === kategori;
        const matchLevel = level === 'all' || p.level === level;
        return matchQ && matchKategori && matchLevel;
      });

      render(filtered);
    }

    searchInput.addEventListener('input', applyFilter);
    kategoriSelect.addEventListener('change', applyFilter);
    levelSelect.addEventListener('change', applyFilter);

    // initial render
    render(profesiData);
  </script>

@endsection

