@extends('dashboard.layouts.user-layout')
<?php $active='dashboard'; ?>
@section('title','Dashboard')
@section('content')
  <section class="sija-header-card">
    <div>
      <h1 class="sija-h1">Selamat Datang, Putra</h1>
      <p class="sija-lead">
        Lanjutkan perjalanan kariermu dan selesaikan simulasi untuk meningkatkan kemampuan profesionalmu.
      </p>
    </div>
  </section>

  <!-- Stat Cards -->
  <section class="sija-grid-4" aria-label="Statistics">
    <div class="sija-card">
      <div class="sija-card-row">
        <div class="sija-icon-pill is-blue">
          <i data-lucide="briefcase" class="sija-card-icon"></i>
        </div>
        <div>
          <div class="sija-card-title">Simulasi Aktif</div>
          <div class="sija-card-value">3</div>
        </div>
      </div>
    </div>

    <div class="sija-card">
      <div class="sija-card-row">
        <div class="sija-icon-pill is-blue">
          <i data-lucide="check-circle" class="sija-card-icon"></i>
        </div>
        <div>
          <div class="sija-card-title">Simulasi Selesai</div>
          <div class="sija-card-value">12</div>
        </div>
      </div>
    </div>

    <div class="sija-card">
      <div class="sija-card-row">
        <div class="sija-icon-pill is-blue">
          <i data-lucide="award" class="sija-card-icon"></i>
        </div>
        <div>
          <div class="sija-card-title">Skill Score</div>
          <div class="sija-card-value">850</div>
        </div>
      </div>
    </div>

    <div class="sija-card">
      <div class="sija-card-row">
        <div class="sija-icon-pill is-blue">
          <i data-lucide="file-text" class="sija-card-icon"></i>
        </div>
        <div>
          <div class="sija-card-title">Portofolio</div>
          <div class="sija-card-value">4 Proyek</div>
        </div>
      </div>
    </div>
  </section>

  <div class="sija-two-col">
    <!-- Progress Karier -->
    <section class="sija-card sija-card-strong">
      <div class="sija-card-head">
        <h2 class="sija-h2">Roadmap Karier</h2>
        <div class="sija-muted">Target Profesi</div>
        <div class="sija-tag">UI/UX Designer</div>
      </div>

      <div class="sija-progress-list" role="list">
        <?php
          $roadmap = [
            ['label' => 'Design Thinking', 'p' => 80],
            ['label' => 'Wireframing', 'p' => 65],
            ['label' => 'User Research', 'p' => 50],
            ['label' => 'Prototyping', 'p' => 30],
          ];
        ?>
        @foreach($roadmap as $rd)
          <div class="sija-progress-item" role="listitem">
            <div class="sija-progress-top">
              <span>{{ $rd['label'] }}</span>
              <span class="sija-progress-percent">{{ $rd['p'] }}%</span>
            </div>
            <div class="sija-progressbar" aria-label="{{ $rd['label'] }} {{ $rd['p'] }}%">
              <div class="sija-progressbar-fill" style="width:{{ $rd['p'] }}%"></div>
            </div>
          </div>
        @endforeach
      </div>
    </section>

    <!-- Simulasi Aktif -->
    <section class="sija-card sija-card-strong">
      <div class="sija-card-head">
        <h2 class="sija-h2">Simulasi Aktif</h2>
        <p class="sija-muted">Daftar simulasi yang sedang berjalan.</p>
      </div>

      <div class="sija-active-list" role="list">
        <div class="sija-active-item" role="listitem">
          <div class="sija-active-meta">
            <div class="sija-active-title">UI/UX Designer</div>
            <div class="sija-active-sub">
              <span class="sija-dot"></span>
              Mentor: Sarah Wijaya
            </div>
          </div>

          <div class="sija-active-right">
            <div class="sija-active-progress">
              <div class="sija-progressline" style="--p:65%"></div>
              <div class="sija-active-progress-label">65%</div>
            </div>
