@extends('frontend.layouts.master')

@section('meta_title', $meta_title)
@section('meta_description', $meta_description)
@section('meta_keywords', $meta_keywords)

@section('content')
    <style>
        .terms-page-wrapper {
            padding: 60px 0 80px;
            padding-top: 150px;
            background: #f9f9f9;
        }

        /* --- Page Header --- */
        .terms-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .terms-header h1 {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .terms-header .terms-date {
            color: #666;
            font-size: 1.1rem;
            font-weight: 500;
        }

        /* --- Main Content Card --- */
        .terms-content-card {
            background: #fff;
            border: 1px solid #f0f0f0;
            border-radius: 4px;
            padding: 50px 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            transition: 0.3s;
            border-left: 4px solid var(--theme-orange);
            /* Accent */
        }

        .terms-content-card p {
            color: #555;
            line-height: 1.8;
            font-size: 1.05rem;
            margin-bottom: 20px;
        }

        .terms-content-card p:last-child {
            margin-bottom: 0;
        }

        /* --- Section Headings --- */
        .terms-content-card h3 {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            font-size: 1.8rem;
            margin-top: 40px;
            margin-bottom: 15px;
        }

        .terms-content-card h3:first-of-type {
            margin-top: 0;
        }

        /* --- Custom Links --- */
        .terms-inline-link {
            color: var(--theme-maroon);
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .terms-inline-link:hover {
            color: var(--theme-orange);
            text-decoration: underline;
        }

        /* --- Related Pages Section --- */
        .terms-related-section {
            margin-top: 50px;
            padding-top: 30px;
            border-top: 1px solid #f0f0f0;
        }

        .terms-related-section h4 {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            margin-bottom: 15px;
        }

        .terms-related-links {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .terms-related-links a {
            text-decoration: none;
            color: var(--theme-maroon);
            font-weight: 500;
            font-size: 15px;
            border-bottom: 1px solid transparent;
            transition: 0.3s;
            display: inline-block;
            width: fit-content;
        }

        .terms-related-links a:hover {
            color: var(--theme-orange);
            border-bottom-color: var(--theme-orange);
        }

        /* --- Bottom Strip --- */
        .terms-bottom-strip {
            margin-top: 40px;
            border-top: 1px solid #f0f0f0;
            padding-top: 20px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px 40px;
        }

        .terms-bottom-strip a {
            color: var(--theme-orange);
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            transition: 0.3s;
        }

        .terms-bottom-strip a:hover {
            color: var(--theme-maroon);
            text-decoration: underline;
        }

        /* --- Mobile Adjustments --- */
        @media (max-width: 768px) {
            .terms-header h1 {
                font-size: 2.2rem;
            }

            .terms-content-card {
                padding: 25px 20px;
            }

            .terms-content-card h3 {
                font-size: 1.5rem;
            }
        }
    </style>

    <div class="terms-page-wrapper">
        <div class="container">

            <!-- Header -->
            <section class="terms-header">
                <h1>Terms &amp; Conditions</h1>
                <div class="terms-date">Effective from: 15 August 2026</div>
            </section>

            <!-- Content -->
            <section class="terms-content-card">
                <p>
                    Welcome to the official website of Shri Gajanan Maharaj Sansthan. By accessing or using our platform,
                    you agree to be bound by the following Terms &amp; Conditions. We kindly request you to read this
                    document carefully before proceeding with any transactions or services.
                </p>

                <h3>1. Acceptance of Terms</h3>
                <p>
                    Your use of our website signifies your unconditional acceptance of these Terms &amp; Conditions. If you
                    do not agree with any provision stated herein, please refrain from using our website and services
                    immediately.
                </p>

                <h3>2. Use of Our Platform</h3>
                <p>
                    Our website serves as a gateway to information about the Sansthan, its spiritual activities, upcoming
                    events, and devotee services including accommodation reservations and donation processing. You agree to
                    utilise the website solely for lawful purposes and in a manner that does not interfere with, disrupt, or
                    restrict other users' access or enjoyment of the platform.
                </p>

                <h3>3. Donations &amp; Accommodation</h3>
                <p>
                    All contributions made through our platform are voluntary and generally non-refundable, subject to the
                    provisions outlined in our <a href="{{ route('refund-cancellation-policy') }}"
                        class="terms-inline-link">Refund &amp; Cancellation Policy</a>.
                    <a href="{{ route('bhaktaNiwas') }}" class="terms-inline-link">Bhakta Niwas room bookings</a> are
                    subject to availability and the specific guidelines of the respective accommodation facility.
                </p>

                <h3>4. Intellectual Property Rights</h3>
                <p>
                    All materials displayed on this website, including text, images, logos, graphics, and software, are the
                    exclusive property of Shri Gajanan Maharaj Sansthan or its licensors. Reproduction, distribution,
                    modification, or creation of derivative works without explicit prior written consent is strictly
                    prohibited.
                </p>

                <h3>5. Limitation of Liability</h3>
                <p>
                    Shri Gajanan Maharaj Sansthan shall not be held liable for any direct, indirect, incidental, special,
                    consequential, or punitive damages arising from your use of or inability to use our website or services.
                    While we strive to maintain accurate and current information, we do not warrant the completeness,
                    reliability, or timeliness of the content presented.
                </p>

                <h3>6. Third-Party Links</h3>
                <p>
                    Our website may include hyperlinks to external websites for your reference and convenience. We do not
                    endorse or assume responsibility for the content, privacy practices, or policies of any third-party
                    platforms. Accessing such links is at your own discretion and risk.
                </p>

                <h3>7. Amendments to These Terms</h3>
                <p>
                    We reserve the right to revise these Terms &amp; Conditions at any time without prior notification. Your
                    continued use of the website following any changes constitutes your acceptance of the revised terms. We
                    encourage you to review this page periodically for the latest updates.
                </p>

                <h3>8. Governing Law &amp; Jurisdiction</h3>
                <p>
                    These Terms &amp; Conditions are governed by and construed in accordance with the laws of the Republic
                    of India. Any disputes arising from or relating to these terms shall be subject to the exclusive
                    jurisdiction of the competent courts in Buldhana, Maharashtra.
                </p>

                <h3>9. How to Reach Us</h3>
                <p>
                    Should you have any queries or concerns regarding these Terms &amp; Conditions, please <a
                        href="{{ route('contact') }}" class="terms-inline-link">reach out to us</a> or call:
                    <br><strong>Phone:</strong> <a href="tel:+919523016487"
                        class="terms-inline-link">+919523016487</a>
                </p>

                <!-- Related Pages -->
                <div class="terms-related-section">
                    <h4>You May Also Find Useful</h4>
                    <div class="terms-related-links">
                        <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                        <a href="{{ route('refund-cancellation-policy') }}">Refund &amp; Cancellation Policy</a>
                        <a href="{{ route('disclaimer') }}">Disclaimer</a>
                        <a href="{{ route('about') }}">About Shri Gajanan Maharaj Sansthan</a>
                    </div>
                </div>
            </section>

            <!-- Bottom Strip -->
            <div class="terms-bottom-strip">
                <a href="{{ route('bhaktaNiwas') }}">Explore Bhakta Niwas</a>
                <a href="{{ route('refund-cancellation-policy') }}">Refund &amp; cancellation policy</a>
                <a href="{{ route('contact') }}">Contact us regarding these terms</a>
            </div>

        </div>
    </div>
@endsection