@extends('frontend.layouts.master')

@section('meta_title', $meta_title)
@section('meta_description', $meta_description)
@section('meta_keywords', $meta_keywords)

@section('content')
    <link rel="stylesheet" href="{{ asset('frontend/css/darshan.css') }}">

    <div class="darshan-page-wrapper">
        <div class="container">

            <!-- Header -->
            <section class="darshan-header">
                <span class="small-badge">Shri Gajanan Maharaj Sansthan</span>
                <h1>Darshan Schedule & Timings</h1>
                <p class="subtitle">
                    The main temple at Shegaon welcomes devotees every day of the year. Below are the official timings for
                    darshan and aarti, along with helpful tips for your visit.
                </p>
            </section>

            <!-- Shegaon Temple Darshan Schedule -->
            <section>
                <h2 class="darshan-sub-title" style="margin-top: 0;">Shegaon Temple – Darshan Hours</h2>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="darshan-schedule-card">
                            <span class="icon"><i class="fas fa-sun"></i></span>
                            <h5>Morning Session</h5>
                            <div class="time">5:00 AM – 12:00 PM</div>
                            <small>Kakad Aarti begins at 5:00 AM</small>
                            <div class="desc">Ideal for early morning blessings</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="darshan-schedule-card">
                            <span class="icon"><i class="fas fa-moon"></i></span>
                            <h5>Evening Session</h5>
                            <div class="time">4:00 PM – 10:00 PM</div>
                            <small>Shej Aarti takes place around 9:30 PM</small>
                            <div class="desc">Peaceful and spiritually uplifting</div>
                        </div>
                    </div>
                </div>

                <!-- Midday Break Alert -->
                <div class="darshan-alert-box">
                    The temple remains closed for a midday break from <strong>12:00 PM to 4:00 PM</strong>. During this time,
                    devotees can enjoy Mahaprasad at the canteen.
                </div>
            </section>

            <!-- Daily Aarti Schedule -->
            <section>
                <h2 class="darshan-sub-title">Daily Aarti Timings</h2>
                <div class="darshan-table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Aarti</th>
                                <th>Time</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Kakad Aarti</strong></td>
                                <td>5:00 AM</td>
                                <td>Most sacred; arrive by 4:45 AM for a good view</td>
                            </tr>
                            <tr>
                                <td><strong>Madhyan Aarti</strong></td>
                                <td>~11:30 AM</td>
                                <td>Just before the afternoon closure</td>
                            </tr>
                            <tr>
                                <td><strong>Saptashringi Aarti</strong></td>
                                <td>~4:00 PM</td>
                                <td>Marks the reopening of evening darshan</td>
                            </tr>
                            <tr>
                                <td><strong>Shej Aarti</strong></td>
                                <td>~9:30 PM</td>
                                <td>Final aarti – a deeply moving experience</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-note">
                    Timings are approximate and may shift on festival days. Please confirm with the office at
                    <strong>+919523016487</strong> before your visit.
                </div>
            </section>

            <!-- Darshan Timings at Other Locations -->
            <section>
                <h2 class="darshan-sub-title">Darshan at Other Sansthan Centres</h2>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="darshan-loc-card">
                            <h5>Pandharpur – Vitthal Temple</h5>
                            <p><strong>4:00 AM – 11:00 PM</strong></p>
                            <p>Extended hours on Ekadashi</p>
                            <a href="{{ route('bhaktaNiwas') }}" class="loc-link">Accommodation info <i
                                    class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="darshan-loc-card">
                            <h5>Trimbakeshwar – Jyotirlinga</h5>
                            <p><strong>5:30 AM – 9:00 PM</strong></p>
                            <p>Several aartis throughout the day</p>
                            <a href="{{ route('bhaktaNiwas') }}" class="loc-link">Accommodation info <i
                                    class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="darshan-loc-card">
                            <h5>Omkareshwar – Jyotirlinga</h5>
                            <p><strong>5:00 AM – 10:00 PM</strong></p>
                            <p>Jal Abhishek at 5:00 AM daily</p>
                            <a href="{{ route('bhaktaNiwas') }}" class="loc-link">Accommodation info <i
                                    class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Best Time to Visit -->
            <section>
                <h2 class="darshan-sub-title">Ideal Seasons to Visit Shegaon</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="darshan-season-card">
                            <span class="icon"><i class="fas fa-snowflake"></i></span>
                            <h5>Winter (Oct–Feb)</h5>
                            <p>Mild weather and comfortable darshan – perfect for families and senior citizens. Book
                                accommodation well in advance for December and January.</p>
                            <span class="crowd">Expected crowd: Moderate</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="darshan-season-card">
                            <span class="icon"><i class="fas fa-cloud-rain"></i></span>
                            <h5>Monsoon (Jul–Sep)</h5>
                            <p>Anand Sagar looks lush and green. Crowds are generally lighter except during Ashadhi Ekadashi.
                            </p>
                            <span class="crowd">Crowd: Low to very high</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="darshan-season-card">
                            <span class="icon"><i class="fas fa-sun"></i></span>
                            <h5>Summer (Mar–Jun)</h5>
                            <p>Hot days but fewer visitors. AC rooms at Anand Vihar are available – morning darshan is
                                recommended.</p>
                            <span class="crowd">Crowd: Low</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FAQs Section -->
            <section class="darshan-faq-wrapper">
                <h2 class="darshan-sub-title" style="margin-top: 40px;">Frequently Asked Questions – Darshan</h2>

                <details class="darshan-faq-item">
                    <summary>Is the temple open every day?</summary>
                    <div class="faq-answer">Yes, the temple at Shegaon is open 365 days a year. The morning session runs
                        from 5:00 AM to 12:00 PM, and the evening session from 4:00 PM to 10:00 PM.</div>
                </details>

                <details class="darshan-faq-item">
                    <summary>What should I wear for darshan?</summary>
                    <div class="faq-answer">There is no formal dress code, but we request all devotees to dress modestly
                        and respectfully. Traditional Indian attire is appreciated. Please avoid shorts, sleeveless tops, or
                        revealing clothing on the temple premises.</div>
                </details>

                <details class="darshan-faq-item">
                    <summary>Does the Sansthan offer a free bus from the railway station?</summary>
                    <div class="faq-answer">Yes, a complimentary shuttle service operates between Shegaon Railway Station
                        (SGO) and the main temple throughout the darshan hours. Buses depart regularly from the station’s
                        main exit.</div>
                </details>
            </section>

            <!-- Bottom CTA -->
            <section class="darshan-cta-box">
                <h3>Stay Near the Temple – Book Bhakta Niwas</h3>
                <p>Choose from comfortable accommodation at Shegaon, Pandharpur, Trimbakeshwar, or Omkareshwar – all on a
                    donation basis.</p>
                <div>
                    <a href="{{ route('bhaktaNiwas') }}" class="darshan-cta-btn btn-primary-cta">Explore Bhakta Niwas</a>
                    <a href="{{ route('how-to-reach') }}" class="darshan-cta-btn btn-outline-cta">How to Reach Shegaon</a>
                </div>
            </section>

            <!-- Bottom Links Strip -->
            <div class="darshan-bottom-links">
                <a href="{{ route('locations') }}">All Centres</a>
                <a href="{{ route('booking') }}">Booking Form</a>
                <a href="{{ route('bhaktaNiwas') }}">Bhakta Niwas</a>
                <a href="{{ route('contact') }}">Contact Us</a>
            </div>

        </div>
    </div>
@endsection