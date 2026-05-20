<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - Ojo Nganggur</title>
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
            <img src="https://images.unsplash.com/photo-1521737703348-735999056e30?auto=format&fit=crop&w=1200" alt="Team Career" class="auth-visual-img">

            <div class="ripple-container">
                <div class="ripple-circle" style="width: 250px; height: 250px; animation-delay: 0.2s;"></div>
                <div class="ripple-circle" style="width: 400px; height: 400px; animation-delay: 0.7s;"></div>
                <div class="ripple-circle" style="width: 550px; height: 550px; animation-delay: 1.2s;"></div>
            </div>

            <div class="orbit-container">
                <span style="font-size: 3rem; font-weight: 800; color: white; opacity: 0.1; position: absolute;">Daftar Akun</span>
                
                <div class="orbiting-icon" style="--duration: 18s; --radius: 140px;">
                    <i data-lucide="user-plus" style="color: #3b82f6;"></i>
                </div>
                <div class="orbiting-icon" style="--duration: 12s; --radius: 200px;">
                    <i data-lucide="rocket" style="color: #10b981;"></i>
                </div>
            </div>
        </div>

        <!-- Form Side -->
        <div class="auth-form-container">
            <div class="box-reveal mb-4">
                <div class="box-reveal-overlay"></div>
                <h2 class="box-reveal-content" style="font-size: 2rem; font-weight: 700; color: #1e293b;">Buat Akun Baru</h2>
            </div>
            
            <div class="box-reveal mb-8">
                <div class="box-reveal-overlay" style="background: #94a3b8;"></div>
                <p class="box-reveal-content" style="color: #64748b;">Mulai perjalanan suksesmu bersama ribuan profesional lainnya.</p>
            </div>

            <button class="btn-google">
                <img src="https://cdn1.iconfinder.com/data/icons/google-s-logo/150/Google_Icons-09-512.png" width="24" alt="Google">
                Daftar dengan Google
            </button>

            <form action="{{ url('/career-onboarding') }}" method="GET">
                <div class="form-group mb-4">
                    <label style="display: block; font-size: 0.875rem; font-weight: 500; margin-bottom: 8px; color: #475569;">Nama Lengkap <span style="color: #ef4444;">*</span></label>
                    <div class="input-wrapper">
                        <input type="text" class="input-field" placeholder="John Doe" required>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label style="display: block; font-size: 0.875rem; font-weight: 500; margin-bottom: 8px; color: #475569;">Email <span style="color: #ef4444;">*</span></label>
                    <div class="input-wrapper">
                        <input type="email" class="input-field" placeholder="nama@email.com" required>
                    </div>
                </div>

                <div class="form-group mb-6">
                    <label style="display: block; font-size: 0.875rem; font-weight: 500; margin-bottom: 8px; color: #475569;">Password <span style="color: #ef4444;">*</span></label>
                    <div class="input-wrapper" style="display: flex; align-items: center; position: relative;">
                        <input type="password" class="input-field" placeholder="Minimal 6 karakter" required>
                        <button type="button" class="password-toggle" style="position: absolute; right: 12px; background: none; border: none; color: #94a3b8; cursor: pointer;">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" class="btn-auth">
                    Daftar Akun &rarr;
                </button>
            </form>

            <p style="text-align: center; margin-top: 30px; font-size: 0.875rem; color: #64748b;">
                Sudah punya akun? <a href="{{ url('/login') }}" style="color: #3b82f6; font-weight: 600; text-decoration: none;">Masuk di sini</a>
            </p>
        </div>
    </div>

    <script src="{{ asset('js/auth.js') }}"></script>
    <script>lucide.createIcons();</script>
</body>
</html>
