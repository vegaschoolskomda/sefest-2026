@extends('dashboard.layouts.user-layout')
<?php $active='simulasi'; ?>
@section('title','Simulasi Saya')
@section('content')
  <section class="sija-header-card">
    <div>
      <h1 class="sija-h1">Simulasi Saya</h1>
      <p class="sija-lead">Pantau simulasi yang sedang berjalan, riwayat yang selesai, dan progres skill kamu.</p>
    </div>
  </section>

  <section class="sija-grid-4" aria-label="Ringkasan simulasi">
    <div class="sija-card">
      <div class="sija-card-row">
        <div class="sija-icon-pill is-blue">
          <i data-lucide="list-check" class="sija-card-icon"></i>
        </div>
        <div>
          <div class="sija-card-title">Sedang Berjalan</div>
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
          <div class="sija-card-title">Selesai</div>
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

  <div class="sija-two-col" style="margin-top:16px;">
    <section class="sija-card sija-card-strong">
      <div class="sija-card-head">
        <h2 class="sija-h2">Simulasi Aktif</h2>
        <p class="sija-muted">Daftar tugas yang masih berjalan dan butuh tindakanmu.</p>
      </div>

      <div class="sija-active-list" role="list">
        @php
          $aktif=[
            ['prof'=>'UI/UX Designer','mentor'=>'Sarah Wijaya','p'=>65,'label'=>'Lanjutkan'],
            ['prof'=>'Frontend Developer','mentor'=>'Budi Santoso','p'=>40,'label'=>'Lanjutkan'],
            ['prof'=>'Data Analyst','mentor'=>'Andi Saputra','p'=>20,'label'=>'Lanjutkan'],
          ];
        @endphp
        @foreach($aktif as $it)
          <div class="sija-active-item" role="listitem">
            <div class="sija-active-meta">
              <div class="sija-active-title">{{ $it['prof'] }}</div>
              <div class="sija-active-sub">
                <span class="sija-dot"></span>
                Mentor: {{ $it['mentor'] }}
              </div>
            </div>

            <div class="sija-active-right">
              <div class="sija-active-progress">
                <div class="sija-progressline" style="--p:{{ $it['p'] }}%"></div>
                <div class="sija-active-progress-label">{{ $it['p'] }}%</div>
              </div>
              <button class="sija-btn is-primary" type="button">{{ $it['label'] }}</button>
            </div>
          </div>
        @endforeach
      </div>
    </section>

    <section class="sija-card sija-card-strong">
      <div class="sija-card-head">
        <h2 class="sija-h2">Checklist Progres</h2>
        <p class="sija-muted">Tugas yang perlu kamu selesaikan untuk naik level.</p>
      </div>

      <div class="sija-progress-list">
        <div class="sija-progress-item">
          <div class="sija-progress-top">
            <span>Submit tugas utama</span>
            <span class="sija-progress-percent">60%</span>
          </div>
          <div class="sija-progressbar" aria-label="Submit tugas utama 60%">
            <div class="sija-progressbar-fill" style="width:60%"></div>
          </div>
        </div>
        <div class="sija-progress-item">
          <div class="sija-progress-top">
            <span>Perbaiki feedback mentor</span>
            <span class="sija-progress-percent">45%</span>
          </div>
          <div class="sija-progressbar" aria-label="Perbaiki feedback mentor 45%">
            <div class="sija-progressbar-fill" style="width:45%"></div>
          </div>
        </div>
        <div class="sija-progress-item">
          <div class="sija-progress-top">
            <span>Siapkan bukti portofolio</span>
            <span class="sija-progress-percent">25%</span>
          </div>
          <div class="sija-progressbar" aria-label="Siapkan bukti portofolio 25%">
            <div class="sija-progressbar-fill" style="width:25%"></div>
          </div>
        </div>
      </div>

      <div style="margin-top:14px;display:flex;gap:12px;">
        <button class="sija-btn is-secondary" type="button" style="flex:1;">Lihat Detail</button>
        <button class="sija-btn is-primary" type="button" style="flex:1;">Update Hari Ini</button>
      </div>
    </section>
  </div>

  <section class="sija-card" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Riwayat Simulasi (Ringkas)</h2>
      <p class="sija-muted">Contoh riwayat yang bisa kamu tampilkan sebagai bukti perkembangan.</p>
    </div>

    <div class="sija-reco-grid" role="list" aria-label="Riwayat simulasi">
      @php
        $riwayat=[
          ['title'=>'Wireframing Sprint','desc'=>'Menyelesaikan tugas UI Flow + penilaian mentor','date'=>'2 hari lalu','pct'=>90],
          ['title'=>'UX Writing Mini','desc'=>'Menyusun copy untuk error states + review','date'=>'1 minggu lalu','pct'=>85],
          ['title'=>'Performance Audit','desc'=>'Analisis metrik & rekomendasi optimasi','date'=>'2 minggu lalu','pct'=>88],
        ];
      @endphp
      @foreach($riwayat as $r)
        <div class="sija-reco-card" role="listitem">
          <div class="sija-reco-title">{{ $r['title'] }}</div>
          <p style="margin-top:8px;color:#6B7280;font-weight:700;font-size:13px;line-height:1.6;">{{ $r['desc'] }}</p>
          <div class="sija-reco-meter" style="margin-top:10px;">
            <span class="sija-muted">Skor</span>
            <span class="sija-reco-percent">{{ $r['pct'] }}%</span>
          </div>
          <div style="margin-top:8px;color:#6B7280;font-weight:700;font-size:12px;">{{ $r['date'] }}</div>
          <button class="sija-btn is-secondary sija-btn-full" type="button" style="margin-top:12px;">Lihat Sertifikat</button>
        </div>
      @endforeach
    </div>
  </section>
@endsection
