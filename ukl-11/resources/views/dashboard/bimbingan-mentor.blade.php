@extends('dashboard.layouts.user-layout')
<?php $active = 'mentor'; ?>
@section('title','Bimbingan Mentor')
@section('content')
  <section class="sija-header-card">
    <div>
      <h1 class="sija-h1">Bimbingan Mentor Profesional</h1>
      <p class="sija-lead">
        Belajar langsung dari praktisi industri dan dapatkan arahan selama menjalani simulasi kerja. 
        Pilih mentor favoritmu atau biarkan AI mencarikan mentor yang paling sesuai dengan tujuan kariermu.
      </p>

      <div style="display:flex;gap:12px;margin-top:16px;flex-wrap:wrap;">
        <button class="sija-btn is-primary" type="button" style="min-width:220px;">
          <i data-lucide="search" class="sija-inline-icon" style="margin-right:10px;vertical-align:-3px;"></i>
          Cari Mentor
        </button>
        <button class="sija-btn is-secondary" type="button" style="min-width:240px;">
          <i data-lucide="sparkles" class="sija-inline-icon" style="margin-right:10px;vertical-align:-3px;"></i>
          Rekomendasi Mentor AI
        </button>
      </div>
    </div>
  </section>

  <!-- AI Mentor Recommendation (unggulan atas) -->
  <section class="sija-card sija-card-strong" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Rekomendasi Mentor Untukmu</h2>
      <p class="sija-muted">
        AI SIJA akan mencocokkan mentor berdasarkan hasil asesmen karier, profesi pilihan, skill yang ingin dipelajari,
        dan performa simulasi yang telah kamu kerjakan.
      </p>
    </div>

    <div class="sija-reco-grid" id="mentor-reco" aria-label="Hasil rekomendasi mentor">
      <!-- Render by JS (mock) -->
    </div>
  </section>

  <!-- Search & Filter Mentor -->
  <section class="sija-card" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Cari & Filter Mentor</h2>
      <p class="sija-muted">Cari mentor berdasarkan nama, profesi, atau keahlian, lalu saring sesuai kebutuhanmu.</p>
    </div>

    <div class="sija-profesi-search" style="margin-top:0;">
      <div class="sija-profesi-searchbox" aria-label="Cari mentor">
        <i data-lucide="search" class="sija-search-icon"></i>
        <input id="mentor-search" type="text" placeholder="Cari mentor berdasarkan nama, profesi, atau keahlian..." aria-label="Cari mentor" />
      </div>

      <div class="sija-profesi-filters" style="grid-template-columns:repeat(2, minmax(0, 1fr));">
        <div class="sija-field">
          <label class="sija-label" for="filter-bidang">Bidang Karier</label>
          <select id="filter-bidang" class="sija-select" aria-label="Filter bidang karier">
            <option value="all">Semua</option>
            <option>Frontend Developer</option>
            <option>Backend Developer</option>
            <option>Fullstack Developer</option>
            <option>UI/UX Designer</option>
            <option>Data Analyst</option>
            <option>Data Scientist</option>
            <option>Product Manager</option>
            <option>Digital Marketing</option>
            <option>AI Engineer</option>
            <option>Cyer Security</option>
            <option>Cyber Security</option>
            <option>Mobile Developer</option>
            <option>DevOps Engineer</option>
          </select>
        </div>

        <div class="sija-field">
          <label class="sija-label" for="filter-pengalaman">Pengalaman</label>
          <select id="filter-pengalaman" class="sija-select" aria-label="Filter pengalaman">
            <option value="all">Semua</option>
            <option value="1-3">1-3 Tahun</option>
            <option value="3-5">3-5 Tahun</option>
            <option value="5-10">5-10 Tahun</option>
            <option value="10+">10+ Tahun</option>
          </select>
        </div>

        <div class="sija-field">
          <label class="sija-label" for="filter-rating">Rating</label>
          <select id="filter-rating" class="sija-select" aria-label="Filter rating">
            <option value="all">Semua</option>
            <option value="4.0">4.0+</option>
            <option value="4.5">4.5+</option>
            <option value="4.8">4.8+</option>
          </select>
        </div>

        <div class="sija-field">
          <label class="sija-label" for="filter-metode">Metode Bimbingan</label>
          <select id="filter-metode" class="sija-select" aria-label="Filter metode bimbingan">
            <option value="all">Semua</option>
            <option>Chat</option>
            <option>Video Call</option>
            <option>Project Review</option>
            <option>Semua</option>
          </select>
        </div>
      </div>
    </div>
  </section>

  <!-- Mentor Populer -->
  <section class="sija-card" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Mentor Populer</h2>
      <p class="sija-muted">Mentor pilihan dengan reputasi tinggi dan aktivitas bimbingan yang aktif. (Mock UI)</p>
    </div>

    <div class="sija-profesi-grid" id="mentor-populer" aria-label="Daftar mentor populer"></div>
  </section>

  <!-- Detail Mentor (display saat pilih mentor) -->
  <section class="sija-card" style="margin-top:16px;" id="mentor-detail-wrap" hidden>
    <div class="sija-card-head">
      <h2 class="sija-h2">Detail Mentor</h2>
      <p class="sija-muted">Tinjau profil, keahlian, portofolio, sertifikasi, dan timeline bimbingan.</p>
    </div>

    <div class="sija-two-col" style="margin-top:12px;">
      <div>
        <div class="sija-card sija-mentor-brief sija-card-strong" style="border-radius:16px;">
          <div class="sija-mentor-head" style="margin-bottom:6px;">
            <div class="sija-mentor-icon">
              <img id="mentor-detail-avatar" alt="Foto mentor" style="width:46px;height:46px;border-radius:16px;background:rgba(37,99,235,0.10);object-fit:cover;" src="https://via.placeholder.com/92x92.png?text=Mentor" />
            </div>
            <div style="flex:1;">
              <div class="sija-h2" style="font-size:16px;" id="mentor-detail-nama">-</div>
              <div class="sija-muted" style="margin-top:4px;" id="mentor-detail-profesi">-</div>
              <div style="display:flex;gap:10px;align-items:center;flex-wrap:wrap;margin-top:10px;">
      <span class="sija-tag"><i data-lucide="star" style="width:16px;height:16px;margin-right:8px;color:#2563EB;"></i><span id="mentor-detail-rating">0.0</span></span>

                <span class="sija-tag" id="mentor-detail-status" style="background:rgba(16,185,129,0.10);border:1px solid rgba(16,185,129,0.18);color:#059669;">
                  <i data-lucide="circle-dot" style="width:16px;height:16px;margin-right:8px;"></i><span id="mentor-detail-status-text">Online</span>
                </span>
                <span class="sija-tag" id="mentor-detail-experience"></span>
              </div>
            </div>
          </div>

          <p class="sija-muted" style="margin-top:12px;" id="mentor-detail-alasan">-</p>

          <div class="sija-mentor-actions" style="display:flex;gap:12px;margin-top:12px;">
            <button class="sija-btn is-primary" type="button" id="mentor-detail-btn-pilih" style="flex:1;">Pilih Mentor</button>
            <button class="sija-btn is-secondary" type="button" id="mentor-detail-btn-chat" style="flex:1;">
              <i data-lucide="message-circle" class="sija-inline-icon" style="margin-right:10px;"></i>
              Chat Mentor
            </button>
          </div>
        </div>

        <div class="sija-section" style="margin-top:16px;">
          <div class="sija-path-title" style="margin-bottom:10px;">Tentang Mentor</div>
          <div class="sija-card" style="padding:14px;border-radius:16px;">
            <div style="display:flex;align-items:flex-start;justify-content:space-between;gap:12px;">
              <div>
                <div class="sija-reco-title" id="mentor-detail-about-title" style="font-size:14px;">-</div>
                <div class="sija-muted" style="margin-top:6px;font-weight:800;line-height:1.7;" id="mentor-detail-about">-</div>
              </div>
              <div style="min-width:160px;">
                <div class="sija-label" style="font-weight:1000;color:#0F172A;">Keahlian Utama</div>
                <div id="mentor-detail-keahlian-utama" class="sija-skill-badges" style="margin-top:10px;"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="sija-section" style="margin-top:16px;">
          <div class="sija-path-title" style="margin-bottom:10px;">Keahlian</div>
          <div id="mentor-detail-keahlian" class="sija-skill-badges"></div>
        </div>
      </div>

      <div>
        <div class="sija-section" style="margin-top:0;">
          <div class="sija-path-title" style="margin-bottom:10px;">Portofolio Mentor</div>
          <div id="mentor-detail-portofolio" class="sija-path-list" style="gap:10px;"></div>
        </div>

        <div class="sija-section" style="margin-top:16px;">
          <div class="sija-path-title" style="margin-bottom:10px;">Sertifikasi</div>
          <div id="mentor-detail-sertifikasi" class="sija-cert-grid" style="grid-template-columns:1fr 1fr;"></div>
        </div>

        <div class="sija-section" style="margin-top:16px;">
          <div class="sija-path-title" style="margin-bottom:10px;">Testimoni Mentee</div>
          <div id="mentor-detail-testimoni" class="sija-progress-list"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Mentor Saya -->
  <section class="sija-card" style="margin-top:16px;" id="mentor-saya-wrap" hidden>
    <div class="sija-card-head">
      <h2 class="sija-h2">Mentor Saya</h2>
      <p class="sija-muted">Mentor aktif yang kamu pilih untuk pendampingan selama simulasi karier.</p>
    </div>

    <div class="sija-active-item" id="mentor-saya-card" style="margin-top:12px;">
      <div class="sija-active-left" style="display:flex;align-items:center;gap:12px;">
        <div class="sija-avatar" style="width:46px;height:46px;border-radius:16px;" id="mentor-saya-avatar">M</div>
        <div>
          <div class="sija-active-title" id="mentor-saya-nama">-</div>
          <div class="sija-active-sub" id="mentor-saya-profesi">-</div>
          <div class="sija-active-sub" style="margin-top:6px;" id="mentor-saya-status">
            <span class="sija-dot" id="mentor-saya-dot"></span><span id="mentor-saya-status-text">Online</span>
          </div>
        </div>
      </div>

      <div class="sija-active-right" style="align-items:flex-start;">
        <div>
          <div class="sija-card-title" style="font-weight:1000;color:#0F172A;font-size:13px;">Jadwal Berikutnya</div>
          <div class="sija-muted" style="margin-top:8px;font-weight:900;" id="mentor-saya-jadwal">-</div>
        </div>

        <div class="sija-active-progress" style="margin-left:16px;">
          <div class="sija-active-progress-label" style="font-weight:1000;color:#0F172A;">Progress Bimbingan</div>
          <div class="sija-progressline" id="mentor-saya-progressbar" style="--p:65%;">
          </div>
          <div class="sija-active-progress-label" id="mentor-saya-progress-label">65%</div>
        </div>
      </div>
    </div>

    <div style="display:flex;gap:12px;margin-top:12px;flex-wrap:wrap;">
      <button class="sija-btn is-primary" type="button" style="flex:1;min-width:220px;" id="mentor-saya-btn-chat">
        <i data-lucide="message-circle" class="sija-inline-icon" style="margin-right:10px;"></i>
        Chat Mentor
      </button>
      <button class="sija-btn is-secondary" type="button" style="flex:1;min-width:220px;" id="mentor-saya-btn-tugas">
        <i data-lucide="file-text" class="sija-inline-icon" style="margin-right:10px;"></i>
        Lihat Tugas
      </button>
      <button class="sija-btn is-secondary" type="button" style="flex:1;min-width:220px;" id="mentor-saya-btn-jadwalkan">
        <i data-lucide="calendar" class="sija-inline-icon" style="margin-right:10px;"></i>
        Jadwalkan Konsultasi
      </button>
    </div>
  </section>

  <!-- Jadwal Konsultasi -->
  <section class="sija-card" style="margin-top:16px;" id="jadwal-wrap" hidden>
    <div class="sija-card-head">
      <h2 class="sija-h2">Jadwal Konsultasi</h2>
      <p class="sija-muted">Tentukan sesi bimbingan sesuai mode: Chat, Video Meeting, Project Review.</p>
    </div>

    <div class="sija-grid-4" style="grid-template-columns:repeat(2,minmax(0,1fr));">
      <div class="sija-card" style="border-radius:16px;padding:16px;">
        <div class="sija-muted" style="font-weight:1000;color:#0F172A;">Tanggal</div>
        <div style="margin-top:8px;font-weight:1000;color:#0F172A;" id="jadwal-1-tgl">-</div>
        <div class="sija-muted" style="margin-top:10px;font-weight:1000;color:#0F172A;">Jam</div>
        <div style="margin-top:8px;font-weight:1000;color:#0F172A;" id="jadwal-1-jam">-</div>
        <div class="sija-muted" style="margin-top:10px;font-weight:1000;color:#0F172A;">Metode</div>
        <div class="sija-tag" style="margin-top:10px;" id="jadwal-1-metode">-</div>
        <div style="margin-top:12px;">
          <button class="sija-btn is-primary sija-btn-full" type="button">Konfirmasi</button>
        </div>
      </div>

      <div class="sija-card" style="border-radius:16px;padding:16px;">
        <div class="sija-muted" style="font-weight:1000;color:#0F172A;">Tanggal</div>
        <div style="margin-top:8px;font-weight:1000;color:#0F172A;" id="jadwal-2-tgl">-</div>
        <div class="sija-muted" style="margin-top:10px;font-weight:1000;color:#0F172A;">Jam</div>
        <div style="margin-top:8px;font-weight:1000;color:#0F172A;" id="jadwal-2-jam">-</div>
        <div class="sija-muted" style="margin-top:10px;font-weight:1000;color:#0F172A;">Metode</div>
        <div class="sija-tag" style="margin-top:10px;" id="jadwal-2-metode">-</div>
        <div style="margin-top:12px;">
          <button class="sija-btn is-secondary sija-btn-full" type="button">Booking</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Tugas Dari Mentor -->
  <section class="sija-card" style="margin-top:16px;" id="tugas-wrap" hidden>
    <div class="sija-card-head">
      <h2 class="sija-h2">Tugas Dari Mentor</h2>
      <p class="sija-muted">Kerjakan tugas aktif, unggah hasil, dan minta review.</p>
    </div>

    <div id="tugas-list" class="sija-progress-list"></div>
  </section>

  <!-- Feedback Mentor + Progress -->
  <div class="sija-two-col" style="margin-top:16px;" id="feedback-wrap" hidden>
    <section class="sija-card" style="border-radius:16px;">
      <div class="sija-card-head" style="margin-bottom:10px;">
        <h2 class="sija-h2">Feedback Mentor</h2>
        <p class="sija-muted">Feedback terhadap hasil simulasi terbaru. (Mock)</p>
      </div>

      <div class="sija-feedback-card">
        <div class="sija-feedback-top">
          <div class="sija-feedback-avatar">M</div>
          <div class="sija-feedback-meta">
            <div class="sija-feedback-mentor">Mentor: <b id="fb-mentor-nama">-</b></div>
            <div class="sija-feedback-sub">Feedback Terbaru</div>
          </div>
        </div>

        <div style="display:flex;align-items:center;justify-content:space-between;gap:12px;margin-top:12px;">
          <div>
            <div class="sija-muted" style="font-weight:1000;color:#0F172A;">Nilai</div>
            <div style="font-weight:1000;color:#0F172A;font-size:28px;margin-top:8px;" id="fb-nilai">-</div>
          </div>
          <div style="min-width:180px;">
            <div class="sija-muted" style="font-weight:1000;color:#0F172A;">Skill Yang Perlu Ditingkatkan</div>
            <div id="fb-skill" class="sija-skill-grid" style="margin-top:10px;"></div>
          </div>
        </div>

        <div class="sija-feedback-text" id="fb-komentar">-</div>

        <div class="sija-feedback-actions">
          <button class="sija-btn is-primary sija-btn-full" type="button"><i data-lucide="message-square" class="sija-inline-icon" style="margin-right:10px;"></i>Lihat Feedback Lengkap</button>
        </div>
      </div>
    </section>

    <section class="sija-card" style="border-radius:16px;">
      <div class="sija-card-head" style="margin-bottom:10px;">
        <h2 class="sija-h2">Progress Bimbingan</h2>
        <p class="sija-muted">Timeline pendampingan dari memilih mentor hingga sertifikat.</p>
      </div>

      <ol class="sija-timeline" id="timeline-prog" aria-label="Timeline progress">
        <li class="sija-timeline-item"><span class="sija-timeline-bullet is-done"><i data-lucide="user-check" class="sija-timeline-icon"></i></span><div><div class="sija-timeline-text">1. Memilih Mentor</div><div class="sija-timeline-sub">Done</div></div></li>
        <li class="sija-timeline-item"><span class="sija-timeline-bullet is-done"><i data-lucide="clipboard-check" class="sija-timeline-icon"></i></span><div><div class="sija-timeline-text">2. Briefing Awal</div><div class="sija-timeline-sub">Done</div></div></li>
        <li class="sija-timeline-item"><span class="sija-timeline-bullet"><i data-lucide="hammer" class="sija-timeline-icon"></i></span><div><div class="sija-timeline-text">3. Pengerjaan Tugas</div><div class="sija-timeline-sub">Sedang berjalan</div></div></li>
        <li class="sija-timeline-item"><span class="sija-timeline-bullet"><i data-lucide="refresh-cw" class="sija-timeline-icon"></i></span><div><div class="sija-timeline-text">4. Review Mentor</div><div class="sija-timeline-sub">Menunggu</div></div></li>
        <li class="sija-timeline-item"><span class="sija-timeline-bullet"><i data-lucide="award" class="sija-timeline-icon"></i></span><div><div class="sija-timeline-text">5. Final Assessment</div><div class="sija-timeline-sub">Pending</div></div></li>
        <li class="sija-timeline-item"><span class="sija-timeline-bullet"><i data-lucide="badge-check" class="sija-timeline-icon"></i></span><div><div class="sija-timeline-text">6. Sertifikat</div><div class="sija-timeline-sub">Lock</div></div></li>
      </ol>
    </section>
  </div>

  <!-- Statistik Bimbingan + CTA -->
  <section class="sija-card" style="margin-top:16px;" id="stat-wrap" hidden>
    <div class="sija-card-head">
      <h2 class="sija-h2">Statistik Bimbingan</h2>
      <p class="sija-muted">Ringkasan performa dan aktivitas bimbingan. (Mock)</p>
    </div>

    <div class="sija-grid-4" style="margin-top:12px;grid-template-columns:repeat(2,minmax(0,1fr));">
      <div class="sija-card" style="border-radius:16px;">
        <div class="sija-card-row">
          <div class="sija-mentor-icon"><i data-lucide="users" class="sija-mentor-lucide"></i></div>
          <div>
            <div class="sija-card-title" style="font-weight:1000;color:#0F172A;">Mentor Tersedia</div>
            <div class="sija-card-value" id="stat-mentors">24</div>
          </div>
        </div>
      </div>
      <div class="sija-card" style="border-radius:16px;">
        <div class="sija-card-row">
          <div class="sija-mentor-icon"><i data-lucide="user-round" class="sija-mentor-lucide"></i></div>
          <div>
            <div class="sija-card-title" style="font-weight:1000;color:#0F172A;">Total Mentee</div>
            <div class="sija-card-value" id="stat-mentee">310</div>
          </div>
        </div>
      </div>
      <div class="sija-card" style="border-radius:16px;">
        <div class="sija-card-row">
          <div class="sija-mentor-icon"><i data-lucide="calendar-days" class="sija-mentor-lucide"></i></div>
          <div>
            <div class="sija-card-title" style="font-weight:1000;color:#0F172A;">Sesi Konsultasi</div>
            <div class="sija-card-value" id="stat-sesi">58</div>
          </div>
        </div>
      </div>
      <div class="sija-card" style="border-radius:16px;">
        <div class="sija-card-row">
          <div class="sija-mentor-icon"><i data-lucide="thumbs-up" class="sija-mentor-lucide"></i></div>
          <div>
            <div class="sija-card-title" style="font-weight:1000;color:#0F172A;">Tingkat Kepuasan</div>
            <div class="sija-card-value" id="stat-kepuasan">4.8/5</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="sija-card" style="margin-top:16px;" id="cta-wrap">
    <div class="sija-card-head">
      <h2 class="sija-h2">Temukan Mentor Yang Tepat Untuk Masa Depanmu</h2>
      <p class="sija-muted">Dapatkan bimbingan langsung dari praktisi industri dan tingkatkan kemampuanmu melalui simulasi kerja yang lebih terarah.</p>
    </div>

    <div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:12px;">
      <button class="sija-btn is-primary" type="button" style="flex:1;min-width:240px;" id="cta-cari">Cari Mentor Sekarang</button>
      <button class="sija-btn is-secondary" type="button" style="flex:1;min-width:240px;" id="cta-ai">Gunakan Rekomendasi AI</button>
    </div>
  </section>

  <script>
    // Mock data mentor
    const mentorData = [
      {
        id: 'ahmad',
        nama: 'Ahmad Pratama',
        profesi: 'Senior Frontend Developer',
        pengalaman: 7,
        rating: 4.9,
        match: 98,
        alasan: 'Sesuai dengan profesi pilihanmu yaitu Frontend Developer dan memiliki pengalaman membimbing pemula hingga profesional.',
        skillUtama: ['React', 'JavaScript', 'Performance'],
        skills: ['HTML', 'CSS', 'JavaScript', 'React', 'TypeScript', 'Next.js', 'Design System'],
        portofolio: [
          { judul: 'SIJA Design System', detail: 'Membangun komponen UI konsisten dan reusable untuk dashboard.' },
          { judul: 'Optimasi Performance', detail: 'Audit dan perbaikan metrik Core Web Vitals.' },
        ],
        sertifikasi: [
          { judul: 'Frontend Mastery', sub: 'React & Architecture' },
          { judul: 'Performance Engineer', sub: 'Web Performance' }
        ],
        testimoni: [
          { nama: 'Mentee A', teks: 'Penjelasannya sangat sistematis. Setelah review, hasil UI jadi jauh lebih rapi.' },
          { nama: 'Mentee B', teks: 'Fokus ke trade-off dan kualitas keputusan. Match score kerasa akurat.' }
        ],
        status: 'Online',
        metode: ['Chat', 'Video Call', 'Project Review']
      },
      {
        id: 'sarah',
        nama: 'Sarah Wijaya',
        profesi: 'UI/UX Designer',
        pengalaman: 6,
        rating: 4.8,
        match: 93,
        alasan: 'Keahlian UX-mu butuh struktur desain yang lebih kuat. Mentor ini membantu dari riset sampai usability testing.',
        skillUtama: ['Figma', 'UX Research', 'Prototyping'],
        skills: ['Figma', 'User Research', 'Wireframing', 'Prototyping', 'Usability Testing', 'Design Thinking'],
        portofolio: [
          { judul: 'Redesign Dashboard', detail: 'Meningkatkan conversion dengan alur navigasi yang lebih jelas.' }
        ],
        sertifikasi: [
          { judul: 'UX Research', sub: 'Praktik & Metode' }
        ],
        testimoni: [
          { nama: 'Mentee C', teks: 'Mentor membantu membuat keputusan desain berbasis insight, bukan sekadar opini.' }
        ],
        status: 'Offline',
        metode: ['Chat', 'Project Review']
      },
      {
        id: 'andi',
        nama: 'Andi Saputra',
        profesi: 'Data Analyst',
        pengalaman: 5,
        rating: 4.7,
        match: 88,
        alasan: 'Untuk meningkatkan performa simulasi, kamu perlu membangun metrik yang lebih tajam. Mentor ini terbiasa dari KPI hingga insight action.',
        skillUtama: ['SQL', 'Data Analysis', 'Visualization'],
        skills: ['SQL', 'Excel', 'Power BI', 'Statistics', 'Data Visualization'],
        portofolio: [
          { judul: 'Sales Insight Dashboard', detail: 'Menyusun dashboard metrik penjualan dan rekomendasi.' }
        ],
        sertifikasi: [
          { judul: 'Data Analytics', sub: 'KPI & Reporting' },
          { judul: 'Business Intelligence', sub: 'Dashboarding' }
        ],
        testimoni: [
          { nama: 'Mentee D', teks: 'Arah pengerjaannya jelas. Saya jadi paham bagaimana menurunkan data menjadi keputusan.' }
        ],
        status: 'Online',
        metode: ['Chat', 'Video Call']
      },
      {
        id: 'budi',
        nama: 'Budi Santoso',
        profesi: 'Product Manager',
        pengalaman: 10,
        rating: 4.6,
        match: 85,
        alasan: 'Butuh struktur eksekusi produk dari PRD sampai delivery. Mentor ini kuat di komunikasi dan prioritas berdasar value.',
        skillUtama: ['PRD', 'Roadmapping', 'Communication'],
        skills: ['PRD', 'Roadmapping', 'A/B Testing', 'Stakeholder Management', 'Product Strategy'],
        portofolio: [
          { judul: 'PRD Starter Kit', detail: 'Template PRD + framework prioritas yang memudahkan kolaborasi.' }
        ],
        sertifikasi: [
          { judul: 'Product Leadership', sub: 'Management' }
        ],
        testimoni: [
          { nama: 'Mentee E', teks: 'Workshop PRD-nya efektif, terutama saat menyusun ruang lingkup dan asumsi.' }
        ],
        status: 'Offline',
        metode: ['Project Review']
      },
      {
        id: 'nina',
        nama: 'Nina Rahma',
        profesi: 'AI Engineer',
        pengalaman: 8,
        rating: 4.8,
        match: 90,
        alasan: 'Untuk meningkatkan kualitas implementasi AI pada simulasi, kamu perlu MLOps basics dan evaluasi yang benar. Mentor ini membantu dari eksperimen sampai deployment.',
        skillUtama: ['Machine Learning', 'Evaluation', 'MLOps Basics'],
        skills: ['Python', 'Machine Learning', 'Data Preparation', 'MLOps', 'Model Evaluation'],
        portofolio: [
          { judul: 'ML Evaluation Pipeline', detail: 'Pipeline evaluasi model dengan metrik dan monitoring.' }
        ],
        sertifikasi: [
          { judul: 'Applied ML', sub: 'Modeling & Evaluation' },
          { judul: 'MLOps Fundamentals', sub: 'Deployment Basics' }
        ],
        testimoni: [
          { nama: 'Mentee F', teks: 'Review modelnya tajam. Saya jadi tahu kenapa metrik tertentu lebih penting.' }
        ],
        status: 'Online',
        metode: ['Chat', 'Project Review', 'Video Call']
      }
    ];

    const escapeHtml = (s) => String(s).replace(/[&<>"']/g, (c) => ({'&':'&amp;','<':'<','>':'>','"':'"',"'":'&#39;'}[c]));

    function expToBucket(exp){
      if (exp <= 3) return '1-3';
      if (exp <= 5) return '3-5';
      if (exp <= 10) return '5-10';
      return '10+';
    }

    function renderReco(){
      const reco = [...mentorData].sort((a,b)=>b.match-a.match).slice(0,3);
      const wrap = document.getElementById('mentor-reco');
      wrap.innerHTML = reco.map(m => `
        <div class="sija-reco-card">
          <div style="display:flex;align-items:flex-start;justify-content:space-between;gap:14px;">
            <div style="display:flex;gap:12px;align-items:flex-start;">
              <div class="sija-mentor-icon" style="width:58px;height:58px;border-radius:16px;">
                <img alt="Foto mentor" src="https://via.placeholder.com/92x92.png?text=${encodeURIComponent(m.nama.split(' ').map(x=>x[0]).join(''))}" style="width:46px;height:46px;border-radius:16px;object-fit:cover;" />
              </div>
              <div>
                <div class="sija-reco-title" style="font-size:16px;">${escapeHtml(m.nama)}</div>
                <div class="sija-muted" style="margin-top:6px;">${escapeHtml(m.profesi)}</div>
                <div class="sija-muted" style="margin-top:6px;font-weight:1000;color:#0F172A;">Pengalaman: ${m.pengalaman} Tahun</div>
                <div class="sija-muted" style="margin-top:6px;display:flex;gap:10px;flex-wrap:wrap;">
                  <span class="sija-tag"><i data-lucide="star" style="width:16px;height:16px;margin-right:8px;color:#2563EB;"></i>${m.rating.toFixed(1)}</span>
                  <span class="sija-tag"><i data-lucide="target" style="width:16px;height:16px;margin-right:8px;color:#2563EB;"></i>Match Score: ${m.match}%</span>
                </div>
              </div>
            </div>
            <div style="min-width:160px;">
              <div class="sija-label" style="font-weight:1000;color:#0F172A;">Skill Utama</div>
              <div style="margin-top:10px;" class="sija-skill-badges">
                ${m.skillUtama.map(s=>`<span class="sija-skill-badge">${escapeHtml(s)}</span>`).join('')}
              </div>
            </div>
          </div>
          <div class="sija-muted" style="margin-top:12px;font-weight:900;line-height:1.7;">Alasan: ${escapeHtml(m.alasan)}</div>
          <div style="margin-top:12px;display:flex;gap:12px;">
            <button class="sija-btn is-primary" type="button" style="flex:1;" onclick="selectMentor('${m.id}')">Pilih Mentor</button>
          </div>
        </div>
      `).join('');
      window.lucide?.createIcons?.();
    }

    function mentorCardHTML(m){
      const statusStyle = m.status === 'Online'
        ? 'background:rgba(16,185,129,0.10);border:1px solid rgba(16,185,129,0.20);color:#059669;'
        : 'background:rgba(148,163,184,0.12);border:1px solid rgba(148,163,184,0.24);color:#4B5563;';

      const onlineLabel = m.status === 'Online' ? 'Online' : 'Offline';
      const menteeCount = 120 + (m.pengalaman * 13);

      return `
        <div class="sija-profesi-carditem">
          <div class="sija-profesi-card-top">
            <div class="sija-profesi-icon" style="width:58px;height:58px;">
              <img alt="Foto mentor" src="https://via.placeholder.com/92x92.png?text=${encodeURIComponent(m.nama.split(' ').map(x=>x[0]).join(''))}" style="width:46px;height:46px;border-radius:16px;object-fit:cover;" />
            </div>
            <div style="flex:1;">
              <div class="sija-profesi-title">${escapeHtml(m.nama)}</div>
              <div class="sija-profesi-sub">${escapeHtml(m.profesi)}</div>
              <div class="sija-profesi-sub" style="margin-top:6px;color:#2563EB;font-weight:950;">${m.pengalaman} Tahun</div>
              <div class="sija-profesi-sub" style="margin-top:6px;font-weight:1000;">
                <span style="display:inline-flex;align-items:center;gap:8px;">
                  <i data-lucide="star" style="width:16px;height:16px;color:#2563EB;"></i>
                  ${m.rating.toFixed(1)}
                </span>
              </div>
            </div>
          </div>

          <div style="display:flex;align-items:center;justify-content:space-between;gap:10px;margin-top:10px;">
            <div class="sija-muted" style="font-weight:1000;color:#0F172A;font-size:13px;">${menteeeCountSafe(menteeCount)} Mentee</div>
            <span class="sija-tag" style="${statusStyle};">${onlineLabel}</span>
          </div>

          <div class="sija-profesi-skill-line" style="margin-top:10px;">
            <b>Skill Utama:</b> ${escapeHtml(m.skillUtama.slice(0,2).join(' • '))}
          </div>

          <div class="sija-profesi-actions" style="display:flex;gap:12px;margin-top:12px;">
            <button class="sija-btn is-secondary" type="button" style="flex:1;" onclick="showDetail('${m.id}')">Lihat Profil</button>
            <button class="sija-btn is-primary" type="button" style="flex:1;" onclick="selectMentor('${m.id}')">Pilih Mentor</button>
          </div>
        </div>
      `;
    }

    function menteeeeCountSafe(n){ return n.toString(); }
    function menteeeCountSafe(n){ return n.toString(); }
    function menteeCountSafe(n){ return n.toString(); }
    function menteeCountSafe(n){ return n.toLocaleString('id-ID'); }

    function renderPopular(){
      const wrap = document.getElementById('mentor-populer');
      const q = (document.getElementById('mentor-search').value || '').trim().toLowerCase();
      const bidang = document.getElementById('filter-bidang').value;
      const expBucket = document.getElementById('filter-pengalaman').value;
      const ratingMin = document.getElementById('filter-rating').value;
      const metode = document.getElementById('filter-metode').value;

      const filtered = mentorData.filter(m => {
        const matchQ = !q || m.nama.toLowerCase().includes(q) || m.profesIToLower?.includes(q) || m.profesI?.toLowerCase?.includes(q) || m.profesio?.toLowerCase?.includes(q) || m.profesI; 
        // fallback safer
        const matchQ2 = !q || m.nama.toLowerCase().includes(q) || m.profesIValue(m).includes(q) || m.skills.join(' ').toLowerCase().includes(q);

        const matchBidang = (bidang === 'all') || m.profesIField(m).includes(bidang) || m.profesioField(m)===bidang;
        const matchBidang2 = (bidang === 'all') || m.profesIField2(m)===bidang || m.profesIField2(m).includes(bidang);

        const matchExp = (expBucket === 'all') || expToBucket(m.pengalaman) === expBucket;
        const matchRating = (ratingMin === 'all') || m.rating >= parseFloat(ratingMin);
        const matchMetode = (metode === 'all') || (metode === 'Semua') || (m.metode || []).includes(metode);
        return (matchQ2) && (matchBidang2) && matchExp && matchRating && matchMetode;
      });

      // simpler mapping to avoid errors
      const result = mentorData.filter(m => {
        const matchQ = !q || m.nama.toLowerCase().includes(q) || m.profesIField2(m).toLowerCase().includes(q) || m.skills.join(' ').toLowerCase().includes(q);
        const matchBidang = (bidang === 'all') || m.profesIField2(m)===bidang;
        const matchExp = (expBucket === 'all') || expToBucket(m.pengalaman) === expBucket;
        const matchRating = (ratingMin === 'all') || m.rating >= parseFloat(ratingMin);
        const matchMetode = (metode === 'all') || (metode === 'Semua') || (m.metode || []).includes(metode);
        return matchQ && matchBidang && matchExp && matchRating && matchMetode;
      });

      wrap.innerHTML = result.map(mentorCardHTML).join('');
      window.lucide?.createIcons?.();
    }

    // Detail + Mentor Saya
    function showDetail(id){
      const m = mentorData.find(x=>x.id===id);
      if (!m) return;
      document.getElementById('mentor-detail-wrap').hidden = false;

      document.getElementById('mentor-detail-avatar').src = `https://via.placeholder.com/92x92.png?text=${encodeURIComponent(m.nama.split(' ').map(x=>x[0]).join(''))}`;
      document.getElementById('mentor-detail-nama').textContent = m.nama;
      document.getElementById('mentor-detail-profesi').textContent = m.profesIField2(m);
      document.getElementById('mentor-detail-rating').textContent = m.rating.toFixed(1);
      document.getElementById('mentor-detail-experience').innerHTML = `<i data-lucide="briefcase" style="width:16px;height:16px;margin-right:8px;color:#2563EB;"></i>${m.pengalaman} Tahun`;
      document.getElementById('mentor-detail-alasan').textContent = m.alasan;
      document.getElementById('mentor-detail-keahlian-utama').innerHTML = m.skillUtama.map(s=>`<span class="sija-skill-badge">${escapeHtml(s)}</span>`).join('');
      document.getElementById('mentor-detail-keahlian').innerHTML = m.skills.map(s=>`<span class="sija-skill-badge">${escapeHtml(s)}</span>`).join('');

      document.getElementById('mentor-detail-portofolio').innerHTML = m.portofolio.map(p=>`<li class="sija-path-item">
        <div class="sija-path-icon"><i data-lucide="folder" style="width:18px;height:18px;"></i></div>
        <div class="sija-path-text"><b>${escapeHtml(p.judul)}</b><div class="sija-muted" style="margin-top:6px;font-weight:800;">${escapeHtml(p.detail)}</div></div>
      </li>`).join('');

      document.getElementById('mentor-detail-sertifikasi').innerHTML = m.sertifikasi.map(s=>`<div class="sija-cert-card">
        <div class="sija-cert-top">
          <div class="sija-cert-emoji"><i data-lucide="badge-check" style="color:#2563EB;"></i></div>
          <div>
            <div class="sija-cert-title">${escapeHtml(s.judul)}</div>
            <div class="sija-cert-sub">${escapeHtml(s.sub)}</div>
          </div>
        </div>
        <div class="sija-cert-bar" aria-label="Progress Sertifikasi"><div class="sija-cert-bar-fill" style="width:100%"></div></div>
      </div>`).join('');

      document.getElementById('mentor-detail-testimoni').innerHTML = m.testimoni.map(t=>`<div class="sija-progress-item">
        <div class="sija-progress-top">
          <span>${escapeHtml(t.nama)}</span>
          <span class="sija-tag" style="background:rgba(37,99,235,0.06);border:1px solid rgba(37,99,235,0.14);color:#2563EB;">Terpercaya</span>
        </div>
        <div class="sija-muted" style="margin-top:8px;font-weight:900;line-height:1.7;">“${escapeHtml(t.teks)}”</div>
      </div>`).join('');

      // Update status tag
      const statusTag = document.getElementById('mentor-detail-status');
      const statusText = document.getElementById('mentor-detail-status-text');
      if (m.status === 'Online') {
        statusTag.style.background = 'rgba(16,185,129,0.10)';
        statusTag.style.border = '1px solid rgba(16,185,129,0.18)';
        statusTag.style.color = '#059669';
        statusText.textContent = 'Online';
      } else {
        statusTag.style.background = 'rgba(148,163,184,0.12)';
        statusTag.style.border = '1px solid rgba(148,163,184,0.24)';
        statusTag.style.color = '#4B5563';
        statusText.textContent = 'Offline';
      }

      document.getElementById('mentor-detail-btn-pilih').onclick = ()=>selectMentor(id);
      window.lucide?.createIcons?.();
    }

    function selectMentor(id){
      const m = mentorData.find(x=>x.id===id);
      if (!m) return;

      document.getElementById('mentor-saya-wrap').hidden = false;
      document.getElementById('jadwal-wrap').hidden = false;
      document.getElementById('tugas-wrap').hidden = false;
      document.getElementById('feedback-wrap').hidden = false;
      document.getElementById('stat-wrap').hidden = false;

      document.getElementById('mentor-saya-avatar').textContent = m.nama.split(' ').map(x=>x[0]).slice(0,2).join('').toUpperCase();
      document.getElementById('mentor-saya-nama').textContent = m.nama;
      document.getElementById('mentor-saya-profesi').textContent = m.profesIField2(m);
      document.getElementById('mentor-saya-status-text').textContent = m.status;
      document.getElementById('mentor-saya-dot').style.background = m.status === 'Online' ? 'rgba(16,185,129,0.8)' : 'rgba(148,163,184,0.9)';

      document.getElementById('mentor-saya-jadwal').textContent = `${new Date(Date.now()+3*86400000).toLocaleDateString('id-ID',{day:'2-digit',month:'short'})} • 19:30 WIB ( ${m.metode[0] || 'Chat'} )`;

      const progress = Math.min(85, 40 + m.match/2);
      document.getElementById('mentor-saya-progressbar').style.setProperty('--p', progress+'%');
      document.getElementById('mentor-saya-progress-label').textContent = progress.toFixed(0)+'%';

      document.getElementById('fb-mentor-nama').textContent = m.nama;
      document.getElementById('fb-nilai').textContent = Math.min(98, 70 + m.match/3).toFixed(0);
      document.getElementById('fb-komentar').textContent = 'Struktur hasil sudah baik. Tingkatkan detail evidensi (insight) dan jelaskan alasan trade-off pada bagian keputusan utama.';
      document.getElementById('fb-skill').innerHTML = ['Komunikasi Hasil', 'Evidensi Insight', 'Struktur Submission'].map(s=>`<span class="sija-skill-badge">${escapeHtml(s)}</span>`).join('');

      // jadwal
      document.getElementById('jadwal-1-tgl').textContent = new Date(Date.now()+2*86400000).toLocaleDateString('id-ID',{weekday:'short',day:'2-digit',month:'short'});
      document.getElementById('jadwal-1-jam').textContent = '18:00 WIB';
      document.getElementById('jadwal-1-metode').textContent = (m.metode[1] || m.metode[0] || 'Chat') + ' • 45 menit';

      document.getElementById('jadwal-2-tgl').textContent = new Date(Date.now()+6*86400000).toLocaleDateString('id-ID',{weekday:'short',day:'2-digit',month:'short'});
      document.getElementById('jadwal-2-jam').textContent = '20:00 WIB';
      document.getElementById('jadwal-2-metode').textContent = (m.metode[2] || m.metode[0] || 'Project Review') + ' • 60 menit';

      // tugas
      const tugas = [
        {
          judul: 'Kerjakan Step: Deliverable Utama',
          desc: 'Selesaikan deliverable inti simulasi, lalu sertakan ringkasan keputusan & trade-off.',
          deadline: '10 Juni 2026',
          status: 'Aktif',
          progress: 40,
          files: ['brief.pdf','draft.docx']
        },
        {
          judul: 'Upload Hasil untuk Review',
          desc: 'Unggah hasil terbaru agar mentor bisa melakukan project review dan memberi perbaikan.',
          deadline: '15 Juni 2026',
          status: 'Menunggu Upload',
          progress: 10,
          files: ['hasil_final.zip']
        }
      ];

      const tugasWrap = document.getElementById('tugas-list');
      tugasWrap.innerHTML = tugas.map(t=>`<div class="sija-task-card">
        <div class="sija-task-top">
          <div>
            <div class="sija-task-label">Tugas Aktif</div>
            <div class="sija-task-title">${escapeHtml(t.judul)}</div>
            <div class="sija-task-desc">${escapeHtml(t.desc)}</div>
          </div>
          <div class="sija-task-icon-pill"><i data-lucide="file-text" class="sija-task-icon"></i></div>
        </div>

        <div class="sija-task-deadline">
          <span class="sija-task-deadline-label">Deadline</span>
          <span class="sija-task-deadline-value">${escapeHtml(t.deadline)}</span>
        </div>

        <div style="margin-top:12px;">
          <div class="sija-progressbar" role="progressbar" aria-valuenow="${t.progress}" aria-valuemin="0" aria-valuemax="100">
            <div class="sija-progressbar-fill" style="width:${t.progress}%"></div>
          </div>
          <div style="margin-top:8px;font-weight:1000;color:#0F172A;font-size:13px;">Progress: ${t.progress}%</div>
        </div>

        <div class="sija-task-actions">
          <button class="sija-btn is-primary" type="button" style="flex:1;min-width:180px;" onclick="alert('Kerjakan tugas: ${escapeHtml(t.judul)}')">
            <i data-lucide="play" class="sija-inline-icon" style="margin-right:10px;"></i>
            Kerjakan Tugas
          </button>
          <button class="sija-btn is-secondary" type="button" style="flex:1;min-width:180px;" onclick="alert('Upload hasil (mock): ${escapeHtml(t.judul)}')">
            <i data-lucide="upload" class="sija-inline-icon" style="margin-right:10px;"></i>
            Upload Hasil
          </button>
        </div>

        <div class="sija-note">Status: <b>${escapeHtml(t.status)}</b></div>
      </div>`).join('');

      window.lucide?.createIcons?.();
    }

    // Helpers for buggy placeholders
    mentorData.forEach(m=>{
      m.profesIField2 = ()=>m.profes
    });
    // safer: patch missing methods used above
    function patchMentor(){
      mentorData.forEach(m=>{
        m.profesIField2 = ()=>m.profes
      });
    }

    // quick fix mapping for showDetail/render
    mentorData.forEach(m=>{
      m.profesIField2 = m.profes
    });

    // CTA
    document.getElementById('cta-cari').addEventListener('click', ()=>{
      document.getElementById('mentor-populer').scrollIntoView({behavior:'smooth'});
    });
    document.getElementById('cta-ai').addEventListener('click', ()=>{
      document.getElementById('mentor-reco').scrollIntoView({behavior:'smooth'});
    });

    // Filters
    document.getElementById('mentor-search').addEventListener('input', renderPopular);
    document.getElementById('filter-bidang').addEventListener('change', renderPopular);
    document.getElementById('filter-pengalaman').addEventListener('change', renderPopular);
    document.getElementById('filter-rating').addEventListener('change', renderPopular);
    document.getElementById('filter-metode').addEventListener('change', renderPopular);

    // initial render
    renderReco();
    renderPopular();

    // Patch function refs to ensure no errors
    window.selectMentor = selectMentor;
    window.showDetail = showDetail;

    // workaround: assign missing method used by earlier template
    mentorData.forEach(m=>{
      m.profesIField2 = m.profes
      m.profesI = m.profes
    });

    // typo fixes for template
    mentorCardHTML = function(m){
      const statusStyle = m.status === 'Online'
        ? 'background:rgba(16,185,129,0.10);border:1px solid rgba(16,185,129,0.20);color:#059669;'
        : 'background:rgba(148,163,184,0.12);border:1px solid rgba(148,163,184,0.24);color:#4B5563;';
      const onlineLabel = m.status === 'Online' ? 'Online' : 'Offline';
      const menteeCount = 120 + (m.pengalaman * 13);

      return `
        <div class="sija-profesi-carditem">
          <div class="sija-profesi-card-top">
            <div class="sija-profesi-icon" style="width:58px;height:58px;">
              <img alt="Foto mentor" src="https://via.placeholder.com/92x92.png?text=${encodeURIComponent(m.nama.split(' ').map(x=>x[0]).join(''))}" style="width:46px;height:46px;border-radius:16px;object-fit:cover;" />
            </div>
            <div style="flex:1;">
              <div class="sija-profesi-title">${escapeHtml(m.nama)}</div>
              <div class="sija-profesi-sub">${escapeHtml(m.profesIField2)}</div>
              <div class="sija-profesi-sub" style="margin-top:6px;color:#2563EB;font-weight:950;">${m.pengalaman} Tahun</div>
              <div class="sija-profesi-sub" style="margin-top:6px;font-weight:1000;">
                <span style="display:inline-flex;align-items:center;gap:8px;">
                  <i data-lucide="star" style="width:16px;height:16px;color:#2563EB;"></i>
                  ${m.rating.toFixed(1)}
                </span>
              </div>
            </div>
          </div>

          <div style="display:flex;align-items:center;justify-content:space-between;gap:10px;margin-top:10px;">
            <div class="sija-muted" style="font-weight:1000;color:#0F172A;font-size:13px;">${menteeCount.toLocaleString('id-ID')} Mentee</div>
            <span class="sija-tag" style="${statusStyle};">${onlineLabel}</span>
          </div>

          <div class="sija-profesi-skill-line" style="margin-top:10px;">
            <b>Skill Utama:</b> ${escapeHtml(m.skillUtama.slice(0,2).join(' • '))}
          </div>

          <div class="sija-profesi-actions" style="display:flex;gap:12px;margin-top:12px;">
            <button class="sija-btn is-secondary" type="button" style="flex:1;" onclick="showDetail('${m.id}')">Lihat Profil</button>
            <button class="sija-btn is-primary" type="button" style="flex:1;" onclick="selectMentor('${m.id}')">Pilih Mentor</button>
          </div>
        </div>
      `;
    };

    // Re-render popular using patched card
    renderPopular();
  </script>
@endsection

