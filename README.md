# SIJA (Simulasi Kerja)

Platform simulasi karier dan eksplorasi pekerjaan berbasis AI untuk membantu pengguna menemukan jalur karier terbaik melalui simulasi interaktif, roadmap, mentor, dan portofolio digital.

## Tentang Project

**SIJA** adalah website yang dirancang untuk membantu pengguna:
- Mengenali minat dan kemampuan secara mendalam.
- Mendapatkan rekomendasi karier berbasis analisis AI.
- Mencoba simulasi pekerjaan nyata sebelum terjun ke industri.
- Belajar langsung melalui bimbingan mentor berpengalaman.
- Membangun portofolio digital yang profesional dan siap kerja.

Website ini dibuat untuk mendukung pencapaian global:
- **SDG 8** — Decent Work and Economic Growth
- **SDG 9** — Industry, Innovation, and Infrastructure

---

## Fitur Utama

### 🤖 AI Career Recommendation
Sistem cerdas yang merekomendasikan jalur karier paling relevan berdasarkan minat, kemampuan, gaya kerja, dan tujuan masa depan pengguna.

### 🎮 Career Simulation
Pengalaman kerja interaktif untuk berbagai profesi seperti:
- **UI/UX Designer**
- **Frontend Developer**
- **Data Analyst**
- **Content Creator**, dan lainnya.

### 🗺️ Mentor Guided Journey
Setiap jalur karier dilengkapi dengan mentor pendamping, roadmap belajar yang terstruktur, tantangan mingguan, serta feedback langsung untuk meningkatkan progress level.

### 🎨 Portfolio Builder
Buat portofolio profesional secara instan menggunakan berbagai pilihan template modern yang dapat diunduh atau dibagikan melalui link unik.

### 📈 Skill Progress Tracking
Dashboard komprehensif untuk memantau perkembangan skill, riwayat tantangan yang diselesaikan, pencapaian sertifikat, dan sisa roadmap yang harus ditempuh.

---

## Teknologi yang Digunakan

- **Framework:** [Laravel 11](https://laravel.com)
- **Frontend:** Blade Templating, Vanilla JavaScript
- **Styling:** Custom CSS (Modular Dashboard & Landing System)
- **Icons:** [Lucide Icons](https://lucide.dev)
- **Animation:** CSS State Animations & Transisi Smooth

---

## Cara Menjalankan Project

### 1. Clone Repository
```bash
git clone https://github.com/username/ojo-nganggur.git
cd sefest2026
```

### 2. Instalasi Dependensi
Pastikan Anda sudah menginstal PHP dan Composer.
```bash
composer install
npm install && npm run dev
```

### 3. Konfigurasi Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Menjalankan Server
```bash
php artisan serve
```
Akses website di: `http://127.0.0.1:8000`

---

## Struktur Folder (Laravel Structure)

```text
sefest2026/
├── app/                  # Logika Bisnis & Models
├── config/               # Konfigurasi Aplikasi
├── database/             # Migrasi & Seeders
├── public/               # File Statis (CSS, JS, Images)
│   ├── css/              # Dashboard & Landing Style
│   └── js/               # Interaktivitas UI
├── resources/
│   ├── js/               # Assets JS (Vite)
│   └── views/            # Template Blade (HTML)
├── routes/               # Definisi Route (web.php)
└── vite.config.js        # Konfigurasi Build Tool
```

---

## Alur Pengguna

1.  **Register:** Pengguna membuat akun baru.
2.  **Career Consultation:** Mengisi profil minat, skill, dan gaya kerja.
3.  **AI Recommendation:** Sistem memberikan rekomendasi profesi terbaik.
4.  **Career Journey:** Pengguna memilih jalur karier yang diinginkan.
5.  **Mentor Assignment:** Sistem memasangkan pengguna dengan mentor yang sesuai.
6.  **Simulation & Challenge:** Mengerjakan simulasi tugas step-by-step.
7.  **Review & Feedback:** Mendapatkan penilaian dari mentor/sistem.
8.  **Portfolio Creation:** Hasil proyek otomatis masuk ke dalam portofolio digital.

---

## Design System

- **Typography:** Poppins (Header), Inter (Body)
- **Color Palette:**
    - **Primary:** Blue (#3b82f6)
    - **Secondary:** Dark Blue/Navy (#0f172a)
    - **Neutral:** Slate Gray, White, Light Gray
- **Style Guidelines:** Modern SaaS, Clean UI, Solid Professional Colors, Rounded Elements.

---

## Developer
**Ojo Nganggur Team - SEFEST 2026**

