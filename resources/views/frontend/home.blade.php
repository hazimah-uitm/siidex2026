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
                        EXPO KE-6<br>
                    </h2>

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
                        <p>UiTM Cawangan Pulau Pinang</p>
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

    <!-- Schedule Section -->
    <section id="schedule" class="schedule section">

        <div class="container section-title" data-aos="fade-up">
            <h2>Tarikh Penting<br></h2>
        </div>

        <div class="container">
            <div class="row g-4 align-items-start">

                <!-- LEFT: Tentatif -->
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

                <!-- RIGHT: Tarikh Penting -->
                <div class="col-lg-4">
                    <div class="important-dates-box" data-aos="fade-left" data-aos-delay="250">
                        {{-- <h3 class="important-title">Tarikh Penting</h3> --}}

                        <div class="important-date-item">
                            <div class="date-icon">
                                <i class="bi bi-calendar-event"></i>
                            </div>
                            <div class="date-content">
                                <h4>15 April - 30 Jun 2026</h4>
                                <p>Pendaftaran, Pembayaran dan Penghantaran Abstrak Lanjutan (Tarikh Tutup)</p>
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
                                    <a href="https://sites.google.com/view/seaim-2026/main-page?authuser=1"
                                        target="_blank">
                                        Laman Rasmi SeAIM’26
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Schedule Section -->

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
                        <span class="kategori-number">01</span>
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
                        <span class="kategori-number">02</span>
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
                        <span class="kategori-number">03</span>
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
                        <span class="kategori-number">04</span>
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

    <!-- /Venue Section -->

    <!-- Hotels Section -->
    <section id="hotels" class="hotels section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Hotels</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100">
                        <div class="card-img">
                            <img src="{{ asset('public/assets/frontend/img/hotels-1.jpg') }}" alt=""
                                class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">Non quibusdam blanditiis</a></h3>
                        <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p>0.4 Mile from the Venue</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100">
                        <div class="card-img">
                            <img src="{{ asset('public/assets/frontend/img/hotels-2.jpg') }}" alt=""
                                class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">Aspernatur assumenda</a></h3>
                        <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p>0.5 Mile from the Venue</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100">
                        <div class="card-img">
                            <img src="{{ asset('public/assets/frontend/img/hotels-3.jpg') }}" alt=""
                                class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">Dolores ut ut voluptatibu</a></h3>
                        <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p>0.6 Mile from the Venue</p>
                    </div>
                </div><!-- End Card Item -->

            </div>

        </div>

    </section>
    <!-- /Hotels Section -->

    <!-- Gallery Section -->
    {{-- <section id="gallery" class="gallery section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Gallery</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
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

        </section> --}}
    <!-- /Gallery Section -->

    <!-- Sponsors Section -->
    <section id="sponsors" class="sponsors section light-background">

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

    </section><!-- /Sponsors Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Frequently Asked Questions</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

                    <div class="faq-container">

                        <div class="faq-item faq-active">
                            <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                            <div class="faq-content">
                                <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                    laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                    rhoncus dolor purus non.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
                            <div class="faq-content">
                                <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                    interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                    scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                    Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                            <div class="faq-content">
                                <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                    Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                    suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                    convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                            <div class="faq-content">
                                <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                    interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                    scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                    Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
                            <div class="faq-content">
                                <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse
                                    in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                    suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
                            <div class="faq-content">
                                <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed
                                    in suscipit sequi. Distinctio ipsam dolore et.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div><!-- End Faq Column-->

            </div>

        </div>

    </section><!-- /Faq Section -->

    <!-- Buy Tickets Section -->
    <section id="buy-tickets" class="buy-tickets section light-background">

        <div class="container section-title" data-aos="fade-up">
            <h2>Yuran Penyertaan</h2>
        </div>

        <div class="container">

            <!-- Student -->
            <div class="row gy-4 pricing-item" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-4 d-flex align-items-center justify-content-center flex-column">
                    <h3>Student</h3>
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
            <div class="row gy-4 pricing-item featured mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-4 d-flex align-items-center justify-content-center flex-column">
                    <h3>UiTM Staff</h3>
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
            <div class="row gy-4 pricing-item mt-4" data-aos="fade-up" data-aos-delay="300">
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

        </div>

    </section>
    <!-- /Buy Tickets Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Hubungi Kami</h2>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <!-- LEFT: MAP -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                        frameborder="0" style="border:0; width: 100%; height: 100%; min-height: 400px;"
                        allowfullscreen="" loading="lazy">
                    </iframe>
                </div>

                <!-- RIGHT: INFO -->
                <div class="col-lg-6">

                    <div class="row gy-4">

                        <!-- Address -->
                        <div class="col-12">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div>

                        <!-- Call Us -->
                        <div class="col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                data-aos="fade-up" data-aos-delay="500">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@example.com</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- /Contact Section -->
@endsection
