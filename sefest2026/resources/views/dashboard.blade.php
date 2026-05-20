@extends('layouts.dashboard')

@section('title', 'Dashboard')
@section('header-title', 'Career Journey Dashboard')
@section('header-subtitle', 'Selamat datang kembali, Farhan! Yuk lanjutkan misi karirmu.')

@section('content')
<!-- SECTION 1: ACTIVE CAREER PATH -->
<div class="journey-card mb-8">
    <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 20px;">
        <div class="progress-info">
            <span style="text-transform: uppercase; font-size: 0.75rem; font-weight: 700; color: #3b82f6; letter-spacing: 1px;">Current Journey</span>
            <h2 style="font-size: 2rem; font-weight: 800; margin: 8px 0;">UI/UX Designer Path</h2>
            <div style="display: flex; align-items: center; gap: 16px; margin-top: 12px;">
                <div class="mentor-card-mini" style="display: flex; align-items: center; gap: 10px; background: rgba(255,255,255,0.05); padding: 8px 12px; border-radius: 12px;">
                    <img src="https://ui-avatars.com/api/?name=Farhan+Akbar&background=3b82f6&color=fff" style="width: 32px; height: 32px; border-radius: 50%;">
                    <div>
                        <span style="display: block; font-size: 0.75rem; color: #94a3b8;">Mentor</span>
                        <span style="display: block; font-size: 0.875rem; font-weight: 600;">Farhan Akbar</span>
                    </div>
                </div>
                <div style="padding: 4px 12px; border-radius: 8px; background: rgba(255,255,255,0.1); font-size: 0.875rem; font-weight: 600;">
                    Level 2
                </div>
            </div>
        </div>
        
        <div style="text-align: right; min-width: 200px;">
            <div style="font-size: 2.5rem; font-weight: 800; line-height: 1;">64%</div>
            <span style="font-size: 0.875rem; color: #94a3b8;">Progress Perjalanan</span>
            <div style="width: 100%; height: 6px; background: rgba(255,255,255,0.1); border-radius: 3px; margin: 12px 0; overflow: hidden;">
                <div style="width: 64%; height: 100%; background: #3b82f6;"></div>
            </div>
            <button class="btn-journey" style="width: 100%; justify-content: center;">
                Lanjutkan Challenge <i data-lucide="arrow-right"></i>
            </button>
        </div>
    </div>
</div>