<a href="{{ route('dashboard.simulasi-saya') }}" class="sija-btn is-primary" style="text-decoration:none;">Lanjutkan</a>
          </div>
        </div>

        <div class="sija-active-item" role="listitem">
          <div class="sija-active-meta">
            <div class="sija-active-title">Frontend Developer</div>
            <div class="sija-active-sub">
              <span class="sija-dot"></span>
              Mentor: Budi Santoso
            </div>
          </div>

          <div class="sija-active-right">
            <div class="sija-active-progress">
              <div class="sija-progressline" style="--p:40%"></div>
              <div class="sija-active-progress-label">40%</div>
            </div>
            <button class="sija-btn is-primary" type="button">Lanjutkan</button>
          </div>
        </div>

        <div class="sija-active-item" role="listitem">
          <div class="sija-active-meta">
            <div class="sija-active-title">Data Analyst</div>
            <div class="sija-active-sub">
              <span class="sija-dot"></span>
              Mentor: Andi Saputra
            </div>
          </div>

          <div class="sija-active-right">
            <div class="sija-active-progress">
              <div class="sija-progressline" style="--p:20%"></div>
              <div class="sija-active-progress-label">20%</div>
            </div>
            <button class="sija-btn is-primary" type="button">Lanjutkan</button>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="sija-three-col">
    <!-- Mentor AI -->
    <section class="sija-card sija-card-mentor">
      <div class="sija-mentor-head">
        <div class="sija-mentor-icon">
          <i data-lucide="brain" class="sija-mentor-lucide"></i>
        </div>
        <div>
          <div class="sija-h2">Bimbingan Mentor Hari Ini</div>
          <div class="sija-muted">Insight untuk langkah berikutnya</div>
        </div>
      </div>

      <p class="sija-mentor-text">
        "Hasil simulasi terakhir menunjukkan kemampuan problem solving kamu cukup baik. Fokus berikutnya adalah meningkatkan kemampuan komunikasi dan presentasi."
      </p>

      <div class="sija-mentor-actions">
        <button class="sija-btn is-secondary" type="button">Lihat Saran Lengkap</button>
      </div>
    </section>

    <!-- Rekomendasi Karier -->
    <section class="sija-card sija-card-recommend">
      <div class="sija-card-head">
        <h2 class="sija-h2">Rekomendasi Karier</h2>
        <p class="sija-muted">3 profesi teratas berdasarkan analisis terbaru.</p>
      </div>

      <div class="sija-reco-grid" role="list">
        <div class="sija-reco-card" role="listitem">
          <div class="sija-reco-title">UI/UX Designer</div>
          <div class="sija-reco-meter">
            <span class="sija-muted">Kecocokan</span>
            <span class="sija-reco-percent">92%</span>
          </div>
          <button class="sija-btn is-primary sija-btn-full" type="button">Mulai Simulasi</button>
        </div>

        <div class="sija-reco-card" role="listitem">
          <div class="sija-reco-title">Product Designer</div>
          <div class="sija-reco-meter">
            <span class="sija-muted">Kecocokan</span>
            <span class="sija-reco-percent">89%</span>
          </div>
          <button class="sija-btn is-primary sija-btn-full" type="button">Mulai Simulasi</button>
        </div>

        <div class="sija-reco-card" role="listitem">
          <div class="sija-reco-title">Frontend Developer</div>
          <div class="sija-reco-meter">
            <span class="sija-muted">Kecocokan</span>
            <span class="sija-reco-percent">84%</span>
          </div>
          <button class="sija-btn is-primary sija-btn-full" type="button">Mulai Simulasi</button>
        </div>
      </div>
    </section>

    <!-- Aktivitas Terbaru -->
    <section class="sija-card sija-card-activity">
      <div class="sija-card-head">
        <h2 class="sija-h2">Aktivitas Terbaru</h2>
        <p class="sija-muted">Ringkasan progres & feedback mentor.</p>
      </div>

      <ol class="sija-timeline" aria-label="Timeline">
        <li class="sija-timeline-item">
          <div class="sija-timeline-bullet is-done">
            <i data-lucide="check" class="sija-timeline-icon"></i>
          </div>
          <div class="sija-timeline-content">
            <div class="sija-timeline-text">Menyelesaikan tugas Wireframing</div>
            <div class="sija-timeline-sub">Baru saja • 2 jam lalu</div>
          </div>
        </li>

        <li class="sija-timeline-item">
          <div class="sija-timeline-bullet is-done">
            <i data-lucide="check" class="sija-timeline-icon"></i>
          </div>
          <div class="sija-timeline-content">
            <div class="sija-timeline-text">Mendapat sertifikat UI Fundamental</div>
            <div class="sija-timeline-sub">Kemarin</div>
          </div>
        </li>

        <li class="sija-timeline-item">
          <div class="sija-timeline-bullet is-done">
            <i data-lucide="check" class="sija-timeline-icon"></i>
          </div>
          <div class="sija-timeline-content">
            <div class="sija-timeline-text">Memulai simulasi Frontend Developer</div>
            <div class="sija-timeline-sub">Kemarin</div>
          </div>
        </li>

        <li class="sija-timeline-item">
          <div class="sija-timeline-bullet is-done">
            <i data-lucide="check" class="sija-timeline-icon"></i>
          </div>
          <div class="sija-timeline-content">
            <div class="sija-timeline-text">Mendapat feedback mentor</div>
            <div class="sija-timeline-sub">3 hari lalu</div>
          </div>
        </li>
      </ol>
    </section>
  </div>
@endsection
