@extends('dashboard.layouts.user-layout')
<?php $active='mentor'; ?>
@section('title','Bimbingan Mentor')
@section('content')
  <section class="sija-header-card">
    <div>
      <h1 class="sija-h1">Bimbingan Mentor</h1>
      <p class="sija-lead">Dapatkan insight dan saran yang bisa langsung kamu eksekusi untuk meningkatkan performa simulasi dan portofolio.</p>
    </div>
  </section>

  <div class="sija-two-col" style="margin-top:16px;">
    <section class="sija-card sija-card-strong">
      <div class="sija-mentor-head">
        <div class="sija-mentor-icon">
          <i data-lucide="brain" class="sija-mentor-lucide"></i>
        </div>
        <div>
          <div class="sija-h2">Insight Hari Ini</div>
          <div class="sija-muted">Langkah berikutnya berdasarkan simulasi terbaru</div>
        </div>
      </div>

      <p class="sija-mentor-text">
        “Skor problem solving kamu meningkat. Untuk mempercepat progres, fokus pada komunikasi hasil kerja:
        buat ringkasan keputusan desain + alasan trade-off. Itu akan menaikkan evaluasi mentor di sesi berikutnya.”
      </p>

      <div class="sija-mentor-actions" style="display:flex;gap:12px;">
        <button class="sija-btn is-secondary" type="button" style="flex:1;">Lihat Saran Lengkap</button>
        <button class="sija-btn is-primary" type="button" style="flex:1;">Terapkan</button>
      </div>

      <div style="margin-top:14px;">
        <div class="sija-card-head" style="margin-bottom:10px;">
          <h2 class="sija-h2">Skill yang Perlu Diperkuat</h2>
          <div class="sija-muted">Target 7 hari</div>
        </div>
        <div class="sija-progress-list">
          <div class="sija-progress-item">
            <div class="sija-progress-top">
              <span>Presentasi & narasi</span>
              <span class="sija-progress-percent">68%</span>
            </div>
            <div class="sija-progressbar" aria-label="Presentasi 68%">
              <div class="sija-progressbar-fill" style="width:68%"></div>
            </div>
          </div>
          <div class="sija-progress-item">
            <div class="sija-progress-top">
              <span>UX Flow</span>
              <span class="sija-progress-percent">58%</span>
            </div>
            <div class="sija-progressbar" aria-label="UX Flow 58%">
              <div class="sija-progressbar-fill" style="width:58%"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sija-card sija-card-strong">
      <div class="sija-card-head">
        <h2 class="sija-h2">Konsultasi Cepat</h2>
        <p class="sija-muted">Tulis pertanyaan. (Mock UI)</p>
      </div>

      <div style="display:flex;flex-direction:column;gap:12px;margin-top:12px;">
        <div style="background:rgba(37,99,235,0.06);border:1px solid rgba(37,99,235,0.12);border-radius:14px;padding:12px;">
          <div style="font-weight:950;color:#0F172A;">Putra</div>
          <div style="color:#374151;font-weight:750;margin-top:6px;">“Mentor, langkah apa yang harus saya ambil untuk naik dari 65% ke 80%?”</div>
        </div>

        <div style="background:#fff;border:1px solid var(--sija-border);border-radius:14px;padding:12px;">
          <div style="font-weight:950;color:#0F172A;display:flex;align-items:center;gap:8px;">
            <span style="width:10px;height:10px;border-radius:50%;background:rgba(37,99,235,0.7);display:inline-block;"></span>
            Bimbingan Mentor
          </div>
          <div style="color:#374151;font-weight:750;margin-top:6px;line-height:1.7;">
            Fokus pada 3 hal: (1) rapikan struktur submission, (2) tambahkan bukti riset singkat (insight),
            (3) buat 1 alternatif solusi dan jelaskan alasan memilih opsi final.
          </div>
        </div>

        <div class="sija-search" style="min-width:0;width:100%;">
          <i data-lucide="message-circle" class="sija-search-icon"></i>
          <input type="text" placeholder="Ketik pertanyaan kamu..." aria-label="Tulis pesan" />
        </div>

        <div style="display:flex;gap:12px;">
          <button class="sija-btn is-secondary" type="button" style="flex:1;">Beri Konteks</button>
          <button class="sija-btn is-primary" type="button" style="flex:1;">Kirim</button>
        </div>
      </div>
    </section>
  </div>
@endsection
