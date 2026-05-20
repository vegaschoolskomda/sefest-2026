<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - Ojo Nganggur</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <script src="https://unpkg.com/lucide@latest"></script>
    @yield('extra-css')
</head>
<body>
    <div class="dashboard-layout">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 32px; padding: 0 8px;">
                <div style="width: 40px; height: 40px; background: #3b82f6; border-radius: 10px; display: grid; place-items: center; color: white;">
                    <i data-lucide="briefcase"></i>
                </div>
                <div class="user-info">
                    <span style="display: block; font-weight: 700; font-size: 1.125rem;">Ojo Nganggur</span>
                    <span style="display: block; font-size: 0.75rem; color: #64748b;">Member Silver</span>
                </div>
            </div>

            <nav style="flex: 1;">
                <a href="/dashboard" class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                    <i data-lucide="layout"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <a href="/journey" class="nav-item {{ Request::is('journey') ? 'active' : '' }}">
                    <i data-lucide="map"></i>
                    <span class="nav-text">Career Journey</span>
                </a>
                <a href="/mentors" class="nav-item {{ Request::is('mentors') ? 'active' : '' }}">
                    <i data-lucide="users"></i>
                    <span class="nav-text">Mentor Saya</span>
                </a>
                <a href="/simulation-explorer" class="nav-item {{ Request::is('simulation-explorer') ? 'active' : '' }}">
                    <i data-lucide="compass"></i>
                    <span class="nav-text">Simulation Explorer</span>
                </a>
                <a href="/tasks" class="nav-item {{ Request::is('tasks') ? 'active' : '' }}">
                    <i data-lucide="clipboard-list"></i>
                    <span class="nav-text">Tugas & Challenge</span>
                </a>
                <a href="/skills" class="nav-item {{ Request::is('skills') ? 'active' : '' }}">
                    <i data-lucide="bar-chart-3"></i>
                    <span class="nav-text">Progress Skill</span>
                </a>
                <a href="/certificates" class="nav-item {{ Request::is('certificates') ? 'active' : '' }}">
                    <i data-lucide="award"></i>
                    <span class="nav-text">Sertifikat</span>
                </a>

                <div style="height: 1px; background: var(--dashboard-border); margin: 20px 0;"></div>

                <a href="/settings" class="nav-item {{ Request::is('settings') ? 'active' : '' }}">
                    <i data-lucide="settings"></i>
                    <span class="nav-text">Pengaturan</span>
                </a>
            </nav>

            <button class="nav-item" id="sidebar-toggle" style="margin-top: auto; border:none; background:none; cursor:pointer; width: 100%; text-align: left;">
                <i data-lucide="chevrons-left"></i>
                <span class="nav-text">Sembunyikan</span>
            </button>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header class="header">
                <div>
                    <h1 id="main-title" style="font-size: 1.875rem; font-weight: 700;">@yield('header-title')</h1>
                    <p style="color: var(--dashboard-text-muted);">@yield('header-subtitle')</p>
                </div>
                <div style="display: flex; gap: 12px; align-items: center;">
                    <button class="icon-btn" id="theme-toggle">
                        <i data-lucide="moon"></i>
                    </button>
                    <button class="icon-btn">
                        <i data-lucide="bell"></i>
                    </button>
                    <div style="width: 40px; height: 40px; border-radius: 50%; background: #e2e8f0; overflow: hidden; border: 2px solid #3b82f6;">
                        <img src="https://ui-avatars.com/api/?name=Farhan+Ojo&background=3b82f6&color=fff" alt="User">
                    </div>
                </div>
            </header>

            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script>lucide.createIcons();</script>
    @yield('extra-js')
</body>
</html>