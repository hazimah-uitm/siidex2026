@extends('frontend.layout.main')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="{{ asset('public/assets/frontend/img/hero-bg.jpg') }}" alt="" data-aos="fade-in" class="hero-bg">

        <div class="container mt-auto">
            <div class="row align-items-center text-center text-lg-start">

                <div class="col-lg-6 text-center mt-4 mt-lg-0">
                    <img src="{{ asset('public/assets/frontend/img/logo.png') }}" class="img-fluid logo-head"
                        style="max-height: 400px;">
                </div>

                <div class="col-lg-6">
                    <h2 data-aos="fade-up" data-aos-delay="100">
                        SARAWAK
                        <span>INVENTION, INNOVATION & DESIGN</span>
                        EXPO KE-5<br>
                    </h2>

                    <p class="event-theme" data-aos="fade-up" data-aos-delay="150">
                        {{ __('messages.theme_text') }}
                    </p>

                    <div data-aos="fade-up" data-aos-delay="200" class="mt-3">
                        <div class="countdown-wrapper">
                            <div id="countdown" class="row g-3 justify-content-center justify-content-lg-start">
                                <div class="col-6 col-md-3">
                                    <div class="countdown-box">
                                        <h3 id="days" class="countdown-number">00</h3>
                                        <span class="countdown-text">Hari</span>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="countdown-box">
                                        <h3 id="hours" class="countdown-number">00</h3>
                                        <span class="countdown-text">Jam</span>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="countdown-box">
                                        <h3 id="minutes" class="countdown-number">00</h3>
                                        <span class="countdown-text">Minit</span>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="countdown-box">
                                        <h3 id="seconds" class="countdown-number">00</h3>
                                        <span class="countdown-text">Saat</span>
                                    </div>
                                </div>
                            </div>

                            <p id="countdown-ended" class="mt-3 mb-0 fw-semibold d-none">
                                Acara sedang berlangsung!
                            </p>
                        </div>
                    </div>
                    {{-- <div data-aos="fade-up" data-aos-delay="300">
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                class="glightbox pulsating-play-btn mt-3"></a>
                        </div> --}}
                </div>
            </div>
        </div>

        <div class="about-info mt-auto mb-3 position-relative">
            <div class="container position-relative" data-aos="fade-up">
                <div class="row">

                    <div class="col-lg-3">
                        <h3>Penganjur</h3>
                        <p>UiTM Cawangan Sarawak</p>
                    </div>

                    <div class="col-lg-3">
                        <h3>Penganjur Bersama</h3>
                        <p>UiTM Cawangan Pulau Pinang <br><a
                                href="https://sites.google.com/view/seaim-2026/main-page?authuser=1" target="_blank">
                                Laman Rasmi SeAIM’26
                            </a></p>
                    </div>

                    <div class="col-lg-3">
                        <h3>Lokasi</h3>
                        <p>Hotel Waterfront, Kuching, Sarawak</p>
                    </div>

                    <div class="col-lg-3">
                        <h3>Tarikh</h3>
                        <p>14 September 2026</p>
                    </div>

                </div>
            </div>
        </div>
        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                </path>
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3"></use>
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0"></use>
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9"></use>
            </g>
        </svg>
    </section><!-- /Hero Section -->


    <!-- Schedule Section -->
    <section id="schedule" class="schedule section">

        <div class="container">
            <div class="row g-4 align-items-start">

                <!-- LEFT: Tarikh Penting -->
                <div class="col-lg-4">
                    <div class="important-dates-box compact-dates" data-aos="fade-right" data-aos-delay="100">
                        <h3 class="important-title">Tarikh Penting</h3>

                        <div class="important-date-item">
                            <div class="date-icon">
                                <i class="bi bi-calendar-event"></i>
                            </div>
                            <div class="date-content">
                                <h4>15 April - 30 Jun 2026</h4>
                                <p>Pendaftaran, pembayaran dan penghantaran abstrak</p>
                            </div>
                        </div>

                        <div class="important-date-item">
                            <div class="date-icon">
                                <i class="bi bi-calendar-check"></i>
                            </div>
                            <div class="date-content">
                                <h4>14 September 2026</h4>
                                <p>SIIDEX 2026</p>
                                <small>8.00 pagi – 5.00 petang • Hotel Waterfront, Kuching</small>
                            </div>
                        </div>

                        <div class="important-date-item">
                            <div class="date-icon">
                                <i class="bi bi-mic-fill"></i>
                            </div>
                            <div class="date-content">
                                <h4>15 September 2026</h4>
                                <p>SeAIM’26 – Seminar Antarabangsa</p>
                                <small>
                                    <a href="https://sites.google.com/view/seaim-2026/main-page?authuser=1" target="_blank">
                                        Laman Rasmi SeAIM’26
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: Tentatif -->
                <div class="col-lg-8">
                    <div class="schedule-card timeline-style-card" data-aos="fade-left" data-aos-delay="150">

                        <div class="schedule-card-header">
                            <div>
                                <h3>Tentatif SIIDEx 2026</h3>
                            </div>
                            <span class="schedule-badge">14 SEPTEMBER 2026</span>
                        </div>

                        <div class="schedule-timeline">

                            <div class="schedule-timeline-item">
                                <div class="schedule-time">
                                    <span>08:00 pagi</span>
                                </div>
                                <div class="schedule-line"></div>
                                <div class="schedule-detail">
                                    <div class="schedule-event-card">
                                        <h4>Pendaftaran Peserta</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="schedule-timeline-item">
                                <div class="schedule-time">
                                    <span>09:00 pagi</span>
                                </div>
                                <div class="schedule-line"></div>
                                <div class="schedule-detail">
                                    <div class="schedule-event-card">
                                        <h4>Majlis Perasmian</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="schedule-timeline-item">
                                <div class="schedule-time">
                                    <span>10:00 pagi</span>
                                </div>
                                <div class="schedule-line"></div>
                                <div class="schedule-detail">
                                    <div class="schedule-event-card">
                                        <h4>Sesi Penilaian Juri</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="schedule-timeline-item">
                                <div class="schedule-time">
                                    <span>12:30 tengah hari</span>
                                </div>
                                <div class="schedule-line"></div>
                                <div class="schedule-detail">
                                    <div class="schedule-event-card">
                                        <h4>Rehat</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="schedule-timeline-item">
                                <div class="schedule-time">
                                    <span>02:00 petang</span>
                                </div>
                                <div class="schedule-line"></div>
                                <div class="schedule-detail">
                                    <div class="schedule-event-card">
                                        <h4>Pameran dan Penilaian</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="schedule-timeline-item">
                                <div class="schedule-time">
                                    <span>04:00 petang</span>
                                </div>
                                <div class="schedule-line"></div>
                                <div class="schedule-detail">
                                    <div class="schedule-event-card">
                                        <h4>Tamat Program</h4>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /Schedule Section -->

    <!-- background-info Section -->
    <section id="background-info" class="background-info section light-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>Latar Belakang</h2>
        </div>

        <div class="container">

            <!-- Intro -->
            <div class="background-intro" data-aos="fade-up">
                <div class="intro-card">
                    <p>
                        Sarawak Invention, Innovation & Design Exposition (SIIDEx) 2026 adalah SIIDEx yang ke-5 dianjurkan
                        oleh Universiti Teknologi MARA (UiTM) Cawangan Sarawak bersama UiTM Cawangan Pulau Pinang.
                        SIIDEx 2026 akan berlangsung pada 14 September 2026 dan bertempat di Waterfront Hotel, Kuching
                        Sarawak, Malaysia. Ia merupakan pertandingan inovasi utama yang ditubuhkan untuk
                        memupuk budaya kreativiti, inovasi, dan pengkomersialan pengetahuan di kalangan penyelidik,
                        pendidik, pelajar, serta pengamal industri. Melalui SIIDEx, pameran produk inovasi dan ciptaan
                        boleh dipamerkan kepada orang ramai dan dipertandingkan.
                        Pertandingan pameran produk membolehkan peserta berpeluang mendapat anugerah yang diiktiraf oleh
                        universiti dan
                        menggunakan platform tersebut untuk berkomunikasi dengan peserta industri dan akademik.
                    </p>
                </div>
                <!-- Kategori Section -->
                <div class="category-wrapper mt-4" data-aos="fade-up">

                    <div class="category-header text-center mb-3">
                        <h5>Kategori Pertandingan</h5>
                    </div>

                    <div class="category-grid">

                        <div class="category-card">
                            <div class="cat-icon">
                                <i class="bi bi-mortarboard"></i>
                            </div>
                            <div class="cat-content">
                                <div class="cat-label">Kategori A</div>
                                <div class="cat-name">Inovasi Pengajaran dan Pembelajaran</div>
                            </div>
                        </div>

                        <div class="category-card">
                            <div class="cat-icon">
                                <i class="bi bi-lightbulb"></i>
                            </div>
                            <div class="cat-content">
                                <div class="cat-label">Kategori B</div>
                                <div class="cat-name">Inovasi</div>
                            </div>
                        </div>

                        <div class="category-card">
                            <div class="cat-icon">
                                <i class="bi bi-box-seam"></i>
                            </div>
                            <div class="cat-content">
                                <div class="cat-label">Kategori C</div>
                                <div class="cat-name">Ciptaan</div>
                            </div>
                        </div>

                        <div class="category-card">
                            <div class="cat-icon">
                                <i class="bi bi-palette"></i>
                            </div>
                            <div class="cat-content">
                                <div class="cat-label">Kategori D</div>
                                <div class="cat-name">Reka Bentuk</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Timeline -->
            <div class="history-timeline">

                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-year">
                        <span>2016</span>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-card">
                            <p>
                                Sejarah SIIDEx bermula pada tahun 2016 dengan tujuan untuk membudayakan produk inovasi dan
                                ciptaan cikgu dan pelajar. SIIDEx pertama melibatkan beberapa sekolah menengah dan bertempat
                                di
                                Dewan Jubli, kampus Samarahan UiTM dan berlangsung dari 29 hingga 30 January 2016.
                                Pertandingan
                                dan pameran ini adalah usaha Unit Penyelidikan dan Bisnes Inovasi (RIBU), Unit Industri,
                                Komuniti, dan Jaringan Alumni (ICAN) dan Pasukan Gerakan Kualiti Pelajar (PGKP) UiTM Sarawak
                                dengan kerjasama Invention and Design Association of Sarawak (IDEAS) dan Unit Pembangunana
                                Sumber Manusia Sarawak (WDU). Dalam SiIDEx pertama, terdapat 410 peserta dengan 88 produk
                                yang
                                dibahagikan kepada 39 produk staf, 35 produk belia dan 14 produk ciptaan pelajar sekolah
                                menengah.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="timeline-year">
                        <span>2018</span>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-card">
                            <p>
                                Kejayaan SIIDEx pertama pada tahun 2016 telah mendapat banyak permintaan daripada
                                sekolah-sekolah di Kuching dan Samarahan untuk mengadakan SIIDEx sekali lagi pada tahun yang
                                seterusnya. Ekoran itu, SIIDEx yang kedua bertema “Empowerment throguh Invention, Innovation
                                and
                                Design” telah diadakan di Penview Convention Centre Demak, Kuching dari 2 March hingga 4
                                March
                                2018. Terdapat 707 peserta dengan 154 produk telah dipamerkan. Antara aktiviti yang
                                ditunjukkan
                                pada SIIDEx 2018 adalah ucapan motivasi dan perkongsian cara komersialisasi produk, kuiz
                                Sains,
                                Teknologi, Kejuruteraan dan Matematik (STEM).
                            </p>
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-year">
                        <span>2019</span>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-card">
                            <p>
                                Maklum balas daripada SIIDEx 2018 menunjukkan produk inovasi sekolah perlu dipertingkatkan
                                dan
                                inisiatif perlu diambil untuk menghasilkan produk yang berkualiti tinggi di antara pelajar.
                                Justeru itu, UiTM Sarawak bersama MESTR, Jabatan Pendidikan Sarawak dan Sarawak Multimedia
                                Authority (SMA) menganjurkan Sarawak Invention, Innovation and Design Expo (SIIDEx) 2019
                                sebagai
                                satu platform untuk mempromosi dan meningkatkan minat pelajar sekolah menengah dalam bidang
                                Sains dan Teknologi.
                            </p>
                            <p class="mt-2">
                                Empat tahap aktiviti telah dirancang untuk SIIDEx 2019 untuk mencapai objektif tersebut.
                                SIIDEx
                                2019 bermula dengan bengkel Mentor. Terdapat 19 mentor telah terlibat dan diberi
                                tanggungjawab
                                untuk membimbing sekolah menghasilkan produk. Tahap yang kedua melibatkan bengkel Inovasi
                                sekolah tang telah berlangsung di tiga zon di Sarawak. Seramai 183 sekolah di seluruh
                                Sarawak
                                telah menyertai bengkel ini. Bagi memastikan produk berkualiti telah dihasilkan, SIIDEx 2019
                                mengadakan pertandingan Mini SIIDEx 2019 di setiap zon. Seramai 102 sekolah telah menyertai
                                pertandingan dan 26 produk telah dipilih untuk dipertandingkan di SIIDEx 2019 utama yang
                                bertempat di Pusat Konvensyen CIDB, Kuching dari 21 hingga 23 Oktober 2019.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /background-info Section -->

    <!-- category Section -->
    <section id="category" class="category section">

        <div class="container section-title" data-aos="fade-up">
            <h2>Kategori Penyertaan</h2>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4">

                <div class="col-12 col-md-6">
                    <div class="kategori-card">
                        <span class="kategori-number">KATEGORI A</span>
                        <h4>Inovasi Pengajaran dan Pembelajaran</h4>
                        <p>
                            Merujuk kepada pembangunan kaedah, alat, sistem, atau pendekatan baharu yang
                            bertujuan meningkatkan keberkesanan proses pengajaran dan pembelajaran dalam
                            bidang pendidikan.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="kategori-card">
                        <span class="kategori-number">KATEGORI B</span>
                        <h4>Inovasi</h4>
                        <p>
                            Merujuk kepada penambahbaikan atau pengubahsuaian terhadap produk, proses,
                            teknologi, atau perkhidmatan sedia ada bagi meningkatkan fungsi, kecekapan,
                            atau nilai penggunaannya.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="kategori-card">
                        <span class="kategori-number">KATEGORI C</span>
                        <h4>Ciptaan</h4>
                        <p>
                            Merujuk kepada penciptaan sesuatu produk, teknologi, atau kaedah yang benar-benar
                            baharu dan asli hasil daripada penyelidikan dan pembangunan.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="kategori-card">
                        <span class="kategori-number">KATEGORI D</span>
                        <h4>Reka Bentuk</h4>
                        <p>
                            Merujuk kepada pembangunan konsep atau reka bentuk kreatif yang menekankan
                            aspek fungsi, estetika, ergonomik, dan pengalaman pengguna dalam menghasilkan
                            sesuatu produk atau sistem.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Buy Tickets Section -->
