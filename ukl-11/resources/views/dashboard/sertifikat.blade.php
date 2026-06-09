@extends('dashboard.layouts.user-layout')
<?php $active='sertifikat'; ?>
@section('title','Sertifikat')
@section('content')
  <section class="sija-header-card">
    <div>
      <h1 class="sija-h1">Sertifikat</h1>
      <p class="sija-lead">Kumpulkan bukti kompetensi dari simulasi dan modul pembelajaran.</p>
    </div>
  </section>

  <section class="sija-card" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Daftar Sertifikat</h2>
      <p class="sija-muted">Riwayat sertifikat kamu (mock UI).</p>
    </div>

    <div class="sija-reco-grid" role="list">
      @php
        $cert=[
          ['title'=>'UI Fundamental','by'=>'SIJA Academy','date'=>'Kemarin','pct'=>100],
          ['title'=>'UX Research Essentials','by'=>'SIJA Academy','date'=>'3 minggu lalu','pct'=>96],
          ['title'=>'Prototyping Bootcamp','by'=>'SIJA Academy','date'=>'1 bulan lalu','pct'=>93],
          ['title'=>'Frontend UI Performance','by'=>'SIJA Academy','date'=>'2 bulan lalu','pct'=>90],
        ];
      @endphp
      @foreach($cert as $c)
        <div class="sija-reco-card" role="listitem">
          <div class="sija-reco-title">{{ $c['title'] }}</div>
          <div style="margin-top:8px;color:#6B7280;font-weight:800;font-size:13px;">{{ $c['by'] }}</div>
          <div class="sija-reco-meter" style="margin-top:10px;">
            <span class="sija-muted">Skor</span>
            <span class="sija-reco-percent">{{ $c['pct'] }}%</span>
          </div>
          <div style="margin-top:8px;color:#6B7280;font-weight:700;font-size:12px;">{{ $c['date'] }}</div>
          <div style="display:flex;gap:12px;margin-top:12px;">
            <button class="sija-btn is-secondary" type="button" style="flex:1;">Lihat</button>
            <button class="sija-btn is-primary" type="button" style="flex:1;">Unduh PDF</button>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <div class="sija-two-col" style="margin-top:16px;">
    <section class="sija-card sija-card-strong">
      <div class="sija-card-head">
        <h2 class="sija-h2">Unggah & Verifikasi</h2>
        <p class="sija-muted">Tambahkan sertifikat eksternal (mock).</p>
      </div>

      <div style="margin-top:12px;display:flex;flex-direction:column;gap:12px;">
        <div class="sija-search" style="min-width:0;width:100%;">
          <i data-lucide="upload" class="sija-search-icon"></i>
          <input type="text" placeholder="Masukkan nama sertifikat..." aria-label="Nama sertifikat" />
        </div>

        <button class="sija-btn is-primary" type="button">Unggah File</button>
        <button class="sija-btn is-secondary" type="button">Verifikasi Otomatis</button>

        <div class="sija-muted" style="font-weight:800;font-size:12px;line-height:1.6;">
          Nanti bisa dihubungkan ke OCR/validation atau integrasi data.
        </div>
      </div>
    </section>

    <section class="sija-card sija-card-strong">
      <div class="sija-card-head">
        <h2 class="sija-h2">Rekomendasi Sertifikat</h2>
        <p class="sija-muted">Berdasarkan roadmap kamu.</p>
      </div>

      <div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:12px;">
        @php
          $rec=['UI/UX Research','Communication Skills','Product Design','System Thinking'];
        @endphp
        @foreach($rec as $r)
          <button class="sija-btn is-secondary" type="button">{{ $r }}</button>
        @endforeach
      </div>

      <div style="margin-top:14px;display:flex;gap:12px;">
        <button class="sija-btn is-secondary" type="button" style="flex:1;">Lihat Jadwal</button>
        <button class="sija-btn is-primary" type="button" style="flex:1;">Daftar</button>
      </div>
    </section>
  </div>
@endsection
