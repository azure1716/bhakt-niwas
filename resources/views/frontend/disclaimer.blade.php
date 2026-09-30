@extends('frontend.layouts.master')

@section('meta_title', $meta_title)
@section('meta_description', $meta_description)
@section('meta_keywords', $meta_keywords)

@section('content')
    <style>

        .disclaimer-page-wrapper {
            padding: 60px 0 80px;
            padding-top: 150px;
            background: #f9f9f9;
        }

        /* --- Page Header --- */
        .disclaimer-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .disclaimer-header h1 {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .disclaimer-header .disclaimer-date {
            color: #666;
            font-size: 1.1rem;
            font-weight: 500;
        }

        /* --- Main Content Card --- */
        .disclaimer-content-card {
            background: #fff;
            border: 1px solid #f0f0f0;
            border-radius: 4px;
            padding: 50px 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            transition: 0.3s;
            border-left: 4px solid var(--theme-orange);
            /* Accent */
        }

        .disclaimer-content-card p {
            color: #555;
            line-height: 1.8;
            font-size: 1.05rem;
            margin-bottom: 20px;
        }

        .disclaimer-content-card p:last-child {
            margin-bottom: 0;
        }

        /* --- Section Headings --- */
        .disclaimer-content-card h3 {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            font-size: 1.8rem;
            margin-top: 40px;
            margin-bottom: 15px;
        }

        .disclaimer-content-card h3:first-of-type {
            margin-top: 0;
        }

        /* --- Custom Links --- */
        .disclaimer-inline-link {
            color: var(--theme-maroon);
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
            border-bottom: 1px solid transparent;
        }

        .disclaimer-inline-link:hover {
            color: var(--theme-orange);
            border-bottom-color: var(--theme-orange);
        }

        /* --- Related Pages Section --- */
        .disclaimer-related-section {
            margin-top: 50px;
            padding-top: 30px;
            border-top: 1px solid #f0f0f0;
        }

        .disclaimer-related-section h4 {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            margin-bottom: 15px;
        }

        .disclaimer-related-links {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .disclaimer-related-links a {
            text-decoration: none;
            color: var(--theme-maroon);
            font-weight: 500;
            font-size: 15px;
            border-bottom: 1px solid transparent;
            transition: 0.3s;
            display: inline-block;
            width: fit-content;
        }

        .disclaimer-related-links a:hover {
            color: var(--theme-orange);
            border-bottom-color: var(--theme-orange);
        }

        /* --- Bottom Strip --- */
        .disclaimer-bottom-strip {
            margin-top: 40px;
            border-top: 1px solid #f0f0f0;
            padding-top: 20px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px 40px;
        }

        .disclaimer-bottom-strip a {
            color: var(--theme-orange);
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            transition: 0.3s;
        }

        .disclaimer-bottom-strip a:hover {
            color: var(--theme-maroon);
            text-decoration: underline;
        }

        /* --- Mobile Adjustments --- */
        @media (max-width: 768px) {
            .disclaimer-header h1 {
                font-size: 2.2rem;
            }

            .disclaimer-content-card {
                padding: 25px 20px;
            }

            .disclaimer-content-card h3 {
                font-size: 1.5rem;
            }
        }
    </style>

    <div class="disclaimer-page-wrapper">
        <div class="container">

            <!-- Header -->
            <section class="disclaimer-header">
                <h1>Disclaimer</h1>
                <div class="disclaimer-date">Last Updated: 15 August 2026</div>
            </section>

            <!-- Content -->
            <section class="disclaimer-content-card">
                <p>
                    The information contained on this website is for general information purposes only. The information is
                    provided by <strong>Gajanan Maharaj Sansthan</strong> and while we endeavour to keep the information up
                    to date and correct, we make no representations or warranties of any kind, express or implied, about the
                    completeness, accuracy, reliability, suitability or availability with respect to the website or the
                    information, products, services, or related graphics contained on the website for any purpose. Any
                    reliance you place on such information is therefore strictly at your own risk.
                </p>

                <h3>1. External Links Disclaimer</h3>
                <p>
                    Through this website, you are able to link to other websites which are not under the control of Gajanan
                    Maharaj Sansthan. We have no control over the nature, content, and availability of those sites. The
                    inclusion of any links does not necessarily imply a recommendation or endorse the views expressed within
                    them.
                </p>

                <h3>2. Professional Advice Disclaimer</h3>
                <p>
                    The content provided on this website is not intended to be a substitute for professional advice. Always
                    seek the advice of qualified professionals with any questions you may have regarding a medical
                    condition, legal matter, or other professional concerns.
                </p>

                <h3>3. Limitation of Liability</h3>
                <p>
                    In no event will Gajanan Maharaj Sansthan be liable for any loss or damage including without limitation,
                    indirect or consequential loss or damage, or any loss or damage whatsoever arising from loss of data or
                    profits arising out of, or in connection with, the use of this website.
                </p>

                <h3>4. Changes to This Disclaimer</h3>
                <p>
                    We reserve the right to modify this disclaimer at any time without prior notice.
                </p>

                <h3>5. Contact Us</h3>
                <p>
                    If you have any questions about this disclaimer, please <a href="{{ route('contact') }}"
                        class="disclaimer-inline-link">contact us</a> or Phone:
                    <br><strong>Phone:</strong> <a href="tel:+919523016487"
                        class="disclaimer-inline-link">+91 9523016487</a>
                </p>

                <!-- Related Pages -->
                <div class="disclaimer-related-section">
                    <h4>Related Pages</h4>
                    <div class="disclaimer-related-links">
                        <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                        <a href="{{ route('terms-conditions') }}">Terms &amp; Conditions</a>
                        <a href="{{ route('refund-cancellation-policy') }}">Refund &amp; Cancellation Policy</a>
                        <a href="{{ route('about') }}">About Shri Gajanan Maharaj Sansthan</a>
                    </div>
                </div>
            </section>

            <!-- Bottom Strip -->
            <div class="disclaimer-bottom-strip">
                <a href="{{ route('about') }}">About Shri Gajanan Maharaj Sansthan</a>
                <a href="{{ route('bhaktaNiwas') }}">Book Bhakta Niwas accommodation</a>
                <a href="{{ route('contact') }}">Contact &amp; office hours</a>
            </div>

        </div>
    </div>
@endsection
