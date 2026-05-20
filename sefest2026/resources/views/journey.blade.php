@extends('layouts.dashboard')

@section('title', 'Career Journey')
@section('header-title', 'Peta Perjalanan Karir')
@section('header-subtitle', 'Pilih dan kembangkan jalur karir impianmu secara terarah.')

@section('content')
<div class="panel mb-8">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
        <h3 style="font-size: 1.5rem; font-weight: 700;">Jalur Aktif</h3>
        <span class="status-badge status-active">Sedang Berjalan</span>
    </div>

    <div class="active-journey-path" style="background: var(--dashboard-bg); border-radius: 20px; padding: 30px; border: 1px solid var(--dashboard-border);">
        <div style="display: flex; gap: 30px; align-items: center; flex-wrap: wrap;">
            <div style="width: 120px; height: 120px; background: #3b82f6; border-radius: 20px; display: grid; place-items: center; color: white;">
                <i data-lucide="layout" style="width: 60px; height: 60px;"></i>
            </div>
            <div style="flex: 1;">
                <h2 style="font-size: 1.75rem; font-weight: 800; margin-bottom: 8px;">UI/UX Designer Path</h2>
                <p style="color: var(--dashboard-text-muted); max-width: 600px; margin-bottom: 20px;">
                    Kuasai seluruh proses desain mulai dari user research, wireframing, hi-fi design, hingga prototyping interaktif dengan standar industri global.
                </p>
                <div style="display: flex; gap: 20px; font-size: 0.875rem;">
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <i data-lucide="book-open" style="width: 16px; color: #3b82f6;"></i> 12 Modul
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <i data-lucide="check-circle" style="width: 16px; color: #10b981;"></i> 8 Challenge Selesai
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <i data-lucide="users" style="width: 16px; color: #f59e0b;"></i> Dibimbing oleh 2 Mentor
                    </div>
                </div>
            </div>
            <div style="text-align: right;">
                <div style="font-size: 2rem; font-weight: 800; color: #3b82f6;">64%</div>
                <button class="btn-journey" style="margin-top: 10px;">Lanjutkan <i data-lucide="play"></i></button>
            </div>
        </div>
    </div>
</div>

<h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 20px;">Eksplor Jalur Karir Lain</h3>
<div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 24px;">
    <!-- Path 1 -->
    <div class="panel" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
        <div style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.1); color: #10b981; border-radius: 12px; display: grid; place-items: center; margin-bottom: 16px;">
            <i data-lucide="code"></i>
        </div>
        <h4 style="font-weight: 700; font-size: 1.125rem; margin-bottom: 8px;">Frontend Developer</h4>
        <p style="font-size: 0.875rem; color: var(--dashboard-text-muted); margin-bottom: 20px;">Bangun antarmuka website yang responsif dan interaktif dengan React & Tailwind.</p>
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <span style="font-size: 0.75rem; font-weight: 600; color: #10b981;">15 Modul • Beginner</span>
            <button class="icon-btn" style="padding: 6px 12px; font-size: 0.75rem;">Join Path</button>
        </div>
    </div>
    
    <!-- Path 2 -->
    <div class="panel" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
        <div style="width: 50px; height: 50px; background: rgba(139, 92, 246, 0.1); color: #8b5cf6; border-radius: 12px; display: grid; place-items: center; margin-bottom: 16px;">
            <i data-lucide="database"></i>
        </div>
        <h4 style="font-weight: 700; font-size: 1.125rem; margin-bottom: 8px;">Backend Developer</h4>
        <p style="font-size: 0.875rem; color: var(--dashboard-text-muted); margin-bottom: 20px;">Pelajari arsitektur server, database, dan API yang skalabel dengan Node.js & Laravel.</p>
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <span style="font-size: 0.75rem; font-weight: 600; color: #8b5cf6;">18 Modul • Intermediate</span>
            <button class="icon-btn" style="padding: 6px 12px; font-size: 0.75rem;">Join Path</button>
        </div>
    </div>

    <!-- Path 3 -->
    <div class="panel" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
        <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.1); color: #f59e0b; border-radius: 12px; display: grid; place-items: center; margin-bottom: 16px;">
            <i data-lucide="bar-chart-2"></i>
        </div>
        <h4 style="font-weight: 700; font-size: 1.125rem; margin-bottom: 8px;">Data Analyst</h4>
        <p style="font-size: 0.875rem; color: var(--dashboard-text-muted); margin-bottom: 20px;">Ubah data mentah menjadi insight berharga menggunakan Python & Tableau.</p>
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <span style="font-size: 0.75rem; font-weight: 600; color: #f59e0b;">12 Modul • Beginner</span>
            <button class="icon-btn" style="padding: 6px 12px; font-size: 0.75rem;">Join Path</button>
        </div>
    </div>
</div>
@endsection