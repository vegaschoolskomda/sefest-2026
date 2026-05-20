@extends('layouts.dashboard')

@section('title', 'Tugas & Challenge')
@section('header-title', 'Challenge Center')
@section('header-subtitle', 'Selesaikan tugas dari mentor dan tingkatkan portofoliomu.')

@section('content')
<div class="panel mb-8">
    <div style="display: flex; gap: 20px; overflow-x: auto; padding-bottom: 10px; margin-bottom: 24px; border-bottom: 1px solid var(--dashboard-border);">
        <button class="nav-item active" style="padding: 0 0 10px 0; border-radius: 0; background: none; border-bottom: 2px solid #3b82f6;">Semua Tugas</button>
        <button class="nav-item" style="padding: 0 0 10px 0; border-radius: 0; background: none;">Belum Dikerjakan</button>
        <button class="nav-item" style="padding: 0 0 10px 0; border-radius: 0; background: none;">Sedang Direview</button>
        <button class="nav-item" style="padding: 0 0 10px 0; border-radius: 0; background: none;">Selesai</button>
    </div>

    <div style="display: grid; gap: 16px;">
        <!-- Task 1 -->
        <div class="panel" style="padding: 20px; border: 1px solid var(--dashboard-border); background: var(--dashboard-bg);">
            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                <div style="display: flex; gap: 16px;">
                    <div style="width: 50px; height: 50px; border-radius: 12px; background: rgba(59, 130, 246, 0.1); display: grid; place-items: center; color: #3b82f6;">
                        <i data-lucide="layout"></i>
                    </div>
                    <div>
                        <h4 style="font-weight: 700; font-size: 1.125rem;">Design Mobile Banking App</h4>
                        <p style="font-size: 0.875rem; color: var(--dashboard-text-muted);">Journey: UI/UX Designer Path • Mentor: Dimas UI</p>
                        <div style="margin-top: 12px; display: flex; gap: 10px;">
                            <span class="status-badge" style="background: rgba(239, 68, 68, 0.1); color: #ef4444; font-size: 0.75rem;">Deadline: 3 Hari Lagi</span>
                            <span class="status-badge" style="background: rgba(59, 130, 246, 0.1); color: #3b82f6; font-size: 0.75rem;">Hard Level</span>
                        </div>
                    </div>
                </div>
                <div style="text-align: right;">
                    <button class="btn-journey" style="padding: 8px 20px;">Kirim Tugas</button>
                    <p style="font-size: 0.75rem; color: var(--dashboard-text-muted); margin-top: 8px;">Terupdate 2 jam yang lalu</p>
                </div>
            </div>
        </div>

        <!-- Task 2 -->
        <div class="panel" style="padding: 20px; border: 1px solid var(--dashboard-border); opacity: 0.8;">
            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                <div style="display: flex; gap: 16px;">
                    <div style="width: 50px; height: 50px; border-radius: 12px; background: rgba(16, 185, 129, 0.1); display: grid; place-items: center; color: #10b981;">
                        <i data-lucide="search"></i>
                    </div>
                    <div>
                        <h4 style="font-weight: 700; font-size: 1.125rem;">User Research & Interview</h4>
                        <p style="font-size: 0.875rem; color: var(--dashboard-text-muted);">Journey: UI/UX Designer Path • Mentor: Farhan Akbar</p>
                        <div style="margin-top: 12px; display: flex; gap: 10px;">
                            <span class="status-badge" style="background: rgba(16, 185, 129, 0.1); color: #10b981; font-size: 0.75rem;">Direview oleh Mentor</span>
                        </div>
                    </div>
                </div>
                <div style="text-align: right;">
                    <button class="icon-btn" style="padding: 8px 20px;">Lihat Feedback</button>
                    <p style="font-size: 0.75rem; color: var(--dashboard-text-muted); margin-top: 8px;">Dikirim 12 Mei 2026</p>
                </div>
            </div>
        </div>

        <!-- Task 3 (Locked) -->
        <div class="panel" style="padding: 20px; border: 1px solid var(--dashboard-border); opacity: 0.5;">
            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                <div style="display: flex; gap: 16px;">
                    <div style="width: 50px; height: 50px; border-radius: 12px; background: #e2e8f0; display: grid; place-items: center; color: #94a3b8;">
                        <i data-lucide="lock"></i>
                    </div>
                    <div>
                        <h4 style="font-weight: 700; font-size: 1.125rem;">Design System Development</h4>
                        <p style="font-size: 0.875rem; color: var(--dashboard-text-muted);">Terbuka setelah menyelesaikan tugas Mobile Banking</p>
                    </div>
                </div>
                <button class="icon-btn" disabled style="cursor: not-allowed;">Locked</button>
            </div>
        </div>
    </div>
</div>
@endsection