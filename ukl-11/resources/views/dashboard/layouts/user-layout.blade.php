z<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'SIJA') | SIJA</title>
@vite(['resources/css/style.css', 'resources/css/roadmap-karier.css', 'resources/js/app.js', 'resources/js/dashboard.js'])
    <script src="https://unpkg.com/lucide@latest"></script>
  </head>

  <body>
    <div class="sija-dashboard">
      <!-- Sidebar (L) -->
      <aside class="sija-sidebar" aria-label="Sidebar">
        <div class="sija-sidebar-inner">
          <div class="sija-brand" aria-label="SIJA">
            <div class="sija-brand-mark">SIJA</div>
            <div class="sija-brand-tag">Simulasi Karier Masa Depan</div>
          </div>

          <nav class="sija-nav">
            <a
              class="sija-nav-item {{ ($active ?? '') === 'dashboard' ? 'is-active' : '' }}"
              href="{{ Route::has('dashboard') ? route('dashboard') : '#' }}"
            >
              <i data-lucide="layout-dashboard" class="sija-nav-icon"></i>
              <span>Dashboard</span>
            </a>

            <a
              class="sija-nav-item {{ ($active ?? '') === 'rekomendasi' ? 'is-active' : '' }}"
              href="{{ Route::has('dashboard.rekomendasi-karier') ? route('dashboard.rekomendasi-karier') : '#' }}"
            >
              <i data-lucide="sparkles" class="sija-nav-icon"></i>
              <span>Rekomendasi Karier</span>
            </a>

            <a
              class="sija-nav-item {{ ($active ?? '') === 'simulasi' ? 'is-active' : '' }}"
              href="{{ Route::has('dashboard.simulasi-saya') ? route('dashboard.simulasi-saya') : '#' }}"
            >
              <i data-lucide="list-check" class="sija-nav-icon"></i>
              <span>Simulasi Saya</span>
            </a>

            <a
              class="sija-nav-item {{ ($active ?? '') === 'profesi' ? 'is-active' : '' }}"
              href="{{ Route::has('dashboard.jelajahi-profesi') ? route('dashboard.jelajahi-profesi') : '#' }}"
            >
              <i data-lucide="search" class="sija-nav-icon"></i>
              <span>Jelajahi Profesi</span>
            </a>

            <a
              class="sija-nav-item {{ ($active ?? '') === 'mentor' ? 'is-active' : '' }}"
              href="{{ Route::has('dashboard.mentor-ai') ? route('dashboard.mentor-ai') : '#' }}"
            >
              <i data-lucide="brain" class="sija-nav-icon"></i>
              <span>Bimbingan Mentor</span>
            </a>

            <a
              class="sija-nav-item {{ ($active ?? '') === 'roadmap' ? 'is-active' : '' }}"
              href="{{ Route::has('dashboard.roadmap-karier') ? route('dashboard.roadmap-karier') : '#' }}"
            >
              <i data-lucide="map" class="sija-nav-icon"></i>
              <span>Roadmap Karier</span>
            </a>

            <a
              class="sija-nav-item {{ ($active ?? '') === 'portofolio' ? 'is-active' : '' }}"
              href="{{ Route::has('dashboard.portofolio') ? route('dashboard.portofolio') : '#' }}"
            >
              <i data-lucide="briefcase" class="sija-nav-icon"></i>
              <span>Portofolio</span>
            </a>

            <a
              class="sija-nav-item {{ ($active ?? '') === 'sertifikat' ? 'is-active' : '' }}"
              href="{{ Route::has('dashboard.sertifikat') ? route('dashboard.sertifikat') : '#' }}"
            >
              <i data-lucide="badge-check" class="sija-nav-icon"></i>
              <span>Sertifikat</span>
            </a>

            <a
              class="sija-nav-item {{ ($active ?? '') === 'pengaturan' ? 'is-active' : '' }}"
              href="{{ Route::has('dashboard.pengaturan') ? route('dashboard.pengaturan') : '#' }}"
            >
              <i data-lucide="settings" class="sija-nav-icon"></i>
              <span>Pengaturan</span>
            </a>
          </nav>
        </div>
      </aside>

      <!-- Main -->
      <div class="sija-main">
        <!-- Top Navbar -->
        <header class="sija-topbar">
          <button
            class="sija-mobile-toggle"
            type="button"
            aria-label="Toggle sidebar"
            data-toggle-sidebar
          >
            <i data-lucide="menu" class="sija-mobile-toggle-icon"></i>
          </button>

          <div class="sija-topbar-spacer"></div>

          <div class="sija-topbar-actions" aria-label="Top actions">
            <div class="sija-search">
              <i data-lucide="search" class="sija-search-icon"></i>
              <input type="text" placeholder="Cari..." aria-label="Search" />
            </div>

            <button class="sija-icon-btn" type="button" aria-label="Notifikasi">
              <i data-lucide="bell" class="sija-icon"></i>
            </button>

            <button class="sija-icon-btn" type="button" aria-label="Pesan Mentor">
              <i data-lucide="message-circle" class="sija-icon"></i>
            </button>

            <div class="sija-profile">
              <div class="sija-avatar" aria-hidden="true">P</div>
              <div class="sija-profile-meta">
                <div class="sija-profile-name">Putra</div>
                <div class="sija-profile-role">User</div>
              </div>
            </div>
          </div>
        </header>

        <main class="sija-content">
          @yield('content')
        </main>
      </div>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', () => {
        if (window.lucide && window.lucide.createIcons) window.lucide.createIcons();
      });
    </script>
  </body>
</html>
