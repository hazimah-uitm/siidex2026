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
                    <li class="dropdown"><a href="#"><span>Info Penyertaan</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#schedule">Tarikh Penting</a></li>
                            <li><a href="#venue">Kategori Penyertaan</a></li>
                            <li><a href="#buy-tickets">Yuran</a></li>
                            <li><a href="#faq">Anugerah</a></li>
                        </ul>
                    <li><a href="#gallery">Galeri</a></li>
                    {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i
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

            <a class="cta-btn" href="https://forms.gle/hBV9C2DXBJLkWjxg6" target="_blank">Daftar Sekarang</a>

        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>

    <footer id="footer">

        <div class="footer-top footer light-background">
            <div class="container">
                <div class="row gy-4">

                    <!-- ABOUT (KEKAL) -->
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="index.html" class="logo d-flex flex-column align-items-start">
                            <span class="sitename">SIIDEx 2026</span>
                        </a>
                         <div class="footer-logo">
                            <img src="{{ asset('public/assets/frontend/img/footer/logo.png') }}" alt="">
                        </div>
                    </div>

                    <!-- PENGANJUR -->
                    <div class="col-lg-2 col-md-6 footer-links text-center">
                        <h4>Penganjur</h4>
                        <div class="footer-logo">
                            <img src="{{ asset('public/assets/frontend/img/footer/host.png') }}" alt="">
                        </div>
                    </div>

                    <!-- PENGANJUR BERSAMA -->
                    <div class="col-lg-3 col-md-6 footer-links text-center">
                        <h4>Penganjur Bersama</h4>
                        <div class="footer-logo d-flex flex-wrap justify-content-center gap-2">
                            <img src="{{ asset('public/assets/frontend/img/footer/cohost.png') }}" alt="">
                        </div>
                    </div>

                    <!-- SUPPORTED BY -->
                    <div class="col-lg-3 col-md-6 footer-links text-center">
                        <h4>Dengan Sokongan</h4>
                        <div class="footer-logo d-flex flex-wrap justify-content-center gap-2">
                            <img src="{{ asset('public/assets/frontend/img/footer/supported-1.jpg') }}" alt="">
                            <img src="{{ asset('public/assets/frontend/img/footer/supported-2.png') }}" alt="">
                            <img src="{{ asset('public/assets/frontend/img/footer/supported-3.jpg') }}" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="copyright text-center footer dark-background">
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
