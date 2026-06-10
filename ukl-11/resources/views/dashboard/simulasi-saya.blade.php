@extends('dashboard.layouts.user-layout')
<?php $active = 'simulasi'; ?>
@section('title','Simulasi Saya')
@section('content')
  <section class="sija-header-card">
    <div>
      <h1 class="sija-h1">Simulasi Saya</h1>
      <p class="sija-lead">Pantau seluruh simulasi yang sedang berjalan, kerjakan tugas dari mentor, dan tingkatkan kemampuan profesionalmu.</p>
    </div>
  </section>

  <!-- Statistik Simulasi (4 card horizontal) -->
  <section class="sija-grid-4" aria-label="Statistik Simulasi">
    <div class="sija-card sija-stat-card">
      <div class="sija-card-row">
        <div class="sija-stat-icon">
          <i data-lucide="briefcase" class="sija-card-icon"></i>
        </div>
        <div>
          <div class="sija-card-title">Simulasi Aktif</div>
          <div class="sija-card-value">3</div>
          <div class="sija-stat-desc">Sedang Dikerjakan</div>
        </div>
      </div>
    </div>

    <div class="sija-card sija-stat-card">
      <div class="sija-card-row">
        <div class="sija-stat-icon">
          <i data-lucide="check-circle" class="sija-card-icon"></i>
        </div>
        <div>
          <div class="sija-card-title">Simulasi Selesai</div>
          <div class="sija-card-value">12</div>
          <div class="sija-stat-desc">Berhasil Diselesaikan</div>
        </div>
      </div>
    </div>

    <div class="sija-card sija-stat-card">
      <div class="sija-card-row">
        <div class="sija-stat-icon">
          <i data-lucide="clock" class="sija-card-icon"></i>
        </div>
        <div>
          <div class="sija-card-title">Menunggu Review</div>
          <div class="sija-card-value">2</div>
          <div class="sija-stat-desc">Menunggu Penilaian Mentor</div>
        </div>
      </div>
    </div>

    <div class="sija-card sija-stat-card">
      <div class="sija-card-row">
        <div class="sija-stat-icon">
          <i data-lucide="award" class="sija-card-icon"></i>
        </div>
        <div>
          <div class="sija-card-title">Skill Score</div>
          <div class="sija-card-value">850</div>
          <div class="sija-stat-desc">Top 15% User</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Simulasi Sedang Berjalan -->
  <section class="sija-card sija-card-strong sija-section" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Simulasi Sedang Berjalan</h2>
      <p class="sija-muted">Lanjutkan progresmu, selesaikan step, dan pastikan deadline tetap terjaga.</p>
    </div>

    <div class="sija-grid-3" aria-label="Daftar Simulasi Aktif">
      <!-- UI/UX Designer -->
      <article class="sija-sim-card">
        <div class="sija-sim-top">
          <div>
            <div class="sija-sim-title">UI/UX Designer Simulation</div>
            <div class="sija-sim-meta">Mentor: <b>Sarah Wijaya</b></div>
          </div>
          <div class="sija-sim-badge">
            <i data-lucide="map" class="sija-sim-badge-icon"></i>
            Simulasi
          </div>
        </div>

        <div class="sija-sim-progress" aria-label="Progress UI/UX Designer 65%">
          <div class="sija-sim-progress-row">
            <div class="sija-sim-progress-label">Progress</div>
            <div class="sija-sim-progress-pct">65%</div>
          </div>
          <div class="sija-sim-progressbar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
            <div class="sija-sim-progressbar-fill" style="width:65%"></div>
          </div>
        </div>

        <div class="sija-sim-body">
          <div class="sija-sim-line">
            <div class="sija-sim-line-label">Step Saat Ini</div>
            <div class="sija-sim-line-value">Membuat Wireframe Mobile App</div>
          </div>
          <div class="sija-sim-line">
            <div class="sija-sim-line-label">Deadline</div>
            <div class="sija-sim-line-value">2 Hari Lagi</div>
          </div>
        </div>

        <div class="sija-sim-actions">
          <button class="sija-btn is-primary" type="button">
            <i data-lucide="play" class="sija-inline-icon"></i>
            Lanjutkan Simulasi
          </button>
        </div>
      </article>

      <!-- Frontend Developer -->
      <article class="sija-sim-card">
        <div class="sija-sim-top">
          <div>
            <div class="sija-sim-title">Frontend Developer Simulation</div>
            <div class="sija-sim-meta">Mentor: <b>Budi Santoso</b></div>
          </div>
          <div class="sija-sim-badge">
            <i data-lucide="code" class="sija-sim-badge-icon"></i>
            Simulasi
          </div>
        </div>

        <div class="sija-sim-progress" aria-label="Progress Frontend Developer 40%">
          <div class="sija-sim-progress-row">
            <div class="sija-sim-progress-label">Progress</div>
            <div class="sija-sim-progress-pct">40%</div>
          </div>
          <div class="sija-sim-progressbar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
            <div class="sija-sim-progressbar-fill" style="width:40%"></div>
          </div>
        </div>

        <div class="sija-sim-body">
          <div class="sija-sim-line">
            <div class="sija-sim-line-label">Step Saat Ini</div>
            <div class="sija-sim-line-value">Membuat Landing Page</div>
          </div>
          <div class="sija-sim-line">
            <div class="sija-sim-line-label">Deadline</div>
            <div class="sija-sim-line-value">5 Hari Lagi</div>
          </div>
        </div>

        <div class="sija-sim-actions">
          <button class="sija-btn is-primary" type="button">
            <i data-lucide="play" class="sija-inline-icon"></i>
            Lanjutkan Simulasi
          </button>
        </div>
      </article>

      <!-- Data Analyst -->
      <article class="sija-sim-card">
        <div class="sija-sim-top">
          <div>
            <div class="sija-sim-title">Data Analyst Simulation</div>
            <div class="sija-sim-meta">Mentor: <b>Andi Saputra</b></div>
          </div>
          <div class="sija-sim-badge">
            <i data-lucide="database" class="sija-sim-badge-icon"></i>
            Simulasi
          </div>
        </div>

        <div class="sija-sim-progress" aria-label="Progress Data Analyst 20%">
          <div class="sija-sim-progress-row">
            <div class="sija-sim-progress-label">Progress</div>
            <div class="sija-sim-progress-pct">20%</div>
          </div>
          <div class="sija-sim-progressbar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
            <div class="sija-sim-progressbar-fill" style="width:20%"></div>
          </div>
        </div>

        <div class="sija-sim-body">
          <div class="sija-sim-line">
            <div class="sija-sim-line-label">Step Saat Ini</div>
            <div class="sija-sim-line-value">Analisis Dataset Penjualan</div>
          </div>
          <div class="sija-sim-line">
            <div class="sija-sim-line-label">Deadline</div>
            <div class="sija-sim-line-value">7 Hari Lagi</div>
          </div>
        </div>

        <div class="sija-sim-actions">
          <button class="sija-btn is-primary" type="button">
            <i data-lucide="play" class="sija-inline-icon"></i>
            Lanjutkan Simulasi
          </button>
        </div>
      </article>
    </div>
  </section>

  <!-- Timeline Simulasi + Tugas + Feedback + Skill + Riwayat + Sertifikat + Aktivitas -->
  <div class="sija-two-col" style="margin-top:16px;">
    <!-- Timeline Simulasi -->
    <section class="sija-card sija-card-strong sija-section">
      <div class="sija-card-head">
        <h2 class="sija-h2">Timeline Simulasi</h2>
        <p class="sija-muted">Step-by-step agar kamu tahu progres dan status penilaian.</p>
      </div>

      <div class="sija-path" aria-label="UI/UX Designer Path">
        <div class="sija-path-title">UI/UX Designer Path</div>
        <ol class="sija-path-list">
          <li class="sija-path-item is-done">
            <span class="sija-path-icon">✅</span>
            <span class="sija-path-text">Step 1<br><b>Membaca Brief Project</b></span>
          </li>
          <li class="sija-path-item is-done">
            <span class="sija-path-icon">✅</span>
            <span class="sija-path-text">Step 2<br><b>User Research</b></span>
          </li>
          <li class="sija-path-item is-done">
            <span class="sija-path-icon">✅</span>
            <span class="sija-path-text">Step 3<br><b>Membuat User Flow</b></span>
          </li>
          <li class="sija-path-item is-current">
            <span class="sija-path-icon">🔄</span>
            <span class="sija-path-text">Step 4<br><b>Membuat Wireframe</b></span>
          </li>
          <li class="sija-path-item is-pending">
            <span class="sija-path-icon">⏳</span>
            <span class="sija-path-text">Step 5<br><b>Review Mentor</b></span>
          </li>
          <li class="sija-path-item is-lock">
            <span class="sija-path-icon">🔒</span>
            <span class="sija-path-text">Step 6<br><b>Final Submission</b></span>
          </li>
        </ol>
      </div>
    </section>

    <!-- Tugas Dari Mentor -->
    <section class="sija-card sija-card-strong sija-section">
      <div class="sija-card-head">
        <h2 class="sija-h2">Tugas Dari Mentor</h2>
        <p class="sija-muted">Kerjakan instruksi terbaru dan unggah hasil untuk dinilai.</p>
      </div>

      <div class="sija-task-card">
        <div class="sija-task-top">
          <div>
            <div class="sija-task-label">Tugas Aktif</div>
            <div class="sija-task-title">Wireframe Aplikasi Marketplace</div>
          </div>
          <div class="sija-task-icon-pill">
            <i data-lucide="file-text" class="sija-task-icon"></i>
          </div>
        </div>

        <div class="sija-task-desc">Buat wireframe minimal 5 halaman berdasarkan studi kasus yang diberikan.</div>

        <div class="sija-task-deadline">
          <span class="sija-task-deadline-label">Deadline</span>
          <span class="sija-task-deadline-value">10 Juni 2026</span>
        </div>

        <div class="sija-task-files">
          <div class="sija-task-files-label">File Pendukung</div>
          <a href="#" class="sija-link-pill">wireframe-brief.pdf</a>
        </div>

        <div class="sija-task-actions">
          <input id="upload-hasil" type="file" hidden />
          <button class="sija-btn is-primary" type="button" onclick="document.getElementById('upload-hasil').click()">
            <i data-lucide="upload" class="sija-inline-icon"></i>
            Upload Hasil
          </button>
          <button class="sija-btn is-secondary" type="button">
            <i data-lucide="refresh-cw" class="sija-inline-icon"></i>
            Simpan Draft
          </button>
        </div>

        <div class="sija-note">Pastikan wireframe sudah sesuai flow pengguna dan siap untuk review mentor.</div>
      </div>
    </section>
  </div>

  <div class="sija-two-col" style="margin-top:16px;">
    <!-- Feedback Mentor -->
    <section class="sija-card sija-card-strong sija-section">
      <div class="sija-card-head">
        <h2 class="sija-h2">Feedback Mentor</h2>
        <p class="sija-muted">Insight untuk memperbaiki kualitas simulasi kamu.</p>
      </div>

      <div class="sija-feedback-card">
        <div class="sija-feedback-top">
          <div class="sija-feedback-avatar">S</div>
          <div class="sija-feedback-meta">
            <div class="sija-feedback-mentor">Mentor: <b>Sarah Wijaya</b></div>
            <div class="sija-feedback-sub">Feedback Terbaru</div>
          </div>
        </div>

        <div class="sija-feedback-text">
          Struktur halaman sudah baik dan alur pengguna cukup jelas. Perbaiki navigasi agar lebih sederhana dan mudah digunakan.
        </div>

        <div class="sija-feedback-actions">
          <button class="sija-btn is-primary" type="button">
            <i data-lucide="message-square" class="sija-inline-icon"></i>
            Lihat Feedback Lengkap
          </button>
        </div>
      </div>
    </section>

    <!-- Skill Yang Didapat -->
    <section class="sija-card sija-card-strong sija-section">
      <div class="sija-card-head">
        <h2 class="sija-h2">Skill Yang Didapat</h2>
        <p class="sija-muted">Skill yang terakumulasi dari seluruh aktivitas simulasi.</p>
      </div>

      <div class="sija-skill-grid" aria-label="Skill yang telah dipelajari">
        @php
          $skills=[
            'Design Thinking',
            'User Research',
            'Wireframing',
            'HTML',
            'CSS',
            'JavaScript',
            'Problem Solving',
            'Communication',
            'Team Collaboration',
          ];
        @endphp
        @foreach($skills as $s)
          <span class="sija-skill-badge">{{ $s }}</span>
        @endforeach
      </div>
    </section>
  </div>

  <!-- Riwayat Simulasi -->
  <section class="sija-card sija-card-strong sija-section" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Riwayat Simulasi</h2>
      <p class="sija-muted">Daftar simulasi yang kamu jalani (mock UI).</p>
    </div>

    <div class="sija-table-wrap" role="region" aria-label="Tabel Riwayat Simulasi">
      <table class="sija-table">
        <thead>
          <tr>
            <th>Nama Profesi</th>
            <th>Mentor</th>
            <th>Status</th>
            <th>Nilai</th>
            <th>Sertifikat</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>UI/UX Designer</td>
            <td>Sarah Wijaya</td>
            <td><span class="sija-status is-done">Selesai</span></td>
            <td>90</td>
            <td><a href="#" class="sija-table-action">Download</a></td>
          </tr>
          <tr>
            <td>Frontend Developer</td>
            <td>Budi Santoso</td>
            <td><span class="sija-status is-active">Berjalan</span></td>
            <td>-</td>
            <td><span class="sija-table-muted">Belum Tersedia</span></td>
          </tr>
          <tr>
            <td>Data Analyst</td>
            <td>Andi Saputra</td>
            <td><span class="sija-status is-done">Selesai</span></td>
            <td>85</td>
            <td><a href="#" class="sija-table-action">Download</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- Sertifikat -->
  <div class="sija-two-col" style="margin-top:16px;">
    <section class="sija-card sija-card-strong sija-section">
      <div class="sija-card-head">
        <h2 class="sija-h2">Sertifikat Yang Tersedia</h2>
        <p class="sija-muted">Unduh sertifikat setelah simulasi selesai.</p>
      </div>

      <div class="sija-cert-grid">
        <div class="sija-cert-card">
          <div class="sija-cert-top">
            <div class="sija-cert-emoji">🏆</div>
            <div>
              <div class="sija-cert-title">UI/UX Designer Fundamental</div>
              <div class="sija-cert-sub">Progress: <b>100%</b></div>
            </div>
          </div>
          <div class="sija-cert-bar" aria-label="Progress 100%">
            <div class="sija-cert-bar-fill" style="width:100%"></div>
          </div>
          <button class="sija-btn is-primary sija-btn-full" type="button">
            <i data-lucide="download" class="sija-inline-icon"></i>
            Unduh Sertifikat
          </button>
        </div>

        <div class="sija-cert-card">
          <div class="sija-cert-top">
            <div class="sija-cert-emoji">🏆</div>
            <div>
              <div class="sija-cert-title">Data Analyst Basic</div>
              <div class="sija-cert-sub">Progress: <b>100%</b></div>
            </div>
          </div>
          <div class="sija-cert-bar" aria-label="Progress 100%">
            <div class="sija-cert-bar-fill" style="width:100%"></div>
          </div>
          <button class="sija-btn is-primary sija-btn-full" type="button">
            <i data-lucide="download" class="sija-inline-icon"></i>
            Unduh Sertifikat
          </button>
        </div>
      </div>
    </section>

    <!-- Aktivitas Terbaru + Yang Harus Dihindari -->
    <section class="sija-card sija-card-strong sija-section">
      <div class="sija-card-head">
        <h2 class="sija-h2">Aktivitas Terbaru</h2>
        <p class="sija-muted">Kamu bisa melihat dampak dari setiap langkah.</p>
      </div>

      <ol class="sija-activity" aria-label="Timeline Aktivitas Terbaru">
        <li class="sija-activity-item">
          <span class="sija-activity-dot"></span>
          <div>
            <div class="sija-activity-title">Menyelesaikan User Flow</div>
            <div class="sija-activity-sub">Sudah diverifikasi untuk review berikutnya.</div>
          </div>
        </li>
        <li class="sija-activity-item">
          <span class="sija-activity-dot"></span>
          <div>
            <div class="sija-activity-title">Upload Wireframe</div>
            <div class="sija-activity-sub">Menunggu feedback mentor untuk revisi.</div>
          </div>
        </li>
        <li class="sija-activity-item">
          <span class="sija-activity-dot"></span>
          <div>
            <div class="sija-activity-title">Mendapat Feedback Mentor</div>
            <div class="sija-activity-sub">Perbaikan navigasi untuk meningkatkan usability.</div>
          </div>
        </li>
        <li class="sija-activity-item">
          <span class="sija-activity-dot"></span>
          <div>
            <div class="sija-activity-title">Meningkatkan Skill Score +20</div>
            <div class="sija-activity-sub">Peningkatan berdasarkan kualitas deliverable.</div>
          </div>
        </li>
        <li class="sija-activity-item">
          <span class="sija-activity-dot"></span>
          <div>
            <div class="sija-activity-title">Membuka Sertifikat UI/UX Designer</div>
            <div class="sija-activity-sub">Sertifikat siap diunduh.</div>
          </div>
        </li>
      </ol>

      <div class="sija-avoid" aria-label="Yang harus dihindari">
        <div class="sija-avoid-title">Yang Harus Dihindari</div>
        <ul class="sija-avoid-list">
          <li>Feed sosial media</li>
          <li>Posting status</li>
          <li>Followers</li>
          <li>Following</li>
          <li>Like dan komentar</li>
          <li>Story</li>
          <li>Chat sosial media</li>
        </ul>
        <div class="sija-avoid-note">Fokus sebagai platform simulasi karier profesional.</div>
      </div>
    </section>
  </div>
@endsection

