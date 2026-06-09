<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register - SIJA</title>
    @vite(['resources/css/style.css'])
</head>
<body>
<header>
    <div class="navbar">
        <div class="logo">
            <h1>Sija</h1>
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#feature">Feature</a></li>
                <li><a href="#roadmap">Roadmap</a></li>
                <li><a href="#sija-faq">Sija</a></li>
            </ul>
        </nav>
        <div class="right">
            <a href="{{ route('login') }}">Login</a>
            <p>|</p>
            <a href="{{ route('register') }}" class="active">Register</a>
        </div>
    </div>
</header>

<main class="auth-page">
    <section class="auth-container">
        <div class="auth-badge">
            <span class="chip">Create Your Path</span>
        </div>

        <h2 class="auth-title">Daftar Akun SIJA</h2>
        <p class="auth-subtitle">Mulai bangun portofolio dan ikuti simulasi pekerjaan nyata.</p>

        {{-- Form saja (front-end) --}}
        <form class="auth-form" action="#" method="POST" onsubmit="return false;">
            <label for="name">Nama</label>
            <input id="name" name="name" type="text" placeholder="Nama lengkap" required autocomplete="name" />

            <label for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="nama@contoh.com" required autocomplete="email" />

            <label for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="Buat password" required autocomplete="new-password" />

            <label for="password_confirmation">Konfirmasi Password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Ulangi password" required autocomplete="new-password" />

            <button type="submit" class="auth-button">
                Daftar
            </button>

            <div class="auth-note">
                <p><strong>Catatan:</strong> halaman ini hanya untuk tampilan (form saja), belum terhubung ke database.</p>
            </div>
        </form>

        <div class="auth-footer">
            <p>Sudah punya akun?</p>
            <a class="auth-link" href="{{ route('login') }}">Kembali ke Login</a>
        </div>
    </section>
</main>
</body>
</html>

