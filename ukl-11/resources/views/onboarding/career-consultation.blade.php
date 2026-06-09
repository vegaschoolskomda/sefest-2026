<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Konsultasi Karier | SIJA</title>
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
          <div class="onb-step active"><span class="onb-step-dot"></span><span class="onb-step-label">Step 2</span></div>
          <div class="onb-step"><span class="onb-step-dot"></span><span class="onb-step-label">Step 3</span></div>
          <div class="onb-step"><span class="onb-step-dot"></span><span class="onb-step-label">Step 4</span></div>
        </div>
      </div>
    </header>

    <main class="onb-main">
      <div class="container">
        <div class="onb-hero">
          <h1 id="onbH1" data-step="2" class="onb-h1">Konsultasi Karier</h1>
          <p class="onb-desc">Jawab beberapa pertanyaan berikut agar SIJA dapat memahami minat dan potensi Anda secara lebih mendalam.</p>
        </div>

        <div class="onb-card">
          <div class="analysis-meta" style="margin-bottom:14px">
            <div>Progress</div>
            <div style="color:rgba(248,250,252,.92)">Step 2 of 4</div>
          </div>

          <form id="onbConsultForm" action="/onboarding/ai-analysis" method="get">
            <section style="margin-bottom:18px">
              <div class="label" style="margin-bottom:10px">Aktivitas yang paling Anda sukai</div>
              <div class="choice-list">
                <label class="choice"><input type="checkbox" name="activities" value="Mendesain" /><span class="box"></span><span class="txt"><span class="name">Mendesain</span></span></label>
                <label class="choice"><input type="checkbox" name="activities" value="Menganalisis Data" /><span class="box"></span><span class="txt"><span class="name">Menganalisis Data</span></span></label>
                <label class="choice"><input type="checkbox" name="activities" value="Coding" /><span class="box"></span><span class="txt"><span class="name">Coding</span></span></label>
                <label class="choice"><input type="checkbox" name="activities" value="Menulis" /><span class="box"></span><span class="txt"><span class="name">Menulis</span></span></label>
                <label class="choice"><input type="checkbox" name="activities" value="Berbicara di Depan Umum" /><span class="box"></span><span class="txt"><span class="name">Berbicara di Depan Umum</span></span></label>
                <label class="choice"><input type="checkbox" name="activities" value="Mengelola Tim" /><span class="box"></span><span class="txt"><span class="name">Mengelola Tim</span></span></label>
                <label class="choice"><input type="checkbox" name="activities" value="Membuat Konten" /><span class="box"></span><span class="txt"><span class="name">Membuat Konten</span></span></label>
                <label class="choice"><input type="checkbox" name="activities" value="Memecahkan Masalah" /><span class="box"></span><span class="txt"><span class="name">Memecahkan Masalah</span></span></label>
              </div>
            </section>

            <section style="margin-bottom:18px">
              <div class="label" style="margin-bottom:10px">Cara Belajar Favorit</div>
              <div class="choice-list">
                <label class="choice"><input type="checkbox" name="learning" value="Video" /><span class="box"></span><span class="txt"><span class="name">Video</span></span></label>
                <label class="choice"><input type="checkbox" name="learning" value="Praktik Langsung" /><span class="box"></span><span class="txt"><span class="name">Praktik Langsung</span></span></label>
                <label class="choice"><input type="checkbox" name="learning" value="Membaca" /><span class="box"></span><span class="txt"><span class="name">Membaca</span></span></label>
                <label class="choice"><input type="checkbox" name="learning" value="Diskusi" /><span class="box"></span><span class="txt"><span class="name">Diskusi</span></span></label>
              </div>
            </section>

            <section style="margin-bottom:18px">
              <div class="label" style="margin-bottom:10px">Lingkungan Kerja Impian</div>
              <div class="choice-list">
                <label class="choice"><input type="checkbox" name="environment" value="Remote" /><span class="box"></span><span class="txt"><span class="name">Remote</span></span></label>
                <label class="choice"><input type="checkbox" name="environment" value="Hybrid" /><span class="box"></span><span class="txt"><span class="name">Hybrid</span></span></label>
                <label class="choice"><input type="checkbox" name="environment" value="Kantor" /><span class="box"></span><span class="txt"><span class="name">Kantor</span></span></label>
                <label class="choice"><input type="checkbox" name="environment" value="Fleksibel" /><span class="box"></span><span class="txt"><span class="name">Fleksibel</span></span></label>
              </div>
            </section>

            <section style="margin-bottom:18px">
              <div class="label" style="margin-bottom:10px">Cara Kerja yang Disukai</div>
              <div class="choice-list">
                <label class="choice"><input type="checkbox" name="work_style" value="Individu" /><span class="box"></span><span class="txt"><span class="name">Individu</span></span></label>
                <label class="choice"><input type="checkbox" name="work_style" value="Tim" /><span class="box"></span><span class="txt"><span class="name">Tim</span></span></label>
                <label class="choice"><input type="checkbox" name="work_style" value="Keduanya" /><span class="box"></span><span class="txt"><span class="name">Keduanya</span></span></label>
              </div>
            </section>

            <section style="margin-bottom:18px">
              <div class="label" style="margin-bottom:10px">Tujuan Karier</div>
              <div class="choice-list">
                <label class="choice"><input type="checkbox" name="career_goal" value="Mendapat Pekerjaan" /><span class="box"></span><span class="txt"><span class="name">Mendapat Pekerjaan</span></span></label>
                <label class="choice"><input type="checkbox" name="career_goal" value="Freelancer" /><span class="box"></span><span class="txt"><span class="name">Freelancer</span></span></label>
                <label class="choice"><input type="checkbox" name="career_goal" value="Startup Founder" /><span class="box"></span><span class="txt"><span class="name">Startup Founder</span></span></label>
                <label class="choice"><input type="checkbox" name="career_goal" value="Remote Worker" /><span class="box"></span><span class="txt"><span class="name">Remote Worker</span></span></label>
              </div>
            </section>

            <section style="margin-bottom:18px">
              <div class="label" style="margin-bottom:10px">Teknologi</div>
              <div class="chip-grid" role="group" aria-label="Teknologi">
                <label class="chip"><input type="checkbox" name="technologies" value="Manajerial" /><span class="tick">✓</span>Manajerial</label>
                <label class="chip"><input type="checkbox" name="technologies" value="Data" /><span class="tick">✓</span>Data</label>
                <label class="chip"><input type="checkbox" name="technologies" value="AI" /><span class="tick">✓</span>AI</label>
                <label class="chip"><input type="checkbox" name="technologies" value="Design" /><span class="tick">✓</span>Design</label>
                <label class="chip"><input type="checkbox" name="technologies" value="Networking" /><span class="tick">✓</span>Networking</label>
                <label class="chip"><input type="checkbox" name="technologies" value="Cyber Security" /><span class="tick">✓</span>Cyber Security</label>
                <label class="chip"><input type="checkbox" name="technologies" value="Frontend" /><span class="tick">✓</span>Frontend</label>
                <label class="chip"><input type="checkbox" name="technologies" value="Backend" /><span class="tick">✓</span>Backend</label>
                <label class="chip"><input type="checkbox" name="technologies" value="Mobile" /><span class="tick">✓</span>Mobile</label>
                <label class="chip"><input type="checkbox" name="technologies" value="Marketing" /><span class="tick">✓</span>Marketing</label>
              </div>
            </section>

            <section style="margin-bottom:18px">
              <div class="label" style="margin-bottom:10px">Skill yang Ingin Dipelajari</div>
              <div class="field">
                <textarea id="skill_to_learn" class="textarea" placeholder="Contoh: ingin belajar SQL, riset pengguna, atau membuat prototipe..."></textarea>
              </div>
            </section>

            <section style="margin-bottom:18px">
              <div class="label" style="margin-bottom:10px">Ceritakan Minat dan Cita-Cita Anda</div>
              <div class="field">
                <textarea id="interest_text" class="textarea" placeholder="Ceritakan secara singkat: apa yang ingin Anda capai dan mengapa"></textarea>
              </div>
            </section>

            <div class="row" style="justify-content:flex-end">
              <button id="onbStep2Continue" type="submit" class="btn btn-primary">Mulai Analisis AI</button>
            </div>
          </form>
        </div>

        <div class="notice" style="margin-top:14px">Semua data yang Anda pilih akan digunakan untuk membuat rekomendasi karier.</div>
      </div>
    </main>

    @vite(['resources/js/onboarding.js'])
  </body>
</html>

