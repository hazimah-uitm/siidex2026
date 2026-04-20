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

        <div class="container section-title" data-aos="fade-up">
            <h2>Tarikh Penting<br></h2>
        </div>

        <div class="container">
            <div class="row g-4 align-items-start">

                <!-- LEFT: Tentatif -->
                <div class="col-lg-4">
                    <div class="important-dates-box" data-aos="fade-right" data-aos-delay="250">
                        {{-- <h3 class="important-title">Tarikh Penting</h3> --}}

                        <div class="important-date-item">
                            <div class="date-icon">
                                <i class="bi bi-calendar-event"></i>
                            </div>
                            <div class="date-content">
                                <h4>15 April - 30 Jun 2026</h4>
                                <p>Pendaftaran, Pembayaran dan Penghantaran Abstrak</p>
                            </div>
                        </div>

                        <div class="important-date-item">
                            <div class="date-icon">
                                <i class="bi bi-calendar-check"></i>
                            </div>
                            <div class="date-content">
                                <h4>14 September 2026</h4>
                                <p>SIIDEX 2026 (8.00 pagi – 5.00 petang)</p>
                                <small>Hotel Waterfront, Kuching, Sarawak</small>
                            </div>
                        </div>

                        <div class="important-date-item">
                            <div class="date-icon">
                                <i class="bi bi-award"></i>
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

                <!-- RIGHT: Tarikh Penting -->
                <div class="col-lg-8">
                    <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                        <li class="nav-item">
                            <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">
                                14 September 2026
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
                        <div role="tabpanel" class="tab-pane fade show active" id="day-1">

                            <div class="row schedule-item">
                                <div class="col-md-4"><time>08:00 pagi</time></div>
                                <div class="col-md-8">
                                    <h4>Pendaftaran Peserta</h4>
                                </div>
                            </div>

                            <div class="row schedule-item">
                                <div class="col-md-4"><time>09:00 pagi</time></div>
                                <div class="col-md-8">
                                    <h4>Majlis Perasmian</h4>
                                </div>
                            </div>

                            <div class="row schedule-item">
                                <div class="col-md-4"><time>10:00 pagi</time></div>
                                <div class="col-md-8">
                                    <h4>Sesi Penilaian Juri</h4>
                                </div>
                            </div>

                            <div class="row schedule-item">
                                <div class="col-md-4"><time>12:30 tengah hari</time></div>
                                <div class="col-md-8">
                                    <h4>Rehat</h4>
                                </div>
                            </div>

                            <div class="row schedule-item">
                                <div class="col-md-4"><time>02:00 petang</time></div>
                                <div class="col-md-8">
                                    <h4>Pameran dan Penilaian</h4>
                                </div>
                            </div>

                            <div class="row schedule-item">
                                <div class="col-md-4"><time>04:00 petang</time></div>
                                <div class="col-md-8">
                                    <h4>Tamat Program</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Schedule Section -->

    <!-- Speakers Section -->
    <section id="speakers" class="speakers section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Latar Belakang</h2>
        </div>

        <div class="container">

            <!-- Intro -->
            <div class="row mb-5">
                <div class="col-lg-12" data-aos="fade-up">
                    <div class="info-card highlight-card">
                        <p>
                            Sarawak Invention, Innovation & Design Expo (SIIDEx) 2026 adalah SIIDEx yang keempat dianjurkan
                            oleh Universiti Teknologi MARA (UiTM) Cawangan Sarawak bersama UiTM Cawangan Pulau Pinang.
                            SIIDEx 2026 akan berlangsung pada 14 September 2026 dan bertempat di Waterfront Hotel, Kuching
                            Sarawak, Malaysia. Terdapat Ia merupakan pertandingan inovasi utama yang ditubuhkan untuk
                            memupuk budaya kreativiti, inovasi, dan pengkomersialan pengetahuan di kalangan penyelidik,
                            pendidik, pelajar, serta pengamal industri. Melalui SIIDEx, pameran produk inovasi dan ciptaan
                            boleh dipamerkan kepada orang ramai dan dipertandingkan. Terdapat empat kategori pertandingan
                            produk inovasi dan ciptaan iaitu Kategori A: Inovasi Pengajaran dan Pembelajaran, Kategori B:
                            Inovasi, Kategori C: Produk Ciptaan dan Kategori D: Reka Bentuk (Design). Pertandingan pameran
                            produk membolehkan peserta berpeluang mendapat anugerah yang diiktiraf oleh universiti dan
                            menggunakan platform tersebut untuk berkomunikasi dengan peserta industri dan akademik.
                        </p>
                    </div>
                </div>
            </div>

            <!-- History Blocks -->
            <div class="history-list">

                <div class="history-row" data-aos="fade-up">
                    <div class="history-year">2016</div>
                    <div class="history-content info-card">
                        <p>
                            Sejarah SIIDEx bermula pada tahun 2016 dengan tujuan untuk membudayakan produk inovasi dan
                            ciptaan cikgu dan pelajar. SIIDEx pertama melibatkan beberapa sekolah menengah dan bertempat di
                            Dewan Jubli, kampus Samarahan UiTM dan berlangsung dari 29 hingga 30 January 2016. Pertandingan
                            dan pameran ini adalah usaha Unit Penyelidikan dan Bisnes Inovasi (RIBU), Unit Industri,
                            Komuniti, dan Jaringan Alumni (ICAN) dan Pasukan Gerakan Kualiti Pelajar (PGKP) UiTM Sarawak
                            dengan kerjasama Invention and Design Association of Sarawak (IDEAS) dan Unit Pembangunana
                            Sumber Manusia Sarawak (WDU). Dalam SiIDEx pertama, terdapat 410 peserta dengan 88 produk yang
                            dibahagikan kepada 39 produk staf, 35 produk belia dan 14 produk ciptaan pelajar sekolah
                            menengah.
                        </p>
                    </div>
                </div>

                <div class="history-row" data-aos="fade-up">
                    <div class="history-year">2018</div>
                    <div class="history-content info-card">
                        <p>
                            Kejayaan SIIDEx pertama pada tahun 2016 telah mendapat banyak permintaan daripada
                            sekolah-sekolah di Kuching dan Samarahan untuk mengadakan SIIDEx sekali lagi pada tahun yang
                            seterusnya. Ekoran itu, SIIDEx yang kedua bertema “Empowerment throguh Invention, Innovation and
                            Design” telah diadakan di Penview Convention Centre Demak, Kuching dari 2 March hingga 4 March
                            2018. Terdapat 707 peserta dengan 154 produk telah dipamerkan. Antara aktiviti yang ditunjukkan
                            pada SIIDEx 2018 adalah ucapan motivasi dan perkongsian cara komersialisasi produk, kuiz Sains,
                            Teknologi, Kejuruteraan dan Matematik (STEM).
                        </p>
                    </div>
                </div>

                <div class="history-row" data-aos="fade-up">
                    <div class="history-year">2019</div>
                    <div class="history-content info-card">
                        <p>
                            Maklum balas daripada SIIDEx 2018 menunjukkan produk inovasi sekolah perlu dipertingkatkan dan
                            inisiatif perlu diambil untuk menghasilkan produk yang berkualiti tinggi di antara pelajar.
                            Justeru itu, UiTM Sarawak bersama MESTR, Jabatan Pendidikan Sarawak dan Sarawak Multimedia
                            Authority (SMA) menganjurkan Sarawak Invention, Innovation and Design Expo (SIIDEx) 2019 sebagai
                            satu platform untuk mempromosi dan meningkatkan minat pelajar sekolah menengah dalam bidang
                            Sains dan Teknologi.
                        </p>
                        <p class="mt-3">
                            Empat tahap aktiviti telah dirancang untuk SIIDEx 2019 untuk mencapai objektif tersebut. SIIDEx
                            2019 bermula dengan bengkel Mentor. Terdapat 19 mentor telah terlibat dan diberi tanggungjawab
                            untuk membimbing sekolah menghasilkan produk. Tahap yang kedua melibatkan bengkel Inovasi
                            sekolah tang telah berlangsung di tiga zon di Sarawak. Seramai 183 sekolah di seluruh Sarawak
                            telah menyertai bengkel ini. Bagi memastikan produk berkualiti telah dihasilkan, SIIDEx 2019
                            mengadakan pertandingan Mini SIIDEx 2019 di setiap zon. Seramai 102 sekolah telah menyertai
                            pertandingan dan 26 produk telah dipilih untuk dipertandingkan di SIIDEx 2019 utama yang
                            bertempat di Pusat Konvensyen CIDB, Kuching dari 21 hingga 23 Oktober 2019.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /Speakers Section -->

    <!-- Venue Section -->
    <section id="venue" class="venue section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Kategori Penyertaan</h2>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <!-- Kategori 1 -->
                <div class="col-lg-6">
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

                <!-- Kategori 2 -->
                <div class="col-lg-6">
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

                <!-- Kategori 3 -->
                <div class="col-lg-6">
                    <div class="kategori-card">
                        <span class="kategori-number">KATEGORI C</span>
                        <h4>Ciptaan (Invention)</h4>
                        <p>
                            Merujuk kepada penciptaan sesuatu produk, teknologi, atau kaedah yang benar-benar
                            baharu dan asli hasil daripada penyelidikan dan pembangunan.
                        </p>
                    </div>
                </div>

                <!-- Kategori 4 -->
                <div class="col-lg-6">
                    <div class="kategori-card">
                        <span class="kategori-number">KATEGORI D</span>
                        <h4>Reka Bentuk (Design)</h4>
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

    <!-- Sponsors Section -->
    {{-- <section id="sponsors" class="sponsors section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Sponsors</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-0 clients-wrap">

                <div class="col-xl-3 col-md-4 client-logo">
                    <img src="{{ asset('public/assets/frontend/img/clients/client-1.png') }}" class="img-fluid"
                        alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-3 col-md-4 client-logo">
                    <img src="{{ asset('public/assets/frontend/img/clients/client-2.png') }}" class="img-fluid"
                        alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-3 col-md-4 client-logo">
                    <img src="{{ asset('public/assets/frontend/img/clients/client-3.png') }}" class="img-fluid"
                        alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-3 col-md-4 client-logo">
                    <img src="{{ asset('public/assets/frontend/img/clients/client-4.png') }}" class="img-fluid"
                        alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-3 col-md-4 client-logo">
                    <img src="{{ asset('public/assets/frontend/img/clients/client-5.png') }}" class="img-fluid"
                        alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-3 col-md-4 client-logo">
                    <img src="{{ asset('public/assets/frontend/img/clients/client-6.png') }}" class="img-fluid"
                        alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-3 col-md-4 client-logo">
                    <img src="{{ asset('public/assets/frontend/img/clients/client-7.png') }}" class="img-fluid"
                        alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-3 col-md-4 client-logo">
                    <img src="{{ asset('public/assets/frontend/img/clients/client-8.png') }}" class="img-fluid"
                        alt="">
                </div><!-- End Client Item -->

            </div>

        </div>

    </section> --}}
    <!-- /Sponsors Section -->


    <!-- Buy Tickets Section -->
    <section id="buy-tickets" class="buy-tickets section light-background">

        <div class="container section-title" data-aos="fade-up">
            <h2>Yuran Penyertaan</h2>
        </div>

        <div class="container">

            <!-- Student -->
            <div class="row gy-4 pricing-item" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-4 d-flex align-items-center justify-content-center flex-column">
                    <h3>Pelajar</h3>
                    <p>(Tempatan / Antarabangsa)</p>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center">
                    <h4>RM200</h4>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center">
                    <a href="https://example.com/student" target="_blank" class="buy-btn">Bayar</a>
                </div>
            </div>

            <!-- UiTM Staff -->
            <div class="row gy-4 pricing-item featured mt-4" data-aos="fade-up" data-aos-delay="150">
                <div class="col-lg-4 d-flex align-items-center justify-content-center flex-column">
                    <h3>Staf UiTM</h3>
                    <p class="text-white">(UiTM Sarawak & UiTM Penang sahaja)</p>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center">
                    <h4>RM300</h4>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center">
                    <a href="https://example.com/staff" target="_blank" class="buy-btn">Bayar</a>
                </div>
            </div>

            <!-- Professional -->
            <div class="row gy-4 pricing-item mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-4 d-flex align-items-center justify-content-center flex-column">
                    <h3>Profesional</h3>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center">
                    <h4>RM400</h4>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center">
                    <a href="https://example.com/professional" target="_blank" class="buy-btn">Bayar</a>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="row mt-5" data-aos="fade-up" data-aos-delay="250">
                <div class="container text-center">

                    <a href="https://forms.gle/hBV9C2DXBJLkWjxg6" target="_blank" class="btn btn-main me-2 mb-2">
                        {{ __('messages.register_now') }}
                    </a>

                    <a href="{{ asset('public/assets/frontend/files/SIIDEX 2026_Extended Abstract Template.docx') }}" target="_blank"
                        class="btn btn-outline-main me-2 mb-2">
                        Muat Turun Templat Abstrak
                    </a>

                    {{-- <a href="{{ asset('public/assets/frontend/files/template-poster.pptx') }}" target="_blank"
                        class="btn btn-outline-main mb-2">
                        Muat Turun Templat Poster
                    </a> --}}

                </div>
            </div>

        </div>

    </section>
    <!-- /Buy Tickets Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

        <div class="container section-title" data-aos="fade-up">
            <h2>Anugerah</h2>
        </div>

        <div class="container">
            <div class="row gy-4">

                <!-- GOLD -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card text-center shadow-sm border-0 h-100">

                        <div class="p-4">
                            <img src="{{ asset('public/assets/frontend/img/award/emas.jpg') }}" class="img-fluid mb-3"
                                alt="Gold Medal">
                            <h4 class="fw-bold">Emas</h4>
                            <p class="text-muted">
                                Pingat & sijil penyertaan berdasarkan keputusan penilaian juri.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- SILVER -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card text-center shadow-sm border-0 h-100">

                        <div class="p-4">
                            <img src="{{ asset('public/assets/frontend/img/award/perak.jpg') }}" class="img-fluid mb-3"
                                alt="Silver Medal">
                            <h4 class="fw-bold">Perak</h4>
                            <p class="text-muted">
                                Pingat & sijil penyertaan berdasarkan keputusan penilaian juri.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- BRONZE -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card text-center shadow-sm border-0 h-100">

                        <div class="p-4">
                            <img src="{{ asset('public/assets/frontend/img/award/gangsa.jpg') }}" class="img-fluid mb-3"
                                alt="Bronze Medal">
                            <h4 class="fw-bold">Gangsa</h4>
                            <p class="text-muted">
                                Pingat & sijil penyertaan berdasarkan keputusan penilaian juri.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- /Faq Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

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

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <div class="container section-title">
            <h2>Hubungi Kami</h2>
        </div>

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.541492842449!2d110.42655855882104!3d1.4495685796954996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fba330de57a569%3A0x3f3010e46d089769!2sBangunan%20Pentadbiran%2C%20UiTM%20Cawangan%20Sarawak%2C%20Kampus%20Samarahan%202!5e0!3m2!1sen!2smy!4v1776070463137!5m2!1sen!2smy"
                        frameborder="0" style="border:0; width: 100%; height: 100%; min-height: 400px;"
                        allowfullscreen="" loading="lazy">
                    </iframe>
                </div>

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-12 mb-2">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-building"></i>
                                <h3>Alamat</h3>
                                <p>Pejabat Bahagian PJI, UiTM Kampus Samarahan 2</p>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-4">
                        <div class="col-md-12 mb-2">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-telephone"></i>
                                <h3>Hubungi Kami</h3>
                                <p>016-8001883</p>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-4">
                        <div class="col-md-12 mb-2">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-envelope"></i>
                                <h3>Secretariat SIIDEX 2026</h3>
                                <p>siidex2026@gmail.com</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- /Contact Section -->

    
    <!-- Hotels Section -->
    <section id="committee" class="committee section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Jawatankuasa Penganjur</h2>
        </div>

        <div class="container">
            <div class="row gy-4">

                <!-- Pengerusi 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="committee-card text-center">
                        <h4 class="role">Pengerusi 1</h4>
                        <h3 class="name">Prof. Ir. Dr. Juferi Idris</h3>
                    </div>
                </div>

                <!-- Pengerusi 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="committee-card text-center">
                        <h4 class="role">Pengerusi 2</h4>
                        <h3 class="name">Ts. Dr. Norhisham Razali @ Ghazali</h3>
                    </div>
                </div>

                <!-- Timbalan -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="committee-card text-center">
                        <h4 class="role">Timbalan Pengerusi</h4>
                        <h3 class="name">Dr. Lee Wen Chiat</h3>
                    </div>
                </div>

                <!-- Setiausaha -->
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="250">
                    <div class="committee-card text-center">
                        <h4 class="role">Setiausaha</h4>
                        <h3 class="name">Madam Hanita Tambi</h3>
                    </div>
                </div>

                <!-- Bendahari -->
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
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
@endsection
