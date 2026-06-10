@extends('dashboard.layouts.user-layout')
<?php $active='roadmap'; ?>
@section('title','Roadmap Karier')
@section('content')

  {{-- HERO --}}
  <section class="sija-header-card sija-roadmap-hero">
    <div class="sija-roadmap-hero-inner">
      <div>
        <h1 class="sija-h1">Roadmap Karier Saya</h1>
        <p class="sija-lead">Lihat jalur pengembangan skill dan langkah yang perlu kamu tempuh untuk mencapai karier impianmu.</p>

        <div class="sija-roadmap-hero-meta" aria-label="Ringkasan asesmen AI">
          <div class="sija-roadmap-meta-item">
            <i data-lucide="user" class="sija-roadmap-meta-icon"></i>
            <div>
              <div class="sija-roadmap-meta-label">Nama pengguna</div>
              <div class="sija-roadmap-meta-value">Putra</div>
            </div>
          </div>

          <div class="sija-roadmap-meta-item">
            <i data-lucide="briefcase" class="sija-roadmap-meta-icon"></i>
            <div>
              <div class="sija-roadmap-meta-label">Profesi direkomendasikan AI</div>
              <div class="sija-roadmap-meta-value">Frontend Developer</div>
            </div>
          </div>

          <div class="sija-roadmap-meta-item">
            <i data-lucide="percentage" class="sija-roadmap-meta-icon"></i>
            <div>
              <div class="sija-roadmap-meta-label">Persentase kecocokan</div>
              <div class="sija-roadmap-meta-value">Match Score: 92%</div>
            </div>
          </div>

          <div class="sija-roadmap-meta-item">
            <i data-lucide="target" class="sija-roadmap-meta-icon"></i>
            <div>
              <div class="sija-roadmap-meta-label">Target karier utama</div>
              <div class="sija-roadmap-meta-value">Menjadi Junior Frontend Developer dalam 6 bulan</div>
            </div>
          </div>
        </div>
      </div>

      <div class="sija-roadmap-hero-cta">
        <div class="sija-roadmap-hero-meter" aria-label="Progress roadmap">
          <div class="sija-roadmap-hero-meter-top">
            <div class="sija-roadmap-hero-meter-title">Progress Roadmap</div>
            <div class="sija-roadmap-hero-meter-value">45%</div>
          </div>
          <div class="sija-roadmap-meterbar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
            <div class="sija-roadmap-meterbar-fill" style="width:45%"></div>
          </div>
        </div>

        <div class="sija-roadmap-hero-actions">
          <a href="{{ route('dashboard.simulasi-saya') }}" class="sija-btn is-primary sija-btn-full">Mulai Simulasi</a>
          <a href="{{ route('dashboard.mentor-ai') }}" class="sija-btn is-secondary sija-btn-full">Cari Mentor</a>
        </div>
      </div>
    </div>
  </section>

  {{-- STATISTIK --}}
  <section class="sija-roadmap-section">
    <div class="sija-grid-4">
      <div class="sija-stat-card" aria-label="Progress Roadmap">
        <div class="sija-stat-top">
          <div>
            <div class="sija-stat-label">Progress Roadmap</div>
            <div class="sija-stat-value">45%</div>
          </div>
          <div class="sija-stat-icon">
            <i data-lucide="map" class="sija-stat-lucide"></i>
          </div>
        </div>
        <div class="sija-roadmap-mini-progress" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
          <div class="sija-roadmap-mini-progress-fill" style="width:45%"></div>
        </div>
      </div>

      <div class="sija-stat-card" aria-label="Skill Dikuasai">
        <div class="sija-stat-top">
          <div>
            <div class="sija-stat-label">Skill Dikuasai</div>
            <div class="sija-stat-value">12</div>
          </div>
          <div class="sija-stat-icon">
            <i data-lucide="sparkles" class="sija-stat-lucide"></i>
          </div>
        </div>
        <div class="sija-roadmap-mini-progress" aria-hidden="true">
          <div class="sija-roadmap-mini-progress-fill" style="width:60%"></div>
        </div>
      </div>

      <div class="sija-stat-card" aria-label="Simulasi Selesai">
        <div class="sija-stat-top">
          <div>
            <div class="sija-stat-label">Simulasi Selesai</div>
            <div class="sija-stat-value">4</div>
          </div>
          <div class="sija-stat-icon">
            <i data-lucide="check-circle" class="sija-stat-lucide"></i>
          </div>
        </div>
        <div class="sija-roadmap-mini-progress" aria-hidden="true">
          <div class="sija-roadmap-mini-progress-fill" style="width:40%"></div>
        </div>
      </div>

      <div class="sija-stat-card" aria-label="Sertifikat Diperoleh">
        <div class="sija-stat-top">
          <div>
            <div class="sija-stat-label">Sertifikat Diperoleh</div>
            <div class="sija-stat-value">2</div>
          </div>
          <div class="sija-stat-icon">
            <i data-lucide="badge-check" class="sija-stat-lucide"></i>
          </div>
        </div>
        <div class="sija-roadmap-mini-progress" aria-hidden="true">
          <div class="sija-roadmap-mini-progress-fill" style="width:50%"></div>
        </div>
      </div>
    </div>
  </section>

  {{-- REKOMENDASI AI --}}
  <section class="sija-roadmap-section">
    <div class="sija-roadmap-reco-card sija-card">
      <div class="sija-roadmap-reco-top">
        <div class="sija-roadmap-reco-left">
          <div class="sija-roadmap-reco-profesi">Frontend Developer</div>
          <div class="sija-roadmap-reco-sub">Rekomendasi karier dari AI berdasarkan asesmenmu</div>
        </div>

        <div class="sija-roadmap-reco-badges">
          <div class="sija-roadmap-reco-badge">
            <div class="sija-roadmap-reco-badge-label">Match Score</div>
            <div class="sija-roadmap-reco-badge-value">92%</div>
          </div>
          <div class="sija-roadmap-reco-badge">
            <div class="sija-roadmap-reco-badge-label">Demand</div>
            <div class="sija-roadmap-reco-badge-value">Tinggi</div>
          </div>
          <div class="sija-roadmap-reco-badge">
            <div class="sija-roadmap-reco-badge-label">Gaji</div>
            <div class="sija-roadmap-reco-badge-value">Rp 6.000.000 - 15.000.000</div>
          </div>
          <div class="sija-roadmap-reco-badge">
            <div class="sija-roadmap-reco-badge-label">Tingkat kesulitan</div>
            <div class="sija-roadmap-reco-badge-value">Sedang</div>
          </div>
        </div>
      </div>

      <div class="sija-roadmap-reco-bottom">
        <a href="#" class="sija-btn is-primary">Lihat Detail Profesi</a>
        <div class="sija-roadmap-reco-note">
          <i data-lucide="info" class="sija-roadmap-reco-note-icon"></i>
          <span>Fokus roadmap ini agar portofolio dan simulasi kamu selaras dengan kebutuhan industri.</span>
        </div>
      </div>
    </div>
  </section>

  <div class="sija-roadmap-two-col">

    {{-- TIMELINE 7 TAHAP --}}
    <section class="sija-card sija-roadmap-card">
      <div class="sija-card-head sija-roadmap-card-head">
        <h2 class="sija-h2">Jalur Karier Interaktif</h2>
        <p class="sija-muted">Setiap tahap memberi target skill, output, dan status progress kamu.</p>
      </div>

      <ol class="sija-roadmap-timeline" aria-label="Roadmap Timeline 7 tahap">
        <li class="sija-roadmap-timeline-item is-done">
          <div class="sija-roadmap-timeline-bullet">
            <i data-lucide="check" class="sija-roadmap-timeline-icon"></i>
          </div>
          <div class="sija-roadmap-timeline-content">
            <div class="sija-roadmap-timeline-title">Tahap 1 — Dasar Pemahaman</div>
            <div class="sija-roadmap-timeline-status">Status: Selesai</div>
            <div class="sija-roadmap-timeline-skills">
              <span>Dasar Komputer</span>
              <span>Internet</span>
              <span>Komunikasi</span>
            </div>
          </div>
        </li>

        <li class="sija-roadmap-timeline-item is-current">
          <div class="sija-roadmap-timeline-bullet">
            <i data-lucide="play" class="sija-roadmap-timeline-icon"></i>
          </div>
          <div class="sija-roadmap-timeline-content">
            <div class="sija-roadmap-timeline-title">Tahap 2 — Belajar Skill Dasar</div>
            <div class="sija-roadmap-timeline-status">Status: Sedang Berjalan</div>
            <div class="sija-roadmap-timeline-skills">
              <span>HTML</span>
              <span>CSS</span>
              <span>Responsive Design</span>
            </div>
            <div class="sija-roadmap-timeline-progress">
              <div class="sija-roadmap-timeline-progress-row">
                <span>Progress</span>
                <span>70%</span>
              </div>
              <div class="sija-roadmap-timeline-progressbar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                <div class="sija-roadmap-timeline-progressbar-fill" style="width:70%"></div>
              </div>
            </div>
          </div>
        </li>

        <li class="sija-roadmap-timeline-item is-pending">
          <div class="sija-roadmap-timeline-bullet">
            <i data-lucide="clock" class="sija-roadmap-timeline-icon"></i>
          </div>
          <div class="sija-roadmap-timeline-content">
            <div class="sija-roadmap-timeline-title">Tahap 3 — Belajar Skill Menengah</div>
            <div class="sija-roadmap-timeline-status">Status: Belum Dimulai</div>
            <div class="sija-roadmap-timeline-skills">
              <span>JavaScript</span>
              <span>Git</span>
              <span>GitHub</span>
            </div>
          </div>
        </li>

        <li class="sija-roadmap-timeline-item is-locked">
          <div class="sija-roadmap-timeline-bullet">
            <i data-lucide="lock" class="sija-roadmap-timeline-icon"></i>
          </div>
          <div class="sija-roadmap-timeline-content">
            <div class="sija-roadmap-timeline-title">Tahap 4 — Membangun Portofolio</div>
            <div class="sija-roadmap-timeline-status">Status: Terkunci</div>
            <div class="sija-roadmap-timeline-targets">
              <span>Landing Page</span>
              <span>Dashboard</span>
              <span>Company Profile</span>
            </div>
          </div>
        </li>

        <li class="sija-roadmap-timeline-item is-locked">
          <div class="sija-roadmap-timeline-bullet">
            <i data-lucide="lock" class="sija-roadmap-timeline-icon"></i>
          </div>
          <div class="sija-roadmap-timeline-content">
            <div class="sija-roadmap-timeline-title">Tahap 5 — Simulasi Kerja</div>
            <div class="sija-roadmap-timeline-status">Status: Terkunci</div>
            <div class="sija-roadmap-timeline-targets">
              <span>Menyelesaikan simulasi profesi</span>
              <span>Mendapat review mentor</span>
            </div>
          </div>
        </li>

        <li class="sija-roadmap-timeline-item is-locked">
          <div class="sija-roadmap-timeline-bullet">
            <i data-lucide="lock" class="sija-roadmap-timeline-icon"></i>
          </div>
          <div class="sija-roadmap-timeline-content">
            <div class="sija-roadmap-timeline-title">Tahap 6 — Persiapan Dunia Kerja</div>
            <div class="sija-roadmap-timeline-status">Status: Terkunci</div>
            <div class="sija-roadmap-timeline-targets">
              <span>CV Profesional</span>
              <span>LinkedIn</span>
              <span>GitHub Portfolio</span>
            </div>
          </div>
        </li>

        <li class="sija-roadmap-timeline-item is-locked">
          <div class="sija-roadmap-timeline-bullet">
            <i data-lucide="lock" class="sija-roadmap-timeline-icon"></i>
          </div>
          <div class="sija-roadmap-timeline-content">
            <div class="sija-roadmap-timeline-title">Tahap 7 — Sertifikasi</div>
            <div class="sija-roadmap-timeline-status">Status: Terkunci</div>
            <div class="sija-roadmap-timeline-targets">
              <span>Mendapat sertifikat penyelesaian SIJA</span>
            </div>
          </div>
        </li>
      </ol>
    </section>

    <section class="sija-roadmap-card-stack">

      {{-- Skill Progress --}}
      <div class="sija-card sija-roadmap-card">
        <div class="sija-card-head sija-roadmap-card-head">
          <h2 class="sija-h2">Skill Progress</h2>
          <p class="sija-muted">Pantau kemampuan yang sudah kamu kuasai saat ini.</p>
        </div>

        <div class="sija-roadmap-skill-progress" aria-label="Skill progress bars">
          @php $sp=[['HTML',90],['CSS',80],['JavaScript',45],['Git',20],['Problem Solving',70],['Communication',85]]; @endphp
          @foreach($sp as $row)
            <div class="sija-roadmap-skill-row">
              <div class="sija-roadmap-skill-top">
                <span class="sija-roadmap-skill-name">{{ $row[0] }}</span>
                <span class="sija-roadmap-skill-pct">{{ $row[1] }}%</span>
              </div>
              <div class="sija-roadmap-skillbar" role="progressbar" aria-valuenow="{{ $row[1] }}" aria-valuemin="0" aria-valuemax="100">
                <div class="sija-roadmap-skillbar-fill" style="width:{{ $row[1] }}%"></div>
              </div>
            </div>
          @endforeach
        </div>
      </div>

      {{-- Skill AI --}}
      <div class="sija-card sija-roadmap-card">
        <div class="sija-card-head sija-roadmap-card-head">
          <h2 class="sija-h2">Skill Yang Perlu Dipelajari</h2>
          <p class="sija-muted">Prioritas berdasarkan rekomendasi AI untuk mempercepat kariermu.</p>
        </div>

        <div class="sija-roadmap-ai-skill-grid">
          @php $skills=[
            ['JavaScript','Prioritas Tinggi','Sedang','2 minggu'],
            ['React','Prioritas Tinggi','Sulit','3 minggu'],
            ['Git','Prioritas Sedang','Sedang','1 minggu'],
            ['API Integration','Prioritas Sedang','Sulit','2 minggu'],
            ['Team Collaboration','Prioritas Rendah','Mudah','1 minggu'],
          ]; @endphp
          @foreach($skills as $sk)
            <div class="sija-roadmap-ai-skill-item">
              <div class="sija-roadmap-ai-skill-top">
                <div class="sija-roadmap-ai-skill-name">{{ $sk[0] }}</div>
                <div class="sija-roadmap-ai-skill-priority">{{ $sk[1] }}</div>
              </div>
              <div class="sija-roadmap-ai-skill-meta">
                <div><span class="sija-roadmap-ai-k">Kesulitan</span> <b>{{ $sk[2] }}</b></div>
                <div><span class="sija-roadmap-ai-k">Estimasi</span> <b>{{ $sk[3] }}</b></div>
              </div>
            </div>
          @endforeach
        </div>
      </div>

      {{-- Rekomendasi Simulasi --}}
      <div class="sija-card sija-roadmap-card">
        <div class="sija-card-head sija-roadmap-card-head">
          <h2 class="sija-h2">Rekomendasi Simulasi</h2>
          <p class="sija-muted">Simulasi kerja yang paling relevan untuk tahapmu saat ini.</p>
        </div>

        <div class="sija-roadmap-sim-reco">
          <div class="sija-roadmap-sim-top">
            <div>
              <div class="sija-roadmap-sim-title">Frontend Developer Simulation</div>
              <div class="sija-roadmap-sim-sub">Level: Pemula</div>
            </div>
            <div class="sija-roadmap-sim-badge">
              <i data-lucide="timer" class="sija-roadmap-sim-badge-icon"></i>
              Durasi: <b>7 Hari</b>
            </div>
          </div>

          <div class="sija-roadmap-sim-actions">
            <a href="{{ route('dashboard.simulasi-saya') }}" class="sija-btn is-primary">Mulai Simulasi</a>
          </div>
        </div>
      </div>

      {{-- Mentor --}}
      <div class="sija-card sija-roadmap-card">
        <div class="sija-card-head sija-roadmap-card-head">
          <h2 class="sija-h2">Mentor Yang Direkomendasikan</h2>
          <p class="sija-muted">Bimbingan yang paling cocok untuk roadmapmu.</p>
        </div>

        <div class="sija-roadmap-mentor-card">
          <div class="sija-roadmap-mentor-left">
            <div class="sija-roadmap-mentor-photo" aria-hidden="true">M</div>
            <div>
              <div class="sija-roadmap-mentor-name">Mentor Andi</div>
              <div class="sija-roadmap-mentor-profesi">Frontend Mentor • UI Engineer</div>
            </div>
          </div>

          <div class="sija-roadmap-mentor-right">
            <div class="sija-roadmap-mentor-rating">
              <i data-lucide="star" class="sija-roadmap-mentor-star"></i>
              <span>4.9</span>
              <span class="sija-roadmap-mentor-rating-sub">Rating</span>
            </div>
            <div class="sija-roadmap-mentor-match">Match: <b>91%</b></div>
          </div>
        </div>

        <div class="sija-roadmap-mentor-actions">
          <a href="{{ route('dashboard.bimbingan-mentor') }}" class="sija-btn is-secondary sija-btn-full">Lihat Mentor</a>
        </div>
      </div>

    </section>
  </div>

  {{-- BOTTOM GRID --}}
  <div class="sija-roadmap-bottom-grid">
    <section class="sija-card sija-roadmap-card">
      <div class="sija-card-head sija-roadmap-card-head">
        <h2 class="sija-h2">Target Karier</h2>
        <p class="sija-muted">Career ladder yang jelas—setiap level punya skill & target pencapaian.</p>
      </div>

      <div class="sija-roadmap-ladder" aria-label="Career ladder">
        <div class="sija-roadmap-ladder-row">
          @php $ladder=[
            ['Frontend Developer','Junior Frontend Developer','Skill: HTML/CSS, JS Basic','Estimasi: 6 bulan','Target: Landing & Dashboard'],
            ['Junior Frontend Developer','Mid Frontend Developer','Skill: JS Modern, Git Flow','Estimasi: 6-9 bulan','Target: Feature UI kompleks'],
            ['Mid Frontend Developer','Senior Frontend Developer','Skill: React, API Integration','Estimasi: 9-12 bulan','Target: Arsitektur UI modular'],
            ['Senior Frontend Developer','Frontend Architect','Skill: Design System, Performance','Estimasi: 12 bulan','Target: Standar UI untuk tim'],
          ]; @endphp

          @foreach($ladder as $level)
            <div class="sija-roadmap-ladder-card">
              <div class="sija-roadmap-ladder-title">{{ $level[1] }}</div>
              <div class="sija-roadmap-ladder-sub">Naik dari: <b>{{ $level[0] }}</b></div>
              <div class="sija-roadmap-ladder-detail"><i data-lucide="layers" class="sija-roadmap-ladder-icon"></i> {{ $level[2] }}</div>
              <div class="sija-roadmap-ladder-detail"><i data-lucide="calendar" class="sija-roadmap-ladder-icon"></i> {{ $level[3] }}</div>
              <div class="sija-roadmap-ladder-detail"><i data-lucide="target" class="sija-roadmap-ladder-icon"></i> {{ $level[4] }}</div>
            </div>
            @if(!$loop->last)
              <div class="sija-roadmap-ladder-arrow" aria-hidden="true">
                <i data-lucide="arrow-right" class="sija-roadmap-ladder-arrow-icon"></i>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </section>

    <section class="sija-card sija-roadmap-card">
      <div class="sija-card-head sija-roadmap-card-head">
        <h2 class="sija-h2">Aktivitas Yang Harus Diselesaikan</h2>
        <p class="sija-muted">Checklist interaktif untuk memastikan kamu tidak melewatkan langkah kunci.</p>
      </div>

      <ul class="sija-roadmap-checklist" aria-label="Checklist aktivitas">
        <li class="is-done"><i data-lucide="check" class="sija-roadmap-check-icon"></i> Lengkapi Profil</li>
        <li class="is-done"><i data-lucide="check" class="sija-roadmap-check-icon"></i> Ikuti Konsultasi Karier</li>
        <li class="is-done"><i data-lucide="check" class="sija-roadmap-check-icon"></i> Dapatkan Rekomendasi AI</li>
        <li class="is-done"><i data-lucide="check" class="sija-roadmap-check-icon"></i> Pilih Profesi</li>
        <li class="is-todo"><i data-lucide="circle" class="sija-roadmap-check-icon"></i> Selesaikan Simulasi</li>
        <li class="is-todo"><i data-lucide="circle" class="sija-roadmap-check-icon"></i> Pilih Mentor</li>
        <li class="is-todo"><i data-lucide="circle" class="sija-roadmap-check-icon"></i> Bangun Portofolio</li>
        <li class="is-todo"><i data-lucide="circle" class="sija-roadmap-check-icon"></i> Ambil Sertifikat</li>
      </ul>
    </section>

    <section class="sija-card sija-roadmap-card">
      <div class="sija-card-head sija-roadmap-card-head">
        <h2 class="sija-h2">Analisis AI</h2>
        <p class="sija-muted">Evaluasi perkembanganmu berdasarkan sinyal dari asesmen dan aktivitas.</p>
      </div>

      <div class="sija-roadmap-insight">
        <div class="sija-roadmap-insight-bar">
          <div class="sija-roadmap-insight-bar-fill" style="width:78%"></div>
        </div>
        <div class="sija-roadmap-insight-text">
          Kamu memiliki kemampuan <b>communication</b> dan <b>problem solving</b> yang baik. Untuk mempercepat karier sebagai <b>Frontend Developer</b>, fokuslah mempelajari <b>JavaScript</b> (prioritas tinggi) dan selesaikan simulasi level dasar agar mentormu bisa memberi review yang tepat.
        </div>
      </div>
    </section>

    <section class="sija-card sija-roadmap-card sija-roadmap-cta">
      <div class="sija-roadmap-cta-left">
        <div class="sija-roadmap-cta-title">Lanjutkan Perjalanan Kariermu</div>
        <div class="sija-roadmap-cta-desc">Setiap langkah yang kamu selesaikan akan membawamu lebih dekat menuju profesi impianmu.</div>
      </div>
      <div class="sija-roadmap-cta-actions">
        <a href="{{ route('dashboard.simulasi-saya') }}" class="sija-btn is-primary">Mulai Simulasi</a>
        <a href="{{ route('dashboard.mentor-ai') }}" class="sija-btn is-secondary">Cari Mentor</a>
      </div>
    </section>
  </div>

@endsection

