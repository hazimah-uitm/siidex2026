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
                        {{ __('messages.hero_title_line_1') }}
                        <span>{{ __('messages.hero_title_line_2') }}</span>
                        {{ __('messages.hero_title_line_3') }}<br>
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
                                        <span class="countdown-text">{{ __('messages.countdown_days') }}</span>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="countdown-box">
                                        <h3 id="hours" class="countdown-number">00</h3>
                                        <span class="countdown-text">{{ __('messages.countdown_hours') }}</span>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="countdown-box">
                                        <h3 id="minutes" class="countdown-number">00</h3>
                                        <span class="countdown-text">{{ __('messages.countdown_minutes') }}</span>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="countdown-box">
                                        <h3 id="seconds" class="countdown-number">00</h3>
                                        <span class="countdown-text">{{ __('messages.countdown_seconds') }}</span>
                                    </div>
                                </div>
                            </div>

                            <p id="countdown-ended" class="mt-3 mb-0 fw-semibold d-none">
                                {{ __('messages.countdown_ended') }}
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
                        <h3>{{ __('messages.organizer') }}</h3>
                        <p>{{ __('messages.hero_organizer_text') }}</p>
                    </div>

                    <div class="col-lg-3">
                        <h3>{{ __('messages.co_organizer') }}</h3>
                        <p>
                            {{ __('messages.hero_co_organizer_text') }} <br>
                            <a href="https://sites.google.com/view/seaim-2026/main-page?authuser=1" target="_blank">
                                {{ __('messages.hero_official_site') }}
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3">
                        <h3>{{ __('messages.location') }}</h3>
                        <p>{{ __('messages.hero_location_text') }}</p>
                    </div>

                    <div class="col-lg-3">
                        <h3>{{ __('messages.date') }}</h3>
                        <p>{{ __('messages.hero_date_text') }}</p>
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
    </section>

    <!-- Schedule Section -->
    <section id="schedule" class="schedule section">

        <div class="container">
            <div class="row g-4 align-items-start">

                <!-- LEFT: Tarikh Penting -->
                <div class="col-lg-4">
                    <!-- Important Dates -->
                    <div class="important-dates-box compact-dates mb-4" data-aos="fade-right" data-aos-delay="100">
                        <h3 class="important-title">{{ __('messages.important_dates_title') }}</h3>

                        <div class="important-date-item">
                            <div class="date-content d-flex justify-content-between align-items-start gap-3 w-100">
                                <div>
                                    <h4>{{ __('messages.early_bird_title') }}</h4>
                                </div>
                                <div class="ms-auto text-end">
                                    <p class="mb-0">{{ __('messages.early_bird_date_range') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="important-date-item">
                            <div class="date-content d-flex justify-content-between align-items-start gap-3 w-100">
                                <div>
                                    <h4>{{ __('messages.normal_rate_title') }}</h4>
                                </div>
                                <div class="ms-auto text-end">
                                    <p class="mb-0">{{ __('messages.normal_rate_date_range') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="important-date-item">
                            <div class="date-content d-flex justify-content-between align-items-start gap-3 w-100">
                                <div>
                                    <h4>{{ __('messages.virtual_rate_title') }}</h4>
                                </div>
                                <div class="ms-auto text-end">
                                    <p class="mb-0">{{ __('messages.virtual_rate_date_range') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="important-date-note">
                            <p class="mb-0">
                                {{ __('messages.important_dates_note') }}
                            </p>
                        </div>

                        <div class="schedule-promo-actions mt-4">
                            <button type="button" class="btn btn-schedule-promo me-2 mb-2" data-bs-toggle="modal"
                                data-bs-target="#bannerModal">
                                <i class="bi bi-image me-1"></i> {{ __('messages.view_banner') }}
                            </button>

                            <button type="button" class="btn btn-schedule-promo mb-2" data-bs-toggle="modal"
                                data-bs-target="#posterModal">
                                <i class="bi bi-file-earmark-image me-1"></i> {{ __('messages.view_poster') }}
                            </button>
                        </div>
                    </div>

                    <!-- Program Itinerary & Related Event -->
                    {{-- <div class="important-dates-box compact-dates related-event-box" data-aos="fade-right"
                        data-aos-delay="150">
                        <h3 class="important-title">{{ __('messages.program_itinerary_title') }}</h3>

                        <div class="related-event-item">
                            <h4>{{ __('messages.program_date_1') }}</h4>
                            <p class="event-name mb-1">{{ __('messages.program_event_1') }}</p>
                            <p class="event-location mb-0">{{ __('messages.program_location_1') }}</p>
                        </div>

                        <div class="related-event-item">
                            <h4>{{ __('messages.program_date_2') }}</h4>
                            <p class="event-name mb-1">{{ __('messages.program_event_2') }}</p>
                            <p class="event-location mb-1">{{ __('messages.program_location_2') }}</p>
                            <a href="https://sites.google.com/view/seaim-2026/main-page?authuser=1" target="_blank">
                                {{ __('messages.seaim_official_site') }}
                            </a>
                        </div>
                    </div> --}}
                </div>

                <!-- RIGHT: Tentatif -->
                <div class="col-lg-8">
                    <div class="schedule-card timeline-style-card" data-aos="fade-left" data-aos-delay="150">

                        <div class="schedule-card-header">
                            <div>
                                <h3>{{ __('messages.tentative_title') }}</h3>
                            </div>
                            <span class="schedule-badge">{{ __('messages.tentative_badge_date') }}</span>
                        </div>

                        <div class="schedule-timeline">

                            <div class="schedule-timeline-item">
                                <div class="schedule-time">
                                    <span>{{ __('messages.time_0800') }}</span>
                                </div>
                                <div class="schedule-line"></div>
                                <div class="schedule-detail">
                                    <div class="schedule-event-card">
                                        <h4>{{ __('messages.event_registration') }}</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="schedule-timeline-item">
                                <div class="schedule-time">
                                    <span>{{ __('messages.time_0900') }}</span>
                                </div>
                                <div class="schedule-line"></div>
                                <div class="schedule-detail">
                                    <div class="schedule-event-card">
                                        <h4>{{ __('messages.event_opening') }}</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="schedule-timeline-item">
                                <div class="schedule-time">
                                    <span>{{ __('messages.time_1000') }}</span>
                                </div>
                                <div class="schedule-line"></div>
                                <div class="schedule-detail">
                                    <div class="schedule-event-card">
                                        <h4>{{ __('messages.event_judging') }}</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="schedule-timeline-item">
                                <div class="schedule-time">
                                    <span>{{ __('messages.time_1230') }}</span>
                                </div>
                                <div class="schedule-line"></div>
                                <div class="schedule-detail">
                                    <div class="schedule-event-card">
                                        <h4>{{ __('messages.event_break') }}</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="schedule-timeline-item">
                                <div class="schedule-time">
                                    <span>{{ __('messages.time_1400') }}</span>
                                </div>
                                <div class="schedule-line"></div>
                                <div class="schedule-detail">
                                    <div class="schedule-event-card">
                                        <h4>{{ __('messages.event_exhibition') }}</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="schedule-timeline-item">
                                <div class="schedule-time">
                                    <span>{{ __('messages.time_1600') }}</span>
                                </div>
                                <div class="schedule-line"></div>
                                <div class="schedule-detail">
                                    <div class="schedule-event-card">
                                        <h4>{{ __('messages.event_end') }}</h4>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Banner Modal -->
    <div class="modal fade schedule-media-modal" id="bannerModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('messages.banner_preview_title') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body text-center">
                    <img src="{{ asset('public/assets/frontend/img/banner.jpg') }}" class="img-fluid rounded shadow-sm">
                </div>

                <div class="modal-footer justify-content-center">
                    <a href="{{ asset('public/assets/frontend/img/banner.jpg') }}" download class="btn btn-download">
                        <i class="bi bi-download me-1"></i> {{ __('messages.download_banner') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Poster Modal -->
    <div class="modal fade schedule-media-modal" id="posterModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('messages.poster_preview_title') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body text-center">
                    <img src="{{ asset('public/assets/frontend/img/poster.svg') }}" class="img-fluid rounded shadow-sm">
                </div>

                <div class="modal-footer justify-content-center">
                    <a href="{{ asset('public/assets/frontend/img/poster.svg') }}" download class="btn btn-download">
                        <i class="bi bi-download me-1"></i> {{ __('messages.download_poster') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Schedule Section -->

    <!-- background-info Section -->
    <section id="background-info" class="background-info section light-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ __('messages.background_title') }}</h2>
        </div>

        <div class="container">

            <!-- Intro -->
            <div class="background-intro" data-aos="fade-up">
                <div class="intro-card">
                    <p>{{ __('messages.background_intro') }}</p>
                </div>

                <!-- Kategori -->
                <div class="category-wrapper mt-4" data-aos="fade-up">

                    <div class="category-header text-center mb-3">
                        <h5>{{ __('messages.category_title') }}</h5>
                    </div>

                    <div class="category-grid">

                        <div class="category-card">
                            <div class="cat-icon">
                                <i class="bi bi-mortarboard"></i>
                            </div>
                            <div class="cat-content">
                                <div class="cat-label">{{ __('messages.category_a_label') }}</div>
                                <div class="cat-name">{{ __('messages.category_a_name') }}</div>
                            </div>
                        </div>

                        <div class="category-card">
                            <div class="cat-icon">
                                <i class="bi bi-lightbulb"></i>
                            </div>
                            <div class="cat-content">
                                <div class="cat-label">{{ __('messages.category_b_label') }}</div>
                                <div class="cat-name">{{ __('messages.category_b_name') }}</div>
                            </div>
                        </div>

                        <div class="category-card">
                            <div class="cat-icon">
                                <i class="bi bi-box-seam"></i>
                            </div>
                            <div class="cat-content">
                                <div class="cat-label">{{ __('messages.category_c_label') }}</div>
                                <div class="cat-name">{{ __('messages.category_c_name') }}</div>
                            </div>
                        </div>

                        <div class="category-card">
                            <div class="cat-icon">
                                <i class="bi bi-palette"></i>
                            </div>
                            <div class="cat-content">
                                <div class="cat-label">{{ __('messages.category_d_label') }}</div>
                                <div class="cat-name">{{ __('messages.category_d_name') }}</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Timeline -->
            <div class="history-timeline">

                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-year">
                        <span>{{ __('messages.year_2016') }}</span>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-card">
                            <p>{{ __('messages.history_2016') }}</p>
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="timeline-year">
                        <span>{{ __('messages.year_2018') }}</span>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-card">
                            <p>{{ __('messages.history_2018') }}</p>
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-year">
                        <span>{{ __('messages.year_2019') }}</span>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-card">
                            <p>{{ __('messages.history_2019_part1') }}</p>
                            <p class="mt-2">{{ __('messages.history_2019_part2') }}</p>
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
            <h2>{{ __('messages.participation_category_title') }}</h2>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4">

                <div class="col-12 col-md-6">
                    <div class="kategori-card">
                        <span class="kategori-number">{{ __('messages.category_a_label') }}</span>
                        <h4>{{ __('messages.category_a_title') }}</h4>
                        <p>{{ __('messages.category_a_desc') }}</p>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="kategori-card">
                        <span class="kategori-number">{{ __('messages.category_b_label') }}</span>
                        <h4>{{ __('messages.category_b_title') }}</h4>
                        <p>{{ __('messages.category_b_desc') }}</p>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="kategori-card">
                        <span class="kategori-number">{{ __('messages.category_c_label') }}</span>
                        <h4>{{ __('messages.category_c_title') }}</h4>
                        <p>{{ __('messages.category_c_desc') }}</p>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="kategori-card">
                        <span class="kategori-number">{{ __('messages.category_d_label') }}</span>
                        <h4>{{ __('messages.category_d_title') }}</h4>
                        <p>{{ __('messages.category_d_desc') }}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Buy Tickets Section -->
    <section id="fee" class="fee section light-background">

        <div class="container section-title" data-aos="fade-up">
            <h2>{{ __('messages.fee_title') }}</h2>
        </div>

        <div class="container">
            <div class="row gy-4">

                <!-- Early Bird -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-column featured">
                        <div class="pricing-header">
                            <h3>{{ __('messages.early_bird_title1') }}</h3>
                            <p class="fw-bold">{{ __('messages.early_bird_date') }}</p>
                        </div>

                        <div class="price-row">
                            <div class="price-title">{{ __('messages.student_title') }}</div>

                            <div class="price-line">
                                <span class="price-label">{{ __('messages.local_label') }}</span>
                                <span class="price-value">{{ __('messages.early_student_local_price') }}</span>
                            </div>

                            <div class="price-line">
                                <span class="price-label">{{ __('messages.international_label') }}</span>
                                <span class="price-value">{{ __('messages.early_student_international_price') }}</span>
                            </div>
                        </div>

                        <div class="price-row">
                            <div class="price-title">{{ __('messages.uitm_staff_title') }}</div>

                            <div class="price-line single-price">
                                <span class="price-label">{!! __('messages.uitm_staff_note') !!}</span>
                                <span class="price-value">{{ __('messages.early_staff_price') }}</span>
                            </div>
                        </div>

                        <div class="price-row">
                            <div class="price-title">{{ __('messages.professional_title') }}</div>

                            <div class="price-line">
                                <span class="price-label">{{ __('messages.local_label') }}</span>
                                <span class="price-value">{{ __('messages.early_professional_local_price') }}</span>
                            </div>

                            <div class="price-line">
                                <span class="price-label">{{ __('messages.international_label') }}</span>
                                <span
                                    class="price-value">{{ __('messages.early_professional_international_price') }}</span>
                            </div>
                        </div>

                        {{-- <div class="pricing-action">
                            <a href="https://example.com/fee-details" target="_blank" class="btn btn-fee btn-fee-light">
                                {{ __('messages.make_payment') }}
                            </a>
                        </div> --}}
                        <div class="pricing-action">
                            <button type="button" class="btn btn-fee btn-fee-light" disabled>
                                {{ __('messages.coming_soon') }}
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Normal Price -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="150">
                    <div class="pricing-column">
                        <div class="pricing-header">
                            <h3>{{ __('messages.normal_price_title') }}</h3>
                            <p class="fw-bold">{{ __('messages.normal_price_date') }}</p>
                        </div>

                        <div class="price-row">
                            <div class="price-title">{{ __('messages.student_title') }}</div>

                            <div class="price-line">
                                <span class="price-label">{{ __('messages.local_label') }}</span>
                                <span class="price-value">{{ __('messages.normal_student_local_price') }}</span>
                            </div>

                            <div class="price-line">
                                <span class="price-label">{{ __('messages.international_label') }}</span>
                                <span class="price-value">{{ __('messages.normal_student_international_price') }}</span>
                            </div>
                        </div>

                        <div class="price-row">
                            <div class="price-title">{{ __('messages.uitm_staff_title') }}</div>

                            <div class="price-line single-price">
                                <span class="price-label">{!! __('messages.uitm_staff_note') !!}</span>
                                <span class="price-value">{{ __('messages.normal_staff_price') }}</span>
                            </div>
                        </div>

                        <div class="price-row">
                            <div class="price-title">{{ __('messages.professional_title') }}</div>

                            <div class="price-line">
                                <span class="price-label">{{ __('messages.local_label') }}</span>
                                <span class="price-value">{{ __('messages.normal_professional_local_price') }}</span>
                            </div>

                            <div class="price-line">
                                <span class="price-label">{{ __('messages.international_label') }}</span>
                                <span
                                    class="price-value">{{ __('messages.normal_professional_international_price') }}</span>
                            </div>
                        </div>

                        {{-- <div class="pricing-action">
                            <a href="https://example.com/fee-details" target="_blank" class="btn btn-fee">
                                {{ __('messages.make_payment') }}
                            </a>
                        </div> --}}
                        <div class="pricing-action">
                            <button type="button" class="btn btn-fee" disabled>
                                {{ __('messages.coming_soon') }}
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Virtual Price -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="150">
                    <div class="pricing-column">
                        <div class="pricing-header">
                            <h3>{{ __('messages.virtual_price_title') }}</h3>
                            <p class="fw-bold">{{ __('messages.virtual_price_date') }}</p>
                        </div>

                        <div class="price-row">
                            <div class="price-title">{{ __('messages.student_title') }}</div>

                            <div class="price-line">
                                <span class="price-label">{{ __('messages.local_label') }}</span>
                                <span class="price-value">{{ __('messages.virtual_student_local_price') }}</span>
                            </div>

                            <div class="price-line">
                                <span class="price-label">{{ __('messages.international_label') }}</span>
                                <span class="price-value">{{ __('messages.virtual_student_international_price') }}</span>
                            </div>
                        </div>

                        <div class="price-row">
                            <div class="price-title">{{ __('messages.uitm_staff_title') }}</div>

                            <div class="price-line single-price">
                                <span class="price-label">{{ __('messages.uitm_staff_note1') }}</span>
                                <span class="price-value">{{ __('messages.virtual_staff_price') }}</span>
                            </div>
                        </div>

                        <div class="price-row">
                            <div class="price-title">{{ __('messages.professional_title') }}</div>

                            <div class="price-line">
                                <span class="price-label">{{ __('messages.local_label') }}</span>
                                <span class="price-value">{{ __('messages.virtual_professional_local_price') }}</span>
                            </div>

                            <div class="price-line">
                                <span class="price-label">{{ __('messages.international_label') }}</span>
                                <span
                                    class="price-value">{{ __('messages.virtual_professional_international_price') }}</span>
                            </div>
                        </div>

                        {{-- <div class="pricing-action">
                            <a href="https://example.com/fee-details" target="_blank" class="btn btn-fee">
                                {{ __('messages.make_payment') }}
                            </a>
                        </div> --}}
                        <div class="pricing-action">
                            <button type="button" class="btn btn-fee" disabled>
                                {{ __('messages.coming_soon') }}
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Registrations Section -->
    <section id="registrations" class="registrations section">
        <div class="row" data-aos="fade-up" data-aos-delay="250">
            <div class="col-12">
                <div class="registration-banner">
                    <div class="row align-items-center gy-4">

                        <!-- Left -->
                        <div class="col-lg-5">
                            <div class="banner-left">
                                <h3 class="banner-title">{{ __('messages.registration_title') }}</h3>
                                <p class="banner-text">
                                    {{ __('messages.registration_subtitle') }}
                                </p>

                                <div class="banner-buttons">

                                    <div class="mb-3">
                                        <a href="https://forms.gle/hBV9C2DXBJLkWjxg6" target="_blank"
                                            class="btn btn-main w-100">
                                            <i class="bi bi-pencil-square me-2"></i>
                                            {{ __('messages.register_now') }}
                                        </a>
                                    </div>

                                    <div class="row g-2">
                                        <div class="col-12 mb-2">
                                            <a href="{{ asset('public/assets/frontend/files/SIIDEX 2026_Extended Abstract Template.docx') }}"
                                                target="_blank" class="btn btn-light w-100">
                                                <i class="bi bi-file-earmark-text me-2"></i>
                                                {{ __('messages.download_abstract') }}
                                            </a>
                                        </div>

                                        <div class="col-12 mb-2">
                                            <a href="{{ asset('public/assets/frontend/files/SIIDEX 2026 Bunting and Poster Template.pdf') }}"
                                                target="_blank" class="btn btn-light w-100">
                                                <i class="bi bi-image me-2"></i>
                                                {{ __('messages.download_template_poster') }}
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Right -->
                        <div class="col-lg-7">
                            <div class="banner-info-list">

                                <div class="banner-info-item">
                                    <div class="banner-icon">
                                        <i class="bi bi-globe2"></i>
                                    </div>
                                    <div class="banner-info-text">
                                        {!! __('messages.info_virtual') !!}
                                    </div>
                                </div>

                                <div class="banner-info-item">
                                    <div class="banner-icon">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                    <div class="banner-info-text">
                                        {!! __('messages.info_uitm_physical') !!}
                                    </div>
                                </div>

                                <div class="banner-info-item">
                                    <div class="banner-icon">
                                        <i class="bi bi-box-seam"></i>
                                    </div>
                                    <div class="banner-info-text">
                                        {!! __('messages.info_limit') !!}
                                    </div>
                                </div>

                                <div class="banner-info-item highlight">
                                    <div class="banner-icon">
                                        <i class="bi bi-trophy-fill"></i>
                                    </div>
                                    <div class="banner-info-text">
                                        {!! __('messages.info_award') !!}
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
            <h2>{{ __('messages.awards_title') }}</h2>
        </div>

        <div class="container">

            <div class="row gy-4 mb-4">

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card text-center shadow-sm border-0 h-100 award-card special-award-card">
                        <div class="p-4">
                            <div class="award-icon-wrap mb-3">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>
                            <h4 class="fw-bold">
                                {{ __('messages.award_teaching_best') }}
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="card text-center shadow-sm border-0 h-100 award-card special-award-card">
                        <div class="p-4">
                            <div class="award-icon-wrap mb-3">
                                <i class="bi bi-lightbulb-fill"></i>
                            </div>
                            <h4 class="fw-bold">
                                {{ __('messages.award_innovation_best') }}
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card text-center shadow-sm border-0 h-100 award-card special-award-card">
                        <div class="p-4">
                            <div class="award-icon-wrap mb-3">
                                <i class="bi bi-box-seam"></i>
                            </div>
                            <h4 class="fw-bold">
                                {{ __('messages.award_invention_best') }}
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="250">
                    <div class="card text-center shadow-sm border-0 h-100 award-card special-award-card">
                        <div class="p-4">
                            <div class="award-icon-wrap mb-3">
                                <i class="bi bi-palette-fill"></i>
                            </div>
                            <h4 class="fw-bold">
                                {{ __('messages.award_design_best') }}
                            </h4>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mb-5" data-aos="fade-up" data-aos-delay="280">
                <div class="col-12">
                    <div class="awards-alert-note">
                        <i class="bi bi-megaphone-fill me-2"></i>
                        {!! __('messages.awards_best_note') !!}
                    </div>
                </div>
            </div>

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                    <div class="card text-center shadow-sm border-0 h-100 award-card">
                        <div class="p-4">
                            <img src="{{ asset('public/assets/frontend/img/award/emas.jpg') }}" class="img-fluid mb-3"
                                alt="{{ __('messages.gold_medal_alt') }}">
                            <h4 class="fw-bold">{{ __('messages.gold_title') }}</h4>
                            <p class="text-muted mb-0">
                                {{ __('messages.medal_desc') }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card text-center shadow-sm border-0 h-100 award-card">
                        <div class="p-4">
                            <img src="{{ asset('public/assets/frontend/img/award/perak.jpg') }}" class="img-fluid mb-3"
                                alt="{{ __('messages.silver_medal_alt') }}">
                            <h4 class="fw-bold">{{ __('messages.silver_title') }}</h4>
                            <p class="text-muted mb-0">
                                {{ __('messages.medal_desc') }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="450">
                    <div class="card text-center shadow-sm border-0 h-100 award-card">
                        <div class="p-4">
                            <img src="{{ asset('public/assets/frontend/img/award/gangsa.jpg') }}" class="img-fluid mb-3"
                                alt="{{ __('messages.bronze_medal_alt') }}">
                            <h4 class="fw-bold">{{ __('messages.bronze_title') }}</h4>
                            <p class="text-muted mb-0">
                                {{ __('messages.medal_desc') }}
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-4" data-aos="fade-up" data-aos-delay="500">
                <div class="col-12">
                    <div class="awards-alert-note online-note">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        {!! __('messages.awards_medal_note') !!}
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- /awards Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section light-background">

        <div class="container section-title" data-aos="fade-up">
            <h2>{{ __('messages.gallery_title') }}</h2>
        </div>

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
                                class="img-fluid" alt="{{ __('messages.gallery_image_alt') }} 1"></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-2.jpg') }}"><img
                                src="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-2.jpg') }}"
                                class="img-fluid" alt="{{ __('messages.gallery_image_alt') }} 2"></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-3.jpg') }}"><img
                                src="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-3.jpg') }}"
                                class="img-fluid" alt="{{ __('messages.gallery_image_alt') }} 3"></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-4.jpg') }}"><img
                                src="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-4.jpg') }}"
                                class="img-fluid" alt="{{ __('messages.gallery_image_alt') }} 4"></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-5.jpg') }}"><img
                                src="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-5.jpg') }}"
                                class="img-fluid" alt="{{ __('messages.gallery_image_alt') }} 5"></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-6.jpg') }}"><img
                                src="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-6.jpg') }}"
                                class="img-fluid" alt="{{ __('messages.gallery_image_alt') }} 6"></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-7.jpg') }}"><img
                                src="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-7.jpg') }}"
                                class="img-fluid" alt="{{ __('messages.gallery_image_alt') }} 7"></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-8.jpg') }}"><img
                                src="{{ asset('public/assets/frontend/img/event-gallery/event-gallery-8.jpg') }}"
                                class="img-fluid" alt="{{ __('messages.gallery_image_alt') }} 8"></a></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section>
    <!-- /Gallery Section -->

    <!-- Hotels Section -->
    <section id="committee" class="committee section">

        <div class="container section-title">
            <h2>{{ __('messages.committee_title') }}</h2>
        </div>

        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-4 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_chairperson_1') }}</h4>
                        <h3 class="name">Prof. Ir. Dr. Juferi Idris</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_chairperson_2') }}</h4>
                        <h3 class="name">Ts. Dr. Mohd Norhisham Razali</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_deputy_chairperson') }}</h4>
                        <h3 class="name">Dr. Lee Wen Chiat</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.head_of_secretariat') }}</h4>
                        <h3 class="name">Dr. Lee Wen Chiat</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_secretary') }}</h4>
                        <h3 class="name">Hanita Tambi</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_secretary2') }}</h4>
                        <h3 class="name">Nur 'Aziera Basri</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_bursar_sponsorship') }}</h4>
                        <h3 class="name">Ts. Dr. Mohd Rafiz Salji</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_treasurer') }}</h4>
                        <h3 class="name">Azura Ahmad</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_technical') }}</h4>
                        <h3 class="name">Mohd Shahrizi bin Razali</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_promotion_publicity_k') }}</h4>
                        <h3 class="name">Chrisna Pindah</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_promotion_publicity_designer') }}</h4>
                        <h3 class="name">Ts. Noraziah Razali</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_promotion_publicity') }}</h4>
                        <h3 class="name">Mohd Syazwan Mohd Aris</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_promotion_publicity') }}</h4>
                        <h3 class="name">Hazimah Pethie</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_logistics') }}</h4>
                        <h3 class="name">Dr. Hadi Jumaat</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_event_protocol') }}</h4>
                        <h3 class="name">Abdul Hafiz Abdul Khalid</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_judging') }}</h4>
                        <h3 class="name">Dr. Rudy Tawie</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_publication_k') }}</h4>
                        <h3 class="name">AP Dr. Ting Siew King</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_publication') }}</h4>
                        <h3 class="name">Ts. Dr. Nurzawani Md Sofwan</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_secretariat') }}</h4>
                        <h3 class="name">Jenny Yap Tze Kie</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_secretariat') }}</h4>
                        <h3 class="name">Kelvin Goh Tee Hiong</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_secretariat') }}</h4>
                        <h3 class="name">Dr. Tay Siew Ying</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_secretariat') }}</h4>
                        <h3 class="name">Nur Farah Fadhliah Mahmud</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="committee-card text-center">
                        <h4 class="role">{{ __('messages.committee_proofread') }}</h4>
                        <h3 class="name">Valerie Chan Sue Lin Abdullah</h3>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- /Hotels Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

        <div class="container section-title">
            <h2>{{ __('messages.contact_title') }}</h2>
        </div>

        <div class="container">

            <!-- Contact -->
            <div class="row gy-4 justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center text-center">
                        <i class="bi bi-person"></i>
                        <h3>Ts. Dr. Mohd Norhisham Razali</h3>
                        <p class="contact-role">{{ __('messages.committee_chairperson_2') }}</p>
                        <p>019-8110064</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center text-center">
                        <i class="bi bi-person"></i>
                        <h3>Dr. Lee Wen Chiat</h3>
                        <p class="contact-role">{{ __('messages.committee_deputy_chairperson') }}</p>
                        <p>016-8001883</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center text-center">
                        <i class="bi bi-person"></i>
                        <h3>Ts. Dr. Mohd Rafiz Salji</h3>
                        <p class="contact-role">{{ __('messages.committee_bursar_sponsorship') }}</p>
                        <p>019-3228539</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center text-center">
                        <i class="bi bi-person"></i>
                        <h3>Chrisna Pindah</h3>
                        <p class="contact-role">{{ __('messages.committee_promotion_publicity_k') }}</p>
                        <p>014-3791534</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center text-center">
                        <i class="bi bi-person"></i>
                        <h3>Hanita Tambi</h3>
                        <p class="contact-role">{{ __('messages.committee_secretary') }}</p>
                        <p>013-8397102</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-2 gy-4">
                <div class="col-lg-6">
                    <div
                        class="info-item d-flex flex-column justify-content-center align-items-center text-center contact-email-box">
                        <i class="bi bi-envelope"></i>
                        <h3>{{ __('messages.secretariat_title') }}</h3>
                        <p><a href="mailto:siidex2026@gmail.com">siidex2026@gmail.com</a></p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div
                        class="info-item d-flex flex-column justify-content-center align-items-center text-center contact-email-box">
                        <a href="https://web.facebook.com/pji.uitm.sarawak/" target="_blank"><i
                                class="bi bi-facebook"></i></a>
                        <h3>{{ __('messages.facebook') }}</h3>
                        <p>
                            <a href="https://web.facebook.com/pji.uitm.sarawak/" target="_blank">
                                PJI UiTM Sarawak
                            </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- /Contact Section -->
@endsection
