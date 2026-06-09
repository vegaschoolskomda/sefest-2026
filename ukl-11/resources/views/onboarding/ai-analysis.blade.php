<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Menganalisis Profil Anda | SIJA</title>
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
          <div class="onb-step active"><span class="onb-step-dot"></span><span class="onb-step-label">Step 3</span></div>
          <div class="onb-step"><span class="onb-step-dot"></span><span class="onb-step-label">Step 4</span></div>
        </div>
      </div>
    </header>

    <main class="onb-main">
      <div class="container">
        <div class="onb-hero">
          <h1 id="onbH1" data-step="3" class="onb-h1">Menganalisis Profil Anda</h1>
          <p class="onb-desc">Sistem SIJA memproses sinyal minat, kemampuan, dan preferensi kerja Anda untuk membangun rekomendasi yang relevan.</p>
        </div>

        <div class="onb-card analysis-wrap">
          <div class="analysis-card" role="status" aria-live="polite">
            <div class="analysis-meta">
              <div style="display:flex;align-items:center;gap:12px">
                <div class="pulse-icon" aria-hidden="true"></div>
                <div>
                  <div style="font-weight:1000">Career Intelligence Engine</div>
                  <div style="color:var(--muted);font-weight:800;font-size:.95rem;margin-top:4px">Career prediction process</div>
                </div>
              </div>
              <div style="font-weight:1000">Step 3 of 4</div>
            </div>

            <div style="height:12px"></div>

            <div class="onb-progressbar" aria-hidden="true">
              <span id="onbAnalysisProgressFill"></span>
            </div>

            <div class="rotator">
              <div class="rot-line">
                <span class="mini-ring" aria-hidden="true"></span>
                <span id="onbRotatingMessage">Menganalisis...</span>
              </div>
              <div class="notice">Proses ini membutuhkan beberapa detik. Jangan menutup halaman.</div>
            </div>

            <div style="height:14px"></div>
            <div style="display:flex;gap:12px;flex-wrap:wrap">
              <span class="skill">Profil</span>
              <span class="skill">Preferensi</span>
              <span class="skill">Tren Industri</span>
              <span class="skill">Roadmap</span>
            </div>
          </div>

          <div class="row" style="justify-content:space-between">
            <div class="notice">Sinyal yang terdeteksi akan digunakan untuk menyusun rekomendasi karier.</div>
            <a class="btn" href="/onboarding/career-recommendation" onclick="return false;" style="opacity:.001;pointer-events:none">Lanjut</a>
          </div>
        </div>
      </div>
    </main>

    @vite(['resources/js/onboarding.js'])
    <script>
      (function () {
        const duration = 6500;
        setTimeout(function () {
          window.location.href = '/onboarding/career-recommendation';
        }, duration);
      })();
    </script>
  </body>
</html>

