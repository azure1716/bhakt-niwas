@extends('frontend.layouts.master')

@push('page-css')
    <link rel="stylesheet" href="{{ asset('frontend/css/bhakta-niwas.css') }}">
@endpush

@section('content')

    <div class="bhakta-page-wrapper">
        <div class="container">

            <!-- Header -->
            <section class="bhakta-header">
                <span class="small-badge">Pilgrim Accommodation</span>
                <h1>Book Your Stay at Bhakta Niwas for Comfort, Peace and Divine</h1>
                <p class="subtitle">
                    Managed by Shri Gajanan Maharaj Sansthan, our Bhakta Niwas (भक्त निवास) offers comfortable, donation‑based
                    lodging at four sacred destinations in Maharashtra and Madhya Pradesh. Whether you are visiting Shegaon,
                    Pandharpur, Trimbakeshwar, or Omkareshwar, we provide a clean and peaceful home for your pilgrimage.
                </p>
                <div class="header-buttons">
                    <a href="{{ seo_whatsapp_url('Hi%2C%20I%20would%20like%20to%20book%20Bhakta%20Niwas%20accommodation.') }}"
                        target="_blank" class="btn-hero btn-wa">
                        <i class="fab fa-whatsapp"></i> Book via WhatsApp
                    </a>
                    <a href="{{ route('booking') }}" class="btn-hero btn-orange">
                        <i class="fas fa-paper-plane"></i> Submit Request
                    </a>
                    <a href="{{ seo_phone_tel() }}" class="btn-hero btn-orange">
                        <i class="fas fa-phone"></i> Call to Reserve
                    </a>
                </div>
            </section>

            {{-- SEO Content Section 1 --}}
            <section>
                <!--<h2 style="font-family: 'Playfair Display', serif; color: var(--theme-maroon); font-size: 2rem; margin-bottom: 20px;">Book Your Stay at Bhakta Niwas for Comfort, Peace and Divine</h2>-->
                <p style="color: #555; line-height: 1.8; font-size: 1.05rem;">
                    Finding a place to stay can make your spiritual journey really special. Bhakta Niwas is an welcoming place for pilgrims, families and visitors who need a convenient place to stay. We want to give our guests a space where they can relax after a long day of travel, prayers or sightseeing.
                    Bhakta Niwas is a place where you can stay without any hassle. Our place gives guests an experience, with cleanliness, comfort and peace.
                    Whether you are going on a pilgrimage spending time with family or visiting spiritual places Bhakta Niwas is a good choice. You can book your stay in advance. Have a stress-free visit with a warm and comfortable place to come back to.
                </p>
            </section>

            <!-- Locations Grid -->
            <section style="margin-top: 60px;">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold"
                        style="font-family: 'Playfair Display', serif; color: var(--theme-maroon);">Our Accommodation Centres</h2>
                    <p class="text-secondary">Select your pilgrimage destination – each location offers dedicated Bhakta Niwas facilities.</p>
                </div>

                <div class="row g-4">
                    <!-- Card 1: Shegaon Bhakt Niwas -->
                    <div class="col-lg-6">
                        <div class="loc-card">
                            <h4 class="loc-title">Shri Gajanan Maharaj Sansthan – Main Bhakt Niwas</h4>
                            <div class="loc-subtitle">Shegaon, Maharashtra</div>
                            <p class="loc-desc">The primary accommodation hub near the samadhi shrine. Spread across multiple buildings, it offers a variety of room types to suit different family needs.</p>
                            <div class="loc-room-types">
                                <strong>ROOM OPTIONS</strong><br>
                                Dormitory Hall – sleeps 50 (Non‑AC)<br>
                                Double‑Bed Room – sleeps 3 (Non‑AC)<br>
                                Deluxe AC Room – sleeps 3 (Air‑conditioned)
                            </div>
                            <div class="loc-total-capacity">Total capacity: 56 pilgrims</div>
                            <div class="loc-amenities">
                                <span class="loc-amenity-tag">Morning Hot Water</span>
                                <span class="loc-amenity-tag">Mahaprasad Dining</span>
                                <span class="loc-amenity-tag">Free Temple Shuttle</span>
                                <span class="loc-amenity-tag">Secure Parking</span>
                            </div>
                            <a href="{{ route('booking') }}" class="loc-book-link">Check availability & book</a>
                        </div>
                    </div>

                    <!-- Card 2: Anand Vihar -->
                    <div class="col-lg-6">
                        <div class="loc-card">
                            <h4 class="loc-title">Shri Gajanan Maharaj Sansthan – Anand Vihar</h4>
                            <div class="loc-subtitle">Shegaon, Maharashtra</div>
                            <p class="loc-desc">A premium lodging complex situated next to the scenic Anand Sagar spiritual park – ideal for families seeking extra comfort.</p>
                            <div class="loc-room-types">
                                <strong>ROOM OPTIONS</strong><br>
                                AC Room – sleeps 3 (Air‑conditioned)<br>
                                Suite – sleeps 4 (Air‑conditioned)
                            </div>
                            <div class="loc-total-capacity">Total capacity: 7 pilgrims</div>
                            <div class="loc-amenities">
                                <span class="loc-amenity-tag">Air‑conditioning</span>
                                <span class="loc-amenity-tag">Lush Garden</span>
                                <span class="loc-amenity-tag">In‑house Canteen</span>
                                <span class="loc-amenity-tag">Parking</span>
                            </div>
                            <a href="{{ route('booking') }}" class="loc-book-link">Check availability & book</a>
                        </div>
                    </div>

                    <!-- Card 3: Visawa -->
                    <div class="col-lg-6">
                        <div class="loc-card">
                            <h4 class="loc-title">Shri Gajanan Maharaj Sansthan – Visawa</h4>
                            <div class="loc-subtitle">Shegaon, Maharashtra</div>
                            <p class="loc-desc">A convenient option for train travellers – located close to the railway station for quick access.</p>
                            <div class="loc-room-types">
                                <strong>ROOM OPTIONS</strong><br>
                                Standard Room – sleeps 3 (Non‑AC)
                            </div>
                            <div class="loc-total-capacity">Total capacity: 3 pilgrims</div>
                            <div class="loc-amenities">
                                <span class="loc-amenity-tag">Parking</span>
                                <span class="loc-amenity-tag">Canteen</span>
                            </div>
                            <a href="{{ route('booking') }}" class="loc-book-link">Check availability & book</a>
                        </div>
                    </div>

                    <!-- Card 4: Pandharpur -->
                    <div class="col-lg-6">
                        <div class="loc-card">
                            <h4 class="loc-title">Shri Gajanan Maharaj Sansthan – Pandharpur</h4>
                            <div class="loc-subtitle">Pandharpur, Maharashtra</div>
                            <p class="loc-desc">A large complex that caters to the thousands of warkaris and devotees visiting the revered Vitthal temple.</p>
                            <div class="loc-room-types">
                                <strong>ROOM OPTIONS</strong><br>
                                Standard Room – sleeps 4 (Non‑AC)<br>
                                Hall – sleeps 20 (Non‑AC)
                            </div>
                            <div class="loc-total-capacity">Total capacity: 24 pilgrims</div>
                            <div class="loc-amenities">
                                <span class="loc-amenity-tag">Community Kitchen</span>
                                <span class="loc-amenity-tag">Hot Water</span>
                            </div>
                            <a href="{{ route('booking') }}" class="loc-book-link">Check availability & book</a>
                        </div>
                    </div>

                    <!-- Card 5: Trimbakeshwar -->
                    <div class="col-lg-6">
                        <div class="loc-card">
                            <h4 class="loc-title">Shri Gajanan Maharaj Sansthan – Trimbakeshwar</h4>
                            <div class="loc-subtitle">Trimbakeshwar, Maharashtra</div>
                            <p class="loc-desc">Comfortable lodging for pilgrims visiting the sacred Jyotirlinga at Trimbakeshwar.</p>
                            <div class="loc-room-types">
                                <strong>ROOM OPTIONS</strong><br>
                                Standard Room – sleeps 3 (Non‑AC)
                            </div>
                            <div class="loc-total-capacity">Total capacity: 3 pilgrims</div>
                            <div class="loc-amenities">
                                <span class="loc-amenity-tag">Parking</span>
                                <span class="loc-amenity-tag">Community Kitchen</span>
                                <span class="loc-amenity-tag">Hot Water</span>
                            </div>
                            <a href="{{ route('booking') }}" class="loc-book-link">Check availability & book</a>
                        </div>
                    </div>

                    <!-- Card 6: Omkareshwar -->
                    <div class="col-lg-6">
                        <div class="loc-card">
                            <h4 class="loc-title">Shri Gajanan Maharaj Sansthan – Omkareshwar</h4>
                            <div class="loc-subtitle">Omkareshwar, Madhya Pradesh</div>
                            <p class="loc-desc">A peaceful stay option for those visiting the island‑shaped Jyotirlinga of Omkareshwar.</p>
                            <div class="loc-room-types">
                                <strong>ROOM OPTIONS</strong><br>
                                Standard Room – sleeps 3 (Non‑AC)
                            </div>
                            <div class="loc-total-capacity">Total capacity: 3 pilgrims</div>
                            <div class="loc-amenities">
                                <span class="loc-amenity-tag">Parking</span>
                                <span class="loc-amenity-tag">Community Kitchen</span>
                                <span class="loc-amenity-tag">Hot Water</span>
                            </div>
                            <a href="{{ route('booking') }}" class="loc-book-link">Check availability & book</a>
                        </div>
                    </div>
                </div>
            </section>

            {{-- SEO Content Section 2 --}}
            <section style="margin-top: 60px;">
                <h2 style="font-family: 'Playfair Display', serif; color: var(--theme-maroon); font-size: 2rem; margin-bottom: 20px;">Reserve Your Stay at Bhakta Niwas for a Spiritual Experience</h2>
                <p style="color: #555; line-height: 1.8; font-size: 1.05rem;">
                    A spiritual journey is more enjoyable when you have a peaceful place to rest. Bhakta Niwas gives guests an environment where they can take a break from their busy travel schedule and spend quality time with family or loved ones.
                    The peaceful setting at Bhakta Niwas makes it perfect for pilgrims and visitors who want to stay close to spiritual destinations. After visiting temples and other nearby places guests can come back to a space and get ready for the next day.
                    We want to make your stay simple and comfortable. From the time you arrive at Bhakta Niwas to the time you leave we focus on creating an experience. Booking your stay at Bhakta Niwas ahead of time can also help you plan your trip with confidence and convenience.
                </p>
            </section>

            <!-- How to Book -->
            <section class="how-to-book-wrapper" style="margin-top: 60px;">
                <h2>Simple Steps to Secure Your Stay</h2>
                <div class="row g-4">
                    <div class="col-md-4 step-item">
                        <div class="step-number">1</div>
                        <h5>Choose Your Destination & Dates</h5>
                        <p>Pick the Bhakta Niwas that matches your pilgrimage – Shegaon (Main, Anand Vihar, or Visawa), Pandharpur, Trimbakeshwar, or Omkareshwar. Note your check‑in and check‑out dates.</p>
                    </div>
                    <div class="col-md-4 step-item">
                        <div class="step-number">2</div>
                        <h5>Reach Out via WhatsApp or Phone</h5>
                        <p>Contact the Sansthan office at <strong>+91{{ seo_phone() }}</strong> through WhatsApp or a direct call. Provide your location preference, dates, and the number of guests.</p>
                    </div>
                    <div class="col-md-4 step-item">
                        <div class="step-number">3</div>
                        <h5>Get Your Confirmation</h5>
                        <p>Once the office verifies availability, your booking is confirmed. At check‑in, present a valid government‑issued ID (Aadhar, Voter ID, or Passport) for every guest.</p>
                    </div>
                </div>
                <a href="{{ route('booking') }}" class="btn-open-form">Start Your Booking Request</a>
            </section>

            {{-- SEO Content Section 3 --}}
            <section style="margin-top: 60px;">
                <h2 style="font-family: 'Playfair Display', serif; color: var(--theme-maroon); font-size: 2rem; margin-bottom: 20px;">Your Peaceful Stay Awaits at Bhakta Niwas. Book Now</h2>
                <p style="color: #555; line-height: 1.8; font-size: 1.05rem;">
                    Planning a trip is easier when you book your stay already. Bhakta Niwas offers a stay for visitors who want comfort and a convenient location. It is an option for individuals, families and pilgrims travelling for spiritual or personal reasons.
                    A comfortable room at Bhakta Niwas gives you the chance to relax, refresh and get ready for your day of travel. Of worrying about finding a place to stay after you arrive you can book your stay in advance.
                    Bhakta Niwas focuses on creating an pleasant experience for every guest. If you are planning a pilgrimage or family visit consider booking your stay. A planned stay can make your journey smoother and more enjoyable.
                </p>
            </section>

            <!-- Booking Rules -->
            <section class="rules-wrapper" style="margin-top: 60px;">
                <h2>Important Guidelines for Your Stay</h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="rule-card">
                            <h5>Family‑Only Policy</h5>
                            <p>Accommodation is reserved exclusively for families. Married couples must provide valid marriage proof. Unmarried groups are not permitted in private rooms.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="rule-card">
                            <h5>Minimum 3 Members</h5>
                            <p>Private rooms require at least three family members. Single pilgrims and smaller groups may be accommodated in dormitory‑style halls.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="rule-card">
                            <h5>Mandatory ID Proof</h5>
                            <p>A government‑issued photo ID is required for all guests at the time of check‑in. This helps us maintain a secure environment for everyone.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="rule-card">
                            <h5>24‑Hour Stay Cycle</h5>
                            <p>Rooms are assigned for a 24‑hour period starting from check‑in. Extensions are subject to availability and must be requested in advance.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="rule-card">
                            <h5>Donation‑Based Service</h5>
                            <p>There is no fixed tariff. We operate on a voluntary donation model – contribute what you feel is appropriate for your stay.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="rule-card">
                            <h5>Early Booking Recommended</h5>
                            <p>During major festivals (Ashadhi Ekadashi, Kartik Ekadashi, Gajanan Vijay Utsav), rooms are in high demand. Book well in advance to secure your spot.</p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- SEO Content Section 4 --}}
            <section style="margin-top: 60px;">
                <h2 style="font-family: 'Playfair Display', serif; color: var(--theme-maroon); font-size: 2rem; margin-bottom: 20px;">Experience Comfort and Serenity at Bhakta Niwas. Reserve Your Room</h2>
                <p style="color: #555; line-height: 1.8; font-size: 1.05rem;">
                    Comfort is really important during any journey. At Bhakta Niwas guests can enjoy an environment that is designed to make their stay comfortable and relaxing. After a journey or a busy day of visiting nearby attractions having a quiet place to rest can make a big difference.
                    Our lodging at Bhakta Niwas is suitable for guests who prefer an peaceful stay. Families can spend time together while pilgrims can relax after their activities. The calm atmosphere at Bhakta Niwas also helps you enjoy your visit without any distractions.
                    When you reserve your room at Bhakta Niwas you can plan your trip with ease. Choose a place to stay and give yourself more time to focus on your spiritual journey, family moments and local experiences.
                </p>
            </section>

            <!-- FAQ Section -->
            <section class="faq-wrapper-custom" style="margin-top: 60px;">
                <h2>Frequently Asked Questions – Bhakta Niwas</h2>

                <details class="faq-item-custom">
                    <summary>What is the procedure for booking accommodation at the Sansthan?</summary>
                    <div class="faq-answer-custom">Simply fill in the online booking request form on our website, then contact our helpline via WhatsApp or phone to confirm. Our office will check availability and finalise your reservation based on the rules.</div>
                </details>

                <details class="faq-item-custom">
                    <summary>Can unmarried couples or friend groups stay here?</summary>
                    <div class="faq-answer-custom">No, our accommodation is meant strictly for families. Only married couples with valid proof are eligible for private rooms. Groups of friends or unmarried couples may be offered dormitory space, subject to availability and management discretion.</div>
                </details>

                <details class="faq-item-custom">
                    <summary>How much does the accommodation cost?</summary>
                    <div class="faq-answer-custom">There is no fixed charge – we accept donations. Devotees are free to contribute according to their capacity. The Sansthan believes in serving all equally, regardless of financial means.</div>
                </details>

                <details class="faq-item-custom">
                    <summary>What is the maximum duration of stay?</summary>
                    <div class="faq-answer-custom">Rooms are allocated for a 24‑hour cycle. If you wish to extend, please inform the office staff – extensions are granted based on room availability.</div>
                </details>

                <details class="faq-item-custom">
                    <summary>What amenities are included in the rooms?</summary>
                    <div class="faq-answer-custom">Facilities differ by location, but generally include: morning hot water, access to the Mahaprasad dining hall, free shuttle service to the temple, parking, and basic room furnishings. Some locations offer air‑conditioning, suites, and deluxe options – check the individual location pages for specifics.</div>
                </details>

                <details class="faq-item-custom">
                    <summary>Can I book stays at multiple Sansthan locations in one trip?</summary>
                    <div class="faq-answer-custom">Absolutely. You can reserve accommodation at any of our centres – Shegaon, Pandharpur, Trimbakeshwar, or Omkareshwar – as long as availability permits. Just mention your itinerary when you contact the office.</div>
                </details>

                <details class="faq-item-custom">
                    <summary>What are the room categories and suggested donations at the main Shegaon Bhakt Niwas?</summary><div class="faq-answer-custom">Room options at Shegaon Bhakta Niwas include Non-AC Rooms, AC Rooms, and Family Suites. Room rates are nominal donation-based contributions. Please contact our helpline on WhatsApp for current availability and room tariffs.</div>
                </details>

                <details class="faq-item-custom">
                    <summary>What are the suggested donation rates for rooms at Shegaon?</summary><div class="faq-answer-custom">Accommodation operates on a nominal donation model to support temple services and pilgrim facilities. Contact the booking office directly for current suggested tariffs per room category.</div>
                </details>

                <details class="faq-item-custom">
                    <summary>Are air‑conditioned rooms available at Bhakta Niwas Shegaon?</summary><div class="faq-answer-custom">Yes, air-conditioned rooms and suites are available at Shegaon Bhakta Niwas and Anand Vihar. Early booking via WhatsApp is recommended, especially during peak pilgrimage periods.</div>
                </details>

                <details class="faq-item-custom">
                    <summary>Does the donation cover meals as well?</summary>
                    <div class="faq-answer-custom">Yes, all meals – breakfast, lunch, and dinner – are included in the suggested donation. You will enjoy Mahaprasad at the Sansthan canteen. Hot water is also provided at no extra cost.</div>
                </details>

                <details class="faq-item-custom">
                    <summary>What is the WhatsApp number for booking at Shegaon?</summary>
                    <div class="faq-answer-custom">You can reach our booking team on WhatsApp at <strong>+91{{ seo_phone() }}</strong>. Send us your preferred location, check‑in/out dates, and the number of guests – we will reply with confirmation.</div>
                </details>

                <details class="faq-item-custom">
                    <summary>Is online booking possible?</summary>
                    <div class="faq-answer-custom">Yes, you can submit a booking request through our website. After filling in the form, it will generate a pre‑filled WhatsApp message which you can send to our number for final confirmation.</div>
                </details>

                <details class="faq-item-custom">
                    <summary>How do I book for Ashadhi Ekadashi at Pandharpur?</summary>
                    <div class="faq-answer-custom">For Ashadhi Ekadashi, we recommend booking several months in advance. Contact our office at +91{{ seo_phone() }} via WhatsApp or call. Rooms are allocated on a first‑come, first‑served basis, and they fill up quickly due to high demand.</div>
                </details>

                <details class="faq-item-custom">
                    <summary>When are the busiest booking periods at Shegaon?</summary>
                    <div class="faq-answer-custom">Peak seasons include: Gajanan Vijay Utsav / Punyatithi (September 8), Ganesh Chaturthi, Navratri, Diwali, and Makar Sankranti. During these times, we advise booking weeks or even months ahead through WhatsApp or phone.</div>
                </details>

                <details class="faq-item-custom">
                    <summary>What are the darshan timings at the Shegaon temple?</summary><div class="faq-answer-custom">Temple darshan is open daily for devotees. Timings and aarti schedules may vary on festival days. Please check with the booking office or on the Darshan Timings page for confirmed daily schedules.</div>
                </details>

                <details class="faq-item-custom">
                    <summary>Is there any entry fee for darshan?</summary>
                    <div class="faq-answer-custom">No, darshan is absolutely free. There are no tickets or fees. The Sansthan welcomes all devotees irrespective of their background. (Anand Sagar park may have a nominal entry fee – please confirm at the office.)</div>
                </details>

                <details class="faq-item-custom">
                    <summary>Does the Sansthan provide a free bus from Shegaon Railway Station?</summary>
                    <div class="faq-answer-custom">Yes, a complimentary shuttle service operates regularly between Shegaon Railway Station and the main temple complex. You can board the Sansthan bus right outside the station exit – it is the most convenient way to reach the temple.</div>
                </details>

                <details class="faq-item-custom">
                    <summary>Is Mahaprasad served at the temple?</summary>
                    <div class="faq-answer-custom">Yes, the Sansthan runs a Mahaprasad canteen that provides simple, satvik meals to thousands daily. For Bhakta Niwas guests, all meals (breakfast, lunch, dinner) are already included in the accommodation donation.</div>
                </details>

                <details class="faq-item-custom">
                    <summary>How do I book specifically at the Shegaon Bhakt Niwas?</summary>
                    <div class="faq-answer-custom">Use the booking request form on our site, then contact +91{{ seo_phone() }} via WhatsApp or phone. Provide your preferred dates and guest count – the office will confirm availability and complete your reservation.</div>
                </details>

                <details class="faq-item-custom">
                    <summary>What are the check‑in and check‑out timings at Shegaon?</summary>
                    <div class="faq-answer-custom">Rooms are assigned for a 24‑hour period starting from your arrival time. There is no fixed check‑in hour – we accommodate you as soon as a room is ready. Please communicate your expected arrival time to the office when booking.</div>
                </details>
            </section>

            {{-- SEO Content Section 5 --}}
            <section style="margin-top: 60px;">
                <h2 style="font-family: 'Playfair Display', serif; color: var(--theme-maroon); font-size: 2rem; margin-bottom: 20px;">Stay Close to Divinity. Book Your Comfortable Stay at Bhakta Niwas</h2>
                <p style="color: #555; line-height: 1.8; font-size: 1.05rem;">
                    For travellers staying close to spiritual places is a big part of the journey. Bhakta Niwas offers a stay for visitors who want to spend more time exploring temples, places of worship and other nearby attractions.
                    Being able to come to a comfortable housing after a day of travel can make your pilgrimage more relaxing. Of making your journey tiring a peaceful place to stay at Bhakta Niwas allows you to rest properly and get ready for the next day.
                    Bhakta Niwas welcomes guests who are visiting for purposes, including pilgrimages, family trips and local visits. If you are planning your journey, book your stay in advance and enjoy the convenience of having a comfortable place ready when you arrive.
                </p>
            </section>

            {{-- SEO Content Section 6 --}}
            <section style="margin-top: 60px;">
                <h2 style="font-family: 'Playfair Display', serif; color: var(--theme-maroon); font-size: 2rem; margin-bottom: 20px;">Discover Peace, Comfort and Friendliness at Bhakta Niwas. Book Your Stay</h2>
                <p style="color: #555; line-height: 1.8; font-size: 1.05rem;">
                    Good friendliness can make a simple stay feel more welcoming. At Bhakta Niwas we believe that guests should have an pleasant environment during their visit. Our goal is to provide a stay where you can relax and enjoy your time without any stress.
                    The peaceful atmosphere at Bhakta Niwas makes it a practical choice for pilgrims and families. Whether you are travelling alone or with your loved ones a comfortable shelter can help you make the most of your trip.
                    From your arrival to your departure we want your experience to be easy and convenient. If you are planning a journey or visiting the area for another reason book your stay at Bhakta Niwas and enjoy a calm place to rest during your visit.
                </p>
            </section>

            {{-- SEO Content Section 7 --}}
            <section style="margin-top: 60px;">
                <h2 style="font-family: 'Playfair Display', serif; color: var(--theme-maroon); font-size: 2rem; margin-bottom: 20px;">Make Your Pilgrimage Comfortable. Reserve Your Stay at Bhakta Niwas</h2>
                <p style="color: #555; line-height: 1.8; font-size: 1.05rem;">
                    A pilgrimage often involves a lot of travel visiting places and spending long hours outside. Having a place to rest becomes really important during such journeys. Bhakta Niwas provides an residence option for pilgrims who want to make their trip more comfortable.
                    After a day of prayers, temple visits or local sightseeing you can come back to your room at Bhakta Niwas and take some time to relax. A planned stay can also help families and groups manage their travel schedule easily.
                    Bhakta Niwas aims to support a pilgrimage experience with a welcoming environment. If you already have your travel dates planned booking your dwelling in advance can help you avoid last-minute concerns and enjoy your journey with more peace of mind.
                </p>
            </section>

            {{-- SEO Content Section 8 --}}
            <section style="margin-top: 60px;">
                <h2 style="font-family: 'Playfair Display', serif; color: var(--theme-maroon); font-size: 2rem; margin-bottom: 20px;">A Peaceful Stay Awaits You at Bhakta Niwas. Reserve Your Room Today</h2>
                <p style="color: #555; line-height: 1.8; font-size: 1.05rem;">
                    Your quarter should give you a place where you can slow down relax and enjoy your journey. Bhakta Niwas offers a setting for visitors who are looking for a comfortable place to stay during their trip.
                    Whether you are travelling for a pilgrimage visiting family or exploring attractions having a room reserved can make your travel plans easier. You can focus on your activities during the day. Come back to a calm environment when it is time to rest.
                    Planning ahead is especially helpful during travel periods. Reserve your room at Bhakta Niwas today. Make lodgement one less thing to worry about. Enjoy your journey with a comfortable and peaceful stay.
                </p>
            </section>

            {{-- SEO Content Section 9 --}}
            <section style="margin-top: 60px;">
                <h2 style="font-family: 'Playfair Display', serif; color: var(--theme-maroon); font-size: 2rem; margin-bottom: 20px;">Book Bhakta Niwas Today. Your Comfortable Stay in a Setting</h2>
                <p style="color: #555; line-height: 1.8; font-size: 1.05rem;">
                    A well-planned stay can make your entire trip more enjoyable. Bhakta Niwas offers an peaceful boarding option for guests who want a convenient place to stay during their visit. Our focus is to provide an environment where guests can relax and feel welcome.
                    Whether your trip is for reasons family time or local sightseeing Bhakta Niwas can be a practical choice for your housing needs. A peaceful room gives you the chance to rest properly and enjoy the day with fresh energy.
                    If you are planning your visit do not leave your shelter to the minute. Reserve your stay at Bhakta Niwas. Plan your journey, with confidence. Choose comfort, peace and convenience for an enjoyable travel experience.
                </p>
            </section>

            <!-- Bottom Links Strip -->
            <div class="bottom-links-strip" style="margin-top: 60px;">
                <a href="{{ route('locations') }}">All Pilgrim Centres</a>
                <a href="{{ route('booking') }}">Booking Request Form</a>
                <a href="{{ route('darshan-timings') }}">Darshan Schedules</a>
                <a href="{{ route('how-to-reach') }}">Travel Information</a>
                <a href="{{ route('contact') }}">Contact & Maps</a>
            </div>

        </div>
    </div>
@endsection