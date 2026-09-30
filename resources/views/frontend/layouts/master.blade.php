<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('meta_title', 'Shegaon Bhakta Niwas Room Booking & Rent | Online Guide')</title>

    <meta name="description" content="@yield('meta_description', 'Planning a trip to Shegaon? Check Shegaon Bhakta Niwas room rent, price list, availability & facilities near Gajanan Maharaj Temple. Book online easily')" />

    <meta name="keywords" content="@yield('meta_keywords', '')" />

    <meta name="robots" content="index, follow" />

    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">

    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">

    <link rel="apple-touch-icon" href="{{ asset('frontend/images/favicon.png') }}">


    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Swiper 11 CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
    <!-- FontAwesome -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link rel="stylesheet" href="{{ asset('frontend/css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/blog-detail.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/location.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/booking.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    
    <meta name="google-site-verification" content="RCN01jug9h3auY2pmt8My7WZOijIBmTff7aZ9QEWkFc" />

    <style>
        .hide-bell {
            opacity: 0;
            pointer-events: none;
            transform: translateY(-10px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
    </style>
</head>

<body>
    <header>
        <!-- Top Bar -->
        <div class="topbar">
            <div class="container-fluid px-lg-4">
                <div class="marquee-text">
                    <i class="fas fa-om me-2"></i> Welcome to Shri Gajanan Maharaj
                    Sansthan - Experience divine grace and spiritual serenity. | Book
                    your Darshan and Stay today!
                </div>
            </div>
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-custom">

            <!-- === BELLS JHALAR (Decoration) === -->
            <div class="nav-jhalar-wrapper d-none d-lg-flex" style="z-index: 999">
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
                <span class="hanging-bell"><i class="bx bx-bell"></i></span>
                <span class="hanging-bell"><i class="bx bx-bell"></i></span>
                <span class="hanging-bell"><i class="bx bx-bell"></i></span>
                <span class="hanging-bell"><i class="bx bx-bell"></i></span>
                <span class="hanging-bell"><i class="bx bx-bell"></i></span>
            </div>
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center gap-2 text-decoration-none" href="{{ route('home') }}">
                    <div class="brand-text">
                        <img src="{{ asset('frontend/images/GM_sansthan.png') }}" alt="sg sansthan"
                            style="height: 65px; width: auto" />
                    </div>
                </a>
                <!-- Audio Element (Hidden) -->
                <audio id="bellAudio" src="{{ asset('frontend/bell.mp3') }}" preload="auto"></audio>

                <!-- === RIGHT SIDE: Bell + Hamburger === -->
                <div class="d-flex align-items-center ms-auto ms-lg-0 order-1 order-lg-0">

                    <!-- Mobile Hamburger -->
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Sansthan</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('booking') }}">Booking</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('locations') }}">Locations</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                    <a href="https://wa.me/919523016487?text=Hi%2C%20I%20would%20like%20to%20know%20more%20about%20accommodation%20and%20darshan%20at%20Shri%20Gajanan%20Maharaj%20Sansthan."
                        target="_blank" class="btn btn-nav-cta"><i class="fab fa-whatsapp me-2"></i> Booking</a>
                </div>


            </div>
        </nav>
    </header>

    @yield('content')

    <!-- ========================================================== -->
    <!-- === UNIQUE DESIGN: Modern Pre-Footer & Main Footer === -->
    <!-- ========================================================== -->
    <footer class="unique-modern-footer">
        <div class="container">
            <!-- Top Row: CTA & Socials -->
            <div class="footer-top-row row align-items-center gy-3">
                <div class="col-md-7">
                    <div class="cta-box">
                        <span class="cta-label">Need Help? Reach us instantly</span>
                        <h3 class="cta-heading">Send Booking Request</h3>
                    </div>
                </div>
                <div class="col-md-5 text-md-end">
                    <a href="https://wa.me/919523016487?text=Hi%2C%20I%20would%20like%20to%20send%20a%20booking%20request%20for%20Bhakta%20Niwas%20accommodation%20at%20Shri%20Gajanan%20Maharaj%20Sansthan."
                        class="btn btn-uni-cta" target="_blank"><i class="fab fa-whatsapp me-2"></i>
                        WhatsApp</a>
                    {{-- <div class="social-links mt-3 mt-md-0 d-inline-block ms-md-3">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    </div> --}}
                </div>
            </div>

            <!-- Middle Row: 4 Column Grid -->
            <div class="row g-5 footer-grid">
                <!-- Col 1: Brand & Contact -->
                <div class="col-lg-5 col-md-6 desc-first">
                    <h4 class="footer-brand">Shri Gajanan Maharaj Sansthan</h4>
                    <p class="brand-quote small text-uppercase mb-3">
                        "Jai Gajanan Maharaj"
                    </p>
                    <p class="footer-desc small mb-4">
                        Official website for devotee services and accommodation booking.
                    </p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Shegaon, Dist. Buldhana, Maharashtra - 444203</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>info@gajananmaharajsansthanbhaktnivas.com</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>+919523016487</span>
                        </div>
                    </div>
                </div>

                <!-- Col 2: Quick Links (Removed Legal Pages) -->
                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-heading">Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('booking') }}">Booking</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('locations') }}">Locations</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>

                <!-- Col 3: Popular Guides -->
                <!--<div class="col-lg-3 col-md-6">-->
                <!--    <h6 class="footer-heading">Popular Guides</h6>-->
                <!--    <ul class="footer-links">-->
                <!--        @forelse($footerBlogs as $blog)-->
                <!--            <li><a href="{{ route('blog.detail', $blog->slug) }}">{{ $blog->title }}</a></li>-->
                <!--        @empty-->
                <!--            <li><span class="text-muted small">No guides available</span></li>-->
                <!--        @endforelse-->
                <!--    </ul>-->
                <!--</div>-->

                <!-- Col 4: Locations -->
                <div class="col-lg-5 col-md-6">
                    <h6 class="footer-heading">Locations</h6>
                    <ul class="footer-links">
                        <li><a href="{{ route('location-detail', ['slug' => 'shegaon-bhakt-niwas']) }}">Shri Gajanan Maharaj Sansthan Shegaon Bhakt Niwas</a></li>
                        <li><a href="{{ route('location-detail', ['slug' => 'shegaon-anand-vihar']) }}">Shri Gajanan Maharaj Sansthan Shegaon Anand Vihar</a></li>
                        <li><a href="{{ route('location-detail', ['slug' => 'pandharpur']) }}">Shri Gajanan Maharaj Sansthan Pandharpur Bhakt Niwas</a></li>
                        <li><a href="{{ route('location-detail', ['slug' => 'shegaon-visawa']) }}">Shri Gajanan Maharaj Sansthan Shegaon Visawa</a></li>
                        <li><a href="{{ route('location-detail', ['slug' => 'trimbakeshwar']) }}">Shri Gajanan Maharaj Sansthan Trimbakeshwar</a></li>
                        <li><a href="{{ route('location-detail', ['slug' => 'omkareshwar']) }}">Shri Gajanan Maharaj Sansthan Omkareshwar</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Row: Copyright + Legal Links Side by Side -->
            <div class="footer-bottom row align-items-center">
                <div class="col-md-12 text-center">
                    <p class="mb-2">
                        &copy; 2026 Shri Gajanan Maharaj Sansthan. All rights reserved.
                    </p>
                    <div class="footer-legal-links">
                        <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                        <a href="{{ route('terms-conditions') }}">Terms & Conditions</a>
                        <a href="{{ route('refund-cancellation-policy') }}">Refund Policy</a>
                        <a href="{{ route('disclaimer') }}">Disclaimer</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Fixed Floating Back to Top Button -->
    <button id="scrollTopBtn" class="scroll-top-btn" title="Go to top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Bootstrap JS & Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const audio = document.getElementById('bellAudio');
            const bellBtn = document.getElementById('bellToggleBtn');
            const bellIcon = bellBtn.querySelector('.bell-icon');

            if (audio && bellBtn) {
                bellBtn.addEventListener('click', function() {
                    if (audio.paused) {
                        // Play (Bajna shuru)
                        audio.loop = true;
                        audio.play();

                        // Icon Change: Bell -> With Mute Off
                        bellIcon.classList.remove('bx-bell');
                        bellIcon.classList.add('bx-bell');
                        bellIcon.classList.add('ringing');
                    } else {
                        // Pause (Rokna / Mute karna)
                        audio.pause();
                        audio.currentTime = 0; // Reset to beginning
                        audio.loop = false;

                        // Icon Change: Bell -> Bell Slash (Mute)
                        bellIcon.classList.remove('bx-bell');
                        bellIcon.classList.remove('ringing');
                        bellIcon.classList.add('bx-bell');
                    }
                });

                audio.addEventListener('ended', function() {
                    bellIcon.classList.remove('bx-bell');
                    bellIcon.classList.remove('ringing');
                    bellIcon.classList.add('bx-bell');
                    audio.loop = false;
                });
            }
        });
    </script>

    <script>
        // Swiper Slider Initialization
        const swiper = new Swiper(".myHeroSwiper", {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            effect: "fade",
            fadeEffect: {
                crossFade: true
            },
            speed: 1000,
        });

        const scrollBtn = document.getElementById("scrollTopBtn");

        window.addEventListener("scroll", function() {
            // Show button when user scrolls down 300px
            if (window.scrollY > 300) {
                scrollBtn.classList.add("show");
            } else {
                scrollBtn.classList.remove("show");
            }
        });

        scrollBtn.addEventListener("click", function() {
            // Smooth scroll to top
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });

        const jhalarWrapper = document.querySelector(".nav-jhalar-wrapper");

        window.addEventListener("scroll", function() {
            if (window.scrollY > 100) {
                jhalarWrapper.classList.add("hide-bell");
            } else {
                jhalarWrapper.classList.remove("hide-bell");
            }
        });
    </script>

    @yield('javascript-section')
</body>

</html>