<section id="fee" class="fee section light-background">

    <div class="container section-title" data-aos="fade-up">
        <h2>Yuran Penyertaan</h2>
    </div>

    <div class="container">
        <div class="row gy-4">

            <!-- Early Bird -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing-column featured">
                    <div class="pricing-header">
                        <h3>Early Bird</h3>
                        <p class="fw-bold">15 April 2026 - 31 Mei 2026</p>
                    </div>

                    <div class="price-row">
                        <div class="price-title">Pelajar</div>

                        <div class="price-line">
                            <span class="price-label">Tempatan</span>
                            <span class="price-value">RM 200</span>
                        </div>

                        <div class="price-line">
                            <span class="price-label">Antarabangsa</span>
                            <span class="price-value">USD 60</span>
                        </div>
                    </div>

                    <div class="price-row">
                        <div class="price-title">Staf UiTM</div>

                        <div class="price-line single-price">
                            <span class="price-label">UiTM Sarawak &amp; UiTM Penang sahaja</span>
                            <span class="price-value">RM 300</span>
                        </div>
                    </div>

                    <div class="price-row">
                        <div class="price-title">Profesional</div>

                        <div class="price-line">
                            <span class="price-label">Tempatan</span>
                            <span class="price-value">RM 400</span>
                        </div>

                        <div class="price-line">
                            <span class="price-label">Antarabangsa</span>
                            <span class="price-value">USD 110</span>
                        </div>
                    </div>

                    <div class="pricing-action">
                        <a href="https://example.com/fee-details" target="_blank" class="btn btn-fee btn-fee-light">
                            Buat Pembayaran
                        </a>
                    </div>
                </div>
            </div>

            <!-- Normal Price -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                <div class="pricing-column">
                    <div class="pricing-header">
                        <h3>Normal Price</h3>
                        <p class="fw-bold">1 Jun 2026 - 31 Julai 2026</p>
                    </div>

                    <div class="price-row">
                        <div class="price-title">Pelajar</div>

                        <div class="price-line">
                            <span class="price-label">Tempatan</span>
                            <span class="price-value">RM 300</span>
                        </div>

                        <div class="price-line">
                            <span class="price-label">Antarabangsa</span>
                            <span class="price-value">USD 80</span>
                        </div>
                    </div>

                    <div class="price-row">
                        <div class="price-title">Staf UiTM</div>

                        <div class="price-line single-price">
                            <span class="price-label">UiTM Sarawak &amp; UiTM Penang sahaja</span>
                            <span class="price-value">RM 400</span>
                        </div>
                    </div>

                    <div class="price-row">
                        <div class="price-title">Profesional</div>

                        <div class="price-line">
                            <span class="price-label">Tempatan</span>
                            <span class="price-value">RM 500</span>
                        </div>

                        <div class="price-line">
                            <span class="price-label">Antarabangsa</span>
                            <span class="price-value">USD 130</span>
                        </div>
                    </div>

                    <div class="pricing-action">
                        <a href="https://example.com/fee-details" target="_blank" class="btn btn-fee">
                            Buat Pembayaran
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

    <!-- Registrations Section -->
    <section id="registrations" class="registrations section">
        <!-- Registration Banner -->
        <div class="row" data-aos="fade-up" data-aos-delay="250">
            <div class="col-12">
                <div class="registration-banner">
                    <div class="row align-items-center gy-4">

                        <!-- Left Content -->
                        <div class="col-lg-5">
                            <div class="banner-left">
                                <h3 class="banner-title">PENDAFTARAN SIIDEx 2026</h3>
                                <p class="banner-text">
                                    Lengkapkan penyertaan sebelum tarikh tutup.
                                </p>

                                <div class="banner-buttons">

                                    <!-- Row 1: Register (full width) -->
                                    <div class="mb-3">
                                        <a href="https://forms.gle/hBV9C2DXBJLkWjxg6" target="_blank"
                                            class="btn btn-main w-100">
                                            <i class="bi bi-pencil-square me-2"></i>DAFTAR SEKARANG
                                        </a>
                                    </div>

                                    <!-- Row 2: Download (2 column) -->
                                    <div class="row g-2">
                                        <div class="col-12 mb-2">
                                            <a href="{{ asset('public/assets/frontend/files/SIIDEX 2026_Extended Abstract Template.docx') }}"
                                                target="_blank" class="btn btn-light w-100">
                                                <i class="bi bi-file-earmark-text me-2"></i>Muat Turun Templat Abstrak
                                            </a>
                                        </div>

                                        <div class="col-12">
                                            <a href="{{ asset('public/assets/frontend/files/SIIDEX2026.png') }}"
                                                target="_blank" class="btn btn-light w-100">
                                                <i class="bi bi-image me-2"></i>Muat Turun Poster Rasmi SIIDEx 2026
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Right Info -->
                        <div class="col-lg-7">
                            <div class="banner-info-list">

                                <div class="banner-info-item">
                                    <div class="banner-icon">
                                        <i class="bi bi-globe2"></i>
                                    </div>
                                    <div class="banner-info-text">
                                        Penyertaan secara <strong>virtual.</strong>
                                    </div>
                                </div>

                                <div class="banner-info-item">
                                    <div class="banner-icon">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                    <div class="banner-info-text">
                                        Pelajar & pensyarah UiTM Cawangan Sarawak
                                        <strong>wajib hadir secara fizikal.</strong>
                                    </div>
                                </div>

                                <div class="banner-info-item">
                                    <div class="banner-icon">
                                        <i class="bi bi-box-seam"></i>
                                    </div>
                                    <div class="banner-info-text">
                                        Penyertaan fizikal terhad kepada <strong>60 produk.</strong>
                                    </div>
                                </div>

                                <!-- NEW IMPORTANT -->
                                <div class="banner-info-item highlight">
                                    <div class="banner-icon">
                                        <i class="bi bi-trophy-fill"></i>
                                    </div>
                                    <div class="banner-info-text">
                                        Pemenang SiiDEX 2026 akan dihantar ke
                                        <strong>pertandingan antarabangsa & IIDEX 2026.</strong>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- awards Section -->
    <section id="awards" class="awards section">

        <div class="container section-title" data-aos="fade-up">
            <h2>Anugerah</h2>
        </div>

        <div class="container">

            <!-- =========================
                                                     BEST AWARDS BY CATEGORY
                                                ========================== -->

            <div class="row gy-4 mb-4">

                <!-- Category 1 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card text-center shadow-sm border-0 h-100 award-card special-award-card">
                        <div class="p-4">
                            <div class="award-icon-wrap mb-3">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>
                            <h4 class="fw-bold">
                                Anugerah Inovasi Pengajaran dan Pembelajaran Terbaik
                            </h4>
                        </div>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="card text-center shadow-sm border-0 h-100 award-card special-award-card">
                        <div class="p-4">
                            <div class="award-icon-wrap mb-3">
                                <i class="bi bi-lightbulb-fill"></i>
                            </div>
                            <h4 class="fw-bold">
                                Anugerah Inovasi Terbaik
                            </h4>
                        </div>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card text-center shadow-sm border-0 h-100 award-card special-award-card">
                        <div class="p-4">
                            <div class="award-icon-wrap mb-3">
                                <i class="bi bi-box-seam"></i>
                            </div>
                            <h4 class="fw-bold">
                                Anugerah Produk Ciptaan Terbaik
                            </h4>
                        </div>
                    </div>
                </div>

                <!-- Category 4 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="250">
                    <div class="card text-center shadow-sm border-0 h-100 award-card special-award-card">
                        <div class="p-4">
                            <div class="award-icon-wrap mb-3">
                                <i class="bi bi-palette-fill"></i>
                            </div>
                            <h4 class="fw-bold">
                                Anugerah Reka Bentuk Terbaik
                            </h4>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Note for Best Awards -->
            <div class="row mb-5" data-aos="fade-up" data-aos-delay="280">
                <div class="col-12">
                    <div class="awards-alert-note">
                        <i class="bi bi-megaphone-fill me-2"></i>
                        Setiap Anugerah Terbaik mengikut kategori akan disampaikan semasa
                        <strong>Majlis Penutupan pada 15 September 2026</strong>.
                    </div>
                </div>
            </div>


            <!-- =========================
                                                     MEDALS
                                                ========================== -->

            <div class="row gy-4">

                <!-- GOLD -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                    <div class="card text-center shadow-sm border-0 h-100 award-card">
                        <div class="p-4">
                            <img src="{{ asset('public/assets/frontend/img/award/emas.jpg') }}" class="img-fluid mb-3"
                                alt="Gold Medal">
                            <h4 class="fw-bold">Emas</h4>
                            <p class="text-muted mb-0">
                                Pingat dan sijil penyertaan berdasarkan keputusan penilaian juri.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- SILVER -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card text-center shadow-sm border-0 h-100 award-card">
                        <div class="p-4">
                            <img src="{{ asset('public/assets/frontend/img/award/perak.jpg') }}" class="img-fluid mb-3"
                                alt="Silver Medal">
                            <h4 class="fw-bold">Perak</h4>
                            <p class="text-muted mb-0">
                                Pingat dan sijil penyertaan berdasarkan keputusan penilaian juri.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- BRONZE -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="450">
                    <div class="card text-center shadow-sm border-0 h-100 award-card">
                        <div class="p-4">
                            <img src="{{ asset('public/assets/frontend/img/award/gangsa.jpg') }}" class="img-fluid mb-3"
                                alt="Bronze Medal">
                            <h4 class="fw-bold">Gangsa</h4>
                            <p class="text-muted mb-0">
                                Pingat dan sijil penyertaan berdasarkan keputusan penilaian juri.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Note for medals -->
            <div class="row mt-4" data-aos="fade-up" data-aos-delay="500">
                <div class="col-12">
                    <div class="awards-alert-note online-note">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        Bagi Anugerah <strong>Emas, Perak dan Gangsa</strong>, pemberian adalah
                        <strong>secara dalam talian sahaja</strong>.
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- /awards Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Galeri</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 0
                },
                "768": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 5,
                  "spaceBetween": 20
                }
              }
            }
          </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-1.jpg') }}"><img
                                src="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-1.jpg') }}"
                                class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-2.jpg') }}"><img
                                src="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-2.jpg') }}"
                                class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-3.jpg') }}"><img
                                src="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-3.jpg') }}"
                                class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-4.jpg') }}"><img
                                src="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-4.jpg') }}"
                                class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-5.jpg') }}"><img
                                src="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-5.jpg') }}"
                                class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-6.jpg') }}"><img
                                src="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-6.jpg') }}"
                                class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-7.jpg') }}"><img
                                src="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-7.jpg') }}"
                                class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-8.jpg') }}"><img
                                src="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-8.jpg') }}"
                                class="img-fluid" alt=""></a></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section>
    <!-- /Gallery Section -->

    <!-- Hotels Section -->
    <section id="committee" class="committee section">

        <!-- Section Title -->
        <div class="container section-title">
            <h2>Jawatankuasa Penganjur</h2>
        </div>

        <div class="container">
            <div class="row gy-4">

                <!-- Pengerusi 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">Pengerusi 1</h4>
                        <h3 class="name">Prof. Ir. Dr. Juferi Idris</h3>
                    </div>
                </div>

                <!-- Pengerusi 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">Pengerusi 2</h4>
                        <h3 class="name">Ts. Dr. Norhisham Razali @ Ghazali</h3>
                    </div>
                </div>

                <!-- Timbalan -->
                <div class="col-lg-4 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">Timbalan Pengerusi</h4>
                        <h3 class="name">Dr. Lee Wen Chiat</h3>
                    </div>
                </div>

                <!-- Setiausaha -->
                <div class="col-lg-6 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">Setiausaha</h4>
                        <h3 class="name">Madam Hanita Tambi</h3>
                    </div>
                </div>

                <!-- Bendahari -->
                <div class="col-lg-6 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">Bendahari</h4>
                        <h3 class="name">Ts. Dr. Mohd Rafiz Salji<br>Azura Ahmad</h3>
                    </div>
                </div>

            </div>

            <!-- Jawatankuasa Kecil -->
            <div class="row gy-4 mt-4">

                {{-- <div class="col-12 text-center mb-3">
                    <h3 class="sub-title">Jawatankuasa Kecil</h3>
                </div> --}}

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card small text-center">
                        <h4 class="role">Teknikal</h4>
                        <p class="name">Encik Mohd Shahrizi bin Razali</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card small text-center">
                        <h4 class="role">Promosi & Publisiti</h4>
                        <p class="name">Chrisna Pindah</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card small text-center">
                        <h4 class="role">Pendaftaran</h4>
                        <p class="name">Dr. Lee Wen Chiat<br>Jenny Yap</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card small text-center">
                        <h4 class="role">Penajaan</h4>
                        <p class="name">Ts. Dr. Nurzawani Md Sofwan</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card small text-center">
                        <h4 class="role">Logistik</h4>
                        <p class="name">Dr. Hadi Jumaat</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card small text-center">
                        <h4 class="role">Acara & Protokol</h4>
                        <p class="name">Abdul Hafiz Abdul Khalid</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card small text-center">
                        <h4 class="role">Penjurian</h4>
                        <p class="name">Dr. Rudy Tawie</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card small text-center">
                        <h4 class="role">Penerbitan</h4>
                        <p class="name">AP Dr. Ting Siew King</p>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- /Hotels Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

        <div class="container section-title">
            <h2>Hubungi Kami</h2>
        </div>

        <div class="container">

            <!-- Secretariat Email -->
            <div class="row justify-content-center mb-4">
                <div class="col-lg-12">
                    <div
                        class="info-item d-flex flex-column justify-content-center align-items-center text-center contact-email-box">
                        <i class="bi bi-envelope"></i>
                        <h3>Secretariat SIIDEX 2026</h3>
                        <p><a href="mailto:siidex2026@gmail.com">siidex2026@gmail.com</a></p>
                    </div>
                </div>
            </div>

            <div class="row gy-4 justify-content-center">

                <!-- Person 1 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center text-center">
                        <i class="bi bi-person"></i>
                        <h3>Ts. Dr. Mohd Norhisham Razali @ Ghazali</h3>
                        <p class="contact-role">Pengerusi 2</p>
                        <p>019-8110064</p>
                    </div>
                </div>

                <!-- Person 2 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center text-center">
                        <i class="bi bi-person"></i>
                        <h3>Dr. Lee Wen Chiat</h3>
                        <p class="contact-role">Timbalan Pengerusi</p>
                        <p>016-8001883</p>
                    </div>
                </div>

                <!-- Person 3 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center text-center">
                        <i class="bi bi-person"></i>
                        <h3>Ts. Dr. Mohd Rafiz Salji</h3>
                        <p class="contact-role">Bendahari</p>
                        <p>019-3228539</p>
                    </div>
                </div>

                <!-- Person 4 -->
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center text-center">
                        <i class="bi bi-person"></i>
                        <h3>Puan Chrisna Pindah</h3>
                        <p class="contact-role">Promosi & Publisiti</p>
                        <p>014-3791534</p>
                    </div>
                </div>

                <!-- Person 5 -->
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center text-center">
                        <i class="bi bi-person"></i>
                        <h3>Puan Hanita Tambi</h3>
                        <p class="contact-role">Setiausaha</p>
                        <p>013-8397102</p>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- /Contact Section -->
@endsection
