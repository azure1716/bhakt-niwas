@extends('frontend.layouts.master')


@section('content')
    <style>

        .refund-page-wrapper {
            padding: 60px 0 80px;
            padding-top: 150px;
            background: #f9f9f9;
        }

        /* --- Page Header --- */
        .refund-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .refund-header h1 {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            font-size: 2.8rem;
            margin-bottom: 10px;
        }

        .refund-header .refund-date {
            color: #666;
            font-size: 1.1rem;
            font-weight: 500;
        }

        /* --- Main Content Card --- */
        .refund-content-card {
            background: #fff;
            border: 1px solid #f0f0f0;
            border-radius: 4px;
            padding: 50px 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            transition: 0.3s;
            border-left: 4px solid var(--theme-orange);
            /* Accent */
        }

        .refund-content-card p {
            color: #555;
            line-height: 1.8;
            font-size: 1.05rem;
            margin-bottom: 20px;
        }

        .refund-content-card p:last-child {
            margin-bottom: 0;
        }

        /* --- Section Headings --- */
        .refund-content-card h3 {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            font-size: 1.8rem;
            margin-top: 40px;
            margin-bottom: 15px;
        }

        .refund-content-card h3:first-of-type {
            margin-top: 0;
        }

        .refund-content-card h4 {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            font-size: 1.3rem;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        /* --- Custom Lists --- */
        .refund-content-card ul {
            list-style: none;
            padding: 0;
            margin: 0 0 20px 0;
        }

        .refund-content-card ul li {
            padding: 8px 0 8px 25px;
            font-size: 1.05rem;
            color: #555;
            line-height: 1.6;
            position: relative;
        }

        .refund-content-card ul li::before {
            content: '•';
            color: var(--theme-orange);
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        /* --- Custom Links --- */
        .refund-inline-link {
            color: var(--theme-maroon);
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
            border-bottom: 1px solid transparent;
        }

        .refund-inline-link:hover {
            color: var(--theme-orange);
            border-bottom-color: var(--theme-orange);
        }

        /* --- Related Pages Section --- */
        .refund-related-section {
            margin-top: 50px;
            padding-top: 30px;
            border-top: 1px solid #f0f0f0;
        }

        .refund-related-section h4 {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            margin-bottom: 15px;
        }

        .refund-related-links {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .refund-related-links a {
            text-decoration: none;
            color: var(--theme-maroon);
            font-weight: 500;
            font-size: 15px;
            border-bottom: 1px solid transparent;
            transition: 0.3s;
            display: inline-block;
            width: fit-content;
        }

        .refund-related-links a:hover {
            color: var(--theme-orange);
            border-bottom-color: var(--theme-orange);
        }

        /* --- Bottom Strip --- */
        .refund-bottom-strip {
            margin-top: 40px;
            border-top: 1px solid #f0f0f0;
            padding-top: 20px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px 40px;
        }

        .refund-bottom-strip a {
            color: var(--theme-orange);
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            transition: 0.3s;
        }

        .refund-bottom-strip a:hover {
            color: var(--theme-maroon);
            text-decoration: underline;
        }

        /* --- Mobile Adjustments --- */
        @media (max-width: 768px) {
            .refund-header h1 {
                font-size: 2.2rem;
            }

            .refund-content-card {
                padding: 25px 20px;
            }

            .refund-content-card h3 {
                font-size: 1.5rem;
            }
        }
    </style>

    <div class="refund-page-wrapper">
        <div class="container">

            <!-- Header -->
            <section class="refund-header">
                <h1>Refund &amp; Cancellation Policy</h1>
                <div class="refund-date">Effective from: 15 August 2026</div>
            </section>

            <!-- Content -->
            <section class="refund-content-card">
                <p>
                    Shri Gajanan Maharaj Sansthan acknowledges that circumstances may change, requiring you to adjust or
                    cancel your donation or accommodation reservation. This Refund &amp; Cancellation Policy explains how we
                    handle such requests.
                </p>

                <h3>1. Donations</h3>
                <p>
                    Contributions made to Shri Gajanan Maharaj Sansthan are voluntary offerings and are generally
                    non-refundable. These funds support our charitable and spiritual activities. However, if a donation was
                    made due to a technical error or duplicate transaction, we may consider a refund on a case-by-case
                    basis. Please reach out to us promptly if you believe a mistake occurred.
                </p>

                <h3>2. Bhakta Niwas Accommodation</h3>
                <p>
                    Cancellations and refunds for <a href="{{ route('bhaktaNiwas') }}"
                        class="refund-inline-link">Bhakta Niwas room bookings</a> are governed by the following rules:
                </p>
                <ul>
                    <li><strong>Advance Cancellation:</strong> To cancel your reservation, please notify us via email or
                        phone at least 24 hours prior to your scheduled arrival.</li>
                    <li><strong>Refund Eligibility:</strong> Refunds for eligible cancellations will be processed in
                        accordance with the Sansthan's prevailing guidelines. A nominal cancellation fee may be deducted.
                    </li>
                    <li><strong>Processing Timeline:</strong> Approved refunds are typically credited within 7–10 business
                        days to the original payment source.</li>
                    <li><strong>No-Show Policy:</strong> If you do not arrive on the booked date without prior
                        cancellation, the booking amount may be forfeited.</li>
                </ul>

                <h3>3. Special Events & Programs</h3>
                <p>
                    Registration fees for special spiritual events, workshops, or ceremonies are generally non-refundable.
                    If an event is cancelled by the Sansthan, a full refund will be issued to all registered participants.
                </p>

                <h3>4. Policy Updates</h3>
                <p>
                    Shri Gajanan Maharaj Sansthan reserves the right to revise this Refund &amp; Cancellation Policy at any
                    time. Any modifications will be reflected on this page with an updated effective date.
                </p>

                <h3>5. Get in Touch</h3>
                <p>
                    For any questions, refund requests, or cancellation assistance, please <a href="{{ route('contact') }}"
                        class="refund-inline-link">contact our team</a> or call:
                    <br><strong>Phone:</strong> <a href="{{ seo_phone_tel() }}" class="refund-inline-link">{{ seo_phone_display() }}</a>
                </p>

                <!-- Related Pages -->
                <div class="refund-related-section">
                    <h4>You May Also Find Useful</h4>
                    <div class="refund-related-links">
                        <a href="{{ route('locations') }}">Bhakta Niwas Accommodation</a>
                        <a href="{{ route('booking') }}">Room Types &amp; Suggested Donations</a>
                        <a href="{{ route('terms-conditions') }}">Terms &amp; Conditions</a>
                        <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                    </div>
                </div>
            </section>

            <!-- Bottom Strip -->
            <div class="refund-bottom-strip">
                <a href="{{ route('bhaktaNiwas') }}">View Bhakta Niwas options</a>
                <a href="{{ route('contact') }}">Contact us for cancellations</a>
                <a href="{{ route('locations') }}">Find accommodation by location</a>
            </div>

        </div>
    </div>
@endsection