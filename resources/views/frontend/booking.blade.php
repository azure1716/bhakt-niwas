@extends('frontend.layouts.master')

@section('meta_title', $meta_title)
@section('meta_description', $meta_description)
@section('meta_keywords', $meta_keywords)

@section('content')
    <!-- ========================================================== -->
    <!-- === BOOKING PAGE – ORIGINAL CONTENT === -->
    <!-- ========================================================== -->
    <section class="booking-page-wrapper">
        <div class="container">
            <!-- Page Heading -->
            <h1 class="booking-page-title">Request Your Stay – Bhakta Niwas</h1>
            <p class="booking-page-desc">
                Tell us your preferred holy place, travel dates, and the number of pilgrims. 
                Our team will reach out via WhatsApp or phone to confirm availability and guide you through the rules.
            </p>

            <!-- Dashboard Split Layout -->
            <div class="row g-0 booking-dashboard-wrapper">
                <!-- Left Side: Peaceful Introduction -->
                <div class="col-lg-4 col-12">
                    <div class="booking-hero-left">
                        <h3>Begin Your Sacred Retreat</h3>
                        <p>
                            Let the divine blessings of Shri Gajanan Maharaj guide your stay at our 
                            serene pilgrimage centres. We are here to make your visit comfortable and spiritually fulfilling.
                        </p>
                        <a href="{{ route('locations') }}" class="btn-hero-outline">Explore Locations <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

                <!-- Right Side: The Form -->
                <div class="col-lg-8 col-12">
                    <div class="booking-hero-right">
                        <h4>Submit Your Booking Request</h4>
                        <p>
                            Fill in the details below to start the reservation process.
                        </p>

                        <form>
                            <div class="row g-3">
                                <!-- Location -->
                                <div class="col-12">
                                    <label class="form-label-custom">Choose Pilgrim Centre *</label>
                                    <select class="form-select input-custom" id="bookingLocation">
                                        <option selected>Select a destination</option>
                                        <option>Shri Gajanan Maharaj Sansthan Shegaon</option>
                                        <option>Shri Gajanan Maharaj Sansthan Pandharpur</option>
                                        <option>Shri Gajanan Maharaj Sansthan Trimbakeshwar</option>
                                        <option>Shri Gajanan Maharaj Sansthan Omkareshwar</option>
                                    </select>
                                </div>

                                <!-- Dates -->
                                <div class="col-md-6">
                                    <label class="form-label-custom">Arrival Date <span class="text-muted">(optional)</span></label>
                                    <input type="date" class="form-control input-custom" id="bookingCheckin" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label-custom">Departure Date <span class="text-muted">(optional)</span></label>
                                    <input type="date" class="form-control input-custom" id="bookingCheckout" />
                                </div>

                                <!-- Guests & Phone -->
                                <div class="col-md-6">
                                    <label class="form-label-custom">Number of Pilgrims</label>
                                    <input type="number" class="form-control input-custom" id="bookingGuests"
                                        value="3" min="1" />
                                    <small class="text-muted d-block mt-1">Minimum occupancy rules may apply.</small>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label-custom">Your Mobile Number <span class="text-muted">(optional)</span></label>
                                    <input type="tel" class="form-control input-custom" id="bookingPhone"
                                        placeholder="+91 90000 00000" />
                                    <small class="text-muted d-block mt-1">We may call you for faster confirmation.</small>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12 mt-4">
                                    <button type="button" onclick="submitBookingWhatsApp()" class="btn-submit-form">
                                        <i class="fas fa-paper-plane me-2"></i> Send Request
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
             {{-- ============ NEW SEO CONTENT SECTION ============ --}}
            <div class="booking-seo-content mb-5">
                <h2 class="fw-bold mb-3 text-center" style="color: var(--theme-maroon); font-size: 1.8rem;">Shri Gajanan Maharaj Sansthan Booking</h2>
                <p class="text-secondary" style="line-height: 1.8;">
                    Planning a visit to Shegaon is a lot easier when you have a place to stay. Shri Gajanan Maharaj Sansthan booking is a way to arrange your accommodation ahead of time. Shri Gajanan Maharaj Sansthan booking helps people plan their stay based on when they're traveling, how many people are with them and what kind of room they need.
                </p>
                <p class="text-secondary" style="line-height: 1.8;">
                    The Sansthan has a place called Bhakta Niwas where people can stay.. You have to check if rooms are available first. The official Sansthan information says that rooms at Bhakta Niwas are given out on a come first-served basis. You might need to show a valid ID to stay there.
                </p>
                <p class="text-secondary" style="line-height: 1.8;">
                    So how do you book a room at Shri Gajanan Maharaj Sansthan? First you need to decide when you are coming and going. Then you should check how many people are with you and what kind of room you want. After that you can see if there are any rooms for the days you want to stay.
                </p>
                <div class="mt-4">
                    <h3 class="h5 fw-bold mb-3 text-center" style="color: var(--theme-maroon);">Steps to Book a Room</h3>
                    <ol class="booking-steps-list ps-3">
                        <li class="text-secondary">Check if the room you want is available for the days you want to stay. Sometimes rooms are not available on weekends, festivals or holidays.</li>
                        <li class="text-secondary">Choose a room that's right for your family. There are kinds of rooms like rooms with one bed or rooms with two beds.</li>
                        <li class="text-secondary">Give the information about the people staying in the room. You might need to show an ID.</li>
                        <li class="text-secondary">Make sure everything is correct before you confirm your booking. Keep your booking information safe so you can show it when you arrive.</li>
                    </ol>
                    <p class="text-muted mt-2"><em>It is an idea to check the official Sansthan website or office for the most up-to-date information. The official FAQ says that rooms at Bhakta Niwas can be booked at the counter on a come first-served basis.</em></p>
                </div>
            </div>
            {{-- ============ END NEW SEO CONTENT ============ --}}

            <!-- Quick Action Grid (Side by Side CTA) -->
            <div class="row g-4 mt-4">
                <div class="col-md-6">
                    <div class="action-row-card green-action">
                        <div class="content">
                            <h6>
                                <i class="fab fa-whatsapp me-2" style="color: var(--theme-green)"></i>
                                WhatsApp Reservations
                            </h6>
                            <p>Get real‑time confirmation and room updates.</p>
                        </div>
                        <a href="https://wa.me/919523016487?text=Hi%20I%20would%20like%20to%20book%20accommodation%20at%20Shri%20Gajanan%20Maharaj%20Sansthan."
                            target="_blank" class="btn-action-mini btn-wa-action">Start Chat</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="action-row-card orange-action">
                        <div class="content">
                            <h6>
                                <i class="fas fa-phone me-2" style="color: var(--theme-orange)"></i>
                                Phone Booking
                            </h6>
                            <p>Speak directly with our support team.</p>
                        </div>
                        <a href="tel:+919523016487" class="btn-action-mini btn-call-action">Call Us</a>
                    </div>
                </div>
            </div>

            <!-- How Booking Works (Horizontal Timelines) -->
            <div class="steps-unique-row text-center">
                <h4 class="mb-4"
                    style="
              font-family: &quot;Playfair Display&quot;, serif;
              color: var(--theme-maroon);
            ">
                    Three Simple Steps
                </h4>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-4 step-unique-item active">
                        <div class="step-unique-circle">01</div>
                        <h6>Fill & Send</h6>
                        <p>
                            Pick your destination, enter your dates and guest count, then submit the form above.
                        </p>
                    </div>
                    <div class="col-md-4 step-unique-item">
                        <div class="step-unique-circle">02</div>
                        <h6>Connect & Verify</h6>
                        <p>
                            Use the "Start Chat" or "Call Us" buttons to confirm availability with our office.
                        </p>
                    </div>
                    <div class="col-md-4 step-unique-item">
                        <div class="step-unique-circle">03</div>
                        <h6>Arrive & Relax</h6>
                        <p>
                            Receive final confirmation via WhatsApp, bring your ID, and enjoy a peaceful spiritual stay.
                        </p>
                    </div>
                </div>
            </div>

            <!-- FAQ & Resources Section -->
            <div class="faq-resources-wrapper row g-4">
                <!-- Left: FAQs (2 columns) -->
                <div class="col-lg-8">
                    <h4
                        style="font-family: &quot;Playfair Display&quot;, serif; color: var(--theme-maroon); margin-bottom: 20px;">
                        Frequently Asked Questions
                    </h4>

                    {{-- === REPLACED FAQ LIST WITH USER'S 30 QUESTIONS === --}}
                    <details class="faq-unique-box">
                        <summary>How do I book a room at Shri Gajanan Maharaj Sansthan?</summary>
                        <div class="answer-body">You need to check if the room is available give the information and confirm your booking.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Can I book a room at Bhakta Niwas online?</summary>
                        <div class="answer-body">It depends on the system so you should check the official Sansthan website first.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Where can I book a room at Bhakta Niwas in Shegaon?</summary>
                        <div class="answer-body">You can book a room at the Bhakta Niwas counter.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Is it possible to book a room at Shri Gajanan Maharaj Sansthan every day?</summary>
                        <div class="answer-body">It depends on if there are rooms and what the rules are.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>What documents do I need to book a room?</summary>
                        <div class="answer-body">You need an ID and you might need to show other documents too.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Can families book rooms at Bhakta Niwas?</summary>
                        <div class="answer-body">Yes families can book rooms. They need to check if there are rooms available and what the rules are.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Can older people stay at Bhakta Niwas?</summary>
                        <div class="answer-body">Yes older people can stay,. They need to check if there are rooms available and what the rules are.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>How early should I book a room in Shegaon?</summary>
                        <div class="answer-body">You should book a room early during festivals or holidays.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>What kinds of rooms are available at Bhakta Niwas?</summary>
                        <div class="answer-body">There are kinds of rooms like rooms with one bed or rooms with two beds.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Is my room booking guaranteed after I ask about it?</summary>
                        <div class="answer-body">No it is not guaranteed until you confirm your booking.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Can I check if a room is available at Bhakta Niwas online?</summary>
                        <div class="answer-body">It depends on the system so you should check the official Sansthan website first.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>What is the process for booking a room at Shri Gajanan Maharaj Sansthan?</summary>
                        <div class="answer-body">You need to choose your dates check if a room is available choose a room give the information and confirm your booking.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Can I book a room for my family?</summary>
                        <div class="answer-body">Yes you can book a room for your family. You need to check if there are rooms available and what the rules are.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Are there rooms near the Gajanan Maharaj Temple?</summary>
                        <div class="answer-body">Yes there are rooms near the temple.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Can I get a room during festivals in Shegaon?</summary>
                        <div class="answer-body">Maybe. You should check if there are rooms available and book early.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Do I need to book a room of time at Bhakta Niwas?</summary>
                        <div class="answer-body">It is an idea to book ahead of time especially during festivals or holidays.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Can I book a room for one night?</summary>
                        <div class="answer-body">Maybe,. You need to check if there are rooms available and what the rules are.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Are there rooms for big families?</summary>
                        <div class="answer-body">Yes,. You need to check if there are rooms available and what the rules are.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>What do I need to bring when I check in?</summary>
                        <div class="answer-body">You need to bring your booking information, an ID and any other documents they ask for.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>How do I confirm my room booking?</summary>
                        <div class="answer-body">You need to check your booking information and keep it safe so you can show it when you arrive.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Can I change my booking dates?</summary>
                        <div class="answer-body">Maybe,. You need to check if there are rooms available and what the rules are.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Can I cancel my room booking at Bhakta Niwas?</summary>
                        <div class="answer-body">Maybe,. You need to check the rules first.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Do I need to show my ID for everyone staying in the room?</summary>
                        <div class="answer-body">Yes you need to show an ID for everyone.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Can couples stay at Bhakta Niwas?</summary>
                        <div class="answer-body">Yes,. You need to check the rules first.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Is it expensive to stay at Bhakta Niwas?</summary>
                        <div class="answer-body">No it is not expensive. There are different kinds of rooms available.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Can I call the Sansthan to ask about booking a room?</summary>
                        <div class="answer-body">Yes you can call the Sansthan to ask about booking a room.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Is there food near Bhakta Niwas?</summary>
                        <div class="answer-body">Yes there is food and you can also get Mahaprasad.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Are rooms at Bhakta Niwas on a first-come basis?</summary>
                        <div class="answer-body">Yes rooms are available on a come first-served basis.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Can I stay at Bhakta Niwas during peak pilgrimage times?</summary>
                        <div class="answer-body">Yes you can stay,. You need to check if there are rooms available and what the rules are.</div>
                    </details>

                    <details class="faq-unique-box">
                        <summary>Where can I get the information, about booking a room?</summary>
                        <div class="answer-body">You can check the Shri Gajanan Maharaj Sansthan website or office for the latest information.</div>
                    </details>
                    {{-- === END FAQ LIST === --}}
                </div>

                <!-- Right: Planning Resources -->
                <div class="col-lg-4">
                    <h4
                        style="
                            font-family: &quot;Playfair Display&quot;, serif;
                            color: var(--theme-maroon);
                            margin-bottom: 20px;
                        ">
                        Useful Resources
                    </h4>
                    <div>
                        <a href="{{ route('locations') }}" class="resource-unique-link">
                            <span><i class="fas fa-map-location-dot"></i> All centres & maps</span>
                            <i class="fas fa-arrow-right text-muted"></i>
                        </a>
                        <a href="{{ route('about') }}" class="resource-unique-link">
                            <span><i class="fas fa-landmark"></i> About the Sansthan</span>
                            <i class="fas fa-arrow-right text-muted"></i>
                        </a>
                        <a href="{{ route('contact') }}" class="resource-unique-link">
                            <span><i class="fas fa-address-book"></i> Office contacts</span>
                            <i class="fas fa-arrow-right text-muted"></i>
                        </a>
                    </div>
                    <p class="small text-muted mt-3">
                        For immediate assistance, visit our
                        <a href="{{ route('contact') }}" style="color: var(--theme-maroon); font-weight: 500">Contact Page</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('javascript-section')
    <!-- === BOOKING WHATSAPP SUBMIT LOGIC === -->
    <script>
        function submitBookingWhatsApp() {
            // 1. Get all values from the form by IDs
            const location = document.getElementById('bookingLocation').value;
            const checkin = document.getElementById('bookingCheckin').value;
            const checkout = document.getElementById('bookingCheckout').value;
            const guests = document.getElementById('bookingGuests').value;
            const phone = document.getElementById('bookingPhone').value;

            // 2. Simple validation
            if (location === "Select a destination") {
                alert("Please select a valid destination before submitting.");
                return;
            }

            // 3. Format the WhatsApp Message with %0A for line breaks
            let message = `🙏 *New Booking Request*%0A%0A`;
            message += `*Location:* ${location}%0A`;
            message += `*Arrival:* ${checkin || 'Not specified'}%0A`;
            message += `*Departure:* ${checkout || 'Not specified'}%0A`;
            message += `*Guests:* ${guests || 'Not specified'}%0A`;
            message += `*Phone:* ${phone || 'Not specified'}`;

            // 4. Open WhatsApp with the predefined number
            const waNumber = "919523016487";
            const waUrl = `https://wa.me/${waNumber}?text=${message}`;

            window.open(waUrl, '_blank');
        }
    </script>
@endsection