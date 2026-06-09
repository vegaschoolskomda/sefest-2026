@extends('dashboard.layouts.user-layout')
<?php $active='roadmap'; ?>
@section('title','Roadmap Karier')
@section('content')
  <section class="sija-header-card">
    <div>
      <h1 class="sija-h1">Roadmap Karier</h1>
      <p class="sija-lead">Peta langkah-langkah agar kamu bisa mencapai target profesi dengan lebih terarah.</p>
    </div>
  </section>

  <div class="sija-two-col" style="margin-top:16px;">
    <section class="sija-card sija-card-strong">
      <div class="sija-card-head">
        <h2 class="sija-h2">Target Profesi</h2>
        <div class="sija-tag">UI/UX Designer</div>
      </div>

      <div class="sija-progress-list" role="list" aria-label="Roadmap progres">
        @php
          $steps=[
            ['label'=>'Design Thinking','pct'=>80],
            ['label'=>'Wireframing','pct'=>65],
            ['label'=>'User Research','pct'=>50],
            ['label'=>'Prototyping','pct'=>30],
          ];
        @endphp
        @foreach($steps as $s)
          <div class="sija-progress-item" role="listitem">
            <div class="sija-progress-top">
              <span>{{ $s['label'] }}</span>
              <span class="sija-progress-percent">{{ $s['pct'] }}%</span>
            </div>
            <div class="sija-progressbar" aria-label="{{ $s['label'] }} {{ $s['pct'] }}%">
              <div class="sija-progressbar-fill" style="width:{{ $s['pct'] }}%"></div>
            </div>
          </div>
        @endforeach
      </div>

      <div style="margin-top:14px;display:flex;gap:12px;">
<a href="{{ route('dashboard.roadmap-karier') }}" class="sija-btn is-secondary" style="flex:1; text-align:center; text-decoration:none;">Unduh PDF</a>
<a href="{{ route('dashboard.simulasi-saya') }}" class="sija-btn is-primary" style="flex:1; text-align:center; text-decoration:none;">Mulai Tahap Ini</a>
      </div>
    </section>

    <section class="sija-card sija-card-strong">
      <div class="sija-card-head">
        <h2 class="sija-h2">Tahap & Output</h2>
        <p class="sija-muted">Setiap tahap menghasilkan artefak untuk portofolio.</p>
      </div>

      <ol class="sija-timeline" aria-label="Timeline Roadmap">
        <li class="sija-timeline-item">
          <div class="sija-timeline-bullet is-done">
            <i data-lucide="check" class="sija-timeline-icon"></i>
          </div>
          <div class="sija-timeline-content">
            <div class="sija-timeline-text">Tahap 1: Research Singkat + Problem Statement</div>
            <div class="sija-timeline-sub">Output: insight & hipotesis</div>
          </div>
        </li>

        <li class="sija-timeline-item">
          <div class="sija-timeline-bullet is-done">
            <i data-lucide="check" class="sija-timeline-icon"></i>
          </div>
          <div class="sija-timeline-content">
            <div class="sija-timeline-text">Tahap 2: Wireflow + Wireframe</div>
            <div class="sija-timeline-sub">Output: layout dasar & alur</div>
          </div>
        </li>

        <li class="sija-timeline-item">
          <div class="sija-timeline-bullet is-done">
            <i data-lucide="check" class="sija-timeline-icon"></i>
          </div>
          <div class="sija-timeline-content">
            <div class="sija-timeline-text">Tahap 3: Prototype + Usability Test</div>
            <div class="sija-timeline-sub">Output: prototype + rekomendasi perbaikan</div>
          </div>
        </li>
      </ol>

      <div style="margin-top:14px;">
        <div class="sija-card-head" style="margin-bottom:10px;">
          <h2 class="sija-h2">Sertifikasi yang disarankan</h2>
          <div class="sija-muted">Opsional untuk menguatkan CV</div>
        </div>

        <div style="display:flex;gap:12px;flex-wrap:wrap;">
          @php
            $cert=['UI Fundamental','UX Research','Product Design','Prototyping Bootcamp'];
          @endphp
          @foreach($cert as $c)
            <button class="sija-btn is-secondary" type="button">{{ $c }}</button>
          @endforeach
        </div>
      </div>
    </section>
  </div>
@endsection
