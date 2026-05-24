<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/landing.css') }}">

        <title>Landing Page</title>
    </head>
    <body>

        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>

        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">
                    <img src="{{ asset('image/logo-ceritaja.png') }}" alt="CeritaJa Logo">
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About Us</a></li>
                        <li class="nav__item"><a href="#features" class="nav__link">Features</a></li>

                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="/auth" class="button">Masuk</a></li>
                        <li class="nav__item"><a href="/auth" class="button">Daftar</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--========== HOME ==========-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <h1 class="home__title">CeritAja</h1>
                        <h2 class="home__subtitle">Kenali dirimu lebih baik setiap hari!</h2>
                        <a href="/auth" class="button">Mulai Sekarang</a>
                    </div>
    
                    <img src="{{ asset('image/home-illustration.png') }}" alt="" class="home__img">
                </div>
            </section>
            
            <!--========== ABOUT ==========-->
            <section class="about" id="about">
                <div class="about__container section bd-container bd-grid">
                    <div class="about__data">
                        <span class="section-subtitle about__initial">About Us</span>
                        <h2 class="section-title about__initial">Karena kisahmu penting</h2>
                        <p class="about__description">CeritAja adalah ruang bagi Anda untuk berhenti sejenak, merenung, dan memahami diri Anda lebih dalam melalui pengalaman dan emosi sehari-hari.</p>
                        
                        <a href="/auth" class="button">Jelajahi Historimu</a>
                    </div>

                    <img src="{{ asset('image/about-illustration.png') }}" alt="" class="about__img">
                </div>
            </section>

            <!--========== FEATURES ==========-->
            <section class="features section" id="features">
                <span class="section-subtitle">Features</span>
                <h2 class="section-title">Bagaimana CeritAja membantu Anda</h2>

                <div class="features__container bd-container bd-grid">
                    <div class="features__content">
                        <svg class="features__img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/>
                            <rect x="9" y="3" width="6" height="4" rx="2"/>
                            <line x1="9" y1="12" x2="15" y2="12"/>
                            <line x1="9" y1="16" x2="12" y2="16"/>
                        </svg>
                        <h3 class="features__title">Reflection</h3>
                        <p class="features__description">Catat pikiran dan perasaan Anda. Rekam pengalaman dan emosi harian Anda dengan cara yang terstruktur dan bermakna.</p>
                    </div>

                    <div class="features__content">
                        <svg class="features__img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                        <h3 class="features__title">History</h3>
                        <p class="features__description">Kunjungi kembali perjalanan Anda kapan saja. Susun dan jelajahi refleksi Anda berdasarkan emosi, pikiran, dan tindakan.</p>
                    </div>

                    <div class="features__content">
                        <svg class="features__img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <line x1="18" y1="20" x2="18" y2="10"/>
                            <line x1="12" y1="20" x2="12" y2="4"/>
                            <line x1="6" y1="20" x2="6" y2="14"/>
                            <path d="M5 10l4-4 4 4 5-5"/>
                        </svg>
                        <h3 class="features__title">Visual Insights</h3>
                        <p class="features__description">Lihat perkembangan Anda dengan jelas. Lihat data refleksi Anda melalui visualisasi yang sederhana dan interaktif.</p>
                    </div>
                </div>
            </section>
        </main>

        <!--========== FOOTER ==========-->
        <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">CeritAja</a>
                    <span class="footer__description">Dashboard Refleksi Diri</span>
                    <div>
                        <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-pinterest'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-tiktok'></i></a>
                    </div>
                </div>
            </div>

            <p class="footer__copy">&#169; 2026 Kelompok 3. All right reserved</p>
        </footer>

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/theme.js') }}"></script>
    </body>
</html>