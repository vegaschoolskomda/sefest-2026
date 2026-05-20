@extends('layouts.dashboard')

@section('title', 'Mentor Saya')
@section('header-title', 'Bimbingan Mentor')
@section('header-subtitle', 'Belajar langsung dari para profesional di bidangnya.')

@section('content')
<div style="display: grid; grid-template-columns: 1fr 350px; gap: 24px; align-items: start;">
    <div class="left-col">
        <div class="panel mb-8">
            <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 24px;">Mentor Aktif</h3>
            <div style="display: grid; gap: 20px;">
                <div class="mentor-item" style="display: flex; gap: 20px; padding: 20px; border: 1px solid var(--dashboard-border); border-radius: 16px; align-items: center;">
                    <img src="https://ui-avatars.com/api/?name=Farhan+Akbar&background=3b82f6&color=fff&size=100" style="width: 80px; height: 80px; border-radius: 50%;">
                    <div style="flex: 1;">
                        <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                            <div>
                                <h4 style="font-weight: 700; font-size: 1.125rem;">Farhan Akbar</h4>
                                <p style="font-size: 0.875rem; color: var(--dashboard-text-muted);">Senior Product Designer at Google</p>
                            </div>
                            <span class="status-badge" style="background: rgba(59, 130, 246, 0.1); color: #3b82f6;">UI/UX Expert</span>
                        </div>
                        <div style="margin-top: 12px; display: flex; gap: 12px;">
                            <button class="btn-journey" style="padding: 6px 16px; font-size: 0.8125rem;">Chat Mentor</button>
                            <button class="icon-btn" style="padding: 6px 16px; font-size: 0.8125rem;">Lihat Jadwal</button>
                        </div>
                    </div>
                </div>

                <div class="mentor-item" style="display: flex; gap: 20px; padding: 20px; border: 1px solid var(--dashboard-border); border-radius: 16px; align-items: center;">
                    <img src="https://ui-avatars.com/api/?name=Dimas+UI&background=10b981&color=fff&size=100" style="width: 80px; height: 80px; border-radius: 50%;">
                    <div style="flex: 1;">
                        <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                            <div>
                                <h4 style="font-weight: 700; font-size: 1.125rem;">Dimas Saputra</h4>
                                <p style="font-size: 0.875rem; color: var(--dashboard-text-muted);">Lead Interaction Designer at Gojek</p>
                            </div>
                            <span class="status-badge" style="background: rgba(16, 185, 129, 0.1); color: #10b981;">Prototyping Expert</span>
                        </div>
                        <div style="margin-top: 12px; display: flex; gap: 12px;">
                            <button class="btn-journey" style="padding: 6px 16px; font-size: 0.8125rem;">Chat Mentor</button>
                            <button class="icon-btn" style="padding: 6px 16px; font-size: 0.8125rem;">Lihat Jadwal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 20px;">Rekomendasi Mentor Lain</h3>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div class="panel" style="text-align: center;">
                <img src="https://ui-avatars.com/api/?name=Sarah+Az&background=f59e0b&color=fff&size=80" style="width: 64px; height: 64px; border-radius: 50%; margin-bottom: 12px;">
                <h4 style="font-weight: 700;">Sarah Az-Zahra</h4>
                <p style="font-size: 0.75rem; color: var(--dashboard-text-muted); margin-bottom: 12px;">UX Researcher at Tokopedia</p>
                <button class="icon-btn" style="width: 100%; font-size: 0.75rem;">Follow Mentor</button>
            </div>
            <div class="panel" style="text-align: center;">
                <img src="https://ui-avatars.com/api/?name=Budi+Tech&background=8b5cf6&color=fff&size=80" style="width: 64px; height: 64px; border-radius: 50%; margin-bottom: 12px;">
                <h4 style="font-weight: 700;">Budi Santoso</h4>
                <p style="font-size: 0.75rem; color: var(--dashboard-text-muted); margin-bottom: 12px;">Frontend Engineer at Grab</p>
                <button class="icon-btn" style="width: 100%; font-size: 0.75rem;">Follow Mentor</button>
            </div>
        </div>
    </div>

    <div class="right-col">
        <div class="panel">
            <h3 style="font-size: 1.125rem; font-weight: 700; margin-bottom: 20px;">Jadwal Konsultasi</h3>
            <div style="display: grid; gap: 16px;">
                <div style="padding: 12px; background: rgba(59, 130, 246, 0.05); border-radius: 12px; border-left: 4px solid #3b82f6;">
                    <span style="display: block; font-size: 0.75rem; color: #3b82f6; font-weight: 700;">BESOK, 14:00 WIB</span>
                    <span style="display: block; font-weight: 700; margin-top: 4px;">Review Portfolio hi-fi</span>
                    <span style="display: block; font-size: 0.75rem; color: var(--dashboard-text-muted);">dengan Farhan Akbar</span>
                </div>
                <div style="padding: 12px; background: rgba(16, 185, 129, 0.05); border-radius: 12px; border-left: 4px solid #10b981;">
                    <span style="display: block; font-size: 0.75rem; color: #10b981; font-weight: 700;">22 MEI, 10:00 WIB</span>
                    <span style="display: block; font-weight: 700; margin-top: 4px;">Prototyping Session</span>
                    <span style="display: block; font-size: 0.75rem; color: var(--dashboard-text-muted);">dengan Dimas Saputra</span>
                </div>
            </div>
            <button class="icon-btn" style="width: 100%; margin-top: 20px; gap: 8px;">
                <i data-lucide="plus" style="width: 16px;"></i> Atur Jadwal Baru
            </button>
        </div>
    </div>
</div>
@endsection