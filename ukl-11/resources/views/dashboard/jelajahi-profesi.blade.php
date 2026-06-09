@extends('dashboard.layouts.user-layout')
<?php $active='profesi'; ?>
@section('title','Jelajahi Profesi')
@section('content')
  <section class="sija-header-card">
    <div>
      <h1 class="sija-h1">Jelajahi Profesi</h1>
      <p class="sija-lead">Cari profesi sesuai minat. Lihat ringkasan tugas, skill utama, dan jalur menuju posisi tersebut.</p>
    </div>
  </section>

  <section class="sija-card">
    <div class="sija-card-head">
      <h2 class="sija-h2">Filter Cepat</h2>
      <p class="sija-muted">Pilih kategori untuk melihat profesi yang relevan.</p>
    </div>

    <div style="display:flex;gap:12px;flex-wrap:wrap;">
      @php
        $filters=['UI/UX','Programming','Data','Networking','Business','Design Thinking'];
      @endphp
      @foreach($filters as $f)
        <button class="sija-btn is-secondary" type="button">{{ $f }}</button>
      @endforeach
    </div>

    <div style="margin-top:14px;">
      <div class="sija-search" style="min-width:0;width:100%;">
        <i data-lucide="search" class="sija-search-icon"></i>
        <input type="text" placeholder="Ketik nama profesi..." aria-label="Cari profesi" />
      </div>
    </div>
  </section>

  <section class="sija-card" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Daftar Profesi yang Direkomendasikan</h2>
      <p class="sija-muted">Contoh data profesi. Nanti bisa dihubungkan ke database.</p>
    </div>

    <div class="sija-reco-grid" role="list">
      @php
        $prof=[
          ['title'=>'UI/UX Designer','pct'=>92,'task'=>'Mendesain pengalaman pengguna dari riset sampai prototipe'],
          ['title'=>'Product Designer','pct'=>89,'task'=>'Menyusun sistem desain & membuat eksperimen produk'],
          ['title'=>'Frontend Developer','pct'=>84,'task'=>'Membangun komponen UI yang cepat, rapi, dan mudah dipelihara'],
          ['title'=>'Data Analyst','pct'=>80,'task'=>'Mengolah data, membuat insight, dan mendukung keputusan bisnis'],
          ['title'=>'Cyber Security Analyst','pct'=>76,'task'=>'Mendeteksi ancaman, menguji keamanan sistem, dan membuat rekomendasi mitigasi'],
          ['title'=>'Network Engineer','pct'=>73,'task'=>'Merancang dan memelihara jaringan agar stabil dan aman'],
        ];
      @endphp
      @foreach($prof as $p)
        <div class="sija-reco-card" role="listitem">
          <div class="sija-reco-title">{{ $p['title'] }}</div>
          <div class="sija-reco-meter" style="margin-top:10px;">
            <span class="sija-muted">Kecocokan</span>
            <span class="sija-reco-percent">{{ $p['pct'] }}%</span>
          </div>
          <p style="margin-top:10px;color:#6B7280;font-weight:700;font-size:13px;line-height:1.6;">{{ $p['task'] }}</p>
          <div style="display:flex;gap:10px;margin-top:12px;">
            <button class="sija-btn is-secondary" type="button" style="flex:1;">Detail</button>
            <button class="sija-btn is-primary" type="button" style="flex:1;">Simulasi</button>
          </div>
        </div>
      @endforeach
    </div>
  </section>
@endsection
