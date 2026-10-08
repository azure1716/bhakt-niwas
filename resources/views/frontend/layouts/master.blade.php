<!doctype html>
<html lang="en-IN">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {{-- ===================== SEO Meta (OG, Twitter, canonical, robots, GA4) ===================== --}}
    @include('frontend.partials.seo')

    {{-- ===================== Favicon ===================== --}}
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('frontend/images/favicon.png') }}">

    {{-- ===================== Critical CSS: preconnect to origins we need ===================== --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net">

    {{-- ===================== Bootstrap 5 CDN (critical, needed everywhere) ===================== --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    {{-- ===================== Google Fonts (preload reduces CLS) ===================== --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet" />

    {{-- ===================== Icons (defer via display=block to avoid render-blocking) ===================== --}}
    {{-- Boxicons --}}
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    {{-- ===================== Swiper CSS (only when page uses a slider) ===================== --}}
    @stack('swiper-css')

    {{-- ===================== Site-wide CSS ===================== --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    {{-- ===================== Per-page CSS (pushed from each view) ===================== --}}
    @stack('page-css')

    {{-- ===================== Inline critical micro-styles ===================== --}}
    <style>
        /* Bell decoration hide-on-scroll */
        .hide-bell {
            opacity: 0;
            pointer-events: none;
            transform: translateY(-10px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
        /* Skip to content link (accessibility + SEO) */
        .skip-link {
            position: absolute;
            top: -40px;
            left: 0;
            background: #800000;
            color: #fff;
            padding: 8px 16px;
            z-index: 10000;
            text-decoration: none;
            font-weight: 600;
            border-radius: 0 0 4px 0;
        }
        .skip-link:focus {
            top: 0;
        }
        /* Sticky mobile CTA bar */
        .mobile-cta-bar {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1200;
            background: #fff;
            border-top: 1px solid #f0e0e0;
            padding: 8px 16px;
            gap: 10px;
        }
        @media (max-width: 767.98px) {
            .mobile-cta-bar { display: flex; }
        }
        .mobile-cta-bar a {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            padding: 10px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            min-height: 44px; /* WCAG tap target */
        }
        .mobile-cta-call {
            background: #800000;
            color: #fff;
        }
        .mobile-cta-wa {
            background: #25d366;
            color: #fff;
        }
    </style>
</head>

<body>
    {{-- Accessibility: skip to main content --}}
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <header role="banner">
        {{-- Top Bar --}}
        <div class="topbar">
            <div class="container-fluid px-lg-4">
                <div class="marquee-text">
                    <i class="fas fa-om me-2" aria-hidden="true"></i>
                    Welcome to Shri Gajanan Maharaj Sansthan - Official website for devotee
                    accommodation and darshan guidance. | Jai Gajanan Maharaj
                </div>
            </div>
        </div>

        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-custom" role="navigation" aria-label="Main navigation">

            {{-- Decorative bell strip (desktop only, trimmed from 66 to 15 elements) --}}
            <div class="nav-jhalar-wrapper d-none d-lg-flex" aria-hidden="true">
                <span class="hanging-bell"><i class="bx bx-bell"></i></span>
                <span class="hanging-bell"><i class="bx bx-bell"></i></span>
                <span class="hanging-bell"><i class="bx bx-bell"></i></span>
                <span class="hanging-bell"><i class="bx bx-bell"></i></span>
                <span class="hanging-bell"><i class="bx bx-bell"></i></span>
                <span class="hanging-bell"><i class="bx bx-bell"></i></span>
                <span class="hanging-bell"><i class="bx bx-bell"></i></span>
                <span class="hanging-bell"><i class="bx bx-bell"></i></span>
                <span class="hanging-bell"><i class="bx bx-bell"></i></span>
                <span class="hanging-bell"><i class="bx bx-bell"></i></span>
                <span class="hanging-bell"><i class="bx bx-bell"></i></span>
                <span class="hanging-bell"><i class="bx bx-bell"></i></span>
                <span class="hanging-bell"><i class="bx bx-bell"></i></span>
                <span class="hanging-bell"><i class="bx bx-bell"></i></span>
                <span class="hanging-bell"><i class="bx bx-bell"></i></span>
            </div>

            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center gap-2 text-decoration-none" href="{{ route('home') }}" aria-label="Shri Gajanan Maharaj Sansthan - Home">
                    <div class="brand-text">
                        <img
                            src="{{ asset('frontend/images/GM_sansthan.png') }}"
                            alt="Shri Gajanan Maharaj Sansthan official logo"
                            width="130"
                            height="65"
                            loading="eager"
                        />
                    </div>
                </a>

                {{-- Bell audio: preload=none so it does NOT load on every page --}}
                <audio id="bellAudio" src="{{ asset('frontend/bell.mp3') }}" preload="none" aria-hidden="true"></audio>

                {{-- Right side: bell toggle + hamburger --}}
                <div class="d-flex align-items-center ms-auto ms-lg-0 order-1 order-lg-0">
                    {{-- Bell sound toggle button (now correctly placed on homepage only via @stack) --}}
                    @stack('bell-button')

                    {{-- Mobile Hamburger --}}
                    <button
                        class="navbar-toggler border-0"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Sansthan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('booking') ? 'active' : '' }}" href="{{ route('booking') }}">Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('locations') ? 'active' : '' }}" href="{{ route('locations') }}">Locations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('blog*') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                    <a
                        href="{{ seo_whatsapp_url('Hi, I would like to know more about accommodation at Shri Gajanan Maharaj Sansthan.') }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="btn btn-nav-cta"
                        onclick="if(window.trackWhatsApp) window.trackWhatsApp()"
                        aria-label="WhatsApp booking enquiry"
                    >
                        <i class="fab fa-whatsapp me-2" aria-hidden="true"></i> Booking
                    </a>
                </div>
            </div>
        </nav>
    </header>

    {{-- ===================== Main Content ===================== --}}
    <main id="main-content" role="main">
        @yield('content')
    </main>

    {{-- ===================== Footer ===================== --}}
    <footer class="unique-modern-footer" role="contentinfo">
        <div class="container">
            {{-- Top Row: CTA --}}
            <div class="footer-top-row row align-items-center gy-3">
                <div class="col-md-7">
                    <div class="cta-box">
                        <span class="cta-label">Need Help? Reach us instantly</span>
                        <h3 class="cta-heading">Send Booking Request</h3>
                    </div>
                </div>
                <div class="col-md-5 text-md-end">
                    <a
                        href="{{ seo_whatsapp_url('Hi, I would like to send a booking request for Bhakta Niwas accommodation at Shri Gajanan Maharaj Sansthan.') }}"
                        class="btn btn-uni-cta"
                        target="_blank"
                        rel="noopener noreferrer"
                        onclick="if(window.trackWhatsApp) window.trackWhatsApp()"
                        aria-label="Send booking request via WhatsApp"
                    >
                        <i class="fab fa-whatsapp me-2" aria-hidden="true"></i> WhatsApp
                    </a>
                </div>
            </div>

            {{-- Middle Row: 3-Column Grid --}}
            <div class="row g-5 footer-grid">
                {{-- Col 1: Brand and Contact --}}
                <div class="col-lg-5 col-md-6 desc-first">
                    <h4 class="footer-brand">Shri Gajanan Maharaj Sansthan</h4>
                    <p class="brand-quote small text-uppercase mb-3">"Jai Gajanan Maharaj"</p>
                    <p class="footer-desc small mb-4">
                        Official website of Shri Gajanan Maharaj Sansthan, Shegaon.
                        Serving devotees since 1908 with accommodation, mahaprasad and darshan guidance.
                    </p>
                    <address class="contact-details" style="font-style: normal;">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                            <span>Shegaon, Dist. Buldhana, Maharashtra - 444203</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope" aria-hidden="true"></i>
                            <a href="mailto:{{ seo_email() }}" style="color:inherit; text-decoration:none;">
                                {{ seo_email() }}
                            </a>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone" aria-hidden="true"></i>
                            <a
                                href="{{ seo_phone_tel() }}"
                                style="color:inherit; text-decoration:none;"
                                onclick="if(window.trackCall) window.trackCall()"
                            >
                                {{ seo_phone_display() }}
                            </a>
                        </div>
                    </address>
                </div>

                {{-- Col 2: Quick Links --}}
                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-heading">Quick Links</h6>
                    <nav aria-label="Footer navigation">
                        <ul class="footer-links">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('booking') }}">Book a Room</a></li>
                            <li><a href="{{ route('blog') }}">Pilgrimage Blog</a></li>
                            <li><a href="{{ route('locations') }}">Our Locations</a></li>
                            <li><a href="{{ route('darshan-timings') }}">Darshan Timings</a></li>
                            <li><a href="{{ route('how-to-reach') }}">How to Reach</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>

                {{-- Col 3: Locations --}}
                <div class="col-lg-5 col-md-6">
                    <h6 class="footer-heading">Our Bhakta Niwas Locations</h6>
                    <nav aria-label="Locations navigation">
                        <ul class="footer-links">
                            @foreach (config('locations', []) as $loc)
                            <li>
                                <a href="{{ url('/' . $loc['slug']) }}">{{ $loc['name'] }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>

            {{-- Bottom Row: Copyright + Legal --}}
            <div class="footer-bottom row align-items-center">
                <div class="col-md-12 text-center">
                    <p class="mb-2">
                        &copy; {{ date('Y') }} Shri Gajanan Maharaj Sansthan. All rights reserved.
                    </p>
                    <nav class="footer-legal-links" aria-label="Legal links">
                        <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                        <a href="{{ route('terms-conditions') }}">Terms &amp; Conditions</a>
                        <a href="{{ route('refund-cancellation-policy') }}">Refund Policy</a>
                        <a href="{{ route('disclaimer') }}">Disclaimer</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

    {{-- ===================== Sticky Mobile Call/WhatsApp Bar ===================== --}}
    <div class="mobile-cta-bar" aria-label="Quick contact" role="complementary">
        <a
            href="{{ seo_phone_tel() }}"
            class="mobile-cta-call"
            onclick="if(window.trackCall) window.trackCall()"
            aria-label="Call now for booking enquiry"
        >
            <i class="fas fa-phone" aria-hidden="true"></i> Call
        </a>
        <a
            href="{{ seo_whatsapp_url('Hi, I would like to book a room at Shri Gajanan Maharaj Sansthan.') }}"
            class="mobile-cta-wa"
            target="_blank"
            rel="noopener noreferrer"
            onclick="if(window.trackWhatsApp) window.trackWhatsApp()"
            aria-label="WhatsApp booking enquiry"
        >
            <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp
        </a>
    </div>

    {{-- ===================== Scroll to Top Button ===================== --}}
    <button id="scrollTopBtn" class="scroll-top-btn" aria-label="Scroll to top of page" title="Go to top">
        <i class="fas fa-arrow-up" aria-hidden="true"></i>
    </button>

    {{-- ===================== Bootstrap JS (defer - non-blocking) ===================== --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>

    {{-- ===================== Swiper JS (only loaded when page has a slider) ===================== --}}
    @stack('swiper-js')

    {{-- ===================== Core JS ===================== --}}
    <script>
        // Scroll to top
        (function() {
            var scrollBtn = document.getElementById('scrollTopBtn');
            if (!scrollBtn) return;
            window.addEventListener('scroll', function() {
                scrollBtn.classList.toggle('show', window.scrollY > 300);
            }, { passive: true });
            scrollBtn.addEventListener('click', function() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        })();

        // Hide bell decoration on scroll (desktop)
        (function() {
            var jhalar = document.querySelector('.nav-jhalar-wrapper');
            if (!jhalar) return;
            window.addEventListener('scroll', function() {
                jhalar.classList.toggle('hide-bell', window.scrollY > 100);
            }, { passive: true });
        })();

        // Bell audio toggle (only executes if button is present in current page)
        (function() {
            var audio   = document.getElementById('bellAudio');
            var bellBtn = document.getElementById('bellToggleBtn');
            if (!audio || !bellBtn) return; // guard: only homepage has this button
            var bellIcon = bellBtn.querySelector('.bell-icon');
            if (!bellIcon) return;

            bellBtn.addEventListener('click', function() {
                if (audio.paused) {
                    audio.loop = true;
                    audio.play();
                    bellIcon.classList.add('ringing');
                } else {
                    audio.pause();
                    audio.currentTime = 0;
                    audio.loop = false;
                    bellIcon.classList.remove('ringing');
                }
            });

            audio.addEventListener('ended', function() {
                bellIcon.classList.remove('ringing');
                audio.loop = false;
            });
        })();
    </script>

    {{-- ===================== Page-specific JS ===================== --}}
    @stack('page-js')
    @yield('javascript-section')

    {{-- ===================== JSON-LD Structured Data ===================== --}}
    @include('frontend.partials.schema')

</body>

</html>
