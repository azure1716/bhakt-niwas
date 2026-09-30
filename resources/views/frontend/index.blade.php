@extends('frontend.layouts.master')

@section('meta_title', $meta_title)
@section('meta_description', $meta_description)
@section('meta_keywords', $meta_keywords)

@section('content')
    <section class="hero-swiper-container">
        <!-- Sound Bell Button -->
        <button id="bellToggleBtn" class="bell-sound ms-2 me-lg-3" type="button">
            <i class="bell-icon bx bx-bell" style="color: #fff;"></i>
        </button>
        <div class="swiper myHeroSwiper hero-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-slide"
                    style="background-image: url({{ asset('frontend/images/temple1.jpg') }})">
                    <div class="container hero-content">
                        <div class="hero-badge">
                            <i class="fas fa-om me-2"></i> Official Pilgrim Centre
                        </div>
                        {{-- Only one H1 on the page --}}
                        <h1 class="hero-title">Shri Gajanan Maharaj Sansthan</h1>
                        <p class="hero-desc">
                            A sacred sanctuary of devotion and peace. Plan your visit for darshan and experience comfortable
                            hospitality at our Bhakta Niwas.
                        </p>
                        <div class="hero-buttons d-flex flex-wrap justify-content-center gap-3">
                            <a href="https://wa.me/919523016487?text=Hi%2C%20I%20would%20like%20to%20know%20more%20about%20accommodation%20and%20darshan%20at%20Shri%20Gajanan%20Maharaj%20Sansthan."
                                target="_blank" class="btn-hero btn-wa"><i class="fab fa-whatsapp"></i> WhatsApp Booking</a>
                            <a href="tel:+919523016487" class="btn-hero btn-orange"><i class="fas fa-phone"></i> Call
                                Now</a>
                        </div>
                    </div>
                </div>
                <!--<div class="swiper-slide hero-slide"-->
                <!--    style="background-image: url({{ asset('frontend/images/temple2.jpg') }})">-->
                <!--    <div class="container hero-content">-->
                <!--        <div class="hero-badge">-->
                <!--            <i class="fas fa-om me-2"></i> Darshan & Stay-->
                <!--        </div>-->
                <!--        <h2 class="hero-title">Reserve Your Bhakta Niwas Room</h2>-->
                <!--        <p class="hero-desc">-->
                <!--            Well‑maintained, tranquil accommodation right beside the temple. Stay with us and find inner-->
                <!--            solace.-->
                <!--        </p>-->
                <!--        <div class="hero-buttons d-flex flex-wrap justify-content-center gap-3">-->
                <!--            <a href="{{ route('booking') }}" class="btn-hero btn-orange"><i class="fas fa-bed"></i> Check-->
                <!--                Room Availability</a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="swiper-slide hero-slide"-->
                <!--    style="background-image: url({{ asset('frontend/images/temple3.jpg') }})">-->
                <!--    <div class="container hero-content">-->
                <!--        <div class="hero-badge">-->
                <!--            <i class="fas fa-om me-2"></i> Spiritual Journey-->
                <!--        </div>-->
                <!--        <h2 class="hero-title">Awaken Your Inner Self</h2>-->
                <!--        <p class="hero-desc">-->
                <!--            Join countless devotees in experiencing the divine blessings of Shri Gajanan Maharaj through our-->
                <!--            spiritual programs.-->
                <!--        </p>-->
                <!--        <div class="hero-buttons d-flex flex-wrap justify-content-center gap-3">-->
                <!--            <a href="https://wa.me/919523016487?text=Hi%2C%20I%20would%20like%20to%20know%20more%20about%20accommodation%20and%20darshan%20at%20Shri%20Gajanan%20Maharaj%20Sansthan."-->
                <!--                target="_blank" class="btn-hero btn-wa"><i class="fab fa-whatsapp"></i> WhatsApp Booking</a>-->
                <!--            <a href="tel:+919523016487" class="btn-hero btn-orange"><i class="fas fa-phone"></i> Call-->
                <!--                Now</a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 order-lg-1 order-2">
                    <span class="hero-badge bg-white text-dark border mb-3">About Gajanan Maharaj Sansthan</span>
                    <h2 class="display-5 fw-bold mb-4" style="color: var(--text-dark)">
                        Welcome to Gajanan Maharaj Sansthan 
                    </h2>
                    <p class="text-secondary mb-4" style="line-height: 1.8; font-size: 1.05rem">
                        Gajanan Maharaj Sansthan focuses on helping devotees and keeping the traditions of Gajanan Maharaj alive. It is in Shegaon. The Sansthan gives a place where devotees can pray ask for blessings and spend time in a spiritual setting.
                    </p>
                    <p class="text-secondary mb-5" style="line-height: 1.8; font-size: 1.05rem">
                       The Sansthan cares about devotion helping others following rules and making sure devotees are happy and well. For people who come to Shegaon the Sansthan is very important in making their trip easy and well-organized. 
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('about') }}" class="btn-hero btn-orange"><i class="fas fa-arrow-right"></i> Know
                            More</a>
                        <a href="{{ route('booking') }}" class="btn-outline-orange"><i class="fas fa-calendar-check"></i>
                            Booking Now</a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="position-relative overflow-hidden"
                        style="
                border-radius: 4px;
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
              ">
                        <img src="{{ asset('frontend/images/temple1.jpg') }}" class="img-fluid w-100" alt="About"
                            style="height: 450px; object-fit: cover" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    
     <!-- ==================== NEW SEO CONTENT SECTION ==================== -->
    <section class="section-gap" style="background: #fff;">
        <div class="container">
            <h2 class="section-title-main display-5 fw-bold">
                Shegaon Bhakta Niwas Booking | Room Rent & Affordable Stay
            </h2>
            <p class="section-desc-main">
                Complete guide for booking your stay at Shegaon Bhakta Niwas, including room rent, availability, and facilities.
            </p>

            <div class="seo-content mt-5">
                <!-- Shegaon Bhakta Niwas Room Booking: Complete for Guests -->
                <h3 class="fw-bold text-center mb-3" style="color: var(--theme-maroon);">Shegaon Bhakta Niwas Room Booking | Complete for Guests</h3>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    Room booking in Shegaon Bhakta Niwas should be regarded as an important factor to organize a comfortable stay in the city.
                    Many pilgrims prefer to make a reservation for their accommodation in order to enjoy their visit and exploration of the territory
                    without having any difficulties that might arise from not enough time to find homestay.
                </p>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    Prior to making reservations for rooms, you have to consider the type of the quarter, the number of guests, check-in and check-out
                    requirements, and the corresponding fees. While families would require larger space, individual travelers might prefer more modest
                    and inexpensive rooms. Older travelers might appreciate stays that provide easy access to the important places of the city.
                </p>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    It is also helpful to check the current booking policies before making reservations. Room occupancy and prices could differ
                    depending on the season. Planned booking will make your visit to the temple easier.
                </p>

                <!-- How to Book Shegaon Bhakta Niwas Room Online Easily -->
                <h3 class="fw-bold text-center mt-5 mb-3" style="color: var(--theme-maroon);">How to Book Shegaon Bhakta Niwas Room Online Easily</h3>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    Travellers who prefer digital booking may want to book Shegaon Bhakta Niwas room online before starting their journey.
                    Online booking can be convenient because guests can check information from home and plan their residence along with travel arrangements.
                </p>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    The first thing to do is to get the official website or authorized booking site for the stay facility. Ensure that you are getting
                    information about the room, availability, booking policies, and charges. Provide the correct date of your arrival and departure at the quarters.
                    Also, provide the right number of guests so that you book the appropriate room. Before making the confirmation of the reservation,
                    ensure that you look into all the aspects.
                </p>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    Make sure you know the category of the room, the price, cancellation policy, identification requirements, and check-in process.
                    You need to keep a copy of the booking confirmation after you have made your reservation. It would be wise to book your reservation
                    ahead of time. This enables you to have a hassle-free travel experience since the facility might book up during those days.
                </p>
                
                <!-- Shegaon Bhakta Niwas Booking Process for Devotees & Families -->
                <h3 class="fw-bold text-center mt-5 mb-3" style="color: var(--theme-maroon);">Shegaon Bhakta Niwas Booking Process for Devotees & Families</h3>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    The Shegaon Bhakta Niwas booking process should be simple and clear for every guest. Whether you are travelling alone or with your family,
                    understanding the basic steps can make the reservation easier.
                </p>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    First, decide your travel dates and estimate how many people will stay in the room. Next, check whether rooms are available for those dates.
                    Compare the available room options and select one according to your group size and comfort requirements. After selecting the room,
                    provide the required guest details. Make sure your name, contact information, arrival date, and departure date are entered correctly.
                    If identification documents are required, keep them ready for the booking or check-in process.
                </p>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    Before final confirmation, carefully review the total charges and booking conditions. Save your confirmation details and carry the required
                    documents when you travel. Families should also consider their practical needs. If you are travelling with children or elderly family members,
                    ask about suitable facilities before booking. A clear booking process helps avoid confusion and gives guests better control over their travel plans.
                </p>
            </div>
        </div>
    </section>

    <!-- Verify Info Section -->
    <section class="info-verify-section" style="background:#f5f5f5;">
        <div class="container">
            <div class="text-center">
                <h2 class="info-header-title display-5 fw-bold">
                    Your Trusted Stay Near <span>Gajanan Maharaj Temple</span>
                </h2>
                <p class="info-header-desc">
                    Pilgrims from around the world often look for our verified accommodation using various names such as
                    <strong>Shri Gajanan Maharaj Sansthan</strong>,
                    <strong>Shree Gajanan Maharaj Sansthan</strong>,
                    <strong>Sri Gajanan Maharaj Sansthan</strong>,
                    <strong>Gajanan Maharaj Mandir Shegaon</strong>,
                    <strong>Shegaon Sansthan</strong>, and
                    <strong>SGMS Shegaon</strong>.
                    For devotees searching <strong>Shegaon Bhakta Niwas booking</strong>, <strong>Shegaon room rent</strong>, or
                    <strong>affordable stay near Gajanan Maharaj Temple</strong>, this is the official place to plan your visit.
                </p>
            </div>
            <div class="row g-4 mt-3">
                <div class="col-lg-6">
                    <div class="verify-left-card">
                        <div class="d-flex align-items-center gap-2 mb-4 border-bottom pb-3">
                            <i class="fas fa-search text-warning" style="color: var(--theme-orange)"></i>
                            <h5 class="mb-0 fw-semibold">Popular Search Terms</h5>
                        </div>
                        <ul class="verify-list-styled">
                            <li>
                                <i class="fas fa-angle-right"></i> bhakta niwas shegaon booking
                            </li>
                            <li>
                                <i class="fas fa-angle-right"></i> bhakta niwas shegaon online booking
                            </li>
                            <li>
                                <i class="fas fa-angle-right"></i> gajanan maharaj sansthan room booking
                            </li>
                            <li>
                                <i class="fas fa-angle-right"></i> shegaon temple accommodation
                            </li>
                            <li>
                                <i class="fas fa-angle-right"></i> shegaon bhakta niwas room rent
                            </li>
                            <li>
                                <i class="fas fa-angle-right"></i> affordable stay near gajanan maharaj temple shegaon
                            </li>
                        </ul>
                        <div class="mt-3 text-muted small fst-italic">
                            * These terms are frequently used by devotees seeking official darshan &amp; accommodation.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="verify-right-card">
                        <div class="d-flex align-items-center gap-2 mb-4 border-bottom border-secondary pb-3">
                            <i class="fas fa-shield-alt"></i>
                            <h5 class="mb-0 fw-semibold">Official Verification Guide</h5>
                        </div>
                        <p class="mb-4 small opacity-75">
                            For authentic reservations and to avoid fraudulent listings,
                            always follow these verified steps:
                        </p>
                        <ul class="verify-list-styled">
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <strong>Official Site</strong><br /><span class="small opacity-75">Always use
                                        <code style="color:#fff;">www.sgmshegaon.com</code> for all
                                        sansthan related info.</span>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <strong>Booking Helpline</strong><br /><span class="small opacity-75">WhatsApp for
                                        verified room status &amp; Shegaon Bhakta Niwas booking.</span>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <strong>Multiple Locations</strong><br /><span class="small opacity-75">Services
                                        available in Shegaon, Faizabad, Gonda, and
                                        Amravati.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="unique-stats-section" id="stats-section">
        <div class="container">
            <div class="text-center mb-5 position-relative z-2">
                <span class="text-uppercase text-warning small fw-bold"
                    style="letter-spacing: 2px; color: #ffd700 !important">Our Impact</span>
                <h2 class="display-5 fw-bold mt-2 text-white">
                    Serving with Devotion
                </h2>
                <p class="text-white-50" style="max-width: 600px; margin: 0 auto">
                    Continuing the legacy of Shri Gajanan Maharaj through dedicated
                    service to humanity.
                </p>
                <div class="mt-3 text-warning">
                    <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="row g-4 position-relative z-2">
                <div class="col-md-6 col-lg-3">
                    <div class="stat-card">
                        <div class="stat-number">116+</div>
                        <div class="stat-title">Years of Service</div>
                        <div class="stat-desc">Serving devotees since 1908</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="stat-card">
                        <div class="stat-number">1M+</div>
                        <div class="stat-title">Annual Devotees</div>
                        <div class="stat-desc">Millions visit every year</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="stat-card">
                        <div class="stat-number">6+</div>
                        <div class="stat-title">Holy Locations</div>
                        <div class="stat-desc">Across sacred pilgrimage sites</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="stat-card">
                        <div class="stat-number">10,000+</div>
                        <div class="stat-title">Daily Prasad</div>
                        <div class="stat-desc">Servings offered to devotees daily</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="section-gap" style="background: #fff;">
        <div class="container">
                <h3 class="fw-bold text-center mb-3" style="color: var(--theme-maroon);">Shegaon Bhakta Niwas Price List | Check Room Rent & Charges</h3>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    When you are planning a trip to Shegaon it is a good idea to know the Shegaon Bhakta Niwas price list / room rent. The room charges can be
                    different depending on the type of room you want, availability, the time of year, and some other rules.
                </p>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    You should not think that the price of a room at Shegaon Bhakta Niwas is the same all year. It is an idea to check the latest price before you
                    book a room. This is very important during festivals, weekends and holidays when a lot of people are visiting Shegaon.
                </p>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    When you are looking at the room rent at Shegaon Bhakta Niwas do not just look at the price. You should also find out if you have to pay extra
                    for taxes, meals or if you have people with you. If you have this information you can avoid spending more money than you expected.
                    If you are going to Shegaon with your family it is an idea to check the room charges before you go. This way you can plan your trip and know
                    how much money you will need. If you are travelling alone or with one person you can also choose a room that fits your needs and budget.
                </p>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    When you are looking for a place to stay in Shegaon do not just choose the cheapest option. You should think about what you're getting for
                    your money. A room that costs more might be in a better location or it might have nicer facilities. You should always check the price with
                    someone who works at Shegaon Bhakta Niwas before you pay.
                </p>

                <!-- Shegaon Bhakta Niwas Room Rent: Affordable Stay Options -->
                <h3 class="fw-bold text-center mt-5 mb-3" style="color: var(--theme-maroon);">Shegaon Bhakta Niwas Room Rent | Affordable Stay Options</h3>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    When people visit Shegaon for a trip they usually look for affordable places to stay. Shegaon Bhakta Niwas room rent cost is a deal for
                    families and individual devotees who want to keep their travel expenses in check.
                </p>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    You do not have to give up comfort to stay somewhere affordable. People should look for rooms that are clean, have good beds, and have the
                    basic things they need. It is also important to think about how easy it is to get to the place and what the rules are for booking a room.
                    These things can make a difference in how useful an affordable stay is.
                </p>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    When you are looking at rooms think about how long you are going to stay. Someone who is only staying for one night might not need the same
                    things as a family that is staying for a few days. You should pick a room that's right for how many people are staying, how long you are staying,
                    and what you need to be comfortable. It is also an idea to book your room early if you can. During busy times the affordable rooms can fill up quickly.
                    A good way to do things is to compare the price of the room to what you get for that price. This helps you figure out if the guesthouse is a good
                    deal for your trip to Shegaon. Checking the prices before you go allows you to plan your budget and enjoy your trip to Shegaon without worrying
                    as much about where you are staying.
                </p>
                
                <!-- Shegaon Bhakta Niwas Availability: Check Rooms Before Booking -->
                <h3 class="fw-bold text-center mt-5 mb-3" style="color: var(--theme-maroon);">Shegaon Bhakta Niwas Availability | Check Rooms Before Booking</h3>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    Checking Shegaon Bhakta Niwas availability before travelling can save time and prevent last-minute residence problems. Room availability
                    will depend on booking demand, dates of travel, holidays, festive occasions and visitors' arrival into Shegaon.
                </p>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    You should check the availability as early as possible, particularly if your visit will coincide with a peak period. After determining your dates
                    of travel, it is advisable to check whether you will get a suitable room for your whole stay. Never assume that availability on one date is the
                    same as another. In case you are planning an extended stay, it will be prudent to check the remaining days separately if needed.
                </p>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    Another important thing that one should do is check the room category in advance before making the reservation. At times, a place may have rooms
                    available, but not exactly the kind you want. In case your preferred dates are full, you might want to adjust your travel dates if possible.
                    Check whether there are other rooms available which suit your needs. Above all, make sure that you get updated information via a legitimate booking source.
                    This will ensure that you are getting correct information.
                </p>
        </div>
    </section>

    <!-- Our Services -->
    <section class="section-gap" style="background: #f5f5f5;">
        <div class="container">
            <h2 class="section-title-main display-5 fw-bold">
                Our Sacred Services
            </h2>
            <p class="section-desc-main">
                We provide everything a devotee needs for a peaceful and divine stay,
                including <strong>Shegaon Bhakta Niwas room booking</strong> and affordable accommodation.
            </p>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-utensils"></i></div>
                        <h5>Mahaprasad</h5>
                        <p>
                            Hygienic and nutritious prasad distribution for thousands of
                            devotees daily, prepared with devotion.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-hotel"></i></div>
                        <h5>Bhakta Niwas</h5>
                        <p>
                            Clean and affordable accommodation with easy <strong>Shegaon Bhakta Niwas booking</strong>.
                            Ideal for families visiting the holy shrine.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-tree"></i></div>
                        <h5>Anand Sagar</h5>
                        <p>
                            Spiritual and recreational park with meditation centers,
                            beautiful gardens, and serene water features.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-bus"></i></div>
                        <h5>Free Bus Service</h5>
                        <p>
                            Complimentary transport between Railway Station, Bhakta Niwas,
                            and Temple for devotee convenience.
                        </p>
                    </div>
                </div>
            </div>
            <div class="service-quote">
                <i class="fas fa-quote-left me-2 text-warning"></i> Service to
                humanity is service to God
                <i class="fas fa-quote-right ms-2 text-warning"></i>
            </div>
        </div>
    </section>
    

    <!-- Book Your Room (9 Cards) -->
    <section class="section-gap">
        <div class="container">
            <h2 class="section-title-main display-5 fw-bold">
                Book your room in advance
            </h2>
            <p class="section-desc-main">
                at
                <span style="color: var(--theme-orange); font-weight: 600">Shri Gajanan Maharaj Sansthan</span>
            </p>

            {{-- SEO Intro Paragraph --}}
            <div class="mb-5">
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    Planning a trip to Shegaon? <strong>Shegaon Bhakta Niwas booking</strong> is the first step to a
                    comfortable stay. Check <strong>Shegaon Bhakta Niwas room rent</strong>, availability, and facilities
                    before you travel. Whether you are visiting alone, with family, or as a couple, our rooms offer clean,
                    affordable accommodation near Gajanan Maharaj Temple. Book online easily and avoid last-minute hassle.
                </p>
            </div>

            <div class="price-alert-box">
                <i class="fas fa-check-circle me-2"></i>
                <span>Transparent pricing</span><br />
                <small class="mt-1 d-block">All prices include: Room accommodation + All meals (Breakfast,
                    Lunch, Dinner) + Applicable taxes + Hot water facilities<br />
                    <strong>No hidden charges. Final price is exactly as shown.</strong>
                    Check-in: 24 Hours | Check-out: 24 Hours</small>
            </div>

            <!-- CSS for room badges -->
            <style>
                .room-badge.deluxe {
                    background: #fbbf24;
                    color: #333;
                }
                .room-badge.luxury {
                    background: #8b5cf6;
                    color: #fff;
                }
                .room-badge.family {
                    background: #34d399;
                    color: #fff;
                }
            </style>

            <div class="row g-4">
                <!-- Room 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="room-card">
                        <div class="position-relative">
                            <img src="{{ asset('frontend/images/room1.jpg') }}" alt="Room 1"
                                class="room-img" />
                            <span class="room-badge">AC</span>
                            <span class="room-meal-badge"><i class="fas fa-utensils me-1"></i> Breakfast, lunch & dinner
                                included</span>
                        </div>
                        <div class="room-body">
                            <h5>4 Bed AC</h5>
                            <p>Spacious room with air conditioning</p>
                            <div class="room-footer">
                                <div class="room-price">₹2550 <small></small></div>
                                <a class="btn-room text-decoration-none" href="{{ route('locations') }}">View details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Room 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="room-card">
                        <div class="position-relative">
                            <img src="{{ asset('frontend/images/room2.jpg') }}" alt="Room 2" class="room-img" />
                            <span class="room-badge non-ac">Non-AC</span>
                            <span class="room-meal-badge"><i class="fas fa-utensils me-1"></i> Breakfast, lunch & dinner
                                included</span>
                        </div>
                        <div class="room-body">
                            <h5>4 Bed Non-AC</h5>
                            <p>Spacious room with natural ventilation</p>
                            <div class="room-footer">
                                <div class="room-price">₹2250 <small></small></div>
                                <a class="btn-room text-decoration-none" href="{{ route('locations') }}">View details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Room 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="room-card">
                        <div class="position-relative">
                            <img src="{{ asset('frontend/images/room3.jpg') }}" alt="Room 3"
                                class="room-img" />
                            <span class="room-badge">AC</span>
                            <span class="room-meal-badge"><i class="fas fa-utensils me-1"></i> Breakfast, lunch & dinner
                                included</span>
                        </div>
                        <div class="room-body">
                            <h5>3 Bed AC</h5>
                            <p>Comfortable room with AC</p>
                            <div class="room-footer">
                                <div class="room-price">₹2050 <small></small></div>
                                <a class="btn-room text-decoration-none" href="{{ route('locations') }}">View details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Room 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="room-card">
                        <div class="position-relative">
                            <img src="{{ asset('frontend/images/room4.jpg') }}" alt="Room 4"
                                class="room-img" />
                            <span class="room-badge non-ac">Non-AC</span>
                            <span class="room-meal-badge"><i class="fas fa-utensils me-1"></i> Breakfast, lunch & dinner
                                included</span>
                        </div>
                        <div class="room-body">
                            <h5>4 Bed Non-AC</h5>
                            <p>Comfortable room with natural ventilation</p>
                            <div class="room-footer">
                                <div class="room-price">₹1750 <small></small></div>
                                <a class="btn-room text-decoration-none" href="{{ route('locations') }}">View details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Room 5 -->
                <div class="col-lg-3 col-md-6">
                    <div class="room-card">
                        <div class="position-relative">
                            <img src="{{ asset('frontend/images/room5.jpg') }}" alt="Room 5" class="room-img" />
                            <span class="room-badge">AC</span>
                            <span class="room-meal-badge"><i class="fas fa-utensils me-1"></i> Breakfast, lunch & dinner
                                included</span>
                        </div>
                        <div class="room-body">
                            <h5>2 Bed AC</h5>
                            <p>Cozy room with air conditioning</p>
                            <div class="room-footer">
                                <div class="room-price">₹1650 <small></small></div>
                                <a class="btn-room text-decoration-none" href="{{ route('locations') }}">View details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Room 6 -->
                <div class="col-lg-3 col-md-6">
                    <div class="room-card">
                        <div class="position-relative">
                            <img src="{{ asset('frontend/images/room6.jpg') }}" alt="Room 6" class="room-img" />
                            <span class="room-badge non-ac">Non-AC</span>
                            <span class="room-meal-badge"><i class="fas fa-utensils me-1"></i> Breakfast, lunch & dinner
                                included</span>
                        </div>
                        <div class="room-body">
                            <h5>2 Bed Non-AC</h5>
                            <p>Cozy room with natural ventilation</p>
                            <div class="room-footer">
                                <div class="room-price">₹1250 <small></small></div>
                                <a class="btn-room text-decoration-none" href="{{ route('locations') }}">View details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Room 7 (Deluxe) -->
                <div class="col-lg-3 col-md-6">
                    <div class="room-card">
                        <div class="position-relative">
                            <img src="{{ asset('frontend/images/room7.jpg') }}" alt="Room 7" class="room-img" />
                            <span class="room-badge deluxe">Deluxe</span>
                            <span class="room-meal-badge"><i class="fas fa-utensils me-1"></i> Breakfast, lunch & dinner
                                included</span>
                        </div>
                        <div class="room-body">
                            <h5>Deluxe Suite</h5>
                            <p>Elegant suite with premium features</p>
                            <div class="room-footer">
                                <div class="room-price">₹3150 <small></small></div>
                                <a class="btn-room text-decoration-none" href="{{ route('locations') }}">View details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Room 8 (Luxury) -->
                <div class="col-lg-3 col-md-6">
                    <div class="room-card">
                        <div class="position-relative">
                            <img src="{{ asset('frontend/images/room8.jpg') }}" alt="Room 8" class="room-img" />
                            <span class="room-badge luxury">Luxury</span>
                            <span class="room-meal-badge"><i class="fas fa-utensils me-1"></i> Breakfast, lunch & dinner
                                included</span>
                        </div>
                        <div class="room-body">
                            <h5>Luxury Suite</h5>
                            <p>Premium suite with all amenities</p>
                            <div class="room-footer">
                                <div class="room-price">₹4150 <small></small></div>
                                <a class="btn-room text-decoration-none" href="{{ route('locations') }}">View details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Room 9 (Family) -->
                <div class="col-lg-3 col-md-6">
                    <div class="room-card">
                        <div class="position-relative">
                            <img src="{{ asset('frontend/images/room9.jpg') }}" alt="Room 9" class="room-img" />
                            <span class="room-badge family">Family</span>
                            <span class="room-meal-badge"><i class="fas fa-utensils me-1"></i> Breakfast, lunch & dinner
                                included</span>
                        </div>
                        <div class="room-body">
                            <h5>Family Room</h5>
                            <p>Spacious room perfect for families</p>
                            <div class="room-footer">
                                <div class="room-price">₹3850 <small></small></div>
                                <a class="btn-room text-decoration-none" href="{{ route('locations') }}">View details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== NEW SEO CONTENT SECTION ==================== -->
    <section class="section-gap" style="background: #fbfbfb;">
        <div class="container">
                <!-- Affordable Stay Near Gajanan Maharaj Temple Shegaon -->
                <h3 class="fw-bold text-center mb-3" style="color: var(--theme-maroon);">Affordable Stay Near Gajanan Maharaj Temple Shegaon</h3>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    Finding an affordable stay near Gajanan Maharaj Temple Shegaon would make your spiritual visit convenient. Visitors often prefer lodging that
                    allows them to reach the temple without spending too much time on daily travel. The factor of location is even more significant for family groups,
                    old age guests, and those who are accompanied by children. The convenient stay would make your temple visits convenient and reduce the efforts
                    related to transportation arrangement.
                </p>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    The reasonable price of the housing should be considered along with other factors such as facilities in the guest house, room size, cleanliness,
                    booking terms, etc. Moreover, you can also take into account the distance from the temple and local transportation system. In some cases, you will
                    have to pay slightly more money but in exchange, you would get the convenience. In case you visit the temple during religious occasion, it is better
                    to book your stay in advance since demand could grow up very rapidly. The comfortable and affordable stay would allow you to spend more time visiting
                    the temple and not arranging anything else.
                </p>

                <!-- Shegaon Bhakta Niwas Stay Facilities for Guests -->
                <h3 class="fw-bold text-center mt-5 mb-3" style="color: var(--theme-maroon);">Shegaon Bhakta Niwas Stay Facilities for Guests</h3>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    Before confirming a room guests should know about the Shegaon Bhakta Niwas accommodation facilities. Basic facilities can make a difference especially
                    for families, older visitors and people who are staying for more than one night.
                </p>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    Depending on the boarding and room type helpful facilities might include bedding, clean rooms, private bathrooms, water to drink, places to sit and
                    other simple comforts. Guests should make sure they know which facilities are included with the room they choose. If you are traveling with kids make
                    sure the room has space for everyone. Families with lots of bags might also want a room that's easy to move around in and has space to store things.
                </p>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    Guests should also learn about the check-in process and any rules the property has. Understanding these details before arriving can make the whole
                    experience better. Do not think that every room type offers the same facilities. Always look for the current information about the specific room you
                    want to book. The right facilities can make a short stay feel more comfortable. So match what you need with what's available before you finish booking
                    your room.
                </p>

                <!-- Rooms Available at Shegaon Bhakta Niwas for Comfortable Stay -->
                <h3 class="fw-bold text-center mt-5 mb-3" style="color: var(--theme-maroon);">Rooms Available at Shegaon Bhakta Niwas for Comfortable Stay</h3>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    The right room can make your visit to Shegaon a lot more comfortable. When you are looking for a room you should think about how many people are
                    coming with you, how long you are staying, what you want to have in the room and what your whole travel plan is.
                </p>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    If you are going to Shegaon by yourself a simple room with the basics is probably fine. If you are going with your family you will need a room that is
                    bigger. If you are travelling with older family members it is really important that the room is easy to get to and convenient. Before you book a room
                    check what kind of room it is and what you get with it. Make sure you know how many beds there are, what the bathroom is like, what else the room has,
                    and if there are any rules about having extra people stay with you. You should also think about how clean and comfortable the room is. After a day of
                    travelling around and visiting temples it is really nice to have a quiet room to rest in.
                </p>
                <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    It is better to pick a room that is what you really need rather than just choosing the cheapest one. A room that is right for you can be a good deal
                    and make your stay less stressful. Always check to make sure you have the correct information about the room and that it is available before you make
                    your final decision to book it.
                </p>
            </div>
        </div>
    </section>
    <!-- ==================== END SEO CONTENT SECTION ==================== -->

    <!-- Our Locations -->
    <section class="section-gap" style="background: #f5f5f5">
        <div class="container">
            <div class="text-center mb-4">
                <span class="hero-badge bg-white text-dark border"
                    style="border-color: var(--theme-orange) !important">Sacred Destinations</span>
                <h2 class="section-title-main display-5 fw-bold mt-2">
                    Our Locations
                </h2>
                <p class="section-desc-main">
                    Discover our facilities across holy pilgrimage sites, each offering
                    peaceful accommodation.
                </p>
            </div>
            <div class="row g-4">
                <!-- Location 1: Shegaon -->
                <div class="col-lg-4 col-md-6">
                    <div class="location-card">
                        <img src="{{ asset('frontend/images/loc2.jpg') }}" alt="Shegaon Bhakt Niwas" class="loc-img" />
                        <div class="loc-body">
                            <h5>Shri Gajanan Maharaj Sansthan Shegaon Bhakt Niwas</h5>
                            <p>
                                Official Bhakta Niwas near Gajanan Maharaj Temple. Check Shegaon Bhakt Niwas room booking, rent, and availability for a peaceful stay.
                            </p>
                            <div class="loc-buttons">
                                <a href="{{ route('location-detail', ['slug' => 'shegaon-bhakt-niwas']) }}" class="btn-explore">Explore <i class="fas fa-arrow-right ms-1"></i></a>
                                <a href="https://wa.me/919523016487?text=Hi%2C%20I%20would%20like%20to%20book%20accommodation%20at%20Shri%20Gajanan%20Maharaj%20Sansthan%20Shegaon."
                                    target="_blank" class="btn-book-loc"><i class="fab fa-whatsapp me-1"></i> Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Location 2: Pandharpur -->
                <div class="col-lg-4 col-md-6">
                    <div class="location-card">
                        <img src="{{ asset('frontend/images/location1.jpg') }}" alt="Pandharpur Bhakt Niwas" class="loc-img" />
                        <div class="loc-body">
                            <h5>Shri Gajanan Maharaj Sansthan Pandharpur Bhakt Niwas</h5>
                            <p>
                                Affordable stay for Pandharpur pilgrims near Vitthal Rukmini Temple. Book rooms with simple facilities and easy darshan access.
                            </p>
                            <div class="loc-buttons">
                                <a href="{{ route('location-detail', ['slug' => 'pandharpur']) }}" class="btn-explore">Explore <i class="fas fa-arrow-right ms-1"></i></a>
                                <a href="https://wa.me/919523016487?text=Hi%2C%20I%20would%20like%20to%20book%20accommodation%20at%20Shri%20Gajanan%20Maharaj%20Sansthan%20Pandharpur."
                                    target="_blank" class="btn-book-loc"><i class="fab fa-whatsapp me-1"></i> Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Location 3: Anand Vihar -->
                <div class="col-lg-4 col-md-6">
                    <div class="location-card">
                        <img src="{{ asset('frontend/images/loc3.jpg') }}" alt="Anand Vihar Shegaon" class="loc-img" />
                        <div class="loc-body">
                            <h5>Shri Gajanan Maharaj Sansthan Shegaon Anand Vihar</h5>
                            <p>
                                Premium AC rooms and suites near Anand Sagar and Gajanan Maharaj Temple. Ideal for families and senior citizens.
                            </p>
                            <div class="loc-buttons">
                                <a href="{{ route('location-detail', ['slug' => 'shegaon-anand-vihar']) }}" class="btn-explore">Explore <i class="fas fa-arrow-right ms-1"></i></a>
                                <a href="https://wa.me/919523016487?text=Hi%2C%20I%20would%20like%20to%20book%20accommodation%20at%20Shri%20Gajanan%20Maharaj%20Sansthan%20Anand%20Vihar."
                                    target="_blank" class="btn-book-loc"><i class="fab fa-whatsapp me-1"></i> Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
     <!-- ==================== NEW SEO CONTENT SECTION ==================== -->
    <section class="section-gap" style="background: #fbfbfb;">
        <div class="container">
            <!-- Why Choose Shegaon Bhakta Niwas for Your Temple Visit? -->
            <h3 class="fw-bold text-center mb-3" style="color: var(--theme-maroon);">Why Choose Shegaon Bhakta Niwas for Your Temple Visit?</h3>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                Choosing a guesthouse is a great way to make your temple visit more organised and comfortable. A lot of people like to stay close to the temple and
                other important religious places because it's easier to plan their day. You can visit the temple and then go back to the guesthouse to rest. This is
                really helpful for families with kids and older people who need to take breaks during the day.
            </p>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                When you are looking for a place to stay you should think about a few things. You should think about where the guesthouse is, how comfortable the rooms
                are, and if it is affordable. You should also check what facilities they have and what the rules are for booking a room. All these things can help you
                pick a room that's just right for you.
            </p>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                If you are going to Shegaon for a short trip to visit the temple you might want a simple room that is easy to get to. If you are staying for a longer
                time you might want a room with more facilities and comforts. Planning ahead is a good idea. If you already have a guesthouse booked you do not have to
                worry about it. You can focus on visiting the temple, seeing the sights, and spending time with your family. It is not hard to plan a stay. If you have
                all the information you need and you book ahead of time everything will be easier. You will have a place to stay and you can enjoy your trip to the temple.
            </p>

            <!-- Shegaon Bhakta Niwas Location Near Gajanan Maharaj Temple -->
            <h3 class="fw-bold text-center mt-5 mb-3" style="color: var(--theme-maroon);">Shegaon Bhakta Niwas Location Near Gajanan Maharaj Temple</h3>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                Location is one of the most important things guests should think about when planning their stay in Shegaon. Being close to Gajanan Maharaj Temple can
                make visiting the temple easier and cut down on extra traveling. For people who plan to visit the temple multiple times during the day a good location
                can save time and energy. This is especially useful for families with children or older people.
            </p>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                When looking at the location check the distance and the ways to get there instead of just trusting general descriptions. Think about how easy it is to
                get to the temple, nearby shops, places to eat, transport options, and other helpful spots. Guests should also make sure they know the address of their
                stay before they travel. Save the location on your phone and keep your booking details ready.
            </p>

            <!-- Best Time to Book Shegaon Bhakta Niwas for Your Visit -->
            <h3 class="fw-bold text-center mt-5 mb-3" style="color: var(--theme-maroon);">Best Time to Book Shegaon Bhakta Niwas for Your Visit</h3>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                The best time to make a booking for Shegaon depends on when you're going to Shegaon and how many people are going to be there. If you are going to Shegaon
                during a festival or on a weekend or public holiday you should plan ahead. When a lot of people are going to Shegaon it can be hard to find a place to stay.
                That is why it is a good idea to book early. Booking early gives you time to look at all the rooms that are available and pick the one that is right for you.
            </p>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                If you can go to Shegaon on weekdays you might be able to find a better place to stay. Sometimes weekdays are better than weekends because there are more
                rooms available. Before you book a room get all your travel details ready. Know when you are getting to Shegaon and when you are leaving Shegaon. Know how
                many people are coming with you and what kind of room you want. This will make booking a room in Shegaon a lot easier. People who are going to Shegaon
                should check if there is Shegaon Bhakta Niwas availability before they finalize their plans for going to Shegaon.
            </p>

            <!-- How to Check Shegaon Bhakta Niwas Room Availability -->
            <h3 class="fw-bold text-center mt-5 mb-3" style="color: var(--theme-maroon);">How to Check Shegaon Bhakta Niwas Room Availability</h3>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                Checking room availability should be one of the first steps after deciding your travel dates. Keep your check-in and check-out dates ready. Also know
                the number of guests and preferred room category. These details make it easier to identify suitable options. If you plan to book Shegaon Bhakta Niwas
                room online, carefully check whether the displayed information applies to your complete stay. A room may be available for one night but full for the
                following night.
            </p>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                If online availability is unclear, contact the authorised boarding representative and ask about the specific dates. Confirm the room category, total
                charges, booking requirements, and check-in instructions. Avoid depending on old social media posts, outdated directories, or unverified phone numbers
                for current availability. Once your reservation is confirmed, save the booking details. Having confirmation information available when you travel can
                make check-in easier and reduce confusion.
            </p>

            <!-- Shegaon Bhakta Niwas Stay Options for Short & Long Visits -->
            <h3 class="fw-bold text-center mt-5 mb-3" style="color: var(--theme-maroon);">Shegaon Bhakta Niwas Stay Options for Short & Long Visits</h3>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                Different visitors need different kinds of places to stay. For short visits guests might like a basic room with the things they need and easy access
                to the temple. The main things people look for are comfort, clean space, good value for money and a simple check-in process. For longer stays more
                things become helpful. Families who are staying for several days should think about the size of the room and what is available before they book.
                People who are alone may not need much and can focus more on where the room is and how much it costs.
            </p>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                When you go for Shegaon Bhakta Niwas room booking be sure to say how long you will be staying. This helps you choose a room that's available for the
                whole time you are there.
            </p>

            <!-- Tips to Get Affordable Rooms at Shegaon Bhakta Niwas -->
            <h3 class="fw-bold text-center mt-5 mb-3" style="color: var(--theme-maroon);">Tips to Get Affordable Rooms at Shegaon Bhakta Niwas</h3>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                Travellers who want to manage their budget should plan their housing carefully. The first step is to check the latest Shegaon Bhakta Niwas price list
                / room rent before finalising the trip. Compare available room categories and choose one that provides the facilities you actually need. Paying extra
                for facilities you will not use may increase your travel expenses without adding much value.
            </p>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                Booking early can also be useful during busy travel periods. When demand increases, economical rooms may become limited. Checking availability ahead
                of time gives you more choices. If your dates are flexible, compare different travel dates. You may find more suitable shelter options on less busy days.
                Always understand what the room price includes. Ask about additional charges, taxes, meals, extra guests, and other services if the information is not clear.
                Most importantly, focus on overall value rather than choosing only the cheapest room. A comfortable, clean, convenient, and reasonably priced stay can
                offer better value for your trip.
            </p>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section-gap testimonial-section" style="background: #fff0f0">
        <div class="container">
            <div class="text-center mb-4">
                <span class="hero-badge bg-white text-dark border"
                    style="border-color: var(--theme-orange) !important">Devotee Experiences</span>
                <h2 class="section-title-main display-5 fw-bold mt-2">
                    What Devotees Say
                </h2>
                <p class="section-desc-main">
                    Heartfelt blessings shared by devotees who visited our holy shrines.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="testimonial-card">
                        <i class="fas fa-quote-right testi-quote"></i>
                        <div class="testi-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testi-text">
                            "The peace and serenity I experienced at Shegaon is beyond
                            words. The accommodation was clean, staff was helpful, and the
                            spiritual atmosphere touched my heart deeply. Jai Gajanan
                            Maharaj!"
                        </p>
                        <div class="testi-author">Smt. Priya Deshmukh</div>
                        <div class="testi-location">Mumbai, Maharashtra</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-card">
                        <i class="fas fa-quote-right testi-quote"></i>
                        <div class="testi-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testi-text">
                            "Our family has been visiting Shegaon for three generations. The
                            Sansthan's dedication to cleanliness, discipline, and devotee
                            service is exemplary. The Mahaprasad is a great example of
                            selfless seva."
                        </p>
                        <div class="testi-author">Shri Ramesh Kulkarni</div>
                        <div class="testi-location">Pune, Maharashtra</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-card">
                        <i class="fas fa-quote-right testi-quote"></i>
                        <div class="testi-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testi-text">
                            "Anand Sagar is a divine oasis of tranquility. The beautiful
                            gardens, meditation centers, and peaceful atmosphere provide the
                            perfect setting for spiritual contemplation. A must-visit for
                            every devotee."
                        </p>
                        <div class="testi-author">Smt. Anjali Patil</div>
                        <div class="testi-location">Nagpur, Maharashtra</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-card">
                        <i class="fas fa-quote-right testi-quote"></i>
                        <div class="testi-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testi-text">
                            "The accommodation booking process was smooth, and the rooms at
                            Bhakta Niwas exceeded our expectations. The Sansthan truly lives
                            by the principle of 'Atithi Devo Bhava'. We felt blessed and
                            welcome."
                        </p>
                        <div class="testi-author">Shri Vikram Sharma</div>
                        <div class="testi-location">Delhi</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pilgrimage Guides (Dynamic Blogs) -->
    <section class="section-gap">
        <div class="container">
            <h2 class="section-title-main display-5 fw-bold">
                Popular Pilgrimage Guides
            </h2>
            <p class="section-desc-main">
                Plan your visit with our guides on darshan timings, accommodation, and
                travel tips for Shegaon, Omkareshwar, Pandharpur, and more.
            </p>
            <div class="row g-4">
                {{-- Dynamic Loop --}}
                @forelse($homeBlogs as $blog)
                    <div class="col-lg-3 col-md-6">
                        <div class="guide-card">
                            <div class="guide-meta">
                                <i class="far fa-calendar-alt"></i>
                                {{ \Carbon\Carbon::parse($blog->published_date)->format('M d, Y') }} •
                                <i class="far fa-clock"></i> 2 min read
                            </div>
                            <div class="guide-title">
                                {{ \Illuminate\Support\Str::limit($blog->title, 50) }}
                            </div>
                            <p class="guide-desc">
                                {{ \Illuminate\Support\Str::limit($blog->short_description, 80) }}
                            </p>
                            <div class="guide-tags">
                                {{-- Categories Tags --}}
                                @if (!empty($blog->categories) && is_array($blog->categories))
                                    @foreach (array_slice($blog->categories, 0, 2) as $cat)
                                        <span class="guide-tag">{{ $cat }}</span>
                                    @endforeach
                                @endif

                                {{-- Topics Tags (Orange) --}}
                                @if (!empty($blog->topics) && is_array($blog->topics))
                                    @foreach (array_slice($blog->topics, 0, 1) as $topic)
                                        <span class="guide-tag orange">{{ $topic }}</span>
                                    @endforeach
                                @endif

                                @if ((!empty($blog->categories) && count($blog->categories) > 2) || (!empty($blog->topics) && count($blog->topics) > 1))
                                    <span class="guide-tag" style="background: #e5e7eb; color: #333">+ more</span>
                                @endif
                            </div>
                            <a href="{{ route('blog.detail', $blog->slug) }}" class="guide-read">
                                Read Article <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-4">
                        <p class="text-muted">No pilgrimage guides available at the moment.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    
    <section class="section-gap" style="background: #fbfbfb">
        <div class="container">
            <!-- Shegaon Bhakta Niwas Rooms for Families, Couples & Devotees -->
            <h3 class="fw-bold text-center mb-3" style="color: var(--theme-maroon);">Shegaon Bhakta Niwas Rooms for Families, Couples & Devotees</h3>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                Shegaon is a place that welcomes people from all walks of life. The thing is people have different needs when it comes to a place to stay. For
                example, families need a lot of space, couples like to have a private place, and people who are travelling alone just want something that is easy
                on the pocket and convenient.
            </p>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                When you are looking for a room at Shegaon Bhakta Niwas think about how many people are coming with you. You want a room where everyone can rest
                properly after a day of travelling or visiting the temple. Families should make sure the room is big enough for everyone to sleep comfortably and
                that it has the things that kids need. Couples should check the rules of the house and what the room has to offer before they book it. People who
                are travelling alone might just want a room that meets their basic needs.
            </p>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                What you are coming to Shegaon for matters. If you are going to be out and about visiting the temple and other places then a simple room will do.
                If you are going to be spending a lot of time at the place where you are staying then you might want something a bit more comfortable. So choose
                a room that fits what you need, your budget, and how long you are staying, and you will have a nicer time.
            </p>

            
            <!-- What to Know Before Booking Shegaon Bhakta Niwas Rooms -->
            <h3 class="fw-bold text-center mt-5 mb-3" style="color: var(--theme-maroon);">What to Know Before Booking Shegaon Bhakta Niwas Rooms</h3>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                Before you make a reservation you should get all the details about where you will stay. Start by thinking about when you will travel, how many people
                are coming with you, what kind of room you want, and what time you will arrive. Next look at how much the room costs and what things are included.
                You need to know if the price includes food, taxes and other extra costs. When you have all this information you can make a plan for your trip and know
                how much money you will need.
            </p>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                You should also check the rules for booking and cancelling. These rules are not the same everywhere so do not think that they are all the same. If you
                want to book Shegaon Bhakta Niwas room online use a website that you trust and read everything carefully before you pay. Do not give your money
                information to people you do not know or websites that are not real. Make sure you have your booking confirmation, your identity documents and important
                phone numbers ready before you leave.
            </p>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                It is also a good idea to confirm exactly where the place is and what you need to do when you arrive. This is especially important if you will be getting
                there late or if you are travelling with family. If you take a few minutes to check all these things you can avoid common problems and make your arrival
                much easier.
            </p>

            <!-- Shegaon Bhakta Niwas Booking Contact Number & Details -->
            <h3 class="fw-bold text-center mt-5 mb-3" style="color: var(--theme-maroon);">Shegaon Bhakta Niwas Booking Contact Number & Details</h3>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                When you are looking for a place to stay and you have questions about the rooms at Shegaon Bhakta Niwas you might need the Shegaon Bhakta Niwas booking
                contact number. It is really helpful to have a contact when you cannot find the information you need online or it is not clear. You should get your travel
                dates and the number of people who are coming with you ready before you call. Then you can ask about the rooms that are available and how much they cost
                now. You can also ask about what time you can check in and what kind of facilities they have. It is a good idea to ask about what you need to do to book
                a room too.
            </p>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                Do not use a number you found on a random post or a website that is not valid because the contact information might have changed. This will help the person
                you talk to find your booking. You should also ask about how to pay and what happens if you need to cancel before you make a payment. If you talk to them
                clearly when you book you will not have any problems later.
            </p>

            <!-- Book Shegaon Bhakta Niwas Room Online for a Peaceful Stay -->
            <h3 class="fw-bold text-center mt-5 mb-3" style="color: var(--theme-maroon);">Book Shegaon Bhakta Niwas Room Online for a Peaceful Stay</h3>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                Planning your quarter in advance can make your visit to Shegaon peaceful and well organised. If you want to book Shegaon Bhakta Niwas room online first
                make sure you know your travel dates, the number of guests, the type of room you prefer, and how long you plan to stay. Check the room availability and
                price before you make the reservation. Read about the facilities and the booking conditions so you know what to expect when you arrive.
            </p>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                An online reservation can be very convenient because you can set up your stay before you start your journey. However always use an authorised booking
                source and check important details before you pay. Planning early usually gives travellers more options. For devotees who are visiting the temple with
                family or friends a confirmed room gives a place to rest during the trip. It also helps you plan temple visits and local travel easily.
            </p>

            <!-- CTA -->
            <div class="text-center mt-5">
                <a href="{{ route('booking') }}" class="btn-hero btn-orange"><i class="fas fa-bed me-2"></i> Book Your Room Now</a>
            </div>
        </div>
    </section>
    

    <!-- Plan Your Pilgrimage -->
    <section class="section-gap" style="background: #fff0f0">
        <div class="container">
            <div class="text-center mb-4">
                <span class="hero-badge bg-white text-dark border"
                    style="border-color: var(--theme-orange) !important">Visit Information</span>
                <h2 class="section-title-main display-5 fw-bold mt-2">
                    Plan Your Pilgrimage
                </h2>
                <p class="section-desc-main">
                    Everything you need to know for a smooth and blessed visit to our
                    holy shrines.
                </p>
            </div>

            <div class="row g-4">
                <!-- Darshan Timings -->
                <div class="col-lg-6">
                    <div class="plan-card">
                        <h5>
                            <i class="far fa-clock text-warning" style="color: var(--theme-orange)"></i>
                            Darshan Timings
                        </h5>
                        <div class="plan-item">
                            <div>
                                <strong>Morning Darshan</strong><br /><small>Temple opens for morning prayers and
                                    darshan</small>
                            </div>
                            <span>5:00 AM - 12:00 PM</span>
                        </div>
                        <div class="plan-item">
                            <div>
                                <strong>Evening Darshan</strong><br /><small>Evening aarti and darshan available</small>
                            </div>
                            <span>4:00 PM - 10:00 PM</span>
                        </div>
                    </div>
                </div>
                <!-- Best Time to Visit -->
                <div class="col-lg-6">
                    <div class="plan-card">
                        <h5>
                            <i class="far fa-calendar-alt text-warning" style="color: var(--theme-orange)"></i>
                            Best Time to Visit
                        </h5>
                        <div class="plan-item">
                            <div>
                                <strong>Winter</strong><br /><small>Pleasant weather, ideal for darshan and exploring Anand
                                    Sagar</small>
                            </div>
                            <span>October to February</span>
                        </div>
                        <div class="plan-item">
                            <div>
                                <strong>Monsoon</strong><br /><small>Lush greenery at Anand Sagar, moderate crowds</small>
                            </div>
                            <span>July to September</span>
                        </div>
                        <div class="plan-item">
                            <div>
                                <strong>Summer</strong><br /><small>Hot weather, but less crowded. AC accommodations
                                    available</small>
                            </div>
                            <span>March to June</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- How to Reach -->
            <div class="mt-5">
                <h4 class="text-center fw-bold mb-4" style="color: var(--theme-maroon)">
                    How to Reach Shegaon
                </h4>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="transport-card">
                            <div class="transport-icon"><i class="fas fa-train"></i></div>
                            <h6>By Train</h6>
                            <p>
                                Shegaon Railway Station is well-connected to major cities.
                                Free bus service available from station to temple.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="transport-card">
                            <div class="transport-icon"><i class="fas fa-road"></i></div>
                            <h6>By Road</h6>
                            <p>
                                Well-connected by state highways. Regular bus services from
                                Nagpur (150 km), Akola (80 km), and nearby cities.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="transport-card">
                            <div class="transport-icon"><i class="fas fa-plane"></i></div>
                            <h6>By Air</h6>
                            <p>
                                Nearest airport: Dr. Babasaheb Ambedkar International Airport,
                                Nagpur (165 km). Taxi and bus services available.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Important Notes + Final CTA -->
    <section class="section-gap" style="padding-bottom: 0">
        <div class="container">
            <div class="notes-wrapper">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <div
                        style="
                background: #fff7ed;
                width: 35px;
                height: 35px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 4px;
                color: var(--theme-orange);
              ">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <h5 class="mb-0 fw-semibold" style="color: var(--theme-maroon)">
                        Important Notes
                    </h5>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <i class="fas fa-circle" style="font-size: 6px; margin-top: 8px"></i>
                                ID proof is mandatory for accommodation booking
                            </li>
                            <li>
                                <i class="fas fa-circle" style="font-size: 6px; margin-top: 8px"></i>
                                Mahaprasad (lunch) available daily at nominal charges
                            </li>
                            <li>
                                <i class="fas fa-circle" style="font-size: 6px; margin-top: 8px"></i>
                                Photography restricted inside temple premises
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <i class="fas fa-circle" style="font-size: 6px; margin-top: 8px"></i>
                                Advance booking recommended during festivals and weekends
                            </li>
                            <li>
                                <i class="fas fa-circle" style="font-size: 6px; margin-top: 8px"></i>
                                Free Wi-Fi available at main complex
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Final CTA Banner -->
        <div class="cta-final-section">
            <div class="container">
                <div
                    style="
              font-size: 14px;
              letter-spacing: 1px;
              margin-bottom: 10px;
              opacity: 0.8;
              font-family: &quot;Playfair Display&quot;, serif;
              position: relative;
              z-index: 2;
            ">
                    श्री गजानन महाराज संस्थान
                </div>
                <h2>
                    Experience Divine Grace<br /><span style="font-weight: 300">& Spiritual Serenity</span>
                </h2>
                <p>
                    Book your stay at Bhakta Niwas and feel the blessings of Shri
                    Gajanan Maharaj.
                </p>
                <div class="d-flex flex-wrap justify-content-center align-items-center gap-3 position-relative z-2">
                    <a href="https://wa.me/919523016487?text=Hi%2C%20I%20would%20like%20to%20book%20my%20stay%20at%20Shri%20Gajanan%20Maharaj%20Sansthan."
                        target="_blank" class="btn-cta-wa"><i class="fab fa-whatsapp"></i> Book on WhatsApp</a>
                    <a href="{{ route('booking') }}" class="btn-cta-outline"><i class="fas fa-paper-plane"></i> Send
                        Booking Request</a>
                </div>
                <div class="footer-lines">
                    Trusted Since 1908 &nbsp;&nbsp;|&nbsp;&nbsp; 10,000+ Devotees Served
                    Daily
                </div>
            </div>
        </div>
    </section>
