@extends('dashboard.layouts.user-layout')
<?php $active = 'rekomendasi'; ?>
@section('title', 'Rekomendasi Karier')

@section('content')
  <section class="sija-header-card">
    <div>
      <h1 class="sija-h1">Rekomendasi Karier Untukmu</h1>
      <p class="sija-lead">
        Berdasarkan hasil konsultasi, minat, kemampuan, dan analisis AI, berikut profesi yang paling sesuai dengan profilmu.
      </p>
    </div>
  </section>

  {{-- AI Career Summary (Card besar) --}}
  <section class="sija-card" style="margin-top:16px;">
    <div class="sija-card-head" style="margin-bottom:6px;">
      <h2 class="sija-h2">Ringkasan Profil Karier</h2>
      <div class="sija-muted">Skor akurasi dari analisis AI</div>
    </div>

    <div class="sija-progress-list" style="margin-top:14px;">
      @php
        $skor = [
          ['label' => 'Kreativitas', 'pct' => 88],
          ['label' => 'Problem Solving', 'pct' => 92],
          ['label' => 'Komunikasi', 'pct' => 75],
          ['label' => 'Analisis Data', 'pct' => 70],
          ['label' => 'Leadership', 'pct' => 68],
        ];
      @endphp

      @foreach($skor as $s)
        <div class="sija-progress-item">
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

    <div style="margin-top:14px; border-top:1px solid rgba(15,23,42,0.08); padding-top:14px;">
      <h2 class="sija-h2" style="margin-bottom:6px;">Kesimpulan AI</h2>
      <p class="sija-lead" style="margin-top:0; max-width: 900px;">
        Berdasarkan hasil analisis, kamu memiliki kemampuan problem solving yang tinggi, pola pikir kreatif, dan ketertarikan pada teknologi digital.
        Karier yang berhubungan dengan desain produk dan pengembangan teknologi sangat cocok untukmu.
      </p>
    </div>
  </section>

  {{-- Top Career Recommendation (3 kartu) --}}
  <section class="sija-card" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Top Career Recommendation</h2>
      <p class="sija-muted">Pilih profesi yang paling terasa “klik”—lalu mulai simulasi untuk menguatkan skill.</p>
    </div>

    <div class="sija-reco-grid" style="grid-template-columns: repeat(3, minmax(0, 1fr)); gap:12px;" role="list" aria-label="Top rekomendasi karier">
      @php
        $top = [
          [
            'title' => 'UI/UX Designer',
            'pct' => 92,
            'prospek' => 'Sangat Tinggi',
            'level' => 'Beginner',
            'gaji' => 'Rp5.000.000 - Rp15.000.000',
            'skills' => ['Design Thinking', 'User Research', 'Wireframing', 'Prototyping'],
          ],
          [
            'title' => 'Product Designer',
            'pct' => 89,
            'prospek' => 'Tinggi',
            'level' => 'Beginner',
            'gaji' => 'Rp7.000.000 - Rp18.000.000',
            'skills' => ['Product Thinking', 'UX Research', 'Design System'],
          ],
          [
            'title' => 'Frontend Developer',
            'pct' => 84,
            'prospek' => 'Tinggi',
            'level' => 'Beginner',
            'gaji' => 'Rp6.000.000 - Rp20.000.000',
            'skills' => ['HTML', 'CSS', 'JavaScript'],
          ],
        ];
      @endphp

      @foreach($top as $p)
        <div class="sija-reco-card" role="listitem" style="padding:16px;">
          <div style="display:flex; align-items:flex-start; justify-content:space-between; gap:12px;">
            <div>
              <div class="sija-reco-title">{{ $p['title'] }}</div>
              <div class="sija-muted" style="margin-top:6px;">Prospek: <b style="color:#0F172A;">{{ $p['prospek'] }}</b></div>
            </div>
            <div style="text-align:right;">
              <div class="sija-muted" style="font-weight:800; font-size:12px;">Kecocokan</div>
              <div class="sija-reco-percent" style="margin-top:4px;">{{ $p['pct'] }}%</div>
            </div>
          </div>

          <div style="margin-top:10px; border-top:1px solid rgba(15,23,42,0.08); padding-top:10px;">
            <div style="font-weight:850; font-size:13px; color:#0F172A;">Informasi</div>
            <div class="sija-muted" style="margin-top:6px;">Level Awal: <b style="color:#0F172A;">{{ $p['level'] }}</b></div>
            <div class="sija-muted" style="margin-top:4px;">Rata-rata Gaji Indonesia: <b style="color:#0F172A;">{{ $p['gaji'] }}</b></div>
          </div>

          <div style="margin-top:10px;">
            <div style="font-weight:850; font-size:13px; color:#0F172A;">Skill yang Cocok</div>
            <div style="margin-top:8px; display:flex; flex-wrap:wrap; gap:8px;">
              @foreach($p['skills'] as $sk)
                <span class="sija-tag" style="background:rgba(37,99,235,0.08); font-size:12px; padding:6px 10px;">{{ $sk }}</span>
              @endforeach
            </div>
          </div>

          <div style="display:flex; gap:10px; margin-top:14px;">
            <a href="#" class="sija-btn is-secondary" style="flex:1; text-align:center; text-decoration:none; padding:10px 12px;">Lihat Detail</a>
            <a href="{{ route('dashboard.simulasi-saya') }}" class="sija-btn is-primary" style="flex:1; text-align:center; text-decoration:none; padding:10px 12px;">Mulai Simulasi</a>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  {{-- Mengapa Karier Ini Direkomendasikan? (card khusus) + singkat --}}
  <section class="sija-card sija-card-strong" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Mengapa Karier Ini Direkomendasikan?</h2>
      <div class="sija-muted">Analisis AI (berdasarkan profilmu)</div>
    </div>

    <div class="sija-progress-list" style="margin-top:10px;">
      <div class="sija-progress-item" style="background:#fff;">
        <div class="sija-progress-top" style="margin-bottom:8px;">
          <span style="font-weight:950; color:#0F172A;">UI/UX Designer</span>
          <span class="sija-progress-percent">92%</span>
        </div>
        <p style="color:#6B7280; font-weight:700; font-size:13px; line-height:1.7;">
          UI/UX Designer direkomendasikan karena hasil asesmen menunjukkan bahwa pengguna memiliki kemampuan observasi yang baik, kreatif, menyukai pemecahan masalah, dan tertarik pada pengembangan produk digital.
        </p>
      </div>
    </div>
  </section>

  {{-- Pekerjaan Masa Depan (grid + badge) --}}
  <section class="sija-card" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Pekerjaan Masa Depan</h2>
      <p class="sija-muted">Profesi yang sering menjadi kebutuhan pasar kerja (berdasarkan tren karier).</p>
    </div>

    <div style="display:grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap:12px;">
      @php
        $masaDepan = [
          ['name'=>'AI Product Designer','demand'=>'HIGH DEMAND','desc'=>'Merancang pengalaman AI yang intuitif.','path'=>'Fundamental Product Design → Prompt UX → Portfolio AI'],
          ['name'=>'AI Trainer','demand'=>'HIGH DEMAND','desc'=>'Menyusun dan menguji data untuk model AI.','path'=>'Data Basics → Labeling → Evaluasi Model'],
          ['name'=>'Prompt Engineer','demand'=>'HIGH DEMAND','desc'=>'Membuat instruksi yang tepat untuk sistem AI.','path'=>'Prompt Patterns → Use-cases → Testing & Iteration'],
          ['name'=>'Cyber Security Analyst','demand'=>'HIGH DEMAND','desc'=>'Menganalisis ancaman keamanan dan respons insiden.','path'=>'Networking → Threat Modeling → SIEM Basics'],
          ['name'=>'Data Scientist','demand'=>'HIGH DEMAND','desc'=>'Menganalisis data untuk membuat prediksi dan insight.','path'=>'Statistics → Modeling → Deployment'],
          ['name'=>'Cloud Engineer','demand'=>'HIGH DEMAND','desc'=>'Mengelola dan mengoptimalkan infrastruktur aplikasi.','path'=>'Linux Basics → Cloud Architecture → CI/CD'],
        ];
      @endphp

      @foreach($masaDepan as $m)
        <div class="sija-reco-card" style="padding:14px;">
          <div style="display:flex; align-items:flex-start; justify-content:space-between; gap:10px;">
            <div>
              <div class="sija-reco-title" style="font-size:13.5px;">{{ $m['name'] }}</div>
              <div style="margin-top:8px; display:flex; gap:8px; align-items:center; flex-wrap:wrap;">
                <span class="sija-tag" style="background:rgba(37,99,235,0.10); color:#0B2E9B;">{{ $m['demand'] }}</span>
              </div>
            </div>
          </div>
          <div style="margin-top:10px; color:#6B7280; font-weight:700; font-size:13px; line-height:1.6;">{{ $m['desc'] }}</div>
          <div style="margin-top:10px; border-top:1px solid rgba(15,23,42,0.08); padding-top:10px;">
            <div style="font-weight:950; font-size:13px; color:#0F172A;">Jalur Belajar</div>
            <div style="margin-top:6px; color:#6B7280; font-weight:800; font-size:12px; line-height:1.6;">{{ $m['path'] }}</div>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  {{-- Roadmap mini untuk profesi utama (UI/UX Designer) --}}
  <section class="sija-card" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Roadmap Mini: UI/UX Designer</h2>
      <div class="sija-muted">6 langkah dari nol sampai siap portofolio</div>
    </div>

    <div style="margin-top:10px;">
      @php
        $road = [
          'Design Thinking',
          'User Research',
          'Wireframing',
          'Figma',
          'Prototyping',
          'Portfolio Project',
        ];
      @endphp

      <div class="sija-progress-list" style="gap:10px;">
        @foreach($road as $idx => $label)
          @php $pct = [20, 35, 55, 70, 82, 90][$idx]; @endphp
          <div class="sija-progress-item" style="background: #fff;">
            <div class="sija-progress-top">
              <span style="font-weight:950; color:#0F172A;">Step {{ $idx+1 }} — {{ $label }}</span>
              <span class="sija-progress-percent">{{ $pct }}%</span>
            </div>
            <div class="sija-progressbar" aria-label="Step {{ $idx+1 }} {{ $label }} {{ $pct }}%">
              <div class="sija-progressbar-fill" style="width:{{ $pct }}%"></div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- Simulasi Yang Tersedia --}}
  <section class="sija-card" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Coba Simulasi Profesi</h2>
      <p class="sija-muted">Rasakan tantangan nyata sebelum masuk ke dunia kerja.</p>
    </div>

    <div style="display:grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap:12px; margin-top:10px;">
      @php
        $sim = [
          [
            'title'=>'UI/UX Designer Simulation',
            'dur'=>'45 Menit',
            'level'=>'Beginner',
            'task'=>'Membuat wireframe aplikasi sederhana berdasarkan studi kasus yang diberikan mentor.',
          ],
          [
            'title'=>'Frontend Developer Simulation',
            'dur'=>'60 Menit',
            'level'=>'Beginner',
            'task'=>'Membuat halaman landing page berdasarkan desain yang diberikan.',
          ],
          [
            'title'=>'Data Analyst Simulation',
            'dur'=>'50 Menit',
            'level'=>'Beginner',
            'task'=>'Melakukan analisis sederhana terhadap dataset yang tersedia.',
          ],
        ];
      @endphp

      @foreach($sim as $s)
        <div class="sija-reco-card" style="padding:16px;">
          <div style="display:flex; align-items:flex-start; justify-content:space-between; gap:12px;">
            <div>
              <div class="sija-reco-title" style="font-size:14px;">{{ $s['title'] }}</div>
              <div style="margin-top:10px; display:flex; gap:10px; flex-wrap:wrap;">
                <span class="sija-tag" style="background:rgba(37,99,235,0.10);">Durasi: {{ $s['dur'] }}</span>
                <span class="sija-tag" style="background:rgba(37,99,235,0.06); color:#0F172A;">Level: {{ $s['level'] }}</span>
              </div>
            </div>
          </div>
          <div style="margin-top:12px; color:#6B7280; font-weight:750; font-size:13px; line-height:1.6;">{{ $s['task'] }}</div>
          <a href="{{ route('dashboard.simulasi-saya') }}" class="sija-btn is-primary sija-btn-full" style="margin-top:14px; display:block; text-align:center;">Masuk Ruang Simulasi</a>
        </div>
      @endforeach
    </div>
  </section>

  {{-- CTA Section --}}
  <section class="sija-card" style="margin-top:16px;">
    <div class="sija-card-head">
      <h2 class="sija-h2">Siap Memulai Karier Impianmu?</h2>
      <p class="sija-muted" style="margin-top:6px;">
        Masuk ke ruang simulasi dan rasakan pengalaman kerja layaknya profesional di bidang yang kamu pilih.
      </p>
    </div>

    <div style="display:flex; gap:12px; margin-top:14px; flex-wrap:wrap;">
      <a href="{{ route('dashboard.simulasi-saya') }}" class="sija-btn is-primary" style="flex:1; min-width: 240px; text-align:center; text-decoration:none;">Mulai Simulasi Sekarang</a>
      <a href="{{ route('dashboard.jelajahi-profesi') }}" class="sija-btn is-secondary" style="flex:1; min-width: 240px; text-align:center; text-decoration:none;">Lihat Semua Profesi</a>
    </div>
  </section>
@endsection

