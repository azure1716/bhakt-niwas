@extends('frontend.layouts.master')

@section('meta_title', $meta_title)
@section('meta_description', $meta_description)
@section('meta_keywords', $meta_keywords)

@section('content')
    <style>
        .reach-page-wrapper {
            padding: 60px 0 80px;
            padding-top: 160px;
            background: #fff0f0;
        }

        /* --- Header Section --- */
        .reach-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .reach-header .small-badge {
            display: inline-block;
            padding: 4px 18px;
            border: 1px solid var(--theme-orange);
            color: var(--theme-orange);
            border-radius: 4px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .reach-header h1 {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .reach-header p.subtitle {
            max-width: 800px;
            margin: 0 auto;
            color: #666;
            font-size: 1.05rem;
            line-height: 1.6;
        }

        .reach-sub-title {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            font-size: 1.8rem;
            margin: 50px 0 20px 0;
        }

        /* --- Quick City Cards --- */
        .reach-city-card {
            background: #fff;
            border: 1px solid #f0f0f0;
            border-radius: 4px;
            padding: 25px 15px;
            text-align: center;
            height: 100%;
            transition: 0.3s;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.02);
        }

        .reach-city-card:hover {
            transform: translateY(-5px);
            border-color: var(--theme-light-orange);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
        }

        .reach-city-card h6 {
            font-weight: 600;
            color: #222;
            margin-bottom: 5px;
        }

        .reach-city-card p {
            font-size: 14px;
            color: #666;
            margin: 0;
        }

        /* --- Train Table --- */
        .reach-table-wrapper {
            border-radius: 4px;
            overflow: hidden;
            border: 1px solid #f0f0f0;
            background: #fff;
        }

        .reach-table-wrapper table {
            width: 100%;
            border-collapse: collapse;
        }

        .reach-table-wrapper thead {
            background: var(--theme-maroon);
            color: #fff;
        }

        .reach-table-wrapper thead th {
            padding: 15px 20px;
            text-align: left;
            font-weight: 600;
            font-size: 15px;
        }

        .reach-table-wrapper tbody td {
            padding: 14px 20px;
            border-bottom: 1px solid #f0f0f0;
            font-size: 14px;
            color: #444;
        }

        .reach-table-wrapper tbody tr:last-child td {
            border-bottom: none;
        }

        .reach-table-wrapper tbody tr:nth-child(even) {
            background: #fcfcfc;
        }

        /* --- Free Bus Alert Box --- */
        .reach-alert-box {
            background: #f0fdf4;
            border: 1px solid #bbf7d0;
            border-radius: 4px;
            padding: 20px;
            color: #166534;
            margin-top: 20px;
        }

        .reach-alert-box strong {
            display: block;
            margin-bottom: 5px;
        }

        .reach-alert-box p {
            margin: 0;
            font-size: 14px;
            color: #166534;
            line-height: 1.5;
        }

        /* --- Road / Transport Cards --- */
        .reach-transport-card {
            background: #fff;
            border: 1px solid #f0f0f0;
            border-radius: 4px;
            padding: 25px;
            height: 100%;
            transition: 0.3s;
            border-top: 3px solid var(--theme-orange);
        }

        .reach-transport-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
        }

        .reach-transport-card h5 {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            font-size: 1.1rem;
            margin-bottom: 5px;
        }

        .reach-transport-card p {
            font-size: 14px;
            color: #666;
            line-height: 1.5;
            margin: 0;
        }

        .reach-transport-card .route-note {
            display: block;
            margin-top: 10px;
            color: var(--theme-orange);
            font-size: 13px;
            font-weight: 500;
        }

        /* --- Address Section --- */
        .reach-address-card {
            background: #fff;
            border: 1px solid #f0f0f0;
            border-radius: 4px;
            padding: 30px;
            height: 100%;
            transition: 0.3s;
        }

        .reach-address-card:hover {
            border-color: var(--theme-light-orange);
        }

        .reach-address-card h5 {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            margin-bottom: 10px;
        }

        .reach-address-card p {
            font-size: 15px;
            color: #444;
            line-height: 1.6;
        }

        .reach-address-card .booking-helpline {
            margin-top: 15px;
            color: var(--theme-orange);
            font-weight: 600;
            font-size: 15px;
        }

        .reach-address-card .darshan-cta-btn {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
            margin: 5px 5px 5px 0;
            font-size: 14px;
        }

        .btn-primary-cta {
            background: var(--theme-maroon);
            color: #fff;
        }

        .btn-primary-cta:hover {
            background: #7a1510;
            transform: translateY(-2px);
        }

        .btn-wa-cta {
            background: var(--theme-green);
            color: #fff;
        }

        .btn-wa-cta:hover {
            background: #128c7e;
            transform: translateY(-2px);
        }

        /* --- Map Links --- */
        .reach-map-links {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 30px;
            justify-content: center;
        }

        .reach-map-links a {
            display: inline-block;
            padding: 8px 16px;
            border: 1px solid #f0f0f0;
            border-radius: 4px;
            background: #fff;
            text-decoration: none;
            color: var(--theme-maroon);
            font-size: 14px;
            font-weight: 500;
            transition: 0.3s;
        }

        .reach-map-links a:hover {
            background: var(--theme-maroon);
            color: #fff;
            border-color: var(--theme-maroon);
            transform: translateY(-2px);
        }

        /* --- Custom FAQ Accordion --- */
        .reach-faq-wrapper {
            /*max-width: 800px;*/
            margin: 0 auto 50px auto;
        }

        details.reach-faq-item {
            background: #fff;
            border: 1px solid #f0f0f0;
            border-radius: 4px;
            margin-bottom: 12px;
            transition: 0.3s;
        }

        details.reach-faq-item summary {
            padding: 18px 20px;
            font-weight: 600;
            color: var(--theme-maroon);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            list-style: none;
            font-size: 15px;
        }

        details.reach-faq-item summary::-webkit-details-marker {
            display: none;
        }

        details.reach-faq-item summary::after {
            content: '+';
            color: var(--theme-orange);
            font-size: 22px;
            font-weight: 300;
            transition: 0.3s;
        }

        details.reach-faq-item[open] {
            border-color: var(--theme-orange);
            background: #fcfcfc;
        }

        details.reach-faq-item[open] summary::after {
            transform: rotate(45deg);
        }

        details.reach-faq-item .faq-answer {
            padding: 0 20px 20px 20px;
            font-size: 14px;
            color: #555;
            line-height: 1.6;
        }

        /* --- Bottom CTA Box --- */
        .reach-cta-box {
            background: #faf7f2;
            border: 1px solid #f0f0f0;
            border-radius: 4px;
            padding: 40px;
            text-align: center;
            margin-top: 50px;
        }

        .reach-cta-box h3 {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            margin-bottom: 10px;
        }

        .reach-cta-box p {
            color: #666;
            margin-bottom: 25px;
        }

        .reach-cta-box .darshan-cta-btn {
            display: inline-block;
            padding: 12px 25px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
            margin: 0 8px;
        }

        .reach-cta-box .btn-primary-cta {
            background: var(--theme-maroon);
            color: #fff;
        }

        .reach-cta-box .btn-primary-cta:hover {
            background: #7a1510;
            transform: translateY(-2px);
        }

        .reach-cta-box .btn-outline-cta {
            background: transparent;
            border: 2px solid var(--theme-maroon);
            color: var(--theme-maroon);
        }

        .reach-cta-box .btn-outline-cta:hover {
            background: var(--theme-maroon);
            color: #fff;
            transform: translateY(-2px);
        }

        /* --- Bottom Links Strip --- */
        .reach-bottom-links {
            border-top: 1px solid #f0f0f0;
            padding-top: 30px;
            margin-top: 30px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .reach-bottom-links a {
            color: var(--theme-maroon);
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            transition: 0.3s;
        }

        .reach-bottom-links a:hover {
            color: var(--theme-orange);
            text-decoration: underline;
        }

        /* --- Responsive --- */
        @media (max-width: 768px) {
            .reach-header h1 {
                font-size: 2.2rem;
            }

            .reach-cta-box .darshan-cta-btn {
                display: block;
                margin: 8px auto;
                width: 80%;
            }

            .reach-address-card .darshan-cta-btn {
                width: 100%;
                margin: 5px 0;
                text-align: center;
            }
        }
    </style>

    <div class="reach-page-wrapper">
        <div class="container">

            <!-- Header -->
            <section class="reach-header">
                <span class="small-badge">Travel Guide</span>
                <h1 style=" text-align:start;">How to Get the Shegaon | Complete Travel Guide</h1>
                <!--<p class="subtitle">-->
                <!--    A complete travel companion for visiting Shri Gajanan Maharaj Sansthan – by rail, road, or air. -->
                <!--    Enjoy a free shuttle from Shegaon Railway Station directly to the temple.-->
                <!--</p>-->
                <p class="mt-3" style="color: #666; text-align:start;">
                    Shegaon is a popular place for pilgrims in Maharashtra and it is famous for the Gajanan Maharaj Temple. You can get to Shegaon by train, bus, car or flight. Then take a road or train. The best way to get there depends on where you're coming from how long it takes and what you like.
                    The train is a way to get to Shegaon because it has a train station that connects to many big cities. Buses and cars are also good for people who are coming from towns and cities.
                    If you are coming from far away you can take a flight to a nearby airport and then take a road or train to get to Shegaon. Planning your trip ahead of time can make your visit to Shegaon and not too stressful.
                </p>
            </section>

            <!-- SEO: Best Ways to Get to Shegaon -->
            <section>
                <h2 class="reach-sub-title">Best Ways to Get to Shegaon for a Comfortable Pilgrimage</h2>
                <p style="color: #666;">
                    Choosing the way to get to Shegaon can make your pilgrimage easier. Train travel is a choice because it is practical and comfortable for people who are coming from different parts of Maharashtra and other states.
                    Taking the bus is another option for people who like road trips. State buses and private buses can connect Shegaon to cities and towns. People who like to have a schedule can also choose to drive a car or take a taxi.
                    If you are coming from a faraway city taking a flight to a nearby airport can save you time. Then you can take a road. Train to get to Shegaon. Think about your budget, travel time and how many people are with you before you choose the way to travel for your pilgrimage.
                </p>
            </section>

            <!-- Quick City Links -->
            <section class="mb-5">
                <h2 class="reach-sub-title">Reach Shegaon from Major Cities</h2>
                <p class="text-secondary mb-3" style="font-size: 15px;">
                    Shegaon is connected to big cities in Maharashtra so it is easy for pilgrims and tourists to plan their trip. People who are coming from cities like Mumbai, Pune, Nagpur, Nashik and nearby places can choose between taking the train or driving.
                    Taking the train is often better for trips because you can relax and not have to drive. Driving is good when you are with your family or when you want to be more flexible.
                    Before you start your trip check the train and bus schedules for the day you are traveling. Booking your tickets early can also help on weekends, holidays and special festival days when a lot of people are traveling to Shegaon.
                </p>
                <div class="row g-3">
                    <div class="col-6 col-md-3">
                        <div class="reach-city-card">
                            <h6>From Nagpur</h6>
                            <p>~150 km / 2.5 hr train</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="reach-city-card">
                            <h6>From Akola</h6>
                            <p>~80 km / 1 hr train</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="reach-city-card">
                            <h6>From Mumbai</h6>
                            <p>~600 km / 10 hr train</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="reach-city-card">
                            <h6>From Pune</h6>
                            <p>~500 km / 11 hr train</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SEO: Shegaon Travel Guide: Train, Bus, Road and Flight Options -->
            <section>
                <h2 class="reach-sub-title">Shegaon Travel Guide | Train, Bus, Road and Flight Options</h2>
                <p style="color:#666;">
                    Making a simple travel plan can help you choose the way to get to Shegaon. You can get to Shegaon by train, bus, car or by taking a flight. Then a road. Where you are starting from decides which option is best.
                    For pilgrims the train is a good choice. People who are coming from places may find that buses and cars are more practical. If you are coming from a faraway city think about taking a flight to a nearby airport and then taking a road.
                    It is always helpful to check the schedules, ticket availability and road conditions before you travel. Leave some time in your plan so that unexpected delays do not mess up your pilgrimage schedule.
                </p>
            </section>

            <!-- By Train Section -->
            <section>
                <h2 class="reach-sub-title">By Train – The Easiest Way</h2>
                <p class="text-secondary mb-3" style="font-size: 15px;">
                    Shegaon Railway Station (code: SGO) lies on the main Howrah–Mumbai Central line, making it well‑connected 
                    to many major Indian cities. Below are approximate travel times from key origins.
                </p>

                <div class="reach-table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>From</th>
                                <th>Distance</th>
                                <th>Approx. Train Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Nagpur</strong></td>
                                <td>~150 km</td>
                                <td>~2.5 hours</td>
                            </tr>
                            <tr>
                                <td><strong>Akola</strong></td>
                                <td>~80 km</td>
                                <td>~1 hour</td>
                            </tr>
                            <tr>
                                <td><strong>Amravati</strong></td>
                                <td>~110 km</td>
                                <td>~1.5 hours</td>
                            </tr>
                            <tr>
                                <td><strong>Jalgaon</strong></td>
                                <td>~120 km</td>
                                <td>~1.5 hours</td>
                            </tr>
                            <tr>
                                <td><strong>Mumbai (CSMT)</strong></td>
                                <td>~580 km</td>
                                <td>~10-11 hours</td>
                            </tr>
                            <tr>
                                <td><strong>Pune</strong></td>
                                <td>~520 km</td>
                                <td>~11-12 hours</td>
                            </tr>
                            <tr>
                                <td><strong>Aurangabad</strong></td>
                                <td>~210 km</td>
                                <td>~3 hours</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p class="mt-3" style="color: #555; font-size: 1.05rem;">
                    Taking the train to Shegaon is an option for many visitors. The Shegaon train station is on a train route, which makes taking the train a practical choice for pilgrims who are coming from different areas.
                    Train trips are especially good for families and older travelers who may prefer a trip instead of a long drive. You can book your train ticket for the day you are traveling and choose your seat.
                    After you get to the Shegaon train station you can take transportation to get to your hotel or nearby places. Before you travel check the train schedule and availability because the times can change. A little planning can help you have an more comfortable trip to Shegaon.
                </p>

                <!-- Free Bus Service Green Box -->
                <div class="reach-alert-box">
                    <strong><i class="fas fa-bus me-2"></i> Complimentary Shuttle from the Station</strong>
                    <span>The Sansthan provides a <b>free bus</b> between Shegaon Railway Station and the temple premises. 
                    Just look for the Sansthan bus at the station’s main exit. It runs frequently throughout the day.</span>
                </div>
            </section>

            <!-- By Road Section -->
            <section>
                <h2 class="reach-sub-title">By Road – Bus or Self‑Drive</h2>
                <p class="text-secondary mb-3" style="font-size: 15px;">
                    Shegaon is well served by state highways, with <strong>NH‑53</strong> (Nagpur–Aurangabad) passing through. 
                    Maharashtra State Transport (MSRTC) and private buses operate regular services from Nagpur, Akola, Amravati, 
                    Aurangabad, Mumbai, and Pune.
                </p>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="reach-transport-card">
                            <h5>Nagpur to Shegaon</h5>
                            <p>Via NH‑53, approximately 150 km</p>
                            <span class="route-note">Frequent bus services</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="reach-transport-card">
                            <h5>Akola to Shegaon</h5>
                            <p>Via State Highway, about 80 km</p>
                            <span class="route-note">Quick and easy journey</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="reach-transport-card">
                            <h5>Amravati to Shegaon</h5>
                            <p>Via NH‑53, roughly 110 km</p>
                            <span class="route-note">Direct bus connections</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="reach-transport-card">
                            <h5>Aurangabad to Shegaon</h5>
                            <p>Via NH‑752 and local roads</p>
                            <span class="route-note">Buses via Jalna, Buldhana</span>
                        </div>
                    </div>
                </div>

                <p class="mt-3" style="color: #555; font-size: 1.05rem;">
                    Driving to Shegaon is a flexible way to get there especially if you are coming from a nearby city or town. You can choose to drive your car take a taxi or take a bus depending on your budget and how many people are with you.
                    Driving gives you the freedom to plan stops and visit places along the way. This can be helpful for families who are traveling with kids or groups who want to make their schedule.
                    Before you start driving check the route and current road conditions. If you are driving yourself make sure your car is ready for the trip and do not rush. Driving at a pace can make your trip more enjoyable and help you get to Shegaon feeling relaxed.
                </p>
            </section>

            <!-- By Air Section -->
            <section>
                <h2 class="reach-sub-title">By Air – via Nagpur</h2>
                <div class="reach-address-card" style="border-color: #e0e0e0;">
                    <p style="font-size: 15px;">
                        The nearest major airport is <strong>Dr. Babasaheb Ambedkar International Airport, Nagpur (NAG)</strong>, 
                        situated about 165 km from Shegaon.
                    </p>
                    <ol style="padding-left: 20px; color: #444; line-height: 1.8; font-size: 15px;">
                        <li>Fly into Nagpur – well connected from Mumbai, Delhi, Hyderabad, Bengaluru, and other cities.</li>
                        <li>From the airport, you can hire a prepaid taxi or cab to Shegaon (~165 km, 2.5–3 hours).</li>
                        <li>Alternatively, take a cab to Nagpur Railway Station and catch a train to Shegaon – often faster.</li>
                    </ol>
                    <p class="mt-2" style="color: #555;">
                        If you are coming from a faraway city, flying to Nagpur and then taking a road or train to Shegaon can save a lot of time. Plan the final leg in advance for a smooth journey.
                    </p>
                </div>
            </section>

            <!-- SEO: Shegaon Travel Guide for First-Time Visitors -->
            <section>
                <h2 class="reach-sub-title">Shegaon Travel Guide for First-Time Visitors and Pilgrims</h2>
                <p>
                    If you are visiting Shegaon for the time planning your trip ahead of time can make it easier. Start by deciding how you want to travel and how time you need to get to your destination.
                    Taking the train is a choice for many visitors and buses and driving provide other options. People who are coming from faraway cities can also think about taking a flight and then a road or train.
                    It is an idea to book your hotel before you get to Shegaon especially during busy pilgrimage times. Make sure you have all your travel documents, tickets and important things ready. With a planning first-time visitors can enjoy their pilgrimage without too much travel stress.
                </p>
            </section>

            <!-- Local Transport in Shegaon -->
            <section>
                <h2 class="reach-sub-title">Getting Around in Shegaon</h2>
                <p class="text-secondary mb-3" style="font-size: 15px;">
                    Once you arrive, Shegaon is easy to navigate. Most places of interest are close to each other.
                </p>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="reach-transport-card" style="border-top-color: var(--theme-maroon);">
                            <h5>Sansthan’s Free Bus</h5>
                            <p>Regular service between the railway station and the temple complex.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="reach-transport-card" style="border-top-color: var(--theme-maroon);">
                            <h5>Auto‑Rickshaw / Tempo</h5>
                            <p>Easily available at the station and bus stand for short trips to Bhakta Niwas or other spots.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="reach-transport-card" style="border-top-color: var(--theme-maroon);">
                            <h5>Walking</h5>
                            <p>The main temple and the Bhakta Niwas complex are located close to each other – many places are walkable.</p>
                        </div>
                    </div>
                </div>
                <p class="mt-3" style="color: #555;">
                    Local transport options are convenient and affordable. If you're with family or senior citizens, consider using the free bus or auto-rickshaw for comfort.
                </p>
            </section>

            <!-- SEO: How to Get to Shegaon Easily from Mumbai, Pune and Nagpur -->
            <section>
                <h2 class="reach-sub-title">How to Get to Shegaon Easily from Mumbai, Pune and Nagpur</h2>
                <p>
                    Shegaon can be reached from cities in Maharashtra like Mumbai, Pune and Nagpur by different travel options. Taking the train is usually a choice for long trips and driving gives you more flexibility for families and groups.
                    People who are coming from Mumbai and Pune can plan their trip based on the train or bus schedule. Visitors from Nagpur and nearby areas can also choose between taking the train or driving depending on how they want to travel.
                    Since the schedules can change, always check the availability before you book your trip. If you are traveling on weekends, holidays or special occasions make your plans early. Planning your route can help you get to Shegaon comfortably and focus on your pilgrimage.
                </p>
            </section>

            <!-- Address & Google Maps -->
            <section class="mt-4">
                <h2 class="reach-sub-title">Address & Google Maps</h2>
                <div class="reach-address-card">
                    <h5>Shri Gajanan Maharaj Sansthan</h5>
                    <p>
                        Near Shri Gajanan Maharaj Temple, Shegaon,<br>
                        Dist. Buldhana, Maharashtra - 444203
                    </p>
                    <div class="booking-helpline">
                        Booking Helpline: <a href="tel:+918603790855"
                            style="text-decoration: none; color: var(--theme-maroon);">+918603790855</a>
                    </div>
                    <div class="mt-3">
                        <a href="https://wa.me/918603790855?text=Hi%2C%20I%20need%20help%20with%20directions%20and%20booking."
                            target="_blank" class="darshan-cta-btn btn-wa-cta"><i class="fab fa-whatsapp me-2"></i> WhatsApp
                            Booking</a>
                        <a href="{{ route('booking') }}" class="darshan-cta-btn btn-primary-cta"><i
                                class="fas fa-paper-plane me-2"></i> Send Booking Request</a>
                        <a href="tel:+918603790855" class="darshan-cta-btn btn-primary-cta"
                            style="background: var(--theme-orange);"><i class="fas fa-phone me-2"></i> Call to Book</a>
                    </div>
                </div>
            </section>

            <!-- Map Links -->
            <section class="mt-5">
                <div class="reach-map-links">
                    <a href="https://maps.app.goo.gl/ASEU1YuYtV6SzZGPA" target="_blank"><i class="fas fa-map me-1"></i>
                        Shegaon Map</a>
                    <a href="https://maps.app.goo.gl/PgCWUrDDrYCD3Nsx5" target="_blank"><i class="fas fa-map me-1"></i>
                        Shegaon Map</a>
                    <a href="https://maps.app.goo.gl/NCBe2x9B71u1LZon6" target="_blank"><i class="fas fa-map me-1"></i>
                        Shegaon Map</a>
                    <a href="https://maps.app.goo.gl/hQJUBzXEGDstHxdz5" target="_blank"><i class="fas fa-map me-1"></i>
                        Pandharpur Map</a>
                    <a href="https://maps.app.goo.gl/9FUK4J2YmL1m4Mbd8" target="_blank"><i class="fas fa-map me-1"></i>
                        Trimbakeshwar Map</a>
                    <a href="https://maps.app.goo.gl/PGRk5QXAdRk537Ts5" target="_blank"><i class="fas fa-map me-1"></i>
                        Omkareshwar Map</a>
                </div>
            </section>

            <!-- SEO: Plan Your Trip to Shegaon with This Simple Travel Guide -->
            <section>
                <h2 class="reach-sub-title text-center">Plan Your Trip to Shegaon with This Simple Travel Guide</h2>
                <p>
                    Getting to Shegaon is easy when you choose your travel option based on where you're what you need. Trains, buses, cars and flights with road travel all provide ways to get to this pilgrimage place.
                    Before you travel check the schedules, ticket availability and route information. If you are traveling with your family think about comfort and travel time along with cost. Booking your hotel ahead of time can also make your trip more convenient.
                    Whether you are visiting the Gajanan Maharaj Temple or exploring Shegaon with your family a planned trip can make your experience more peaceful. Decide on your route early get your travel things ready and leave time for the trip. With a preparation your trip, to Shegaon can be comfortable and fun.
                </p>
            </section>

            <!-- FAQs Section -->
            <section class="reach-faq-wrapper">
                <h2 class="reach-sub-title text-center" style="margin-top: 40px;">Planning Your Trip – FAQs</h2>

                <details class="reach-faq-item">
                    <summary>Are there direct trains from Hyderabad to Shegaon?</summary>
                    <div class="faq-answer">Yes, several direct trains connect Hyderabad (via the Secunderabad–Nagpur–Howrah route) to Shegaon. Advance booking is recommended, especially during festive seasons.</div>
                </details>

                <details class="reach-faq-item">
                    <summary>Can I get a private taxi from Nagpur to Shegaon?</summary>
                    <div class="faq-answer">Absolutely. Prepaid taxis and private cabs are readily available at Nagpur Airport and the railway station. The drive takes about 2.5 to 3 hours via NH‑53.</div>
                </details>

                <details class="reach-faq-item">
                    <summary>Is parking available at the Bhakta Niwas?</summary>
                    <div class="faq-answer">Yes, there is ample free parking for both two‑wheelers and four‑wheelers at the Shegaon Bhakta Niwas and the main temple complex.</div>
                </details>

                <details class="reach-faq-item">
                    <summary>How do I get to Shegaon from Mumbai or Pune easily?</summary>
                    <div class="faq-answer">You can take a direct train from Mumbai CSMT or Pune to Shegaon. The journey takes about 10-12 hours depending on the train. Overnight trains are available and convenient.</div>
                </details>

                <details class="reach-faq-item">
                    <summary>What is the best way to reach Shegaon for first-time visitors?</summary>
                    <div class="faq-answer">For first-time visitors, train travel is recommended because it's direct and comfortable. Book your tickets in advance, and use the free Sansthan bus from the station to the temple.</div>
                </details>
            </section>

            <!-- Bottom CTA -->
            <section class="reach-cta-box">
                <h3>Book Your Stay Before You Arrive</h3>
                <p>Secure comfortable accommodation at Shegaon, Pandharpur, Trimbakeshwar, or Omkareshwar for a peaceful pilgrimage.</p>
                <div>
                    <a href="{{ route('bhaktaNiwas') }}" class="darshan-cta-btn btn-primary-cta">Explore Bhakta Niwas</a>
                    <a href="{{ route('darshan-timings') }}" class="darshan-cta-btn btn-outline-cta">Darshan Timings</a>
                </div>
            </section>

            <!-- Bottom Links Strip -->
            <div class="reach-bottom-links">
                <a href="{{ route('locations') }}">All Locations</a>
                <a href="{{ route('bhaktaNiwas') }}">Bhakta Niwas</a>
                <a href="{{ route('booking') }}">Booking Form</a>
                <a href="{{ route('contact') }}">Contact & Maps</a>
            </div>

        </div>
    </div>
@endsection