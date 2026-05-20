@extends('layouts.dashboard')

@section('title', 'Simulation Explorer')
@section('header-title', 'Eksplorasi Simulasi Profesi')
@section('header-subtitle', 'Bebas coba berbagai pekerjaan dan temukan passion tersembunyimu.')

@section('content')
<style>
    .search-container {
        display: flex;
        gap: 16px;
        margin-bottom: 32px;
        background: white;
        padding: 8px;
        border-radius: 20px;
        border: 1px solid var(--dashboard-border);
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }
    .search-input {
        flex: 1;
        border: none;
        padding: 12px 20px;
        font-size: 1rem;
        background: transparent;
        outline: none;
    }
    .filter-scroll {
        display: flex;
        gap: 12px;
        overflow-x: auto;
        padding-bottom: 12px;
        margin-bottom: 40px;
        scrollbar-width: none;
    }
    .filter-scroll::-webkit-scrollbar { display: none; }
    
    .filter-btn {
        white-space: nowrap;
        padding: 10px 24px;
        border-radius: 12px;
        border: 1px solid var(--dashboard-border);
        background: white;
        color: var(--dashboard-text-muted);
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
    }
    .filter-btn.active {
        background: #3b82f6;
        color: white;
        border-color: #3b82f6;
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
    }
    
    .sim-card {
        background: white;
        border-radius: 24px;
        overflow: hidden;
        border: 1px solid var(--dashboard-border);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        flex-direction: column;
    }
    .sim-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1);
        border-color: #3b82f6;
    }
    .sim-banner {
        height: 160px;
        position: relative;
        overflow: hidden;
    }
    .sim-banner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .sim-badge {
        position: absolute;
        top: 16px;
        right: 16px;
        padding: 6px 12px;
        border-radius: 8px;
        background: rgba(255,255,255,0.9);
        backdrop-filter: blur(4px);
        font-size: 0.75rem;
        font-weight: 700;
        color: #1e293b;
    }
    .sim-icon {
        width: 48px;
        height: 48px;
        border-radius: 14px;
        background: white;
        border: 1px solid var(--dashboard-border);
        display: grid;
        place-items: center;
        margin-top: -24px;
        margin-left: 20px;
        position: relative;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        color: #3b82f6;
    }
    .sim-body {
        padding: 20px;
        flex: 1;
    }
    .sim-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 12px;
    }
    .sim-tag {
        font-size: 0.7rem;
        padding: 4px 10px;
        background: var(--dashboard-bg);
        border-radius: 6px;
        color: var(--dashboard-text-muted);
    }
    .sim-info {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
        padding-top: 20px;
        border-top: 1px solid var(--dashboard-bg);
        font-size: 0.8125rem;
        color: var(--dashboard-text-muted);
    }
    .sim-actions {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
        padding: 0 20px 20px;
    }
</style>

<div class="search-container">
    <i data-lucide="search" style="margin-left: 20px; color: var(--dashboard-text-muted);"></i>
    <input type="text" class="search-input" placeholder="Cari simulasi profesi (misal: Data Scientist)...">
    <button class="btn-journey" style="border-radius: 14px; padding: 10px 24px; margin-right: 8px;">Cari</button>
</div>

<div class="filter-scroll">
    <button class="filter-btn active">Semua</button>
    <button class="filter-btn">Teknologi</button>
    <button class="filter-btn">Design</button>
    <button class="filter-btn">Data</button>
    <button class="filter-btn">Marketing</button>
    <button class="filter-btn">Bisnis</button>
    <button class="filter-btn">Kreatif</button>
    <button class="filter-btn">Remote Work</button>
</div>

<!-- Explore Without Limits Section -->
<div class="panel mb-8" style="background: #0f172a; color: white; border: none;">
    <div style="display: flex; align-items: center; justify-content: space-between; gap: 40px;">
        <div style="flex: 1;">
            <div style="display: inline-block; padding: 6px 12px; background: rgba(59, 130, 246, 0.2); border-radius: 8px; color: #3b82f6; font-size: 0.75rem; font-weight: 700; margin-bottom: 16px;">
                EXPLORE WITHOUT LIMITS
            </div>
            <h2 style="font-size: 1.5rem; font-weight: 800; margin-bottom: 12px;">Kebebasan Penuh Menentukan Karier</h2>
            <p style="color: #94a3b8; font-size: 0.875rem; line-height: 1.6;">
                Meskipun AI memberikan rekomendasi terbaik, masa depanmu adalah keputusanmu. Cobalah simulasi apa pun tanpa batasan untuk menemukan potensi yang mungkin belum terdeteksi.
            </p>
        </div>
        <div style="width: 150px; text-align: center;">
            <i data-lucide="compass" style="width: 80px; height: 80px; color: #3b82f6; opacity: 0.8;"></i>
        </div>
    </div>
