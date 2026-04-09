<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('public/assets/frontend/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('public/assets/frontend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('public/assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/frontend/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('public/assets/frontend/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: TheEvent
  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                {{-- <img src="{{ asset('public/assets/frontend/img/logo.png') }}" alt=""> --}}
                <!-- Uncomment the line below if you also wish to use an text logo -->
                <h1 class="sitename">{{ config('app.name') }}</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Utama<br></a></li>
                    <li><a href="#speakers">Latar Belakang</a></li>
                    <li><a href="#schedule">Tentatif</a></li>
                    <li><a href="#venue">Kategori</a></li>
                    {{-- <li><a href="#hotels">Hotels</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Dropdown 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="#contact">Hubungi Kami</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="cta-btn d-none d-sm-block" href="#buy-tickets">Daftar Sekarang</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <img src="{{ asset('public/assets/frontend/img/hero-bg.jpg') }}" alt="" data-aos="fade-in"
                class="hero-bg">

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
                        <div class="col-lg-6">
                            <h3>Penganjur</h3>
                            <p>Bahagian Penyelidikan & Jaringan Industri (BPJI), UiTM Cawangan Sarawak</p>
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

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Latar Belakang</h2>
            </div>

            <div class="container">
                <div class="row gy-4">

                    <!-- Card 1 -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="info-card">
                            <p>
                                Sarawak Invention, Innovation & Design Expo (SIIDEx) merupakan pertandingan inovasi
                                utama UiTM Cawangan Sarawak yang ditubuhkan untuk memupuk budaya kreativiti, inovasi,
                                dan pengkomersialan pengetahuan di kalangan penyelidik, pendidik, pelajar, serta
                                pengamal
                                industri.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="info-card">
                            <p>
                                Penganjuran terakhir SIIDEx telah berjaya dianjurkan pada Oktober 2019, dengan
                                penyertaan
                                yang tinggi serta menghasilkan inovasi-inovasi yang memberi impak signifikan. Namun,
                                kesinambungan program ini terjejas akibat pandemik COVID-19, yang membataskan
                                penganjuran acara berskala besar dan penglibatan antarabangsa.
                            </p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                        <div class="info-card highlight">
                            <p>
                                Sejajar dengan komitmen strategik UiTM Sarawak untuk merancakkan semula ekosistem
                                inovasi dan memperkukuh peranan institusi dalam memajukan kecemerlangan penyelidikan
                                dan inovasi, Bahagian Penyelidikan & Jaringan Industri (BPJI) mencadangkan penganjuran
                                SIIDEx 2026 kali ke-6 dengan kerjasama Bahagian Penyelidikan & Jaringan Industri (BPJI)
                                UiTM Cawangan Pulau Pinang.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </section><!-- /Speakers Section -->

        <!-- Schedule Section -->
        <section id="schedule" class="schedule section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Tentatif Program<br></h2>
            </div><!-- End Section Title -->

            {{-- <div class="container"> --}}

            <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                <li class="nav-item">
                    <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">14 September
                        2026</a>
                </li>
                {{-- <li class="nav-item">
                        <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">Day 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab">Day 3</a>
                    </li> --}}
            </ul>

            <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

                {{-- <h3 class="sub-heading">
                    Tentatif program adalah seperti berikut:
                </h3> --}}

                <!-- Schedule Day 1 -->
                <div role="tabpanel" class="col-lg-6 tab-pane fade show active" id="day-1">

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
                </div><!-- End Schedule Day 1 -->
            </div>

            </div>
        </section><!-- /Schedule Section -->

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
        {{-- <section id="hotels" class="hotels section">

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

        </section> --}}
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

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Buy Tickets<br></h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4 pricing-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-3 d-flex align-items-center justify-content-center">
                        <h3>Standard Access</h3>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center justify-content-center">
                        <h4><sup>$</sup>150<span> / month</span></h4>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center justify-content-center">
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                            <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center justify-content-center">
                        <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                    </div>
                </div><!-- End Pricing Item -->

                <div class="row gy-4 pricing-item featured mt-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-3 d-flex align-items-center justify-content-center">
                        <h3>Premium Access<br></h3>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center justify-content-center">
                        <h4><sup>$</sup>250<span> / month</span></h4>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center justify-content-center">
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                            <li><i class="bi bi-check"></i> <strong>Nec feugiat nisl pretium</strong></li>
                            <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center justify-content-center">
                        <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                    </div>
                </div><!-- End Pricing Item -->

                <div class="row gy-4 pricing-item mt-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-3 d-flex align-items-center justify-content-center">
                        <h3>Pro Access<br></h3>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center justify-content-center">
                        <h4><sup>$</sup>350<span> / month</span></h4>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center justify-content-center">
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                            <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                            <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center justify-content-center">
                        <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                    </div>
                </div><!-- End Pricing Item -->

            </div>

        </section><!-- /Buy Tickets Section -->

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

    </main>

    <footer id="footer" class="footer dark-background">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename">TheEvent</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>A108 Adam Street</p>
                            <p>New York, NY 535022</p>
                            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                            <p><strong>Email:</strong> <span>info@example.com</span></p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Product Management</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Hic solutasetp</h4>
                        <ul>
                            <li><a href="#">Molestiae accusamus iure</a></li>
                            <li><a href="#">Excepturi dignissimos</a></li>
                            <li><a href="#">Suscipit distinctio</a></li>
                            <li><a href="#">Dilecta</a></li>
                            <li><a href="#">Sit quas consectetur</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Nobis illum</h4>
                        <ul>
                            <li><a href="#">Ipsam</a></li>
                            <li><a href="#">Laudantium dolorum</a></li>
                            <li><a href="#">Dinera</a></li>
                            <li><a href="#">Trodelas</a></li>
                            <li><a href="#">Flexo</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="copyright text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div>
                        © 2026 <a href="https://sarawak.uitm.edu.my/">UiTM Cawangan Sarawak</a>
                    </div>
                    {{-- <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
          </div> --}}
                </div>

                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>

            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('public/assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('public/assets/frontend/js/main.js') }}"></script>
    <script>
        var eventDate = new Date("2026-09-14T08:00:00").getTime();

        function animateNumber(id, value) {
            var el = document.getElementById(id);

            if (el.innerText !== value) {
                el.classList.add("flip");

                setTimeout(function() {
                    el.innerText = value;
                    el.classList.remove("flip");
                }, 150);
            }
        }

        function updateCountdown() {
            var now = new Date().getTime();
            var distance = eventDate - now;

            if (distance <= 0) {
                document.getElementById("countdown").classList.add("d-none");
                document.getElementById("countdown-ended").classList.remove("d-none");
                return;
            }

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance / (1000 * 60 * 60)) % 24);
            var minutes = Math.floor((distance / (1000 * 60)) % 60);
            var seconds = Math.floor((distance / 1000) % 60);

            animateNumber("days", String(days).padStart(2, '0'));
            animateNumber("hours", String(hours).padStart(2, '0'));
            animateNumber("minutes", String(minutes).padStart(2, '0'));
            animateNumber("seconds", String(seconds).padStart(2, '0'));
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);
    </script>

</body>

</html>
