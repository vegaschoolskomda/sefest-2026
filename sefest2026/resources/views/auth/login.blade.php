<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Ojo Nganggur</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
    <div class="auth-page">
        <!-- Back to Home Floating Button -->
        <a href="{{ url('/') }}" style="position: fixed; top: 20px; left: 20px; z-index: 100; display: flex; align-items: center; gap: 8px; background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); color: white; padding: 10px 20px; border-radius: 999px; text-decoration: none; font-weight: 600; font-size: 0.875rem; border: 1px solid rgba(255,255,255,0.2); transition: all 0.3s ease;">
            <i data-lucide="arrow-left" style="width: 18px; height: 18px;"></i>
            Kembali ke Beranda
        </a>

        <!-- Visual Side (Decoration) -->
        <div class="auth-visual">
            <div class="visual-image-overlay"></div>
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200" alt="Career Background" class="auth-visual-img">
            
            <div class="ripple-container">
                <div class="ripple-circle" style="width: 200px; height: 200px; animation-delay: 0s;"></div>
                <div class="ripple-circle" style="width: 350px; height: 350px; animation-delay: 0.5s;"></div>
                <div class="ripple-circle" style="width: 500px; height: 500px; animation-delay: 1s;"></div>
            </div>

            <div class="orbit-container">
                <span style="font-size: 3rem; font-weight: 800; color: white; opacity: 0.1; position: absolute;">Ojo Nganggur</span>
                
                <div class="orbiting-icon" style="--duration: 15s; --radius: 120px;">
                    <i data-lucide="briefcase" style="color: #3b82f6;"></i>
                </div>
                <div class="orbiting-icon" style="--duration: 10s; --radius: 180px;">
                    <i data-lucide="award" style="color: #10b981;"></i>
                </div>
                <div class="orbiting-icon" style="--duration: 20s; --radius: 240px;">
                    <i data-lucide="trending-up" style="color: #f59e0b;"></i>
                </div>
            </div>
        </div>

        <!-- Form Side -->
        <div class="auth-form-container">
            <div class="box-reveal mb-4">
                <div class="box-reveal-overlay"></div>
                <h2 class="box-reveal-content" style="font-size: 2rem; font-weight: 700; color: #1e293b;">Selamat Datang Kembali</h2>
            </div>
            
            <div class="box-reveal mb-8">
                <div class="box-reveal-overlay" style="background: #94a3b8;"></div>
                <p class="box-reveal-content" style="color: #64748b;">Masuk untuk melanjutkan perjalanan karirmu di Ojo Nganggur.</p>
            </div>

            <button class="btn-google">
                <img src="https://cdn1.iconfinder.com/data/icons/google-s-logo/150/Google_Icons-09-512.png" width="24" alt="Google">
                Masuk dengan Google
            </button>

            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                <hr style="flex: 1; border: 0; border-top: 1px dashed #cbd5e1;">
                <span style="font-size: 0.875rem; color: #94a3b8;">atau email</span>
                <hr style="flex: 1; border: 0; border-top: 1px dashed #cbd5e1;">
            </div>

            <form action="{{ url('/dashboard') }}" method="GET">
                <div class="form-group mb-4">
                    <label style="display: block; font-size: 0.875rem; font-weight: 500; margin-bottom: 8px; color: #475569;">Email <span style="color: #ef4444;">*</span></label>
                    <div class="input-wrapper">
                        <input type="email" class="input-field" placeholder="nama@email.com" required>
                    </div>
                </div>

                <div class="form-group mb-6">
                    <label style="display: block; font-size: 0.875rem; font-weight: 500; margin-bottom: 8px; color: #475569;">Password <span style="color: #ef4444;">*</span></label>
                    <div class="input-wrapper" style="display: flex; align-items: center; position: relative;">
                        <input type="password" class="input-field" placeholder="••••••••" required>
                        <button type="button" class="password-toggle" style="position: absolute; right: 12px; background: none; border: none; color: #94a3b8; cursor: pointer;">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" class="btn-auth">
                    Masuk Sekarang &rarr;
                </button>
            </form>

            <p style="text-align: center; margin-top: 30px; font-size: 0.875rem; color: #64748b;">
                Belum punya akun? <a href="{{ url('/register') }}" style="color: #3b82f6; font-weight: 600; text-decoration: none;">Daftar Gratis</a>
            </p>
        </div>
    </div>

    <script src="{{ asset('js/auth.js') }}"></script>
    <script>lucide.createIcons();</script>
</body>
</html>
