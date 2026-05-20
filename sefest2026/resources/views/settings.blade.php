@extends('layouts.dashboard')

@section('title', 'Pengaturan')
@section('header-title', 'Pusat Kendali Profil')
@section('header-subtitle', 'Kelola informasi akun dan preferensi belajarmu.')

@section('content')
<div style="display: grid; grid-template-columns: 280px 1fr; gap: 32px; align-items: start;">
    <div class="panel" style="padding: 10px;">
        <nav style="display: grid; gap: 4px;">
            <button class="nav-item active" style="text-align: left; padding: 12px 16px; border-radius: 12px; background: rgba(59, 130, 246, 0.1); color: #3b82f6; font-weight: 600;">
                <i data-lucide="user" style="width: 18px; margin-right: 12px; vertical-align: middle;"></i> Profil Publik
            </button>
            <button class="nav-item" style="text-align: left; padding: 12px 16px; border-radius: 12px; color: var(--dashboard-text-muted);">
                <i data-lucide="shield" style="width: 18px; margin-right: 12px; vertical-align: middle;"></i> Keamanan
            </button>
            <button class="nav-item" style="text-align: left; padding: 12px 16px; border-radius: 12px; color: var(--dashboard-text-muted);">
                <i data-lucide="bell" style="width: 18px; margin-right: 12px; vertical-align: middle;"></i> Notifikasi
            </button>
            <button class="nav-item" style="text-align: left; padding: 12px 16px; border-radius: 12px; color: var(--dashboard-text-muted);">
                <i data-lucide="credit-card" style="width: 18px; margin-right: 12px; vertical-align: middle;"></i> Billing & Plan
            </button>
            <hr style="border: 0; border-top: 1px solid var(--dashboard-border); margin: 8px 0;">
            <a href="{{ url('/') }}" class="nav-item" style="text-align: left; padding: 12px 16px; border-radius: 12px; color: #ef4444; text-decoration: none; display: flex; align-items: center;">
                <i data-lucide="log-out" style="width: 18px; margin-right: 12px; vertical-align: middle;"></i> 
                <span style="margin-left: 12px;">Keluar Akun</span>
            </a>
        </nav>
    </div>

    <div class="panel">
        <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 24px;">Profil Publik</h3>
        
        <div style="display: flex; gap: 32px; align-items: center; margin-bottom: 32px; padding-bottom: 32px; border-bottom: 1px solid var(--dashboard-border);">
            <div style="position: relative;">
                <img src="https://ui-avatars.com/api/?name=Rafi+Abdiyyu&background=3b82f6&color=fff&size=120" style="width: 100px; height: 100px; border-radius: 50%;">
                <button style="position: absolute; bottom: 0; right: 0; width: 32px; height: 32px; border-radius: 50%; background: #3b82f6; border: 4px solid var(--dashboard-card-bg); color: white; display: grid; place-items: center; cursor: pointer;">
                    <i data-lucide="camera" style="width: 14px;"></i>
                </button>
            </div>
            <div>
                <h4 style="font-weight: 700; font-size: 1.125rem;">Foto Profil Anda</h4>
                <p style="font-size: 0.875rem; color: var(--dashboard-text-muted);">PNG, JPG max 5MB. Minimal 400x400px.</p>
                <div style="margin-top: 12px; display: flex; gap: 12px;">
                    <button class="btn-journey" style="padding: 6px 16px; font-size: 0.8125rem;">Ganti Foto</button>
                    <button class="icon-btn" style="padding: 6px 16px; font-size: 0.8125rem;">Hapus</button>
                </div>
            </div>
        </div>

        <form style="display: grid; gap: 24px;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px;">
                <div class="form-group">
                    <label style="display: block; font-size: 0.875rem; font-weight: 600; margin-bottom: 8px;">Nama Lengkap</label>
                    <input type="text" value="Rafi Abdiyyu" style="width: 100%; padding: 12px 16px; border-radius: 12px; border: 1px solid var(--dashboard-border); background: var(--dashboard-bg); color: var(--dashboard-text);">
                </div>
                <div class="form-group">
                    <label style="display: block; font-size: 0.875rem; font-weight: 600; margin-bottom: 8px;">Username</label>
                    <input type="text" value="@rafia" style="width: 100%; padding: 12px 16px; border-radius: 12px; border: 1px solid var(--dashboard-border); background: var(--dashboard-bg); color: var(--dashboard-text);">
                </div>
            </div>

            <div class="form-group">
                <label style="display: block; font-size: 0.875rem; font-weight: 600; margin-bottom: 8px;">Email Address</label>
                <input type="email" value="rafi@example.com" style="width: 100%; padding: 12px 16px; border-radius: 12px; border: 1px solid var(--dashboard-border); background: var(--dashboard-bg); color: var(--dashboard-text);">
            </div>

            <div class="form-group">
                <label style="display: block; font-size: 0.875rem; font-weight: 600; margin-bottom: 8px;">Bio Singkat</label>
                <textarea rows="4" style="width: 100%; padding: 12px 16px; border-radius: 12px; border: 1px solid var(--dashboard-border); background: var(--dashboard-bg); color: var(--dashboard-text); resize: none;">Sedang mendalami UI/UX Design dan Front-end development di platform Ojo Nganggur!</textarea>
            </div>

            <div style="display: flex; justify-content: flex-end; gap: 16px; margin-top: 12px;">
                <button type="button" class="icon-btn" style="padding: 12px 24px;">Batal</button>
                <button type="submit" class="btn-journey" style="padding: 12px 24px;">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>
@endsection