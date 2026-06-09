<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Hasil Analisis Karier Anda | SIJA</title>
    @vite(['resources/css/onboarding.css'])
  </head>
  <body>
    <header class="onb-topbar">
      <div class="onb-topbar-inner">
        <div class="onb-brand" aria-label="SIJA">
          <div class="onb-mark">S</div>
          <div>
            <div class="onb-title">SIJA</div>
            <div class="onb-sub">Career Intelligence Platform</div>
          </div>
        </div>

        <div class="onb-steps" aria-label="Progress">
          <div class="onb-step"><span class="onb-step-dot"></span><span class="onb-step-label">Step 1</span></div>
          <div class="onb-step"><span class="onb-step-dot"></span><span class="onb-step-label">Step 2</span></div>
          <div class="onb-step"><span class="onb-step-dot"></span><span class="onb-step-label">Step 3</span></div>
          <div class="onb-step active"><span class="onb-step-dot"></span><span class="onb-step-label">Step 4</span></div>
        </div>
      </div>
    </header>

    <main class="onb-main">
      <div class="container">
        <div class="onb-hero">
          <h1 id="onbH1" data-step="4" class="onb-h1">Hasil Analisis Karier Anda</h1>
          <p class="onb-desc">Berdasarkan profil, minat, dan kemampuan Anda, berikut rekomendasi profesi yang paling sesuai.</p>
        </div>

        <div class="onb-card">
          <div class="analysis-meta" style="margin-bottom:14px">
            <div>Progress</div>
            <div style="color:rgba(248,250,252,.92)">Step 4 of 4</div>
          </div>

          <div id="onbRecGrid" class="rec-grid" aria-label="Career recommendations"></div>

          <div class="final-cta">
            <div class="final-title">Siap Memulai Perjalanan Karier Anda?</div>
            <div class="final-actions">
              <a class="btn btn-primary" href="/dashboard" aria-label="Masuk ke Dashboard">Masuk ke Dashboard</a>
              <a class="btn" href="#" onclick="return false;" aria-label="Mulai Simulasi Pertama">Mulai Simulasi Pertama</a>
              <button id="onbReset" class="btn" type="button">Mulai Ulang</button>
            </div>
            <div class="notice">Catatan: tombol detail & simulasi bersifat demo sampai integrasi dashboard SIJA tersedia.</div>
          </div>
        </div>
      </div>
    </main>

    @vite(['resources/js/onboarding.js'])
  </body>
</html>

