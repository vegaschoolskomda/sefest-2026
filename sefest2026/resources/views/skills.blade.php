@extends('layouts.dashboard')

@section('title', 'Progress Skill')
@section('header-title', 'Statistik Kemampuan')
@section('header-subtitle', 'Pantau perkembangan skill teknismu secara real-time.')

@section('content')
<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
    <div class="panel">
        <h3 style="font-size: 1.125rem; font-weight: 700; margin-bottom: 20px;">Hard Skills (UI/UX)</h3>
        <div style="display: grid; gap: 24px;">
            <div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                    <span style="font-weight: 600;">UI Design (Figma)</span>
                    <span style="font-weight: 700; color: #3b82f6;">85%</span>
                </div>
                <div style="height: 10px; background: var(--dashboard-bg); border-radius: 5px; overflow: hidden;">
                    <div style="width: 85%; height: 100%; background: #3b82f6; border-radius: 5px;"></div>
                </div>
                <p style="font-size: 0.75rem; color: var(--dashboard-text-muted); margin-top: 6px;">Status: Expert • +5% minggu ini</p>
            </div>
            <div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                    <span style="font-weight: 600;">UX Research</span>
                    <span style="font-weight: 700; color: #10b981;">42%</span>
                </div>
                <div style="height: 10px; background: var(--dashboard-bg); border-radius: 5px; overflow: hidden;">
                    <div style="width: 42%; height: 100%; background: #10b981; border-radius: 5px;"></div>
                </div>
                <p style="font-size: 0.75rem; color: var(--dashboard-text-muted); margin-top: 6px;">Status: Beginner • Perlu lebih banyak interview user</p>
            </div>
            <div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                    <span style="font-weight: 600;">Wireframing</span>
                    <span style="font-weight: 700; color: #f59e0b;">90%</span>
                </div>
                <div style="height: 10px; background: var(--dashboard-bg); border-radius: 5px; overflow: hidden;">
                    <div style="width: 90%; height: 100%; background: #f59e0b; border-radius: 5px;"></div>
                </div>
                <p style="font-size: 0.75rem; color: var(--dashboard-text-muted); margin-top: 6px;">Status: Advanced • Sudah menguasai autolayout</p>
            </div>
        </div>
    </div>

    <div class="panel">
        <h3 style="font-size: 1.125rem; font-weight: 700; margin-bottom: 20px;">Soft Skills</h3>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
            <div style="padding: 16px; background: var(--dashboard-bg); border-radius: 12px; text-align: center; border: 1px solid var(--dashboard-border);">
                <div style="width: 40px; height: 40px; background: rgba(59, 130, 246, 0.1); color: #3b82f6; border-radius: 50%; display: grid; place-items: center; margin: 0 auto 12px;">
                    <i data-lucide="message-circle" style="width: 20px;"></i>
                </div>
                <h5 style="font-weight: 700; font-size: 0.8125rem;">Communication</h5>
                <span style="font-size: 0.75rem; color: #3b82f6; font-weight: 700;">Level 4</span>
            </div>
            <div style="padding: 16px; background: var(--dashboard-bg); border-radius: 12px; text-align: center; border: 1px solid var(--dashboard-border);">
                <div style="width: 40px; height: 40px; background: rgba(16, 185, 129, 0.1); color: #10b981; border-radius: 50%; display: grid; place-items: center; margin: 0 auto 12px;">
                    <i data-lucide="users" style="width: 20px;"></i>
                </div>
                <h5 style="font-weight: 700; font-size: 0.8125rem;">Collaboration</h5>
                <span style="font-size: 0.75rem; color: #10b981; font-weight: 700;">Level 3</span>
            </div>
            <div style="padding: 16px; background: var(--dashboard-bg); border-radius: 12px; text-align: center; border: 1px solid var(--dashboard-border);">
                <div style="width: 40px; height: 40px; background: rgba(245, 158, 11, 0.1); color: #f59e0b; border-radius: 50%; display: grid; place-items: center; margin: 0 auto 12px;">
                    <i data-lucide="zap" style="width: 20px;"></i>
                </div>
                <h5 style="font-weight: 700; font-size: 0.8125rem;">Problem Solving</h5>
                <span style="font-size: 0.75rem; color: #f59e0b; font-weight: 700;">Level 5</span>
            </div>
            <div style="padding: 16px; background: var(--dashboard-bg); border-radius: 12px; text-align: center; border: 1px solid var(--dashboard-border);">
                <div style="width: 40px; height: 40px; background: rgba(139, 92, 246, 0.1); color: #8b5cf6; border-radius: 50%; display: grid; place-items: center; margin: 0 auto 12px;">
                    <i data-lucide="clock" style="width: 20px;"></i>
                </div>
                <h5 style="font-weight: 700; font-size: 0.8125rem;">Time Management</h5>
                <span style="font-size: 0.75rem; color: #8b5cf6; font-weight: 700;">Level 4</span>
            </div>
        </div>
    </div>
</div>

<div class="panel">
    <h3 style="font-size: 1.125rem; font-weight: 700; margin-bottom: 20px;">Skill Radar (Mockup)</h3>
    <div style="height: 300px; background: var(--dashboard-bg); border-radius: 16px; display: grid; place-items: center; border: 1px dashed var(--dashboard-border);">
        <p style="color: var(--dashboard-text-muted);">Visualisasi Chart akan muncul di sini menggunakan Chart.js</p>
    </div>
</div>
@endsection