@endsection

@section('javascript-section')
    <!-- Counter Animation -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const statNumbers = document.querySelectorAll('.stat-number');

            if (statNumbers.length === 0) return;

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        let text = el.textContent.trim();

                        // Clear commas from number string for parsing (e.g., 10,000 becomes 10000)
                        let cleanText = text.replace(/,/g, '');
                        let target = 0;
                        let suffix = '';

                        // Parse based on ending suffixes
                        if (cleanText.endsWith('M+')) {
                            target = parseInt(cleanText.replace('M+', ''));
                            suffix = 'M+';
                        } else if (cleanText.endsWith('L+')) { // Lakh (1,00,000)
                            target = parseInt(cleanText.replace('L+', ''));
                            suffix = 'L+';
                        } else if (cleanText.endsWith('C+')) { // Crore (1,00,00,000)
                            target = parseInt(cleanText.replace('C+', ''));
                            suffix = 'C+';
                        } else if (cleanText.endsWith('K+')) { // Thousand (1,000)
                            target = parseInt(cleanText.replace('K+', ''));
                            suffix = 'K+';
                        } else if (cleanText.endsWith('+')) {
                            target = parseInt(cleanText.replace('+', ''));
                            suffix = '+';
                        } else {
                            target = parseInt(cleanText);
                            suffix = '';
                        }

                        // Fallback if parsing failed
                        if (isNaN(target)) target = 0;

                        // Reset to 0 before starting animation
                        el.textContent = '0' + suffix;

                        // Animate
                        let current = 0;
                        // Use 60 steps (approx 1.2 seconds)
                        const increment = target / 60;
                        const timer = setInterval(() => {
                            current += increment;
                            if (current >= target) {
                                current = target;
                                clearInterval(timer);
                            }
                            // Format with commas for easy reading, then add suffix
                            el.textContent = Math.floor(current).toLocaleString() + suffix;
                        }, 20);

                        observer.unobserve(el); // Only animate once
                    }
                });
            }, {
                threshold: 0.3
            });

            statNumbers.forEach(el => observer.observe(el));
        });
    </script>
@endsection