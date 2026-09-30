@extends('frontend.layouts.master')

@section('meta_title', $meta_title)
@section('meta_description', $meta_description)
@section('meta_keywords', $meta_keywords)

@section('content')
    <link rel="stylesheet" href="{{ asset('frontend/css/contact.css') }}">

    <!-- ========================================================== -->
    <!-- === CONTACT PAGE – ORIGINAL CONTENT + SEO ================= -->
    <!-- ========================================================== -->
    <section class="contact-page-wrapper">
        <div class="container">
            <h1 class="contact-title">Contact Us – Shri Gajanan Maharaj Sansthan</h1>

            {{-- ============ NEW SEO CONTENT SECTION ============ --}}
            <div class="contact-seo-content mb-5">
                <p style="line-height: 1.8; color: #555;">
                    If you have any questions about Shri Gajanan Maharaj Sansthan you can get in touch with us. We are here to help you with things like booking a room staying at Bhakta Niwas or finding out if a room is available. You can also ask us about darshan and other things we offer.
                </p>
                <p style="line-height: 1.8; color: #555;">
                    Before you come to visit it is an idea to check some things first. You should find out about the cost, what time things are open and what you need to do.
                </p>
                <p style="line-height: 1.8; color: #555;">
                    To get the information you should use the official contact information, for Shri Gajanan Maharaj Sansthan. We care about every person who comes to visit. We want to make sure you have a nice and peaceful time when you come to Shegaon and the other places connected to Shri Gajanan Maharaj Sansthan.
                </p>
            </div>
            {{-- ============ END NEW SEO CONTENT ============ --}}

            <div class="row g-4">
                <!-- LEFT COLUMN: Contact Details -->
                <div class="col-lg-6">
                    <!-- Head Office Card -->
                    <div class="ct-card">
                        <h5>Central Administrative Office</h5>
                        <p>
                            Shri Gajanan Maharaj Sansthan,<br />
                            Shegaon,<br />
                            Dist. Buldhana,<br />
                            Maharashtra – 444203
                        </p>
                    </div>

                    <!-- Contact Card -->
                    <div class="ct-card">
                        <h5>Reach Us</h5>
                        <p>
                            <strong style="color: var(--theme-orange); font-weight: 700">
                                <i class="fas fa-phone me-1"></i> +919523016487
                            </strong>
                            <br />
                            For all booking queries and general assistance (WhatsApp / Call)
                        </p>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="https://wa.me/919523016487" target="_blank" class="ct-contact-link">
                                <i class="fab fa-whatsapp"></i> Message on WhatsApp
                            </a>
                            <a href="tel:+919523016487" class="ct-contact-link ct-call-link">
                                <i class="fas fa-phone"></i> Call Us
                            </a>
                        </div>
                    </div>

                    <!-- Office Hours Card -->
                    <div class="ct-card">
                        <h5>Operating Hours</h5>
                        <p>Open daily – 9:00 AM to 6:00 PM</p>
                    </div>
                </div>

                <!-- RIGHT COLUMN: Find us on Map -->
                <div class="col-lg-6">
                    <div class="ct-card h-100">
                        <h5>Locate Our Centres</h5>
                        <p class="text-muted small mb-3">
                            Click the map button for directions to each Sansthan accommodation.
                        </p>

                        <div class="ct-map-list">
                            <!-- Location 1 -->
                            <div class="ct-map-item">
                                <div class="loc-info">
                                    <h6>Shri Gajanan Maharaj Sansthan Shegaon Bhakt Niwas</h6>
                                    <p>
                                        Near the main temple, Shegaon, Dist. Buldhana
                                    </p>
                                </div>
                                <a href="https://maps.app.goo.gl/1PGAkskKV8EUQBCg7" target="_blank" class="ct-btn-map">
                                    Map
                                    <i class="fas fa-arrow-up-right-from-square ms-1" style="font-size: 10px"></i>
                                </a>
                            </div>

                            <!-- Location 2 -->
                            <div class="ct-map-item">
                                <div class="loc-info">
                                    <h6>Shri Gajanan Maharaj Sansthan Shegaon Anand Vihar</h6>
                                    <p>Adjacent to Anand Sagar, Shegaon</p>
                                </div>
                                <a href="https://maps.app.goo.gl/Xhvaj8pV1bgcJkpq6" target="_blank" class="ct-btn-map">
                                    Map
                                    <i class="fas fa-arrow-up-right-from-square ms-1" style="font-size: 10px"></i>
                                </a>
                            </div>

                            <!-- Location 3 -->
                            <div class="ct-map-item">
                                <div class="loc-info">
                                    <h6>Shri Gajanan Maharaj Sansthan Shegaon Visawa</h6>
                                    <p>Near Railway Station / Anand Sagar Road, Shegaon</p>
                                </div>
                                <a href="https://maps.app.goo.gl/5nij7iD2y5Cxp1RD8" target="_blank" class="ct-btn-map">
                                    Map
                                    <i class="fas fa-arrow-up-right-from-square ms-1" style="font-size: 10px"></i>
                                </a>
                            </div>

                            <!-- Location 4 -->
                            <div class="ct-map-item">
                                <div class="loc-info">
                                    <h6>Shri Gajanan Maharaj Sansthan Pandharpur</h6>
                                    <p>Near Sant Kaikadi Maharaj Math, Pandharpur</p>
                                </div>
                                <a href="https://maps.app.goo.gl/cPA7hgqT6fxXSURA9" target="_blank" class="ct-btn-map">
                                    Map
                                    <i class="fas fa-arrow-up-right-from-square ms-1" style="font-size: 10px"></i>
                                </a>
                            </div>

                            <!-- Location 5 -->
                            <div class="ct-map-item">
                                <div class="loc-info">
                                    <h6>Shri Gajanan Maharaj Sansthan Trimbakeshwar</h6>
                                    <p>Trimbakeshwar, Dist. Nashik</p>
                                </div>
                                <a href="https://maps.app.goo.gl/oVdqt1qKnRb97Zor6" target="_blank" class="ct-btn-map">
                                    Map
                                    <i class="fas fa-arrow-up-right-from-square ms-1" style="font-size: 10px"></i>
                                </a>
                            </div>

                            <!-- Location 6 -->
                            <div class="ct-map-item">
                                <div class="loc-info">
                                    <h6>Shri Gajanan Maharaj Sansthan Omkareshwar</h6>
                                    <p>Omkareshwar, Madhya Pradesh</p>
                                </div>
                                <a href="https://maps.app.goo.gl/F6n57SFqzdwfxtvE8" target="_blank" class="ct-btn-map">
                                    Map
                                    <i class="fas fa-arrow-up-right-from-square ms-1" style="font-size: 10px"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========================================================== -->
            <!-- PLANNING SECTION (Below Main Content)                      -->
            <!-- ========================================================== -->
            <div class="ct-planning-section">
                <h3 class="ct-planning-title">Plan Your Visit</h3>
                <p class="ct-planning-desc">
                    Browse official pages for bookings, locations, and detailed Sansthan information.
                </p>

                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="ct-planning-links-col">
                            <a href="{{ route('booking') }}">Accommodation request</a>
                            <a href="{{ route('about') }}">About the Sansthan</a>
                            <a href="{{ route('how-to-reach') }}">Travel guide to Shegaon</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ct-planning-links-col">
                            <a href="{{ route('locations') }}">All centres</a>
                            <a href="{{ route('bhaktaNiwas') }}">Bhakta Niwas details</a>
                            <a href="{{ route('darshan-timings') }}">Darshan schedule</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection