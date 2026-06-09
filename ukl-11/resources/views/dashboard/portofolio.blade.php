@extends('dashboard.layouts.user-layout')
<?php $active='portofolio'; ?>
@section('title','Portofolio')
@section('content')
  <section class="sija-header-card">
    <div>
      <h1 class="sija-h1">Portofolio</h1>
      <p class="sija-lead">Kumpulkan proyek terbaik dari simulasi untuk menunjukkan kemampuan kamu kepada rekruter.</p>
    </div>
  </section>

  <section class="sija-card" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Proyek Portofolio</h2>
      <p class="sija-muted">Tampilkan 2–4 proyek terbaik agar nilai kamu lebih kuat.</p>
    </div>

    <div class="sija-reco-grid" role="list">
      @php
        $proyek=[
          ['title'=>'UI/UX Designer — Redesign Flow','desc'=>'Perbaikan user flow + keputusan desain dengan alasan trade-off','tag'=>'UI/UX • Case Study','pct'=>92],
          ['title'=>'Frontend Developer — UI Components','desc'=>'Membangun komponen yang konsisten dan responsif dengan fokus performa','tag'=>'Programming • UI Engineering','pct'=>88],
          ['title'=>'UX Writing — Error States','desc'=>'Copywriting untuk error states + peningkatan kejelasan instruksi','tag'=>'UX Writing','pct'=>85],
          ['title'=>'Data — Dashboard Insight','desc'=>'Analisis & visualisasi insight untuk membantu pengambilan keputusan','tag'=>'Data • Insight','pct'=>84],
        ];
      @endphp
      @foreach($proyek as $p)
        <div class="sija-reco-card" role="listitem">
          <div class="sija-reco-title">{{ $p['title'] }}</div>
          <div class="sija-tag" style="margin-top:10px;background:rgba(37,99,235,0.10);">{{ $p['tag'] }}</div>
          <p style="margin-top:10px;color:#6B7280;font-weight:700;font-size:13px;line-height:1.6;">{{ $p['desc'] }}</p>
          <div class="sija-reco-meter" style="margin-top:10px;">
            <span class="sija-muted">Skor Kualitas</span>
            <span class="sija-reco-percent">{{ $p['pct'] }}%</span>
          </div>
          <div style="display:flex;gap:12px;margin-top:12px;">
            <button class="sija-btn is-secondary" type="button" style="flex:1;">Edit</button>
            <button class="sija-btn is-primary" type="button" style="flex:1;">Publikasi</button>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <div class="sija-two-col" style="margin-top:16px;">
    <section class="sija-card sija-card-strong">
      <div class="sija-card-head">
        <h2 class="sija-h2">Checklist Portofolio</h2>
        <p class="sija-muted">Pastikan portofolio kamu sudah lengkap & mudah dibaca.</p>
      </div>

      <div class="sija-progress-list">
        <div class="sija-progress-item">
          <div class="sija-progress-top">
            <span>Judul & konteks</span>
            <span class="sija-progress-percent">75%</span>
          </div>
          <div class="sija-progressbar" aria-label="Judul & konteks 75%">
            <div class="sija-progressbar-fill" style="width:75%"></div>
          </div>
        </div>
        <div class="sija-progress-item">
          <div class="sija-progress-top">
            <span>Metode & keputusan</span>
            <span class="sija-progress-percent">60%</span>
          </div>
          <div class="sija-progressbar" aria-label="Metode & keputusan 60%">
            <div class="sija-progressbar-fill" style="width:60%"></div>
          </div>
        </div>
        <div class="sija-progress-item">
          <div class="sija-progress-top">
            <span>Hasil & pembelajaran</span>
            <span class="sija-progress-percent">50%</span>
          </div>
          <div class="sija-progressbar" aria-label="Hasil & pembelajaran 50%">
            <div class="sija-progressbar-fill" style="width:50%"></div>
          </div>
        </div>
      </div>

      <div style="margin-top:14px;display:flex;gap:12px;">
        <button class="sija-btn is-secondary" type="button" style="flex:1;">Lihat Contoh</button>
        <button class="sija-btn is-primary" type="button" style="flex:1;">Perbaiki Sekarang</button>
      </div>
    </section>

    <section class="sija-card sija-card-strong">
      <div class="sija-card-head">
        <h2 class="sija-h2">Buat Proyek Baru</h2>
        <p class="sija-muted">Mulai dari artefak simulasi yang sudah kamu punya.</p>
      </div>

      <div style="margin-top:12px;display:flex;flex-direction:column;gap:12px;">
        <div class="sija-search" style="min-width:0;width:100%;">
          <i data-lucide="file-text" class="sija-search-icon"></i>
          <input type="text" placeholder="Nama proyek..." aria-label="Nama proyek" />
        </div>

        <div class="sija-search" style="min-width:0;width:100%;">
          <i data-lucide="tag" class="sija-search-icon"></i>
          <input type="text" placeholder="Tag (contoh: UI/UX, Data, Programming)..." aria-label="Tag proyek" />
        </div>

        <button class="sija-btn is-primary" type="button">Buat Draft</button>

        <div class="sija-muted" style="font-weight:800;font-size:12px;line-height:1.6;">
          Tips: gunakan struktur “Masalah → Proses → Keputusan → Hasil → Pembelajaran”.
        </div>
      </div>
    </section>
  </div>
@endsection
