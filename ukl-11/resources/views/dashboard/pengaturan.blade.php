@extends('dashboard.layouts.user-layout')
<?php $active='pengaturan'; ?>
@section('title','Pengaturan')
@section('content')
  <section class="sija-header-card">
    <div>
      <h1 class="sija-h1">Pengaturan</h1>
      <p class="sija-lead">Atur profil, keamanan akun, notifikasi mentor, dan preferensi pembelajaran.</p>
    </div>
  </section>

  <div class="sija-two-col" style="margin-top:16px;">
    <section class="sija-card sija-card-strong">
      <div class="sija-card-head">
        <h2 class="sija-h2">Profil</h2>
        <p class="sija-muted">Data pengguna (mock).</p>
      </div>

      <div style="display:flex;flex-direction:column;gap:12px;margin-top:12px;">
        <div class="sija-search" style="min-width:0;width:100%;">
          <i data-lucide="user" class="sija-search-icon"></i>
          <input type="text" placeholder="Nama" aria-label="Nama" value="Putra" />
        </div>

        <div class="sija-search" style="min-width:0;width:100%;">
          <i data-lucide="mail" class="sija-search-icon"></i>
          <input type="text" placeholder="Email" aria-label="Email" value="putra@example.com" />
        </div>

        <div class="sija-search" style="min-width:0;width:100%;">
          <i data-lucide="book" class="sija-search-icon"></i>
          <input type="text" placeholder="Minat utama" aria-label="Minat utama" value="UI/UX" />
        </div>

        <button class="sija-btn is-primary" type="button">Simpan Perubahan</button>
      </div>
    </section>

    <section class="sija-card sija-card-strong">
      <div class="sija-card-head">
        <h2 class="sija-h2">Keamanan & Notifikasi</h2>
        <p class="sija-muted">Preferensi mentor dan keamanan akun.</p>
      </div>

      <div style="margin-top:12px;display:flex;flex-direction:column;gap:14px;">
        <div style="display:flex;align-items:center;justify-content:space-between;gap:12px;">
          <div>
            <div style="font-weight:950;color:#0F172A;">Notifikasi feedback mentor</div>
            <div class="sija-muted" style="font-weight:800;font-size:12px;">Kirim update ketika ada komentar</div>
          </div>
          <button class="sija-btn is-secondary" type="button">Aktif</button>
        </div>

        <div style="display:flex;align-items:center;justify-content:space-between;gap:12px;">
          <div>
            <div style="font-weight:950;color:#0F172A;">Login keamanan ekstra</div>
            <div class="sija-muted" style="font-weight:800;font-size:12px;">Gunakan verifikasi tambahan</div>
          </div>
          <button class="sija-btn is-secondary" type="button">On</button>
        </div>

        <div style="display:flex;gap:12px;">
          <button class="sija-btn is-secondary" type="button" style="flex:1;">Ubah Password</button>
          <button class="sija-btn is-primary" type="button" style="flex:1;">Simpan</button>
        </div>

        <div style="border-top:1px solid var(--sija-border);padding-top:14px;">
          <div style="font-weight:950;color:#0F172A;">Bahaya: Reset Data (mock)</div>
          <div class="sija-muted" style="font-weight:800;font-size:12px;margin-top:6px;">
            Akan menghapus progres simulasi di perangkat ini.
          </div>
          <button class="sija-btn is-secondary" type="button" style="margin-top:12px;">Reset Progres</button>
        </div>
      </div>
    </section>
  </div>
@endsection
