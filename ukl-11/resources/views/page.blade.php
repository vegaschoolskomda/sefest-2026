    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Simulasi Kerja</title>
        @vite(['resources/css/page.css'])
        <script src="{{ asset('js/script.js') }}" defer></script>
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
                    <a href="{{ route('register') }}">Register</a>
                </div>
            </div>
        </header>

        @php
            $accordionItems = [
                [
                    'title' => 'Programming',
                    'image' => asset('image/laravel-project.png'),
                ],
                [
                    'title' => 'Web Development',
                    'image' => asset('image/programmer.png'),
                ],
                [
                    'title' => 'Networking',
                    'image' => asset('image/data_center.png'),
                ],
                [
                    'title' => 'Cyber Security',
                    'image' => asset('image/cyber_securty.png'),
                ],
                [
                    'title' => 'UI / UX Design',
                    'image' => asset('image/ui_ux.png'),
                ],
            ];
        @endphp

        <main>
            <section class="hero-section">
                <section class="container hero-container">
                    <div class="hero-content">
                        <h1>Coba Dulu, Baru Tentukan Masa Depanmu</h1>
                        <p class="hero-description">
                        Jelajahi berbagai profesi, ikuti simulasi pekerjaan nyata, 
                        dan bangun portofolio yang membuktikan kemampuanmu sebelum memasuki dunia kerja.
                        </p>
                        <a class="hero-button" href="#projects">Mulai Sekarang</a>
                    </div>
    
                    <div class="accordion-container" id="projects">
                        <div class="accordion-track" data-accordion>
                            @foreach ($accordionItems as $index => $item)
                                <button
                                    class="accordion-item"
                                    type="button"
                                    data-accordion-item
                                    aria-label="{{ $item['title'] }}"
                                >
                                    <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" />
                                    <span class="accordion-overlay"></span>
                                    <span class="accordion-title">{{ $item['title'] }}</span>
                                </button>
                            @endforeach
                        </div>
                    </div>
                </section>
            </section>
            <section class="feature" id="feature">
                <div class="feature-container">
                    <div class="judul-feature">
                        <h2>Semua yang Kamu Butuhkan untuk Mempersiapkan Karier Masa Depan</h2>
                        <p>SIJA membantu pengguna menemukan karier yang sesuai, mencoba simulasi pekerjaan secara langsung, mendapatkan bimbingan mentor, serta membangun portofolio profesional dalam satu platform.</p>
                    </div>
                    <div class="feature-menu">
                        <div class="feature-item">
                            <div class="subjudul-feature">
                                <img src="{{ asset('image/icon/prediksi.png') }}"/>
                                <h3>Career Prediction</h3>
                            </div>
                            <p>Temukan karier yang sesuai dengan potensimu</p>
                        </div>
                    </div>
                    <div class="feature-menu">
                        <div class="feature-item">
                            <div class="subjudul-feature">
                                <img src="{{ asset('image/icon/simulasi.png') }}"/>
                                <h3>Career Simulation</h3>
                            </div>
                            <p>Rasakan pengalaman kerja sebelum memilih karier</p>
                        </div>
                    </div>
                    <div class="feature-menu">
                        <div class="feature-item">
                            <div class="subjudul-feature">
                                <img src="{{ asset('image/icon/mentor.png') }}"/>
                                <h3>Mentor Guidance</h3>
                            </div>
                            <p>Dapatkan bimbingan dari mentor profesional</p>
                        </div>
                    </div>
                    <div class="feature-menu">
                        <div class="feature-item">
                            <div class="subjudul-feature">
                                <img src="{{ asset('image/icon/roadmap.png') }}"/>
                                <h3>Career Roadmap</h3>
                            </div>
                            <p>Panduan langkah demi langkah menuju karier impian</p>
                        </div>
                    </div>
                    <div class="feature-menu">
                        <div class="feature-item">
                            <div class="subjudul-feature">
                                <img src="{{ asset('image/icon/portofolio.png') }}"/>
                                <h3>Portfolio Builder</h3>
                            </div>
                            <p>Bangun portofolio profesional dengan mudah</p>
                        </div>
                    </div>
                    <div class="feature-menu">
                        <div class="feature-item">
                            <div class="subjudul-feature">
                                <img src="{{ asset('image/icon/cari.png') }}"/>
                                <h3>Career Explorer</h3>
                            </div>
                            <p>Jelajahi berbagai profesi tanpa batas</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="roadmap" id="roadmap">
                <div class="roadmap-container">
                    <img src="{{ asset('image/roadmap.png') }}" alt="Roadmap" />
                </div>
            </section>
            @php
                $faqs = [
                    [
                        'question' => 'Apa itu SIJA?',
                        'answer' => 'SIJA adalah platform eksplorasi karier yang membantu pengguna menemukan pekerjaan yang sesuai melalui asesmen, simulasi kerja, mentor, dan roadmap karier.',
                    ],
                    [
                        'question' => 'Bagaimana cara kerja simulasi karier?',
                        'answer' => 'Pengguna akan menerima tugas nyata sesuai profesi yang dipilih, menyelesaikannya secara bertahap, lalu mendapatkan evaluasi dan umpan balik.',
                    ],
                    [
                        'question' => 'Apakah saya hanya bisa memilih pekerjaan yang direkomendasikan?',
                        'answer' => 'Tidak. Pengguna juga dapat mencoba berbagai profesi lain yang tersedia di platform untuk mengeksplorasi minat dan kemampuan mereka.',
                    ],
                    [
                        'question' => 'Apa manfaat roadmap karier?',
                        'answer' => 'Roadmap membantu pengguna memahami skill yang harus dipelajari, sertifikasi yang dibutuhkan, dan langkah yang harus ditempuh untuk mencapai profesi impian.',
                    ],
                ];
            @endphp

            <section class="faq-section" id="sija-faq">
                <div class="container faq-container">
                    <span class="faq-chip">FAQ</span>
                    <h3>Pertanyaan Umum & Jawaban</h3>
                    <p class="faq-description">
                        Temukan detail penting tentang SIJA dan bagaimana platform ini membantu
                        kamu menyiapkan langkah karier dengan lebih terarah.
                    </p>

                    <div class="faq-list">
                        @foreach ($faqs as $index => $faq)
                            <article class="faq-item">
                                <span class="faq-number">{{ $index + 1 }}</span>
                                <div class="faq-content">
                                    <h4>{{ $faq['question'] }}</h4>
                                    <p>{{ $faq['answer'] }}</p>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

            @php
                $footerLinks = [
                    'Solusi' => ['Career Prediction', 'Career Simulation', 'Mentor Guidance', 'Portfolio Builder'],
                    'Sumber' => ['Panduan', 'Studi Kasus', 'Blog', 'Webinar'],
                    'Perusahaan' => ['Tentang Kami', 'Karier', 'Kontak', 'Mitra'],
                ];

                $footerShowcase = [
                    [
                        'title' => 'Programming',
                        'image' => asset('image/programmer.png'),
                    ],
                    [
                        'title' => 'Networking',
                        'image' => asset('image/data_center.png'),
                    ],
                    [
                        'title' => 'UI / UX Design',
                        'image' => asset('image/ui_ux.png'),
                    ],
                    [
                        'title' => 'Digital Marketing',
                        'image' => asset('image/marketing.png'),
                    ],
                ];
            @endphp

            <footer class="site-footer">
                <div class="container footer-container">
                    <div class="footer-cta">
                        <div class="footer-copy">
                            <span class="footer-kicker">SIJA Career Hub</span>
                            <h2>Tetap terhubung dengan peluang karier yang lebih relevan.</h2>
                            <p>
                                Dapatkan update simulasi kerja, roadmap, dan inspirasi profesi
                                yang membantu kamu melangkah lebih yakin.
                            </p>
                        </div>

                        <form class="footer-form">
                            <label class="sr-only" for="footer-email">Alamat email</label>
                            <input id="footer-email" type="email" placeholder="Masukkan email kamu" />
                            <button type="submit">Subscribe Now</button>
                        </form>
                    </div>

                    <div class="footer-grid">
                        <div class="footer-brand-block">
                            <div class="footer-brand">
                                <div class="footer-brand-mark">S</div>
                                <div>
                                    <h3>SIJA</h3>
                                    <p>Simulasi karier untuk masa depan yang lebih jelas.</p>
                                </div>
                            </div>

                            <p class="footer-description">
                                Membantu pelajar dan pencari kerja menjelajahi profesi,
                                mencoba simulasi nyata, dan membangun portofolio yang kuat.
                            </p>

                            <div class="footer-socials" aria-label="Social links">
                                <a href="#" aria-label="Instagram">IG</a>
                                <a href="#" aria-label="Twitter">X</a>
                                <a href="#" aria-label="LinkedIn">IN</a>
                                <a href="#" aria-label="YouTube">YT</a>
                            </div>
                        </div>

                        @foreach ($footerLinks as $title => $links)
                            <div class="footer-links-column">
                                <h4>{{ $title }}</h4>
                                <ul>
                                    @foreach ($links as $link)
                                        <li><a href="#">{{ $link }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach

                        <div class="footer-visual">
                            <div class="footer-visual-card footer-visual-card-large">
                                <img src="{{ $footerShowcase[0]['image'] }}" alt="{{ $footerShowcase[0]['title'] }}" />
                                <span>{{ $footerShowcase[0]['title'] }}</span>
                            </div>
                            <div class="footer-visual-stack">
                                @foreach (array_slice($footerShowcase, 1) as $item)
                                    <div class="footer-visual-card">
                                        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" />
                                        <span>{{ $item['title'] }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="footer-bottom">
                        <p>© 2026 SIJA. Semua hak dilindungi.</p>
                        <div class="footer-bottom-links">
                            <a href="#">Terms of Service</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Cookie Settings</a>
                            <a href="#">Accessibility</a>
                        </div>
                    </div>
                </div>
            </footer>
        </main>
    </body>
</html>