<!-- Dashboard Grid -->
<div class="activity-grid">
    <div class="left-col">
        <!-- SECTION 2: CURRENT TASKS -->
        <div class="panel mb-8">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
                <h3 style="font-size: 1.25rem; font-weight: 700;">Tugas dari Mentor</h3>
                <span style="font-size: 0.875rem; color: var(--dashboard-text-muted);">2 Tugas Aktif</span>
            </div>
            <div class="task-list" style="display: grid; gap: 16px;">
                <div class="job-item" style="border: 1px solid var(--dashboard-border); border-radius: 12px;">
                    <div style="width: 48px; height: 48px; border-radius: 12px; background: #eff6ff; display: grid; place-items: center;">
                        <i data-lucide="layout" style="color: #3b82f6;"></i>
                    </div>
                    <div style="flex: 1;">
                        <div style="display: flex; justify-content: space-between;">
                            <span style="font-weight: 700;">Design Mobile Banking App</span>
                            <span style="font-size: 0.75rem; color: #ef4444; font-weight: 600;">3 Hari Lagi</span>
                        </div>
                        <span style="display: block; font-size: 0.875rem; color: var(--dashboard-text-muted);">Mentor: Dimas UI Mentor • Hard</span>
                        <div style="margin-top: 10px;" class="status-badge status-active">Sedang Dikerjakan</div>
                    </div>
                </div>
                <div class="job-item" style="border: 1px solid var(--dashboard-border); border-radius: 12px;">
                    <div style="width: 48px; height: 48px; border-radius: 12px; background: #f0fdf4; display: grid; place-items: center;">
                        <i data-lucide="search" style="color: #10b981;"></i>
                    </div>
                    <div style="flex: 1;">
                        <div style="display: flex; justify-content: space-between;">
                            <span style="font-weight: 700;">User Research & Interview</span>
                            <span style="font-size: 0.75rem; color: #64748b; font-weight: 600;">Besok</span>
                        </div>
                        <span style="display: block; font-size: 0.875rem; color: var(--dashboard-text-muted);">Mentor: Farhan Akbar • Medium</span>
                        <div style="margin-top: 10px;" class="status-badge status-pending">Direview</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECTION 5: ROADMAP TIMELINE -->
        <div class="panel">
            <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 24px;">Roadmap Timeline</h3>
            <div class="roadmap-timeline">
                <div class="timeline-item completed">
                    <div class="timeline-dot"></div>
                    <div style="display: flex; justify-content: space-between;">
                        <div>
                            <h4 style="font-weight: 700; margin: 0;">✔ Basic Design Fundamentals</h4>
                            <p style="font-size: 0.875rem; color: var(--dashboard-text-muted); margin: 4px 0;">Selesai pada 12 Mei 2026</p>
                        </div>
                        <i data-lucide="check-circle" style="color: #10b981; width: 18px;"></i>
                    </div>
                </div>
                <div class="timeline-item active">
                    <div class="timeline-dot"></div>
                    <h4 style="font-weight: 700; margin: 0;">🚀 Intermediate Prototype</h4>
                    <p style="font-size: 0.875rem; color: var(--dashboard-text-muted); margin: 4px 0;">Tahap pengerjaan saat ini</p>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <h4 style="font-weight: 700; opacity: 0.5;">🔒 Real World Project</h4>
                    <p style="font-size: 0.875rem; color: var(--dashboard-text-muted); margin: 4px 0;">Terbuka setelah level up</p>
                </div>
            </div>
        </div>
    </div>

    <div class="right-col">
        <!-- SECTION 3: MENTOR PANEL -->
        <div class="panel mb-8" style="text-align: center;">
            <h3 style="font-size: 1.125rem; font-weight: 700; margin-bottom: 20px; text-align: left;">Mentor Saya</h3>
            <img src="https://ui-avatars.com/api/?name=Farhan+Akbar&background=3b82f6&color=fff&size=128" style="width: 80px; height: 80px; border-radius: 50%; margin-bottom: 12px; border: 4px solid var(--dashboard-bg);">
            <h4 style="font-weight: 700; margin-bottom: 4px;">Farhan Akbar</h4>
            <span style="display: block; font-size: 0.875rem; color: var(--dashboard-text-muted); margin-bottom: 16px;">Senior Product Designer at Google</span>
            
            <div style="background: var(--dashboard-bg); padding: 12px; border-radius: 12px; font-size: 0.8125rem; font-style: italic; color: var(--dashboard-text-muted); margin-bottom: 20px;">
                "Jangan takut salah saat membuat wireframe, yang penting alurnya logis."
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                <button class="icon-btn" style="width: 100%; font-size: 0.75rem; font-weight: 600; gap: 4px;">
                    <i data-lucide="message-square" style="width: 14px;"></i> Chat
                </button>
                <button class="icon-btn" style="width: 100%; font-size: 0.75rem; font-weight: 600; gap: 4px;">
                    <i data-lucide="file-text" style="width: 14px;"></i> Roadmap
                </button>
            </div>
        </div>

        <!-- SECTION 4: SKILL PROGRESS -->
        <div class="panel mb-8">
            <h3 style="font-size: 1.125rem; font-weight: 700; margin-bottom: 20px;">Progress Skill</h3>
            <div style="display: grid; gap: 16px;">
                <div>
                    <div style="display: flex; justify-content: space-between; font-size: 0.8125rem; margin-bottom: 6px;">
                        <span>UI Design (Figma)</span>
                        <span style="font-weight: 700;">85%</span>
                    </div>
                    <div style="height: 6px; background: var(--dashboard-bg); border-radius: 3px; overflow: hidden;">
                        <div style="width: 85%; height: 100%; background: #3b82f6;"></div>
                    </div>
                </div>
                <div>
                    <div style="display: flex; justify-content: space-between; font-size: 0.8125rem; margin-bottom: 6px;">
                        <span>UX Research</span>
                        <span style="font-weight: 700;">42%</span>
                    </div>
                    <div style="height: 6px; background: var(--dashboard-bg); border-radius: 3px; overflow: hidden;">
                        <div style="width: 42%; height: 100%; background: #10b981;"></div>
                    </div>
                </div>
                <div>
                    <div style="display: flex; justify-content: space-between; font-size: 0.8125rem; margin-bottom: 6px;">
                        <span>Wireframing</span>
                        <span style="font-weight: 700;">90%</span>
                    </div>
                    <div style="height: 6px; background: var(--dashboard-bg); border-radius: 3px; overflow: hidden;">
                        <div style="width: 90%; height: 100%; background: #f59e0b;"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECTION 6: ACHIEVEMENTS -->
        <div class="panel">
            <h3 style="font-size: 1.125rem; font-weight: 700; margin-bottom: 20px;">Achievements</h3>
            <div class="badge-grid">
                <div class="badge-item" title="Quick Learner"><i data-lucide="zap" style="color: #f59e0b;"></i></div>
                <div class="badge-item" title="Project Master"><i data-lucide="award" style="color: #3b82f6;"></i></div>
                <div class="badge-item" title="On Time"><i data-lucide="clock" style="color: #10b981;"></i></div>
                <div class="badge-item" style="opacity: 0.3;"><i data-lucide="lock"></i></div>
            </div>
        </div>
    </div>
</div>
@endsection