</div>

<div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 24px;">
    <!-- SIMULATION CARDS -->
    <div class="sim-card">
        <div class="sim-banner">
            <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?auto=format&fit=crop&w=400" alt="UI/UX">
            <span class="sim-badge">4.9 ★ RATING</span>
        </div>
        <div class="sim-icon"><i data-lucide="layout"></i></div>
        <div class="sim-body">
            <h4 style="font-weight: 700; font-size: 1.125rem;">UI/UX Designer</h4>
            <p style="font-size: 0.8125rem; color: var(--dashboard-text-muted); margin-top: 8px;">Rancang antarmuka aplikasi perbankan modern.</p>
            <div class="sim-tags">
                <span class="sim-tag">Figma</span>
                <span class="sim-tag">User Flow</span>
                <span class="sim-tag">Design System</span>
            </div>
            <div class="sim-info">
                <span><i data-lucide="clock" style="width: 14px; vertical-align: middle;"></i> 45 Menit</span>
                <span style="color: #10b981; font-weight: 700;">Intermediate</span>
            </div>
        </div>
        <div class="sim-actions">
            <button class="icon-btn">Detail</button>
            <button class="btn-journey">Simulasi</button>
        </div>
    </div>

    <div class="sim-card">
        <div class="sim-banner">
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=400" alt="Data Analyst">
            <span class="sim-badge">Populer</span>
        </div>
        <div class="sim-icon"><i data-lucide="database"></i></div>
        <div class="sim-body">
            <h4 style="font-weight: 700; font-size: 1.125rem;">Data Analyst</h4>
            <p style="font-size: 0.8125rem; color: var(--dashboard-text-muted); margin-top: 8px;">Analisis perilaku belanja user E-commerce.</p>
            <div class="sim-tags">
                <span class="sim-tag">SQL</span>
                <span class="sim-tag">Tableau</span>
                <span class="sim-tag">Statistics</span>
            </div>
            <div class="sim-info">
                <span><i data-lucide="clock" style="width: 14px; vertical-align: middle;"></i> 60 Menit</span>
                <span style="color: #3b82f6; font-weight: 700;">Beginner</span>
            </div>
        </div>
        <div class="sim-actions">
            <button class="icon-btn">Detail</button>
            <button class="btn-journey">Simulasi</button>
        </div>
    </div>

    <div class="sim-card">
        <div class="sim-banner">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=400" alt="Frontend">
            <span class="sim-badge">Trending</span>
        </div>
        <div class="sim-icon"><i data-lucide="code-2"></i></div>
        <div class="sim-body">
            <h4 style="font-weight: 700; font-size: 1.125rem;">Frontend Developer</h4>
            <p style="font-size: 0.8125rem; color: var(--dashboard-text-muted); margin-top: 8px;">Bangun dashboard interaktif dengan React.</p>
            <div class="sim-tags">
                <span class="sim-tag">React.js</span>
                <span class="sim-tag">Tailwind</span>
                <span class="sim-tag">API</span>
            </div>
            <div class="sim-info">
                <span><i data-lucide="clock" style="width: 14px; vertical-align: middle;"></i> 90 Menit</span>
                <span style="color: #ef4444; font-weight: 700;">Expert</span>
            </div>
        </div>
        <div class="sim-actions">
            <button class="icon-btn">Detail</button>
            <button class="btn-journey">Simulasi</button>
        </div>
    </div>

    <div class="sim-card">
        <div class="sim-banner">
            <img src="https://images.unsplash.com/photo-1557838923-2985c318be48?auto=format&fit=crop&w=400" alt="Digital Marketing">
            <span class="sim-badge">Baru</span>
        </div>
        <div class="sim-icon"><i data-lucide="megaphone"></i></div>
        <div class="sim-body">
            <h4 style="font-weight: 700; font-size: 1.125rem;">Digital Marketing</h4>
            <p style="font-size: 0.8125rem; color: var(--dashboard-text-muted); margin-top: 8px;">Jalankan kampanye iklan untuk brand fashion.</p>
            <div class="sim-tags">
                <span class="sim-tag">Ads Meta</span>
                <span class="sim-tag">Copywriting</span>
                <span class="sim-tag">ROI</span>
            </div>
            <div class="sim-info">
                <span><i data-lucide="clock" style="width: 14px; vertical-align: middle;"></i> 30 Menit</span>
                <span style="color: #3b82f6; font-weight: 700;">Beginner</span>
            </div>
        </div>
        <div class="sim-actions">
            <button class="icon-btn">Detail</button>
            <button class="btn-journey">Simulasi</button>
        </div>
    </div>
</div>
@endsection