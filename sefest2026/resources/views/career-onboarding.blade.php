<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Onboarding | Ojo Nganggur</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        :root {
            --primary: #3b82f6;
            --primary-soft: rgba(59, 130, 246, 0.1);
            --bg: #f8fafc;
            --card-bg: rgba(255, 255, 255, 0.8);
            --text: #1e293b;
            --text-muted: #64748b;
            --border: #e2e8f0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #f1f5f9;
            color: var(--text);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow-x: hidden;
        }

        .onboarding-container {
            width: 100%;
            max-width: 800px;
            padding: 40px 20px;
            position: relative;
        }

        .step-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 48px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            display: none;
            transition: all 0.4s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .step-card.active {
            display: block;
            animation: fadeIn 0.4s ease-out;
        }

        .progress-container {
            position: fixed;
            top: 40px;
            left: 50%;
            transform: translateX(-50%);
            width: 300px;
            height: 6px;
            background: var(--border);
            border-radius: 10px;
            overflow: hidden;
            display: flex;
        }

        .progress-bar {
            height: 100%;
            background: var(--primary);
            width: 12.5%;
            transition: width 0.4s ease;
        }

        h1, h2 {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 12px;
            line-height: 1.2;
        }

        .subtitle {
            color: var(--text-muted);
            font-size: 1.125rem;
            margin-bottom: 32px;
            line-height: 1.6;
        }

        /* Forms & Inputs */
        .form-group {
            margin-bottom: 24px;
        }

        label {
            display: block;
            font-weight: 600;
            font-size: 0.875rem;
            margin-bottom: 8px;
            color: var(--text);
        }

        input, select, textarea {
            width: 100%;
            padding: 16px 20px;
            border-radius: 16px;
            border: 1px solid var(--border);
            background: white;
            font-size: 1rem;
            transition: all 0.3s;
        }

        input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px var(--primary-soft);
        }

        /* Selectable Cards */
        .option-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            gap: 16px;
            margin-top: 24px;
        }

        .option-card {
            background: white;
            border: 2px solid var(--border);
            border-radius: 20px;
            padding: 24px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            position: relative;
        }

        .option-card:hover {
            border-color: var(--primary);
            transform: translateY(-4px);
        }

        .option-card.selected {
            border-color: var(--primary);
            background: var(--primary-soft);
        }

        .option-card i {
            margin-bottom: 12px;
            color: var(--text-muted);
        }

        .option-card.selected i {
            color: var(--primary);
        }

        .option-card span {
            display: block;
            font-weight: 600;
            font-size: 0.875rem;
        }

        /* Custom Sliders */
        .slider-container {
            margin-bottom: 32px;
        }

        .slider-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
        }

        input[type="range"] {
            -webkit-appearance: none;
            height: 8px;
            background: var(--border);
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 24px;
            height: 24px;
            background: var(--primary);
            border-radius: 50%;
            border: 4px solid white;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
        }

        /* Buttons */
        .btn-group {
            display: flex;
            gap: 16px;
            margin-top: 40px;
        }

        .btn {
            padding: 18px 32px;
            border-radius: 16px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            flex: 1;
            justify-content: center;
            box-shadow: 0 10px 15px -3px rgba(59, 130, 246, 0.3);
        }

        .btn-primary:hover {
            background: #2563eb;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: var(--border);
            color: var(--text-muted);
        }

        /* AI Loading */
        .ai-loading {
            text-align: center;
        }

        .loader-ring {
            width: 80px;
            height: 80px;
            border: 4px solid var(--primary-soft);
            border-top: 4px solid var(--primary);
            border-radius: 50%;
            margin: 0 auto 32px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .loading-text {
            font-weight: 600;
            color: var(--primary);
            margin-top: 16px;
            height: 24px;
        }

        /* Result Card */
        .result-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .match-badge {
            display: inline-block;
            padding: 8px 16px;
            background: var(--primary-soft);
            color: var(--primary);
            border-radius: 50px;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .stat-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 32px 0;
        }

        .stat-item {
            padding: 20px;
            background: white;
            border-radius: 20px;
            text-align: center;
            border: 1px solid var(--border);
        }

        .stat-item i { margin-bottom: 12px; color: var(--primary); }
        .stat-item .val { display: block; font-weight: 800; font-size: 1.125rem; }
        .stat-item .lbl { font-size: 0.75rem; color: var(--text-muted); }

        /* Illustrations */
        .illu-container {
            margin-bottom: 40px;
            text-align: center;
        }
        
        /* Mobile */
        @media (max-width: 640px) {
            .step-card { padding: 32px 24px; }
            .option-grid { grid-template-columns: 1fr 1fr; }
            .stat-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
    </div>

    <div class="onboarding-container">
        
        <!-- STEP 1: WELCOME -->
        <div class="step-card active" id="step-1">
            <div class="illu-container">
                <div style="width: 180px; height: 180px; background: var(--primary-soft); border-radius: 40px; margin: 0 auto; display: grid; place-items: center;">
                    <i data-lucide="rocket" style="width: 80px; height: 80px; color: var(--primary);"></i>
                </div>
            </div>
            <h1 style="text-align: center;">Selamat Datang di Ojo Nganggur</h1>
            <p class="subtitle" style="text-align: center;">Kami akan membantu menemukan jalur karier terbaik untukmu.</p>
            <p style="text-align: center; color: var(--text-muted); margin-bottom: 40px;">
                Jawab beberapa pertanyaan singkat agar sistem dapat memahami minat, kemampuan, dan potensi kariermu.
            </p>
            <button class="btn btn-primary" onclick="nextStep(2)">Mulai Konsultasi</button>
        </div>

        <!-- STEP 2: PROFILE -->
        <div class="step-card" id="step-2">
            <h2>Tentang Dirimu</h2>
            <p class="subtitle">Lengkapi profil dasar untuk personalisasi bimbingan.</p>
            
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" placeholder="Masukkan nama lengkapmu">
            </div>

            <div style="display: grid; grid-template-columns: 100px 1fr; gap: 20px;">
                <div class="form-group">
                    <label>Umur</label>
                    <input type="number" placeholder="20">
                </div>
                <div class="form-group">
                    <label>Pendidikan Terakhir</label>
                    <select>
                        <option>SMA/SMK</option>
                        <option>Diploma (D3)</option>
                        <option>Sarjana (S1)</option>
                        <option>Pascasarjana</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>Domisili (Kota)</label>
                <input type="text" placeholder="Contoh: Jakarta Selatan">
            </div>

            <label>Status Saat Ini</label>
            <div class="option-grid" style="grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));">
                <div class="option-card" onclick="selectOption(this, 'status')">
                    <i data-lucide="graduation-cap"></i>
                    <span>Pelajar</span>
                </div>
                <div class="option-card" onclick="selectOption(this, 'status')">
                    <i data-lucide="book-open"></i>
                    <span>Mahasiswa</span>
                </div>
                <div class="option-card" onclick="selectOption(this, 'status')">
                    <i data-lucide="briefcase"></i>
                    <span>Fresh Graduate</span>
                </div>
                <div class="option-card" onclick="selectOption(this, 'status')">
                    <i data-lucide="user-check"></i>
                    <span>Bekerja</span>
                </div>
                <div class="option-card" onclick="selectOption(this, 'status')">
                    <i data-lucide="zap"></i>
                    <span>Freelance</span>
                </div>
            </div>

            <div class="btn-group">
                <button class="btn btn-secondary" onclick="nextStep(1)">Kembali</button>
                <button class="btn btn-primary" onclick="nextStep(3)">Lanjutkan</button>
            </div>
        </div>

        <!-- STEP 3: INTERESTS -->
        <div class="step-card" id="step-3">
            <h2>Bidang apa yang paling kamu sukai?</h2>
            <p class="subtitle">Pilih minimal 2 bidang yang membuatmu antusias.</p>
            
            <div class="option-grid">
                <div class="option-card" onclick="toggleMultiSelect(this)">
                    <i data-lucide="palette"></i>
                    <span>Design</span>
                </div>
                <div class="option-card" onclick="toggleMultiSelect(this)">
                    <i data-lucide="cpu"></i>
                    <span>Teknologi</span>
                </div>
                <div class="option-card" onclick="toggleMultiSelect(this)">
                    <i data-lucide="database"></i>
                    <span>Data</span>
                </div>
                <div class="option-card" onclick="toggleMultiSelect(this)">
                    <i data-lucide="trending-up"></i>
                    <span>Bisnis</span>
                </div>
                <div class="option-card" onclick="toggleMultiSelect(this)">
                    <i data-lucide="megaphone"></i>
                    <span>Marketing</span>
                </div>
                <div class="option-card" onclick="toggleMultiSelect(this)">
                    <i data-lucide="video"></i>
                    <span>Editing Video</span>
                </div>
                <div class="option-card" onclick="toggleMultiSelect(this)">
                    <i data-lucide="camera"></i>
                    <span>Content Creator</span>
                </div>
                <div class="option-card" onclick="toggleMultiSelect(this)">
                    <i data-lucide="code-2"></i>
                    <span>Programming</span>
                </div>
                <div class="option-card" onclick="toggleMultiSelect(this)">
                    <i data-lucide="layout"></i>
                    <span>UI/UX</span>
                </div>
                <div class="option-card" onclick="toggleMultiSelect(this)">
                    <i data-lucide="mic-2"></i>
                    <span>Public Speaking</span>
                </div>
            </div>

            <div class="btn-group">
                <button class="btn btn-secondary" onclick="nextStep(2)">Kembali</button>
                <button class="btn btn-primary" onclick="nextStep(4)">Lanjutkan</button>
            </div>
        </div>

        <!-- STEP 4: SKILLS -->
        <div class="step-card" id="step-4">
            <h2>Sejauh mana kemampuanmu?</h2>
            <p class="subtitle">Beri nilai pada diri sendiri dari skala 1-10.</p>
            
            <div class="slider-container">
                <div class="slider-header">
                    <label>Kreativitas</label>
                    <span id="val-1" style="font-weight: 700; color: var(--primary);">5</span>
                </div>
                <input type="range" value="5" min="1" max="10" oninput="document.getElementById('val-1').innerText = this.value">
            </div>

            <div class="slider-container">
                <div class="slider-header">
                    <label>Problem Solving</label>
                    <span id="val-2" style="font-weight: 700; color: var(--primary);">5</span>
                </div>
                <input type="range" value="5" min="1" max="10" oninput="document.getElementById('val-2').innerText = this.value">
            </div>

            <div class="slider-container">
                <div class="slider-header">
                    <label>Komunikasi</label>
                    <span id="val-3" style="font-weight: 700; color: var(--primary);">5</span>
                </div>
                <input type="range" value="5" min="1" max="10" oninput="document.getElementById('val-3').innerText = this.value">
            </div>

            <div class="slider-container">
                <div class="slider-header">
                    <label>Coding / Teknis</label>
                    <span id="val-4" style="font-weight: 700; color: var(--primary);">5</span>
                </div>
                <input type="range" value="5" min="1" max="10" oninput="document.getElementById('val-4').innerText = this.value">
            </div>

            <div class="btn-group">
                <button class="btn btn-secondary" onclick="nextStep(3)">Kembali</button>
                <button class="btn btn-primary" onclick="nextStep(5)">Lanjutkan</button>
            </div>
        </div>

        <!-- STEP 5: WORK STYLE -->
        <div class="step-card" id="step-5">
            <h2>Gaya Bekerja</h2>
            <p class="subtitle">Bagaimana cara kerja yang paling nyaman untukmu?</p>
            
            <label>Lingkungan Kerja</label>
            <div class="option-grid" style="grid-template-columns: repeat(3, 1fr); margin-bottom: 32px;">
                <div class="option-card" onclick="selectOption(this, 'style1')">
                    <i data-lucide="users-2"></i>
                    <span>Tim</span>
                </div>
                <div class="option-card" onclick="selectOption(this, 'style1')">
                    <i data-lucide="user"></i>
                    <span>Individu</span>
                </div>
                <div class="option-card" onclick="selectOption(this, 'style1')">
                    <i data-lucide="home"></i>
                    <span>Hybrid</span>
                </div>
            </div>

            <label>Tipe Pekerjaan yang Disukai</label>
            <div class="option-grid" style="grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));">
                <div class="option-card" onclick="selectOption(this, 'style2')">
                    <i data-lucide="sparkles"></i>
                    <span>Kreatif</span>
                </div>
                <div class="option-card" onclick="selectOption(this, 'style2')">
                    <i data-lucide="settings"></i>
                    <span>Teknis</span>
                </div>
                <div class="option-card" onclick="selectOption(this, 'style2')">
                    <i data-lucide="search"></i>
                    <span>Analitis</span>
                </div>
                <div class="option-card" onclick="selectOption(this, 'style2')">
                    <i data-lucide="refresh-cw"></i>
                    <span>Fleksibel</span>
                </div>
            </div>

            <div class="btn-group">
                <button class="btn btn-secondary" onclick="nextStep(4)">Kembali</button>
                <button class="btn btn-primary" onclick="nextStep(6)">Lanjutkan</button>
            </div>
        </div>

        <!-- STEP 6: GOALS -->
        <div class="step-card" id="step-6">
            <h2>Tujuan Karier Utama</h2>
            <p class="subtitle">Apa yang ingin kamu capai dalam 5 tahun ke depan?</p>
            
            <div class="option-grid">
                <div class="option-card" onclick="toggleMultiSelect(this)">
                    <i data-lucide="dollar-sign"></i>
                    <span>Gaji Tinggi</span>
                </div>
                <div class="option-card" onclick="toggleMultiSelect(this)">
                    <i data-lucide="map-pin"></i>
                    <span>Work Anywhere</span>
                </div>
                <div class="option-card" onclick="toggleMultiSelect(this)">
                    <i data-lucide="shield-check"></i>
                    <span>Kerja Stabil</span>
                </div>
                <div class="option-card" onclick="toggleMultiSelect(this)">
                    <i data-lucide="building-2"></i>
                    <span>Bangun Bisnis</span>
                </div>
                <div class="option-card" onclick="toggleMultiSelect(this)">
                    <i data-lucide="globe"></i>
                    <span>Remote Work</span>
                </div>
                <div class="option-card" onclick="toggleMultiSelect(this)">
                    <i data-lucide="heart"></i>
                    <span>Impact Sosial</span>
                </div>
            </div>

            <div class="btn-group">
                <button class="btn btn-secondary" onclick="nextStep(5)">Kembali</button>
                <button class="btn btn-primary" onclick="nextStep(7)">Analisis Karier</button>
            </div>
        </div>

        <!-- STEP 7: AI ANALYSIS (LOADING) -->
        <div class="step-card" id="step-7">
            <div class="ai-loading">
                <div class="loader-ring"></div>
                <h2>Menghitung Rekomendasi...</h2>
                <p class="subtitle">Mencocokkan profilmu dengan tren industri dan mentor terbaik.</p>
                <div class="loading-text" id="loadingStatus">Menganalisis kemampuanmu...</div>
                
                <div style="margin-top: 40px; display: flex; flex-wrap: wrap; justify-content: center; gap: 12px;">
                    <span class="match-badge" style="opacity: 0.5;">Analisis Kepribadian</span>
                    <span class="match-badge" style="opacity: 0.5;">Pemetaan Skill</span>
                    <span class="match-badge" style="opacity: 0.5;">Matchmaking Mentor</span>
                </div>
            </div>
        </div>

        <!-- STEP 8: RESULT -->
        <div class="step-card" id="step-8">
            <div class="result-header">
                <div class="match-badge">98% Match Score</div>
                <h2>Kamu cocok menjadi <br> <span style="color: var(--primary);">UI/UX Designer</span></h2>
                <p class="subtitle">Berdasarkan profil kreatif dan analitis yang kamu miliki.</p>
            </div>

            <div class="stat-grid">
                <div class="stat-item">
                    <i data-lucide="bar-chart-2"></i>
                    <span class="val">Tinggi</span>
                    <span class="lbl">Tren Karier</span>
                </div>
                <div class="stat-item">
                    <i data-lucide="wallet"></i>
                    <span class="val">8-25jt</span>
                    <span class="lbl">Est. Gaji</span>
                </div>
                <div class="stat-item">
                    <i data-lucide="users"></i>
                    <span class="val">120+</span>
                    <span class="lbl">Mentor Tersedia</span>
                </div>
            </div>

            <div style="background: var(--primary-soft); padding: 24px; border-radius: 20px; margin-bottom: 32px;">
                <h4 style="font-weight: 700; margin-bottom: 12px;">Mengapa karir ini cocok?</h4>
                <ul style="list-style: none; color: var(--text-muted); font-size: 0.875rem; display: grid; gap: 8px;">
                    <li>• Sesuai dengan skor kreativitasmu yang tinggi (9/10).</li>
                    <li>• Cocok untuk tipe kerja Hybrid yang kamu sukai.</li>
                    <li>• Memiliki potensi Remote Work sesuai tujuanmu.</li>
                </ul>
            </div>

            <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 40px; padding: 16px; border: 1px solid var(--border); border-radius: 20px;">
                <img src="https://ui-avatars.com/api/?name=Farhan+Akbar&background=3b82f6&color=fff" style="width: 48px; height: 48px; border-radius: 50%;">
                <div>
                    <span style="display: block; font-size: 0.75rem; color: var(--text-muted);">Rekomendasi Mentor</span>
                    <span style="display: block; font-weight: 700;">Farhan Akbar • Senior Product Designer</span>
                </div>
                <i data-lucide="chevron-right" style="margin-left: auto; color: var(--text-muted);"></i>
            </div>

            <div class="btn-group">
                <a href="/dashboard" class="btn btn-primary" style="text-decoration: none;">Mulai Journey Sekarang</a>
            </div>
        </div>

    </div>

    <script>
        // Init Lucide
        lucide.createIcons();

        let currentStep = 1;
        const totalSteps = 8;
        const loadingTexts = [
            "Menganalisis kemampuanmu...",
            "Mencocokkan dengan data karier...",
            "Mencari mentor terbaik...",
            "Menghitung potensi gaji...",
            "Menyusun roadmap harian..."
        ];

        function nextStep(step) {
            // Hide current
            document.getElementById(`step-${currentStep}`).classList.remove('active');
            
            currentStep = step;

            // Show next
            const next = document.getElementById(`step-${step}`);
            next.classList.add('active');

            // Update Progress
            const progress = (step / totalSteps) * 100;
            document.getElementById('progressBar').style.width = `${progress}%`;

            // If Step 7 (Loading AI)
            if (step === 7) {
                runAILoading();
            }
        }

        function selectOption(el, group) {
            const siblings = el.parentElement.querySelectorAll('.option-card');
            siblings.forEach(s => s.classList.remove('selected'));
            el.classList.add('selected');
        }

        function toggleMultiSelect(el) {
            el.classList.toggle('selected');
        }

        function runAILoading() {
            let i = 0;
            const statusEl = document.getElementById('loadingStatus');
            
            const interval = setInterval(() => {
                statusEl.innerText = loadingTexts[i];
                i++;
                if (i >= loadingTexts.length) {
                    clearInterval(interval);
                    setTimeout(() => nextStep(8), 1000);
                }
            }, 800);
        }
    </script>
</body>
</html>