@extends('layouts.dashboard')

@section('title', 'Sertifikat')
@section('header-title', 'Pencapaian & Sertifikat')
@section('header-subtitle', 'Kumpulkan sertifikat dari setiap journey yang kamu selesaikan.')

@section('content')
<div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 24px;">
    <!-- Certificate 1 -->
    <div class="panel" style="padding: 0; overflow: hidden; position: relative;">
        <div style="height: 180px; background: #0f172a; display: grid; place-items: center; padding: 20px;">
             <!-- Certificate Graphic Mockup -->
             <div style="width: 200px; height: 130px; background: white; border-radius: 4px; padding: 10px; box-shadow: 0 10px 20px rgba(0,0,0,0.3); border: 2px solid #3b82f6;">
                <div style="height: 2px; background: #3b82f6; width: 40px; margin-bottom: 10px;"></div>
                <div style="font-size: 8px; font-weight: 800; color: #1e293b; margin-bottom: 4px;">CERTIFICATE OF COMPLETION</div>
                <div style="font-size: 6px; color: #64748b; margin-bottom: 15px;">THIS IS TO CERTIFY THAT</div>
                <div style="font-size: 10px; font-weight: 700; color: #3b82f6; margin-bottom: 8px;">RAFI ABDIYYU</div>
                <div style="font-size: 6px; color: #64748b;">HAS SUCCESSFULLY COMPLETED THE JOURNEY:</div>
                <div style="font-size: 7px; font-weight: 700; color: #1e293b;">Interaction Design Principles</div>
             </div>
        </div>
        <div style="padding: 20px;">
            <h4 style="font-weight: 700; margin-bottom: 4px;">Interaction Design Fundamentals</h4>
            <p style="font-size: 0.75rem; color: var(--dashboard-text-muted); margin-bottom: 16px;">Issued on 10 May 2026 • Credential ID: SN-2026-881</p>
            <div style="display: flex; gap: 10px;">
                <button class="btn-journey" style="flex: 1; padding: 10px; font-size: 0.8125rem;">Download PDF</button>
                <button class="icon-btn" style="padding: 10px;">
                    <i data-lucide="share-2" style="width: 18px;"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Empty/Locked State -->
    <div class="panel" style="padding: 0; overflow: hidden; opacity: 0.6; border: 2px dashed var(--dashboard-border); background: none; display: flex; flex-direction: column; justify-content: center; align-items: center; min-height: 300px;">
        <div style="width: 60px; height: 60px; border-radius: 50%; background: var(--dashboard-bg); display: grid; place-items: center; color: var(--dashboard-text-muted); margin-bottom: 16px;">
            <i data-lucide="lock" style="width: 30px;"></i>
        </div>
        <h4 style="font-weight: 700; color: var(--dashboard-text-muted);">Sertifikat Berikutnya</h4>
        <p style="font-size: 0.75rem; color: var(--dashboard-text-muted); text-align: center; max-width: 200px;">Selesaikan journey "Advanced UI Expert" untuk klaim</p>
    </div>

    <div class="panel" style="padding: 0; overflow: hidden; opacity: 0.6; border: 2px dashed var(--dashboard-border); background: none; display: flex; flex-direction: column; justify-content: center; align-items: center; min-height: 300px;">
        <div style="width: 60px; height: 60px; border-radius: 50%; background: var(--dashboard-bg); display: grid; place-items: center; color: var(--dashboard-text-muted); margin-bottom: 16px;">
            <i data-lucide="lock" style="width: 30px;"></i>
        </div>
        <h4 style="font-weight: 700; color: var(--dashboard-text-muted);">Sertifikat Berikutnya</h4>
        <p style="font-size: 0.75rem; color: var(--dashboard-text-muted); text-align: center; max-width: 200px;">Selesaikan journey "Product Strategy" untuk klaim</p>
    </div>
</div>
@endsection