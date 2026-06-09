<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lengkapi Profil Anda | SIJA</title>
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
          <div class="onb-step active"><span class="onb-step-dot"></span><span class="onb-step-label">Step 1</span></div>
          <div class="onb-step"><span class="onb-step-dot"></span><span class="onb-step-label">Step 2</span></div>
          <div class="onb-step"><span class="onb-step-dot"></span><span class="onb-step-label">Step 3</span></div>
          <div class="onb-step"><span class="onb-step-dot"></span><span class="onb-step-label">Step 4</span></div>
        </div>
      </div>
    </header>

    <main class="onb-main">
      <div class="container">
        <div class="onb-hero">
          <h1 id="onbH1" data-step="1" class="onb-h1">Lengkapi Profil Anda</h1>
          <p class="onb-desc">Informasi ini akan membantu SIJA memahami latar belakang, minat, dan kemampuan Anda sebelum memberikan rekomendasi karier.</p>
        </div>

        <div class="onb-card">
          <div class="analysis-meta" style="margin-bottom:14px">
            <div>Show Progress</div>
            <div style="color:rgba(248,250,252,.92)">Step 1 of 4</div>
          </div>

          <form id="onbProfileForm" action="/onboarding/career-consultation" method="get" autocomplete="on">
            <div class="onb-grid">
              <section class="field">
                <div class="label">Informasi Pribadi</div>
                <div class="notice" style="margin-top:-6px">Data dasar yang SIJA gunakan untuk pencocokan rekomendasi.</div>

                <label class="field">
                  <span class="label">Nama Lengkap</span>
                  <input class="input" name="full_name" required placeholder="Nama lengkap" />
                </label>

                <label class="field">
                  <span class="label">Username</span>
                  <input class="input" name="username" required placeholder="username" />
                </label>

                <label class="field">
                  <span class="label">Email</span>
                  <input class="input" name="email" required type="email" placeholder="nama@contoh.com" />
                </label>

                <label class="field">
                  <span class="label">Nomor Telepon</span>
                  <input class="input" name="phone" required placeholder="08xxxx" />
                </label>

                <label class="field">
                  <span class="label">Tanggal Lahir</span>
                  <input class="input" name="birth_date" required type="date" />
                </label>

                <div class="field">
                  <span class="label">Jenis Kelamin</span>
                  <div class="chip-grid" role="group" aria-label="Jenis Kelamin">
                    <label class="chip"><input type="radio" name="gender" value="Laki-laki" /><span class="tick">✓</span>Laki-laki</label>
                    <label class="chip"><input type="radio" name="gender" value="Perempuan" /><span class="tick">✓</span>Perempuan</label>
                    <label class="chip"><input type="radio" name="gender" value="Lainnya" /><span class="tick">✓</span>Lainnya</label>
                  </div>
                </div>

                <label class="field">
                  <span class="label">Kota Domisili</span>
                  <input class="input" name="city" required placeholder="Kota" />
                </label>
              </section>

              <section class="field">
                <div class="label">Pendidikan</div>

                <label class="field">
                  <span class="label">Sekolah / Universitas</span>
                  <input class="input" name="school" required placeholder="Nama sekolah/universitas" />
                </label>

                <label class="field">
                  <span class="label">Jurusan</span>
                  <input class="input" name="major" required placeholder="Jurusan" />
                </label>

                <div class="field">
                  <span class="label">Tingkat Pendidikan</span>
                  <div class="chip-grid" role="group" aria-label="Tingkat Pendidikan">
                    <label class="chip"><input type="radio" name="education_level" value="SMA/SMK" required /><span class="tick">✓</span>SMA/SMK</label>
                    <label class="chip"><input type="radio" name="education_level" value="D3" /><span class="tick">✓</span>D3</label>
                    <label class="chip"><input type="radio" name="education_level" value="S1" /><span class="tick">✓</span>S1</label>
                    <label class="chip"><input type="radio" name="education_level" value="S2" /><span class="tick">✓</span>S2</label>
                  </div>
                </div>

                <div class="label" style="margin-top:10px">Akun Profesional</div>

                <label class="field">
                  <span class="label">Username GitHub</span>
                  <input class="input" name="github" placeholder="@username" />
                </label>

                <label class="field">
                  <span class="label">Username LinkedIn</span>
                  <input class="input" name="linkedin" placeholder="/in/username" />
                </label>

                <label class="field">
                  <span class="label">Website Portofolio (Opsional)</span>
                  <input class="input" name="portfolio" placeholder="https://" />
                </label>

                <div class="field" style="margin-top:6px">
                  <span class="label">Skill yang Dimiliki</span>
                  <div class="choice-list" aria-label="Skill yang Dimiliki">
                    <label class="choice"><input type="checkbox" name="skills" value="UI/UX Design" /><span class="box"></span><span class="txt"><span class="name">UI/UX Design</span><span class="hint">Desain berbasis kebutuhan pengguna</span></span></label>
                    <label class="choice"><input type="checkbox" name="skills" value="Frontend Development" /><span class="box"></span><span class="txt"><span class="name">Frontend Development</span><span class="hint">Membangun antarmuka interaktif</span></span></label>
                    <label class="choice"><input type="checkbox" name="skills" value="Backend Development" /><span class="box"></span><span class="txt"><span class="name">Backend Development</span><span class="hint">Logika dan data di balik layar</span></span></label>
                    <label class="choice"><input type="checkbox" name="skills" value="Mobile Development" /><span class="box"></span><span class="txt"><span class="name">Mobile Development</span><span class="hint">Aplikasi untuk perangkat mobile</span></span></label>
                    <label class="choice"><input type="checkbox" name="skills" value="Networking" /><span class="box"></span><span class="txt"><span class="name">Networking</span><span class="hint">Konsep jaringan dan konektivitas</span></span></label>
                    <label class="choice"><input type="checkbox" name="skills" value="Cyber Security" /><span class="box"></span><span class="txt"><span class="name">Cyber Security</span><span class="hint">Keamanan sistem dan data</span></span></label>
                    <label class="choice"><input type="checkbox" name="skills" value="Data Analyst" /><span class="box"></span><span class="txt"><span class="name">Data Analyst</span><span class="hint">Analisis data untuk insight</span></span></label>
                    <label class="choice"><input type="checkbox" name="skills" value="Data Science" /><span class="box"></span><span class="txt"><span class="name">Data Science</span><span class="hint">Pemodelan dan eksperimen data</span></span></label>
                    <label class="choice"><input type="checkbox" name="skills" value="Artificial Intelligence" /><span class="box"></span><span class="txt"><span class="name">Artificial Intelligence</span><span class="hint">AI untuk prediksi dan keputusan</span></span></label>
                    <label class="choice"><input type="checkbox" name="skills" value="Digital Marketing" /><span class="box"></span><span class="txt"><span class="name">Digital Marketing</span><span class="hint">Strategi pemasaran digital</span></span></label>
                    <label class="choice"><input type="checkbox" name="skills" value="Content Creation" /><span class="box"></span><span class="txt"><span class="name">Content Creation</span><span class="hint">Konten yang informatif dan menarik</span></span></label>
                  </div>
                </div>
              </section>
            </div>

            <div id="onbStep1Error" class="notice hidden" style="color: rgba(239, 68, 68, 0.9); margin-top: 14px; font-weight: 800;">
              ✓ Harap lengkapi semua bidang wajib yang ditandai dengan warna merah.
            </div>

            <div class="row" style="margin-top:18px;justify-content:space-between">
              <a class="btn" href="#" onclick="return false;">Simpan Draft</a>
              <button id="onbStep1Continue" type="submit" class="btn btn-primary">Lanjut ke Konsultasi Karier</button>
            </div>

            <div class="onb-progressbar" style="margin-top:18px" aria-hidden="true">
              <span id="onbProgressFill"></span>
            </div>
          </form>
        </div>
      </div>
    </main>

    @vite(['resources/js/onboarding.js'])
  </body>
</html>

