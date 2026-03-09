<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dendi Aprilio Setiawan — Fullstack Developer</title>
    <meta name="description"
        content="Portofolio Dendi Aprilio Setiawan — Fullstack Web & Mobile Developer dari Politeknik Negeri Jember, ahli dalam Laravel, Flutter, Java, IoT, dan Machine Learning.">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('logo/favicon_black.ico') }}">

    <!-- Fonts: Inter + Plus Jakarta Sans for headings -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- Global Animated Background -->
    <canvas id="global-canvas"></canvas>

    <!-- ============ NAVIGATION ============ -->
    <nav class="navbar">
        <div class="container nav-container">
            <a href="#hero" class="logo">
                <img src="{{ asset('logo/logo.png') }}" alt="Logo Dendi" style="height:52px;width:auto;">
            </a>
            <ul class="nav-links">
                <li><a href="#hero">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills-experience">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact" class="nav-cta">Hire Me</a></li>
            </ul>
            <div class="hamburger" aria-label="Menu" role="button">
                <span></span><span></span><span></span>
            </div>
        </div>
    </nav>

    <!-- ============ HERO ============ -->
    <header id="hero" class="hero-section">
        <div class="container hero-content">
            <div class="hero-text">
                <div class="hero-greeting">
                    <span class="dot-accent"></span>
                    <p>Available for Internship 2026</p>
                </div>
                <h1 class="headline">
                    Hi, I'm <span class="highlight">Dendi</span><br>
                    Fullstack <span class="highlight-stroke">Developer</span>
                </h1>
                <p class="hero-description">
                    Mahasiswa Teknologi Informasi Politeknik Negeri Jember yang passionate dalam membangun aplikasi web,
                    mobile, dan sistem IoT yang skalabel dan berdampak nyata.
                </p>
                <div class="hero-tags">
                    <span><i class="fas fa-check-circle"></i> Laravel &amp; PHP</span>
                    <span><i class="fas fa-check-circle"></i> Flutter</span>
                    <span><i class="fas fa-check-circle"></i> Java</span>
                    <span><i class="fas fa-check-circle"></i> IoT &amp; ML</span>
                </div>
                <div class="cta-group">
                    <a href="#projects" class="btn btn-primary"><i class="fas fa-folder-open"></i> View Projects</a>
                    <a href="#contact" class="btn btn-outline"><i class="fas fa-paper-plane"></i> Contact Me</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="hero-img-wrapper">
                    <img src="{{ asset('images/profile.png') }}" alt="Dendi Aprilio Setiawan">
                    <div class="hero-badge hero-badge--top">
                        <i class="fas fa-laptop-code"></i>
                        {{-- <span>4 Projects</span> --}}
                    </div>
                    <div class="hero-badge hero-badge--bottom">
                        <i class="fas fa-graduation-cap"></i>
                        {{-- <span>D3 IT — Polje</span> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Scroll indicator -->
        <a href="#about" class="scroll-down" aria-label="Scroll down">
            <span></span>
        </a>
    </header>

    <!-- ============ ABOUT ============ -->
    <section id="about" class="section">
        <div class="container">
            <div class="about-grid">
                <div class="about-text-block">
                    <p class="section-label"><i class="fas fa-user"></i> About Me</p>
                    <h2 class="section-heading">Passionate Developer,<br>Creative Problem Solver</h2>
                    <p class="about-body">
                        Saya adalah mahasiswa <strong>Teknologi Informasi</strong> di Politeknik Negeri Jember dengan
                        fokus pada pengembangan fullstack. Saya memiliki pengalaman membangun aplikasi dari nol — mulai
                        dari desain UI/UX hingga deployment — menggunakan teknologi modern seperti Laravel, Flutter, dan
                        Java.
                    </p>
                    <p class="about-body">
                        Saya juga tertarik pada bidang <strong>IoT</strong> dan <strong>Machine Learning</strong>,
                        terbukti dari proyek akhir saya yang mengintegrasikan YOLOv8 dan Fuzzy Mamdani untuk sistem
                        monitoring pertumbuhan tanaman secara real-time.
                    </p>
                    <div class="about-stats">
                        <div class="stat-pill">
                            <span class="stat-num">4</span>
                            <span class="stat-lbl">Projects</span>
                        </div>
                        <div class="stat-pill">
                            <span class="stat-num">3+</span>
                            <span class="stat-lbl">Years Coding</span>
                        </div>
                        <div class="stat-pill">
                            <span class="stat-num">5+</span>
                            <span class="stat-lbl">Tech Stacks</span>
                        </div>
                    </div>
                </div>
                <div class="about-right">
                    <div class="edu-card-block">
                        <p class="section-label"><i class="fas fa-graduation-cap"></i> Education</p>
                        <div class="edu-item">
                            <div class="edu-icon"><i class="fas fa-university"></i></div>
                            <div>
                                <h4>D4 Teknologi Informasi</h4>
                                <p>Politeknik Negeri Jember</p>
                                <span class="edu-year">2021 – 2024</span>
                            </div>
                        </div>
                        <div class="edu-item">
                            <div class="edu-icon"><i class="fas fa-school"></i></div>
                            <div>
                                <h4>IPA — SMA</h4>
                                <p>SMAN 1 Wongsorejo, Banyuwangi</p>
                                <span class="edu-year">2018 – 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="service-list-block">
                        <p class="section-label"><i class="fas fa-cogs"></i> Services</p>
                        <div class="service-row"><i class="fas fa-code"></i><span>Web Development</span></div>
                        <div class="service-row"><i class="fas fa-mobile-alt"></i><span>Mobile App Development</span>
                        </div>
                        <div class="service-row"><i class="fas fa-microchip"></i><span>IoT System Design</span></div>
                        <div class="service-row"><i class="fas fa-paint-brush"></i><span>UI/UX Design</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ SKILLS & EXPERIENCE ============ -->
    <section id="skills-experience" class="section bg-darker">
        <div class="container">
            <div class="split-section-v2">
                <!-- Skills -->
                <div class="skills-block">
                    <p class="section-label"><i class="fas fa-layer-group"></i> Technical Skills</p>
                    <h2 class="section-heading-sm">My Tech Stack</h2>

                    <div class="skill-category-label">Frontend / UI</div>
                    <div class="skill-tags-group">
                        <span class="stag">HTML & CSS</span>
                        <span class="stag">JavaScript</span>
                        <span class="stag">Bootstrap</span>
                        <span class="stag">Tailwind CSS</span>
                        <span class="stag">Flutter</span>
                        <span class="stag">Figma</span>
                    </div>

                    <div class="skill-category-label">Backend / Database</div>
                    <div class="skill-tags-group">
                        <span class="stag">PHP</span>
                        <span class="stag">Laravel</span>
                        <span class="stag">Java</span>
                        <span class="stag">C++</span>
                        <span class="stag">MySQL</span>
                        <span class="stag">REST API</span>
                    </div>

                    <div class="skill-category-label">IoT & AI / ML</div>
                    <div class="skill-tags-group">
                        <span class="stag">ESP32</span>
                        <span class="stag">Arduino</span>
                        <span class="stag">YOLOv8</span>
                        <span class="stag">Python</span>
                        <span class="stag">Fuzzy Logic</span>
                    </div>

                    <div class="skill-category-label">Tools & Workflow</div>
                    <div class="skill-tags-group">
                        <span class="stag">Git & GitHub</span>
                        <span class="stag">VS Code</span>
                        <span class="stag">NetBeans</span>
                        <span class="stag">Postman</span>
                        <span class="stag">Laragon</span>
                    </div>
                </div>

                <!-- Experience / Progress bars -->
                <div class="proficiency-block">
                    <p class="section-label"><i class="fas fa-chart-bar"></i> Proficiency</p>
                    <h2 class="section-heading-sm">Skill Level</h2>

                    <div class="skill-bar-item">
                        <div class="sb-info"><span>Laravel / PHP</span><span>88%</span></div>
                        <div class="sb-track">
                            <div class="sb-fill" style="width:88%"></div>
                        </div>
                    </div>
                    <div class="skill-bar-item">
                        <div class="sb-info"><span>HTML & CSS</span><span>85%</span></div>
                        <div class="sb-track">
                            <div class="sb-fill" style="width:85%"></div>
                        </div>
                    </div>
                    <div class="skill-bar-item">
                        <div class="sb-info"><span>Flutter / Dart</span><span>80%</span></div>
                        <div class="sb-track">
                            <div class="sb-fill" style="width:80%"></div>
                        </div>
                    </div>
                    <div class="skill-bar-item">
                        <div class="sb-info"><span>JavaScript</span><span>78%</span></div>
                        <div class="sb-track">
                            <div class="sb-fill" style="width:78%"></div>
                        </div>
                    </div>
                    <div class="skill-bar-item">
                        <div class="sb-info"><span>Java (Desktop)</span><span>75%</span></div>
                        <div class="sb-track">
                            <div class="sb-fill" style="width:75%"></div>
                        </div>
                    </div>
                    <div class="skill-bar-item">
                        <div class="sb-info"><span>Python / YOLOv8</span><span>70%</span></div>
                        <div class="sb-track">
                            <div class="sb-fill" style="width:70%"></div>
                        </div>
                    </div>
                    <div class="skill-bar-item">
                        <div class="sb-info"><span>IoT (ESP32 / C++)</span><span>68%</span></div>
                        <div class="sb-track">
                            <div class="sb-fill" style="width:68%"></div>
                        </div>
                    </div>
                    <div class="skill-bar-item">
                        <div class="sb-info"><span>Figma / UI Design</span><span>82%</span></div>
                        <div class="sb-track">
                            <div class="sb-fill" style="width:82%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ PROJECTS ============ -->
    <section id="projects" class="section">
        <div class="container">
            <p class="section-label center"><i class="fas fa-code-branch"></i> Portfolio</p>
            <h2 class="section-title">My Latest Projects</h2>

            <!-- Filter Tabs -->
            <div class="project-filters">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="desktop">Desktop</button>
                <button class="filter-btn" data-filter="web">Web</button>
                <button class="filter-btn" data-filter="mobile">Mobile</button>
                <button class="filter-btn" data-filter="iot">IoT & AI</button>
            </div>

            <div class="projects-grid">
                <!-- Project 1: Joinin Kopi -->
                <article class="project-card" data-category="desktop">
                    <div class="project-image">
                        <img src="{{ asset('images/joinin_kopi.png') }}" alt="Joinin Kopi App" loading="lazy">
                        <div class="project-overlay">
                            <span class="project-category"><i class="fas fa-desktop"></i> Desktop App</span>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3>Joinin Kopi</h3>
                        <p>Aplikasi kasir berbasis desktop yang dirancang untuk meningkatkan efisiensi operasional kedai
                            kopi, mencakup sistem point-of-sale real-time, manajemen stok otomatis, dan laporan
                            penjualan harian serta bulanan yang membantu pemilik bisnis dalam pengambilan keputusan
                            secara akurat.</p>
                        <div class="tech-badges">
                            <span class="badge badge-java">Java</span>
                            <span class="badge badge-netbeans">NetBeans</span>
                            <span class="badge badge-mysql">MySQL</span>
                        </div>
                        <div class="project-actions">
                            <a href="#" target="_blank" rel="noopener" class="btn-demo"><i
                                    class="fab fa-youtube"></i> Demo</a>
                            <a href="#" target="_blank" rel="noopener" class="btn-repo"><i
                                    class="fab fa-github"></i> Repo</a>
                        </div>
                    </div>
                </article>

                <!-- Project 2: Topupin -->
                <article class="project-card" data-category="web">
                    <div class="project-image">
                        <img src="{{ asset('images/topupin.png') }}" alt="Topupin App" loading="lazy">
                        <div class="project-overlay">
                            <span class="project-category"><i class="fas fa-globe"></i> Web App</span>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3>TopUpin</h3>
                        <p>Platform top-up digital berbasis web dan mobile yang memudahkan masyarakat dalam mengakses
                            layanan pulsa, paket data, token listrik, dan voucher game dalam satu platform terintegrasi,
                            didukung sistem transaksi otomatis dan histori pembelian yang transparan.</p>
                        <div class="tech-badges">
                            <span class="badge badge-php">PHP</span>
                            <span class="badge badge-mysql">MySQL</span>
                            <span class="badge badge-bootstrap">Bootstrap</span>
                        </div>
                        <div class="project-actions">
                            <a href="#" target="_blank" rel="noopener" class="btn-demo"><i
                                    class="fab fa-youtube"></i> Demo</a>
                            <a href="#" target="_blank" rel="noopener" class="btn-repo"><i
                                    class="fab fa-github"></i> Repo</a>
                        </div>
                    </div>
                </article>

                <!-- Project 3: SimpaDi -->
                <article class="project-card" data-category="mobile">
                    <div class="project-image">
                        <img src="{{ asset('images/simpadi.png') }}" alt="SimpaDi App" loading="lazy">
                        <div class="project-overlay">
                            <span class="project-category"><i class="fas fa-mobile-alt"></i> Web & Mobile</span>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3>SIMPADI</h3>
                        <p>Sistem informasi pertanian terpadu berbasis web dan mobile yang membantu petani dalam
                            mengelola transaksi, stok, dan laporan keuangan secara digital, sehingga meningkatkan
                            efisiensi dan transparansi pengelolaan usaha tani dari hulu hingga pascapanen.</p>
                        <div class="tech-badges">
                            <span class="badge badge-laravel">Laravel</span>
                            <span class="badge badge-flutter">Flutter</span>
                            <span class="badge badge-mysql">MySQL</span>
                            <span class="badge badge-php">PHP</span>
                        </div>
                        <div class="project-actions">
                            <a href="#" target="_blank" rel="noopener" class="btn-demo"><i
                                    class="fab fa-youtube"></i> Demo</a>
                            <a href="#" target="_blank" rel="noopener" class="btn-repo"><i
                                    class="fab fa-github"></i> Repo</a>
                        </div>
                    </div>
                </article>

                <!-- Project 4: IoT Smart Hidroponik -->
                <article class="project-card" data-category="iot">
                    <div class="project-image">
                        <img src="{{ asset('images/hidroponik_iot.png') }}" alt="IoT Smart Hidroponik"
                            loading="lazy">
                        <div class="project-overlay">
                            <span class="project-category"><i class="fas fa-microchip"></i> IoT & AI</span>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3>Smart Hidroponik Pertumbuhan Sawi Caisim</h3>
                        <p>Sistem monitoring pertumbuhan tanaman hidroponik berbasis IoT yang mengintegrasikan sensor
                            pH, TDS, dan suhu menggunakan ESP32, deteksi tinggi tanaman dengan YOLOv8, serta kontrol
                            nutrisi otomatis berbasis Fuzzy Mamdani untuk mendukung pertanian presisi yang efisien dan
                            berkelanjutan.</p>
                        <div class="tech-badges">
                            <span class="badge badge-laravel">Laravel</span>
                            <span class="badge badge-cpp">C++</span>
                            <span class="badge badge-esp32">ESP32</span>
                            <span class="badge badge-yolo">YOLOv8</span>
                            <span class="badge badge-fuzzy">Fuzzy Mamdani</span>
                        </div>
                        <div class="project-actions">
                            <a href="#" target="_blank" rel="noopener" class="btn-demo"><i
                                    class="fab fa-youtube"></i> Demo</a>
                            <a href="#" target="_blank" rel="noopener" class="btn-repo"><i
                                    class="fab fa-github"></i> Repo</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ============ CONTACT ============ -->
    <section id="contact" class="section bg-darker">
        <div class="container">
            <p class="section-label center"><i class="fas fa-paper-plane"></i> Get In Touch</p>
            <h2 class="section-title">Let's Work Together</h2>
            <p class="section-subtitle">Saya sedang mencari kesempatan <strong>magang / internship</strong> di bidang
                pengembangan software. Mari terhubung!</p>

            <div class="contact-wrapper">
                <div class="contact-info">
                    <div class="contact-info-card">
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                            <div>
                                <span class="contact-label">Email</span>
                                <a href="mailto:gelasajur1209@gmail.com">gelasajur1209@gmail.com</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div>
                                <span class="contact-label">Location</span>
                                <span>Banyuwangi, Jawa Timur, Indonesia</span>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-briefcase"></i></div>
                            <div>
                                <span class="contact-label">Status</span>
                                <span class="status-badge">Open for Internship 2026</span>
                            </div>
                        </div>
                    </div>

                    <div class="social-section">
                        <p class="social-label">Find me on</p>
                        <div class="social-links">
                            <a href="#" aria-label="GitHub" class="social-btn"><i
                                    class="fab fa-github"></i></a>
                            <a href="#" aria-label="LinkedIn" class="social-btn"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="#" aria-label="Instagram" class="social-btn"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="#" aria-label="YouTube" class="social-btn"><i
                                    class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <form id="contact-form" novalidate>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" placeholder="Your Full Name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" placeholder="your@email.com" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" placeholder="e.g. Internship Opportunity">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" rows="5" placeholder="Tell me about the opportunity..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-full">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ FOOTER ============ -->
    <footer class="footer">
        <div class="container footer-inner">
            <p class="footer-name">Dendi Aprilio Setiawan</p>
            <p class="footer-copy">&copy; 2025 · Fullstack Web & Mobile Developer· Banyuwangi, Indonesia</p>
            <div class="footer-links">
                <a href="#hero">Home</a>
                <a href="#about">About</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
