<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Kawan Sejati Manunggal | Pengelolaan Aset & Pembiayaan Syariah</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="PT. Kawan Sejati Manunggal memberikan solusi pengelolaan aset & pembiayaan syariah yang profesional, transparan, dan amanah.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Outfit:wght@600;700;800&family=Montserrat:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <!-- Three.js -->
    <script src="https://unpkg.com/three@0.160.0/build/three.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="container nav-container">
            <div class="logo">
                <img src="{{ asset('images/LOGO-KSM.png') }}" alt="Logo KSM" class="logo-img">
                <span class="logo-text">KSM</span>
            </div>
            <ul class="nav-links">
                <li><a href="#beranda" class="active">Beranda</a></li>
                <li><a href="#layanan">Layanan</a></li>
                <li><a href="#tentang">Tentang Kami</a></li>
                <li><a href="#portofolio">Portofolio</a></li>
            </ul>
            <div class="nav-actions">
                <a href="#kontak" class="btn btn-primary magnetic">Konsultasi Gratis</a>
            </div>
            <div class="menu-toggle" id="menu-toggle">
                <span></span><span></span><span></span>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobile-menu">
        <div class="mobile-nav-links">
            <a href="#beranda">Beranda</a>
            <a href="#layanan">Layanan</a>
            <a href="#tentang">Tentang Kami</a>
            <a href="#portofolio">Portofolio</a>
            <a href="#kontak" class="btn btn-primary" style="margin-top:1rem">Konsultasi Gratis</a>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero" id="beranda">
        <div class="hero-background"></div>
        <canvas id="particles-canvas"></canvas>
        <canvas id="hero-3d"></canvas>
        <div class="container hero-container">
            <div class="hero-content">
                <div class="trust-badges reveal">
                    <span class="badge"><i class="ph-fill ph-shield-check"></i> Profesional</span>
                    <span class="badge"><i class="ph-fill ph-eye"></i> Transparan</span>
                    <span class="badge"><i class="ph-fill ph-handshake"></i> Amanah</span>
                </div>
                <h1 class="reveal">Solusi Pengelolaan Aset & Pembiayaan Syariah <span>Tanpa Masalah</span></h1>
                <p class="hero-description reveal" id="typed-text"
                    data-text="Kami menghadirkan layanan profesional berlandaskan prinsip syariah untuk memastikan aset Anda dikelola dengan aman, transparan, dan memberikan nilai tambah yang berkelanjutan.">
                    Kami menghadirkan layanan profesional berlandaskan prinsip syariah untuk memastikan aset Anda
                    dikelola dengan aman, transparan, dan memberikan nilai tambah yang berkelanjutan.
                </p>
                <div class="hero-buttons reveal">
                    <a href="#kontak" class="btn btn-primary btn-large magnetic">Konsultasi Sekarang <i
                            class="ph-bold ph-arrow-right"></i></a>
                    <a href="#layanan" class="btn glass-btn btn-large magnetic">Pelajari Layanan</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Stats Bar -->
    <div class="stats-wrapper">
        <div class="container">
            <div class="stats-bar reveal reveal-scale">
                <div class="stat-item">
                    <div class="stat-icon"><i class="ph-duotone ph-calendar-star"></i></div>
                    <div class="stat-info">
                        <h3><span data-target="20" data-suffix="+">0</span> Years</h3>
                        <p>Experience</p>
                    </div>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <div class="stat-icon"><i class="ph-duotone ph-check-circle"></i></div>
                    <div class="stat-info">
                        <h3><span data-target="30" data-suffix="+">0</span></h3>
                        <p>Projects</p>
                    </div>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <div class="stat-icon"><i class="ph-duotone ph-users-three"></i></div>
                    <div class="stat-info">
                        <h3><span data-target="70" data-suffix="+">0</span></h3>
                        <p>Partners & Clients</p>
                    </div>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <div class="stat-icon"><i class="ph-duotone ph-bank"></i></div>
                    <div class="stat-info">
                        <h3><span data-target="27" data-suffix="+">0</span></h3>
                        <p>Managed Assets</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <section class="services section-padding" id="layanan">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-subtitle reveal">Our Services</span>
                <h2 class="reveal">Comprehensive Financial Solutions</h2>
            </div>
            <div class="services-grid">
                <div class="service-card reveal">
                    <div class="service-icon"><i class="ph-duotone ph-buildings"></i></div>
                    <h3>Asset Management System</h3>
                    <p>Optimalisasi nilai aset Anda melalui manajemen yang profesional, transparan, dan sesuai prinsip
                        syariah.</p>
                    <a href="#" class="service-link">Selengkapnya <i class="ph-bold ph-arrow-right"></i></a>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon"><i class="ph-duotone ph-hand-coins"></i></div>
                    <h3>Financing Source</h3>
                    <p>Fasilitas pembiayaan syariah yang fleksibel untuk mendukung pertumbuhan dan ekspansi bisnis Anda.
                    </p>
                    <a href="#" class="service-link">Selengkapnya <i class="ph-bold ph-arrow-right"></i></a>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon"><i class="ph-duotone ph-chart-line-up"></i></div>
                    <h3>Financial Cooperation</h3>
                    <p>Kemitraan strategis untuk mencapai tujuan finansial dengan skema bagi hasil yang adil
                        (Mudharabah/Musyarakah).</p>
                    <a href="#" class="service-link">Selengkapnya <i class="ph-bold ph-arrow-right"></i></a>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon"><i class="ph-duotone ph-briefcase"></i></div>
                    <h3>Project Collaboration</h3>
                    <p>Sinergi dalam pengembangan proyek skala besar dengan manajemen risiko yang terukur dan mitigasi
                        presisi.</p>
                    <a href="#" class="service-link">Selengkapnya <i class="ph-bold ph-arrow-right"></i></a>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon"><i class="ph-duotone ph-network"></i></div>
                    <h3>Group Business</h3>
                    <p>Ekosistem bisnis terintegrasi untuk memperkuat rantai pasok dan daya saing di pasar global.</p>
                    <a href="#" class="service-link">Selengkapnya <i class="ph-bold ph-arrow-right"></i></a>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon"><i class="ph-duotone ph-presentation-chart"></i></div>
                    <h3>Strategic Advisory</h3>
                    <p>Layanan konsultasi finansial strategis untuk membantu pengambilan keputusan yang tepat, efisien,
                        dan akuntabel.</p>
                    <a href="#" class="service-link">Selengkapnya <i class="ph-bold ph-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about section-padding" id="tentang">
        <div class="container about-container">
            <div class="about-content">
                <span class="section-subtitle reveal">Tentang KSM</span>
                <h2 class="reveal">Kredibilitas & Integritas dalam Setiap Langkah</h2>
                <p class="reveal">PT. Kawan Sejati Manunggal lahir dari komitmen untuk menghadirkan solusi finansial yang tidak hanya
                    berorientasi pada keuntungan, tetapi juga keberkahan. Kami memadukan keahlian profesional dengan
                    prinsip-prinsip syariah yang ketat.</p>
                <p class="reveal">Dengan tim ahli yang berpengalaman puluhan tahun di industri keuangan dan manajemen aset, kami siap
                    menjadi mitra strategis yang dapat Anda andalkan untuk pertumbuhan aset jangka panjang.</p>

                <div class="values-list">
                    <div class="value-item reveal">
                        <i class="ph-fill ph-check-circle"></i>
                        <span><strong>Transparan:</strong> Laporan berkala yang detail dan dapat diakses kapan
                            saja.</span>
                    </div>
                    <div class="value-item reveal">
                        <i class="ph-fill ph-check-circle"></i>
                        <span><strong>Profesional:</strong> Dikelola oleh pakar tersertifikasi dengan standar industri
                            tinggi.</span>
                    </div>
                    <div class="value-item reveal">
                        <i class="ph-fill ph-check-circle"></i>
                        <span><strong>Berkelanjutan:</strong> Fokus pada profitabilitas jangka panjang dan dampak
                            positif.</span>
                    </div>
                </div>
            </div>
            <div class="about-image reveal reveal-right">
                <div class="image-wrapper">
                    <img src="{{ asset('images/about_team.png') }}" alt="Tim Profesional KSM">
                    <div class="image-decoration"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works section-padding">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-subtitle reveal">Proses Kerja</span>
                <h2 class="reveal">Pendekatan Sistematis & Terukur</h2>
            </div>

            <div class="process-steps">
                <div class="step-item reveal">
                    <div class="step-icon"><i class="ph-duotone ph-magnifying-glass"></i></div>
                    <div class="step-number">01</div>
                    <h4>Identifikasi Aset</h4>
                </div>
                <div class="step-connector"></div>
                <div class="step-item reveal">
                    <div class="step-icon"><i class="ph-duotone ph-calculator"></i></div>
                    <div class="step-number">02</div>
                    <h4>Analisa & Valuasi</h4>
                </div>
                <div class="step-connector"></div>
                <div class="step-item reveal">
                    <div class="step-icon"><i class="ph-duotone ph-handshake"></i></div>
                    <div class="step-number">03</div>
                    <h4>Skema Kerjasama</h4>
                </div>
                <div class="step-connector"></div>
                <div class="step-item reveal">
                    <div class="step-icon"><i class="ph-duotone ph-rocket-launch"></i></div>
                    <div class="step-number">04</div>
                    <h4>Eksekusi</h4>
                </div>
                <div class="step-connector"></div>
                <div class="step-item reveal">
                    <div class="step-icon"><i class="ph-duotone ph-chart-bar"></i></div>
                    <div class="step-number">05</div>
                    <h4>Monitoring</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio section-padding" id="portofolio">
        <div class="container">
            <div class="section-header flex-header">
                <div>
                    <span class="section-subtitle reveal">Portofolio KSM</span>
                    <h2 class="reveal">Kisah Sukses Pengelolaan Aset</h2>
                </div>
                <a href="#" class="btn btn-outline magnetic reveal">Lihat Semua Proyek</a>
            </div>

            <div class="portfolio-grid">
                <div class="portfolio-card reveal">
                    <div class="portfolio-image">
                        <img src="{{ asset('images/portfolio_1.png') }}" alt="Gedung Perkantoran">
                        <div class="portfolio-category">Real Estate</div>
                    </div>
                    <div class="portfolio-content">
                        <h3>Revitalisasi Gedung Komersial</h3>
                        <p class="location"><i class="ph-fill ph-map-pin"></i> Sudirman, Jakarta Selatan</p>
                    </div>
                </div>
                <div class="portfolio-card reveal">
                    <div class="portfolio-image">
                        <img src="{{ asset('images/portfolio_2.png') }}" alt="Kerjasama Pembiayaan">
                        <div class="portfolio-category">Pembiayaan Syariah</div>
                    </div>
                    <div class="portfolio-content">
                        <h3>Sindikasi Pembiayaan Infrastruktur</h3>
                        <p class="location"><i class="ph-fill ph-map-pin"></i> Jawa Barat</p>
                    </div>
                </div>
                <div class="portfolio-card reveal">
                    <div class="portfolio-image">
                        <img src="{{ asset('images/portfolio_3.png') }}" alt="Aset Industri">
                        <div class="portfolio-category">Manajemen Aset</div>
                    </div>
                    <div class="portfolio-content">
                        <h3>Optimalisasi Aset Kawasan Industri</h3>
                        <p class="location"><i class="ph-fill ph-map-pin"></i> Cikarang, Bekasi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Logo Strip -->
    <section class="partners">
        <div class="container">
            <p class="partners-title">Our Partners</p>
            <div class="partners-track">
                <div class="partner-logo">Bank Syariah A</div>
                <div class="partner-logo">BPRS Sejahtera</div>
                <div class="partner-logo">Koperasi Syariah</div>
                <div class="partner-logo">Grup Properti X</div>
                <div class="partner-logo">Investama Global</div>
                <div class="partner-logo">Bank Syariah A</div>
                <div class="partner-logo">BPRS Sejahtera</div>
                <div class="partner-logo">Koperasi Syariah</div>
                <div class="partner-logo">Grup Properti X</div>
                <div class="partner-logo">Investama Global</div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" id="kontak">
        <div class="cta-background"></div>
        <div class="container cta-container">
            <h2 class="reveal">Siap Mengembangkan Aset Anda Bersama Kami?</h2>
            <p class="reveal">Jadwalkan sesi konsultasi gratis dengan tim ahli kami untuk mendiskusikan potensi dan peluang pertumbuhan
                aset Anda.</p>
            <div class="cta-buttons reveal">
                <a href="#" class="btn btn-white btn-large magnetic">Ajukan Kerjasama</a>
                <a href="#" class="btn btn-outline-white btn-large magnetic">Konsultasi Gratis</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <div class="logo">
                        <img src="{{ asset('images/LOGO-KSM.png') }}" alt="Logo KSM" class="logo-img">
                        <span class="logo-text">KSM</span>
                    </div>
                    <p>PT. Kawan Sejati Manunggal memberikan solusi pengelolaan aset dan pembiayaan syariah yang
                        profesional, transparan, dan amanah.</p>
                    <div class="social-links">
                        <a href="#"><i class="ph-fill ph-linkedin-logo"></i></a>
                        <a href="#"><i class="ph-fill ph-instagram-logo"></i></a>
                        <a href="#"><i class="ph-fill ph-facebook-logo"></i></a>
                    </div>
                </div>

                <div class="footer-links">
                    <h4>Perusahaan</h4>
                    <ul>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Tim Manajemen</a></li>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Hubungan Investor</a></li>
                    </ul>
                </div>

                <div class="footer-links">
                    <h4>Layanan</h4>
                    <ul>
                        <li><a href="#">Pengelolaan Aset</a></li>
                        <li><a href="#">Pembiayaan Kredit</a></li>
                        <li><a href="#">Kerjasama Keuangan</a></li>
                        <li><a href="#">Group Business</a></li>
                    </ul>
                </div>

                <div class="footer-contact">
                    <h4>Hubungi Kami</h4>
                    <div class="contact-item">
                        <i class="ph-fill ph-map-pin"></i>
                        <p>Gedung Granadi Tower Lt. 5<br>Jl. HR. Rasuna Said Kav. X-1<br>Jakarta Selatan 12950
                        </p>
                    </div>
                    <div class="contact-item">
                        <i class="ph-fill ph-phone"></i>
                        <p>+62 21 5291 5598</p>
                    </div>
                    <div class="contact-item">
                        <i class="ph-fill ph-envelope-simple"></i>
                        <p>info@kawansejatimanunggal.id</p>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2026 PT. Kawan Sejati Manunggal. Hak Cipta Dilindungi.</p>
                <div class="footer-legal">
                    <a href="#">Kebijakan Privasi</a>
                    <a href="#">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Premium Interactions JS -->
    <script src="{{ asset('js/premium.js') }}"></script>
</body>

</html>