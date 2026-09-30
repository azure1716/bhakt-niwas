@extends('frontend.layouts.master')

@section('meta_title', $meta_title)
@section('meta_description', $meta_description)
@section('meta_keywords', $meta_keywords)

@section('content')
    <style>

        .policy-page-wrapper {
            padding: 60px 0 80px;
            padding-top: 150px;
            background: #f9f9f9;
        }

        /* --- Page Header --- */
        .policy-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .policy-header h1 {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .policy-header .policy-date {
            color: #666;
            font-size: 1.1rem;
            font-weight: 500;
        }

        /* --- Main Policy Card --- */
        .policy-content-card {
            background: #fff;
            border: 1px solid #f0f0f0;
            border-radius: 4px;
            padding: 50px 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            transition: 0.3s;
            border-left: 4px solid var(--theme-orange);
            /* Subtle accent */
        }

        .policy-content-card p {
            color: #555;
            line-height: 1.8;
            font-size: 1.05rem;
            margin-bottom: 20px;
        }

        .policy-content-card p:last-child {
            margin-bottom: 0;
        }

        /* --- Section Headings --- */
        .policy-content-card h3 {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            font-size: 1.8rem;
            margin-top: 40px;
            margin-bottom: 15px;
        }

        .policy-content-card h3:first-of-type {
            margin-top: 0;
        }

        /* --- Custom Lists --- */
        .policy-content-card ul {
            list-style: none;
            padding: 0;
            margin: 0 0 20px 0;
        }

        .policy-content-card ul li {
            padding: 8px 0 8px 25px;
            font-size: 1.05rem;
            color: #555;
            line-height: 1.6;
            position: relative;
        }

        .policy-content-card ul li::before {
            content: '•';
            color: var(--theme-orange);
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        /* --- Email Link --- */
        .policy-email-link {
            color: var(--theme-maroon);
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .policy-email-link:hover {
            color: var(--theme-orange);
            text-decoration: underline;
        }

        /* --- Related Pages Section --- */
        .policy-related-section {
            margin-top: 50px;
            padding-top: 30px;
            border-top: 1px solid #f0f0f0;
        }

        .policy-related-section h4 {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            margin-bottom: 15px;
        }

        .policy-related-links {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .policy-related-links a {
            text-decoration: none;
            color: var(--theme-maroon);
            font-weight: 500;
            font-size: 15px;
            border-bottom: 1px solid transparent;
            transition: 0.3s;
            display: inline-block;
            width: fit-content;
        }

        .policy-related-links a:hover {
            color: var(--theme-orange);
            border-bottom-color: var(--theme-orange);
        }

        /* --- Bottom Strip --- */
        .policy-bottom-strip {
            margin-top: 40px;
            border-top: 1px solid #f0f0f0;
            padding-top: 20px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px 40px;
        }

        .policy-bottom-strip a {
            color: var(--theme-orange);
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            transition: 0.3s;
        }

        .policy-bottom-strip a:hover {
            color: var(--theme-maroon);
            text-decoration: underline;
        }

        /* --- Mobile Adjustments --- */
        @media (max-width: 768px) {
            .policy-header h1 {
                font-size: 2.2rem;
            }

            .policy-content-card {
                padding: 25px 20px;
            }

            .policy-content-card h3 {
                font-size: 1.5rem;
            }
        }
    </style>

    <div class="policy-page-wrapper">
        <div class="container">

            <!-- Header -->
            <section class="policy-header">
                <h1>Our Privacy Commitment</h1>
                <div class="policy-date">Effective from: 15 August 2026</div>
            </section>

            <!-- Policy Content -->
            <section class="policy-content-card">
                <p>
                    Shri Gajanan Maharaj Sansthan values the trust you place in us. This Privacy Commitment explains how we
                    collect, use, and protect your personal information when you interact with our website, make a donation,
                    or book accommodation through our services.
                </p>

                <h3>1. What Personal Data We Gather</h3>
                <p>We may collect the following categories of information:</p>
                <ul>
                    <li><strong>Identity and Contact Data:</strong> Full name, email address, telephone number, and postal
                        address when you register, make a donation, or reserve a room at Bhakta Niwas.</li>
                    <li><strong>Transaction Records:</strong> Payment details related to donations or bookings. Please note
                        that we do not retain full credit/debit card information – all payments are processed securely
                        through our accredited payment partners.</li>
                    <li><strong>Technical and Usage Data:</strong> IP address, browser type, device identifiers, and
                        browsing patterns collected via cookies and analytics services to improve our website experience.
                    </li>
                </ul>

                <h3>2. How We Use Your Data</h3>
                <p>Your information enables us to:</p>
                <ul>
                    <li>Process donations and provide official receipts.</li>
                    <li>Manage <strong>Bhakta Niwas accommodation bookings</strong> and other devotee services.</li>
                    <li>Send updates about Sansthan events, festivals, and spiritual activities.</li>
                    <li>Enhance website functionality and personalise your browsing experience.</li>
                    <li>Fulfil legal obligations and regulatory requirements.</li>
                </ul>

                <h3>3. Sharing Your Information</h3>
                <p>
                    We do not sell, rent, or trade your personal data with third parties. We may share information with
                    trusted service providers who assist us in website operations, payment processing, and communication,
                    under strict confidentiality terms. We may also disclose data when required by law or to protect the
                    rights and safety of the Sansthan and its devotees.
                </p>

                <h3>4. How We Protect Your Data</h3>
                <p>
                    We employ appropriate technical and organisational security measures to safeguard your personal
                    information against unauthorised access, alteration, disclosure, or loss. While we strive to protect
                    your data, no internet transmission is entirely secure – we encourage you to take precautions when
                    sharing information online.
                </p>

                <h3>5. Cookies and Tracking</h3>
                <p>
                    Our website uses cookies to improve functionality and analyse traffic. You may adjust your browser
                    settings to decline cookies, but this may affect certain features of the site.
                </p>

                <h3>6. Your Data Rights</h3>
                <p>
                    You have the right to request access, correction, or deletion of your personal information held by us.
                    To exercise these rights, please reach out using the contact details below.
                </p>

                <h3>7. Updates to This Policy</h3>
                <p>
                    We may revise this Privacy Commitment from time to time. Any changes will be posted on this page with
                    an updated effective date. We encourage you to review this policy periodically.
                </p>

                <h3>8. How to Reach Us</h3>
                <p>
                    If you have any questions, concerns, or requests regarding this Privacy Commitment, please <a href="{{ route('contact') }}"
                        class="policy-email-link">get in touch with us</a> or call:
                    <br><strong>Phone:</strong> <a href="tel:+919523016487" class="policy-email-link">+919523016487</a>
                </p>

                <!-- Related Pages -->
                <div class="policy-related-section">
                    <h4>You May Also Find Useful</h4>
                    <div class="policy-related-links">
                        <a href="{{ route('terms-conditions') }}">Terms & Conditions</a>
                        <a href="{{ route('refund-cancellation-policy') }}">Refund & Cancellation Policy</a>
                        <a href="{{ route('disclaimer') }}">Disclaimer</a>
                        <a href="{{ route('bhaktaNiwas') }}">Bhakta Niwas Booking Information</a>
                    </div>
                </div>
            </section>

            <!-- Bottom Strip -->
            <div class="policy-bottom-strip">
                <a href="{{ route('contact') }}">Contact us for privacy queries</a>
                <a href="{{ route('bhaktaNiwas') }}">Bhakta Niwas accommodation</a>
                <a href="{{ route('locations') }}">Accommodation details by location</a>
            </div>

        </div>
    </div>
@endsection