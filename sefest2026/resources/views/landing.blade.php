<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Ojo Nganggur - Prototype Karier</title>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@700;800&display=swap"
			rel="stylesheet"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<link rel="stylesheet" href="{{ asset('css/landing.css') }}" />
	</head>
	<body>
		<nav class="navbar">
			<div class="container nav-content">
				<div class="logo">
					<i data-lucide="briefcase"></i>
					Ojo Nganggur
				</div>
				<div class="nav-links">
					<a href="#beranda">Beranda</a>
					<div class="nav-dropdown">
						<a class="dropdown-toggle" href="#">
							Service
							<i class="fa-solid fa-chevron-down"></i>
						</a>
						<div class="dropdown-menu">
							<a href="#eksplor">Eksplor Karier</a>
							<a href="#simulasi">Simulasi</a>
							<a href="#portofolio">Portofolio</a>
						</div>
					</div>
					<a href="#tentang">Tentang</a>
				</div>
				<div class="nav-actions">
					<a class="btn btn-secondary" href="{{ url('/login') }}">Login</a>
					<a class="btn btn-primary" href="{{ url('/register') }}">Daftar</a>
				</div>
			</div>
		</nav>

		<section id="beranda" class="section hero">
			<div class="hero-parallax hero-full" id="hero-parallax">
				<div class="hero-headline">
					<h1 class="title">
						Ojo Nganggur: <br /> Platform Karir Impian
					</h1>
					<p class="hero-subtitle">
						Kami membangun platform karir masa depan dengan teknologi simulasi tercanggih. 
						Temukan passion kamu, asah skill di tugas nyata, dan raih karir impianmu hari ini.
					</p>
					<div class="hero-actions">
						<a class="btn btn-primary" href="#eksplor">
							Jelajahi Karir
							<i class="fa-solid fa-arrow-right"></i>
						</a>
						<a class="btn btn-secondary" href="#simulasi">
							Coba Simulasi
							<i class="fa-regular fa-circle-play"></i>
						</a>
					</div>
				</div>

				<div class="hero-strip" id="hero-strip">
					<div class="hero-row" data-direction="reverse"></div>
					<div class="hero-row" data-direction="forward"></div>
					<div class="hero-row" data-direction="reverse"></div>
				</div>
			</div>
		</section>

		<section class="section">
			<div class="container">
				<div class="features-grid">
					<div class="card">
						<i data-lucide="map" style="color: var(--blue-600)"></i>
						<h3 class="title">Roadmap Karier</h3>
						<p class="subtitle">Rute belajar dan sertifikasi untuk profesi pilihan.</p>
					</div>
					<div class="card">
						<i data-lucide="activity" style="color: var(--blue-600)"></i>
						<h3 class="title">Simulasi Realistis</h3>
						<p class="subtitle">Coba tugas nyata sebelum menentukan bidang kerja.</p>
					</div>
					<div class="card">
						<i data-lucide="layout" style="color: var(--blue-600)"></i>
						<h3 class="title">Portofolio Digital</h3>
						<p class="subtitle">Template modern untuk memamerkan karya terbaik.</p>
					</div>
					<div class="card">
						<i data-lucide="bar-chart-3" style="color: var(--blue-600)"></i>
						<h3 class="title">Insight Pasar</h3>
						<p class="subtitle">Data tren, gaji, dan skill paling dicari.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="eksplor" class="section">
			<div class="container">
				<div style="display: flex; align-items: center; justify-content: space-between; gap: 20px; flex-wrap: wrap;">
					<div>
						<span class="badge">
							<i data-lucide="search"></i>
							Eksplor Karier
						</span>
						<h2 class="title" style="margin-top: 12px">Data Pekerjaan Indonesia</h2>
						<p class="subtitle">Temukan profesi terbaik berdasarkan lokasi, gaji, dan skill.</p>
					</div>
					<a class="btn btn-secondary" href="#simulasi">Lihat Simulasi</a>
				</div>

				<div class="jobs-controls">
					<input class="input" type="text" id="job-search" placeholder="Cari profesi" />
					<select class="select" id="job-category">
						<option value="">Kategori</option>
						<option value="design">Desain</option>
						<option value="data">Data</option>
						<option value="tech">Teknologi</option>
						<option value="admin">Administrasi</option>
						<option value="creative">Kreatif</option>
						<option value="education">Pendidikan</option>
						<option value="industry">Industri</option>
					</select>
					<select class="select" id="job-location">
						<option value="">Lokasi</option>
						<option value="jakarta">Jakarta</option>
						<option value="bandung">Bandung</option>
						<option value="surabaya">Surabaya</option>
						<option value="yogyakarta">Yogyakarta</option>
					</select>
					<select class="select" id="job-salary">
						<option value="">Gaji</option>
						<option value="6">6 - 10 juta</option>
						<option value="10">10 - 15 juta</option>
						<option value="15">15 juta+</option>
					</select>
				</div>

				<div class="jobs-grid" id="jobs-grid">
					<div
						class="card jobs-card"
						data-title="UI Designer"
						data-category="design"
						data-location="jakarta"
						data-salary="10"
						data-skill="Figma, UI Design"
						data-trend="Naik"
						data-desc="Mendesain antarmuka aplikasi dengan fokus pada pengalaman pengguna dan sistem desain konsisten."
					>
						<strong>UI Designer</strong>
						<p class="subtitle">Jakarta • Full-time</p>
						<div class="job-meta">
							<span class="tag">Rp 10-15 juta</span>
							<span class="tag">Figma</span>
							<span class="tag">Tren naik</span>
						</div>
						<div class="job-actions">
							<button class="btn btn-secondary job-detail">Detail</button>
							<a class="btn btn-primary" href="#simulasi">Simulasi</a>
						</div>
					</div>
					<div
						class="card jobs-card"
						data-title="Data Analyst"
						data-category="data"
						data-location="bandung"
						data-salary="10"
						data-skill="SQL, Dashboard"
						data-trend="Naik"
						data-desc="Menganalisis data bisnis dan membuat dashboard untuk keputusan strategis."
					>
						<strong>Data Analyst</strong>
						<p class="subtitle">Bandung • Hybrid</p>
						<div class="job-meta">
							<span class="tag">Rp 10-15 juta</span>
							<span class="tag">SQL</span>
							<span class="tag">Insight</span>
						</div>
						<div class="job-actions">
							<button class="btn btn-secondary job-detail">Detail</button>
							<a class="btn btn-primary" href="#simulasi">Simulasi</a>
						</div>
					</div>
					<div
						class="card jobs-card"
						data-title="Programmer"
						data-category="tech"
						data-location="jakarta"
						data-salary="15"
						data-skill="Laravel, API"
						data-trend="Stabil"
						data-desc="Membangun aplikasi web, API, dan integrasi sistem untuk produk digital."
					>
						<strong>Programmer</strong>
						<p class="subtitle">Jakarta • Remote</p>
						<div class="job-meta">
							<span class="tag">Rp 15 juta+</span>
							<span class="tag">Laravel</span>
							<span class="tag">Backend</span>
						</div>
						<div class="job-actions">
							<button class="btn btn-secondary job-detail">Detail</button>
							<a class="btn btn-primary" href="#simulasi">Simulasi</a>
						</div>
					</div>
					<div
						class="card jobs-card"
						data-title="Admin"
						data-category="admin"
						data-location="surabaya"
						data-salary="6"
						data-skill="Office, Dokumentasi"
						data-trend="Stabil"
						data-desc="Mengelola administrasi, laporan, dan koordinasi internal."
					>
						<strong>Admin</strong>
						<p class="subtitle">Surabaya • Full-time</p>
						<div class="job-meta">
							<span class="tag">Rp 6-10 juta</span>
							<span class="tag">Office</span>
							<span class="tag">Operasional</span>
						</div>
						<div class="job-actions">
							<button class="btn btn-secondary job-detail">Detail</button>
							<a class="btn btn-primary" href="#simulasi">Simulasi</a>
						</div>
					</div>
					<div
						class="card jobs-card"
						data-title="Content Creator"
						data-category="creative"
						data-location="yogyakarta"
						data-salary="6"
						data-skill="Copywriting, Editing"
						data-trend="Naik"
						data-desc="Membuat konten kreatif untuk brand dengan strategi multi platform."
					>
						<strong>Content Creator</strong>
						<p class="subtitle">Yogyakarta • Hybrid</p>
						<div class="job-meta">
							<span class="tag">Rp 6-10 juta</span>
							<span class="tag">Social Media</span>
							<span class="tag">Tren naik</span>
						</div>
						<div class="job-actions">
							<button class="btn btn-secondary job-detail">Detail</button>
							<a class="btn btn-primary" href="#simulasi">Simulasi</a>
						</div>
					</div>
					<div
						class="card jobs-card"
						data-title="Marketing"
						data-category="creative"
						data-location="jakarta"
						data-salary="10"
						data-skill="Campaign, Growth"
						data-trend="Naik"
						data-desc="Merancang strategi pemasaran, kampanye digital, dan analisis performa."
					>
						<strong>Marketing</strong>
						<p class="subtitle">Jakarta • Full-time</p>
						<div class="job-meta">
							<span class="tag">Rp 10-15 juta</span>
							<span class="tag">Growth</span>
							<span class="tag">Campaign</span>
						</div>
						<div class="job-actions">
							<button class="btn btn-secondary job-detail">Detail</button>
							<a class="btn btn-primary" href="#simulasi">Simulasi</a>
						</div>
					</div>
					<div
						class="card jobs-card"
						data-title="Operator Industri"
						data-category="industry"
						data-location="surabaya"
						data-salary="6"
						data-skill="Safety, Mesin"
						data-trend="Stabil"
						data-desc="Mengoperasikan mesin produksi dan menjaga standar kualitas."
					>
						<strong>Operator Industri</strong>
						<p class="subtitle">Surabaya • Shift</p>
						<div class="job-meta">
							<span class="tag">Rp 6-10 juta</span>
							<span class="tag">Safety</span>
							<span class="tag">Quality</span>
						</div>
						<div class="job-actions">
							<button class="btn btn-secondary job-detail">Detail</button>
							<a class="btn btn-primary" href="#simulasi">Simulasi</a>
						</div>
					</div>
					<div
						class="card jobs-card"
						data-title="Guru"
						data-category="education"
						data-location="bandung"
						data-salary="6"
						data-skill="Teaching, Kurikulum"
						data-trend="Naik"
						data-desc="Mengajar dengan kurikulum modern dan pendekatan interaktif."
					>
						<strong>Guru</strong>
						<p class="subtitle">Bandung • Full-time</p>
						<div class="job-meta">
							<span class="tag">Rp 6-10 juta</span>
							<span class="tag">Teaching</span>
							<span class="tag">EdTech</span>
						</div>
						<div class="job-actions">
							<button class="btn btn-secondary job-detail">Detail</button>
							<a class="btn btn-primary" href="#simulasi">Simulasi</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="simulasi" class="section">
			<div class="container">
				<div>
					<span class="badge">
						<i data-lucide="play-circle"></i>
						Simulasi Kerja
					</span>
					<h2 class="title" style="margin-top: 12px">Coba Simulasi Profesi</h2>
					<p class="subtitle">Jawab mini simulasi, dapatkan skor dan feedback cepat.</p>
				</div>
				<div class="sim-grid" style="margin-top: 30px">
					<div class="card">
						<h3 class="title" style="font-size: 20px">Pilih Profesi</h3>
						<p class="subtitle">Tentukan bidang yang ingin kamu coba hari ini.</p>
						<select class="select" id="sim-job" style="margin-top: 16px">
							<option value="ui">UI Designer</option>
							<option value="dev">Programmer</option>
							<option value="creator">Content Creator</option>
							<option value="data">Data Analyst</option>
						</select>
						<div class="card" style="margin-top: 20px; background: #f8fafc">
							<strong>Deskripsi Profesi</strong>
							<p class="subtitle" id="sim-desc">
								Mendesain antarmuka dan sistem desain yang konsisten.
							</p>
						</div>
					</div>
					<div class="sim-quiz">
						<h3 class="title" style="font-size: 20px">Mini Simulasi</h3>
						<p class="subtitle" id="sim-question">
							Pilih layout terbaik untuk landing page aplikasi keuangan.
						</p>
						<div style="margin-top: 16px; display: grid; gap: 12px" id="sim-options">
							<label class="card" style="cursor: pointer">
								<input type="radio" name="sim-answer" value="A" /> Layout A: fokus pada CTA dan ringkasan produk.
							</label>
							<label class="card" style="cursor: pointer">
								<input type="radio" name="sim-answer" value="B" /> Layout B: menonjolkan gallery dan testimoni.
							</label>
							<label class="card" style="cursor: pointer">
								<input type="radio" name="sim-answer" value="C" /> Layout C: menampilkan tabel harga di atas.
							</label>
						</div>
						<button class="btn btn-primary" style="margin-top: 18px" id="sim-submit">
							Kirim Jawaban
						</button>
						<div class="sim-result" id="sim-result" style="display: none"></div>
					</div>
				</div>
			</div>
		</section>

		<section id="portofolio" class="section">
			<div class="container">
				<div>
					<span class="badge">
						<i data-lucide="palette"></i>
						Portofolio Builder
					</span>
					<h2 class="title" style="margin-top: 12px">Bangun Portofolio Profesional</h2>
					<p class="subtitle">Pilih template, ubah warna, dan preview instan.</p>
				</div>
				<div class="portfolio-grid" style="margin-top: 30px">
					<div>
						<div class="card">
							<h3 class="title" style="font-size: 20px">Form Portofolio</h3>
							<div style="display: grid; gap: 12px; margin-top: 16px">
								<input class="input" type="text" placeholder="Nama lengkap" />
								<input class="input" type="text" placeholder="Bio singkat" />
								<input class="input" type="text" placeholder="Skill utama" />
								<input class="input" type="text" placeholder="Pengalaman" />
								<input class="input" type="text" placeholder="Pendidikan" />
								<input class="input" type="text" placeholder="Project unggulan" />
								<input class="input" type="text" placeholder="Kontak" />
								<input class="input" type="file" />
							</div>
							<div style="display: flex; gap: 12px; margin-top: 16px; flex-wrap: wrap">
								<select class="select" id="font-select">
									<option value="Inter">Inter</option>
									<option value="Poppins">Poppins</option>
								</select>
								<input class="input" type="color" id="color-picker" value="#1555a5" />
							</div>
							<div style="display: flex; gap: 12px; margin-top: 16px; flex-wrap: wrap">
								<button class="btn btn-secondary">Download Preview</button>
								<button class="btn btn-primary">Share Link UI</button>
							</div>
						</div>
						<div style="margin-top: 20px">
							<h4 class="title" style="font-size: 18px">Template Portofolio</h4>
							<div class="portfolio-templates" style="margin-top: 14px">
								<div class="card template-card active" data-template="Clean">Clean</div>
								<div class="card template-card" data-template="Modern">Modern</div>
								<div class="card template-card" data-template="Dark">Dark</div>
								<div class="card template-card" data-template="Corporate">Corporate</div>
								<div class="card template-card" data-template="Creative">Creative</div>
								<div class="card template-card" data-template="Minimal">Minimal</div>
								<div class="card template-card" data-template="Elegant">Elegant</div>
								<div class="card template-card" data-template="Showcase">Portfolio Showcase</div>
								<div class="card template-card" data-template="Startup">Startup</div>
								<div class="card template-card" data-template="Personal">Personal</div>
							</div>
						</div>
					</div>
					<div class="portfolio-preview" id="portfolio-preview">
						<h3 class="title" style="font-size: 22px">Preview Template: Clean</h3>
						<p class="subtitle">Tata letak bersih untuk portofolio profesional.</p>
						<div style="margin-top: 20px">
							<div class="card" style="background: #f1f5f9">
								<strong>Nama Kamu</strong>
								<p class="subtitle">UI/UX Designer | Jakarta</p>
								<div style="display: flex; gap: 8px; margin-top: 10px; flex-wrap: wrap">
									<span class="tag">Figma</span>
									<span class="tag">Design System</span>
									<span class="tag">Prototyping</span>
								</div>
							</div>
							<div style="margin-top: 16px; display: grid; gap: 12px">
								<div class="card">Project: Mobile Banking Redesign</div>
								<div class="card">Project: Career Platform Dashboard</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section dashboard">
			<div class="container">
				<div>
					<span class="badge">
						<i data-lucide="layout-dashboard"></i>
						Dashboard
					</span>
					<h2 class="title" style="margin-top: 12px">Rangkuman Aktivitas</h2>
				</div>
				<div class="dashboard-layout" style="margin-top: 30px">
					<div class="sidebar">
						<a class="active" href="#dashboard"><i class="fa-regular fa-chart-bar"></i> Overview</a>
						<a href="#"><i class="fa-regular fa-bookmark"></i> Pekerjaan Tersimpan</a>
						<a href="#"><i class="fa-regular fa-circle-play"></i> Riwayat Simulasi</a>
						<a href="#"><i class="fa-regular fa-pen-to-square"></i> Portofolio</a>
						<a href="#"><i class="fa-regular fa-star"></i> Rekomendasi</a>
					</div>
					<div class="dashboard-grid">
						<div class="card">
							<strong>Progress Skill</strong>
							<p class="subtitle">UI Design 78% • Data Analytics 52%</p>
						</div>
						<div class="card">
							<strong>Riwayat Simulasi</strong>
							<p class="subtitle">5 simulasi selesai • Skor rata-rata 84</p>
						</div>
						<div class="card">
							<strong>Pekerjaan Tersimpan</strong>
							<p class="subtitle">12 posisi aktif untuk dilamar</p>
						</div>
						<div class="card">
							<strong>Rekomendasi</strong>
							<p class="subtitle">Growth Marketing • Data Visualization</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section" id="tentang">
			<div class="container">
				<div class="roadmap-grid">
					<div class="card">
						<h3 class="title">Roadmap Karier</h3>
						<p class="subtitle">Tahapan skill dan sertifikasi yang disarankan.</p>
						<ul style="margin-top: 12px; color: var(--gray-500)">
							<li>Fundamental skill & soft skill</li>
							<li>Project simulasi dan portfolio</li>
							<li>Mentoring dan review</li>
						</ul>
					</div>
					<div class="card">
						<h3 class="title">Partner</h3>
						<div class="partner-grid" style="margin-top: 12px">
							<span class="tag">Tech Corp</span>
							<span class="tag">Creative Hub</span>
							<span class="tag">Edu Center</span>
							<span class="tag">Startup Labs</span>
						</div>
					</div>
					<div class="card">
						<h3 class="title">Statistik Platform</h3>
						<p class="subtitle">Pertumbuhan pengguna dan kebutuhan pasar kerja.</p>
						<div style="display: grid; gap: 8px; margin-top: 12px">
							<strong>65%</strong>
							<span class="subtitle">Peningkatan minat karier digital</span>
							<strong>4.8/5</strong>
							<span class="subtitle">Kepuasan pengguna</span>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section">
			<div class="container">
				<div class="testimonial-grid">
					<div class="card">
						<p class="subtitle">"Simulasi membuat saya yakin memilih jalur data analyst."</p>
						<strong>Rani W.</strong>
					</div>
					<div class="card">
						<p class="subtitle">"Template portofolio profesional dan mudah digunakan."</p>
						<strong>Aditya P.</strong>
					</div>
					<div class="card">
						<p class="subtitle">"Platform ini terasa seperti produk karier sungguhan."</p>
						<strong>Intan S.</strong>
					</div>
				</div>
			</div>
		</section>

		<section class="section">
			<div class="container">
				<div class="card">
					<h3 class="title">FAQ</h3>
					<div class="faq-item">
						<div class="faq-question">Bagaimana cara memulai simulasi? <i class="fa-solid fa-chevron-down"></i></div>
						<div class="faq-answer">Pilih profesi di halaman simulasi, jawab mini kuis, lalu lihat hasilnya.</div>
					</div>
					<div class="faq-item">
						<div class="faq-question">Apakah portofolio bisa diunduh? <i class="fa-solid fa-chevron-down"></i></div>
						<div class="faq-answer">Ya, cukup klik tombol download preview pada bagian portofolio.</div>
					</div>
					<div class="faq-item">
						<div class="faq-question">Apakah data pekerjaan diperbarui? <i class="fa-solid fa-chevron-down"></i></div>
						<div class="faq-answer">Prototype ini menampilkan data simulasi untuk keperluan lomba.</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section">
			<div class="container">
				<div class="cta">
					<h2 class="title" style="color: #ffffff">Siap mulai perjalanan karier?</h2>
					<p class="subtitle" style="color: rgba(255, 255, 255, 0.8)">
						Eksplor, simulasi, dan bangun portofolio profesional dalam satu platform.
					</p>
					<div>
						<a class="btn btn-secondary" href="#eksplor">Eksplor Sekarang</a>
						<a class="btn btn-primary" href="#daftar">Daftar Gratis</a>
					</div>
				</div>
			</div>
		</section>

		<footer class="footer">
			<div class="container">
				<div class="footer-grid">
					<div>
						<span class="footer-logo">Ojo Nganggur</span>
						<p style="line-height: 1.6; margin-bottom: 24px">
							Platform eksplorasi karier interaktif yang membantu anak muda Indonesia menemukan passion dan mempersiapkan masa depan mereka melalui simulasi dunia kerja.
						</p>
						<div class="footer-social">
							<a href="#" class="social-icon"><i data-lucide="instagram"></i></a>
							<a href="#" class="social-icon"><i data-lucide="twitter"></i></a>
							<a href="#" class="social-icon"><i data-lucide="linkedin"></i></a>
							<a href="#" class="social-icon"><i data-lucide="youtube"></i></a>
						</div>
					</div>
					
					<div>
						<h4>Navigasi</h4>
						<div class="footer-links">
							<a href="#beranda">Beranda</a>
							<a href="#eksplor">Eksplor Karier</a>
							<a href="#simulasi">Simulasi Profesi</a>
							<a href="#portofolio">Dashboard</a>
						</div>
					</div>

					<div>
						<h4>Perusahaan</h4>
						<div class="footer-links">
							<a href="#">Tentang Kami</a>
							<a href="#">Cara Kerja</a>
							<a href="#">Partner Mentor</a>
							<a href="#">Kebijakan Privasi</a>
						</div>
					</div>

					<div>
						<h4>Hubungi Kami</h4>
						<div class="footer-links">
							<a href="mailto:support@ojonganggur.id" style="display: flex; align-items: center; gap: 8px">
								<i data-lucide="mail" style="width: 16px"></i> support@ojonganggur.id
							</a>
							<p style="display: flex; align-items: center; gap: 8px; font-size: 0.9375rem">
								<i data-lucide="map-pin" style="width: 16px"></i> Jakarta, Indonesia
							</a>
							<a href="tel:+62211234567" style="display: flex; align-items: center; gap: 8px">
								<i data-lucide="phone" style="width: 16px"></i> +62 21 1234-567
							</a>
						</div>
					</div>
				</div>

				<div class="footer-bottom">
					<p>&copy; 2026 Ojo Nganggur Platform. Part of SEFEST Web Design Competition.</p>
				</div>
			</div>
		</footer>

		<div class="modal" id="job-modal">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="title" id="modal-title">Detail Profesi</h3>
					<button class="btn btn-secondary" id="modal-close">Tutup</button>
				</div>
				<p class="subtitle" id="modal-desc"></p>
				<div class="job-meta" id="modal-meta" style="margin-top: 12px"></div>
			</div>
		</div>

		<script src="https://unpkg.com/lucide@latest"></script>
		<script src="{{ asset('js/landing.js') }}"></script>
	</body>
</html>