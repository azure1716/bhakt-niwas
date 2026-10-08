<?php

/**
 * SEO Configuration
 *
 * Central source of truth for all page SEO data.
 * Controllers read from this file instead of hardcoding meta tags.
 * Update this file when you add new pages.
 *
 * Env vars used:
 *   SEO_PHONE       - Primary booking helpline (e.g. +919523016487)
 *   SEO_EMAIL       - Primary contact email
 *   GSC_VERIFICATION - Google Search Console HTML tag verification token
 *   GA4_ID          - Google Analytics 4 measurement ID
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Site-wide Defaults
    |--------------------------------------------------------------------------
    */
    'site_name'       => 'Shri Gajanan Maharaj Sansthan',
    'phone'           => env('SEO_PHONE', '[CLIENT TO CONFIRM: canonical booking phone number]'),
    'email'           => env('SEO_EMAIL', '[CLIENT TO CONFIRM: canonical contact email]'),
    'gsc_token'       => env('GSC_VERIFICATION', ''),
    'ga4_id'          => env('GA4_ID', ''),

    // Default OG image (1200x630) - update once you have a proper share image
    'default_og_image' => '/frontend/images/temple1.jpg',

    // Organisation schema data
    'org' => [
        'name'        => 'Shri Gajanan Maharaj Sansthan',
        'legal_name'  => 'Shri Gajanan Maharaj Sansthan Shegaon',
        'url'         => env('APP_URL'),
        'logo'        => '/frontend/images/GM_sansthan.png',
        'founded'     => '1908',
        'area_served' => ['Shegaon', 'Pandharpur', 'Trimbakeshwar', 'Omkareshwar'],
        'same_as'     => [
            // Add Google Business Profile URL, Facebook page URL, etc. once created
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Per-Page SEO Data
    |--------------------------------------------------------------------------
    | Keys must match the route name.
    | noindex: true will output <meta name="robots" content="noindex, follow">
    */
    'pages' => [

        'home' => [
            'title'       => 'Shegaon Bhakta Niwas Room Booking | Rent, Availability & Facilities',
            'description' => 'Book Shegaon Bhakta Niwas rooms at Shri Gajanan Maharaj Sansthan. Check room rent, price list, availability and facilities near Gajanan Maharaj Temple. WhatsApp booking available.',
            'h1'          => 'Shegaon Bhakta Niwas Room Booking',
            'og_image'    => '/frontend/images/temple1.jpg',
            'schema_type' => 'WebSite',
            'noindex'     => false,
        ],

        'about' => [
            'title'       => 'About Shri Gajanan Maharaj Sansthan Shegaon | Mission & Seva',
            'description' => 'Learn about the official Shri Gajanan Maharaj Sansthan Shegaon - its history since 1908, devotee services, Bhakta Niwas accommodation, mahaprasad and spiritual mission.',
            'h1'          => 'About Shri Gajanan Maharaj Sansthan Shegaon',
            'og_image'    => '/frontend/images/temple1.jpg',
            'schema_type' => 'AboutPage',
            'noindex'     => false,
        ],

        'booking' => [
            'title'       => 'Book Shegaon Bhakta Niwas Room Online | Step-by-Step Guide',
            'description' => 'Book Shegaon Bhakta Niwas room online via WhatsApp or call. Learn the booking process, documents needed, check-in time and how to confirm your room reservation.',
            'h1'          => 'Book Shegaon Bhakta Niwas Room Online',
            'og_image'    => '/frontend/images/temple1.jpg',
            'schema_type' => 'ContactPage',
            'noindex'     => false,
        ],

        'locations' => [
            'title'       => 'Bhakta Niwas Locations | Shegaon, Pandharpur, Trimbakeshwar, Omkareshwar',
            'description' => 'Find and book Bhakta Niwas rooms at all Shri Gajanan Maharaj Sansthan locations - Shegaon, Pandharpur, Trimbakeshwar and Omkareshwar. Compare room types and facilities.',
            'h1'          => 'Shri Gajanan Maharaj Sansthan Bhakta Niwas Locations',
            'og_image'    => '/frontend/images/temple1.jpg',
            'schema_type' => 'CollectionPage',
            'noindex'     => false,
        ],

        'blog' => [
            'title'       => 'Shegaon Bhakta Niwas Blog | Pilgrimage & Travel Guides',
            'description' => 'Read travel guides, booking tips and pilgrimage information for Shegaon Bhakta Niwas. Articles on how to reach Shegaon, room booking process, darshan timings and more.',
            'h1'          => 'Shegaon Pilgrimage Travel Blog',
            'og_image'    => '/frontend/images/temple1.jpg',
            'schema_type' => 'Blog',
            'noindex'     => false,
        ],

        'bhaktaNiwas' => [
            // /bhakta-niwas redirects to /shegaon-bhakta-niwas (301)
            'title'       => 'Shegaon Bhakta Niwas | Shri Gajanan Maharaj Sansthan Accommodation',
            'description' => 'Complete guide to Shegaon Bhakta Niwas - the official accommodation at Shri Gajanan Maharaj Sansthan. Room types, rent, facilities, booking process and contact details.',
            'h1'          => 'Shegaon Bhakta Niwas - Official Accommodation Guide',
            'og_image'    => '/frontend/images/loc2.jpg',
            'schema_type' => 'LodgingBusiness',
            'noindex'     => false,
        ],

        'darshan-timings' => [
            'title'       => 'Gajanan Maharaj Temple Shegaon | Darshan Guidance & Pilgrim Stay',
            'description' => 'Plan your visit to Shri Gajanan Maharaj Temple Shegaon. Get information on darshan guidance, Bhakta Niwas room booking, travel options and Sansthan services.',
            'h1'          => 'Gajanan Maharaj Temple Shegaon - Darshan Guidance',
            'og_image'    => '/frontend/images/temple1.jpg',
            'schema_type' => 'Event',
            'noindex'     => false,
        ],

        'how-to-reach' => [
            'title'       => 'How to Reach Shegaon | Train, Bus, Road & Shegaon Station to Temple',
            'description' => 'Complete travel guide: how to reach Shegaon by train (SGO station), bus, road or air. Free bus service from Shegaon Railway Station to Gajanan Maharaj Temple.',
            'h1'          => 'How to Reach Shegaon - Complete Travel Guide',
            'og_image'    => '/frontend/images/temple1.jpg',
            'schema_type' => 'TouristAttraction',
            'noindex'     => false,
        ],

        'contact' => [
            'title'       => 'Shegaon Bhakta Niwas Booking Contact Number & Helpline',
            'description' => 'Get Shegaon Bhakta Niwas booking contact number, WhatsApp helpline, email and address for Shri Gajanan Maharaj Sansthan. Contact us for room booking and darshan enquiries.',
            'h1'          => 'Shegaon Bhakta Niwas Booking Contact Number',
            'og_image'    => '/frontend/images/temple1.jpg',
            'schema_type' => 'ContactPage',
            'noindex'     => false,
        ],

        'privacy-policy' => [
            'title'       => 'Privacy Policy | Shri Gajanan Maharaj Sansthan',
            'description' => 'Read the privacy policy of Shri Gajanan Maharaj Sansthan. Learn how we collect, use and protect your personal information when you use our booking and darshan services.',
            'h1'          => 'Privacy Policy',
            'og_image'    => '/frontend/images/temple1.jpg',
            'schema_type' => 'WebPage',
            'noindex'     => false,
        ],

        'terms-conditions' => [
            'title'       => 'Terms & Conditions | Shri Gajanan Maharaj Sansthan',
            'description' => 'Read the terms and conditions of Shri Gajanan Maharaj Sansthan. Understand the guidelines for accommodation bookings, donations, and use of our pilgrimage services.',
            'h1'          => 'Terms & Conditions',
            'og_image'    => '/frontend/images/temple1.jpg',
            'schema_type' => 'WebPage',
            'noindex'     => false,
        ],

        'refund-cancellation-policy' => [
            'title'       => 'Refund & Cancellation Policy | Shri Gajanan Maharaj Sansthan',
            'description' => 'Read the refund and cancellation policy for Shegaon Bhakta Niwas room bookings at Shri Gajanan Maharaj Sansthan. Understand our policies before booking your accommodation.',
            'h1'          => 'Refund & Cancellation Policy',
            'og_image'    => '/frontend/images/temple1.jpg',
            'schema_type' => 'WebPage',
            'noindex'     => false,
        ],

        'disclaimer' => [
            'title'       => 'Disclaimer | Shri Gajanan Maharaj Sansthan',
            'description' => 'Disclaimer for Shri Gajanan Maharaj Sansthan website. Read about our limitations of liability, external links policy and general disclaimer for pilgrimage information.',
            'h1'          => 'Disclaimer',
            'og_image'    => '/frontend/images/temple1.jpg',
            'schema_type' => 'WebPage',
            'noindex'     => false,
        ],

        'room-rent' => [
            'title'       => 'Shegaon Bhakta Niwas Room Rent & Tariff Guide | Sansthan Stay',
            'description' => 'Guide to Shegaon Bhakta Niwas room rent, donation tariffs and lodging categories near Gajanan Maharaj Temple. Contact helpline for availability.',
            'h1'          => 'Shegaon Bhakta Niwas Room Rent & Tariff Guide',
            'og_image'    => '/frontend/images/temple1.jpg',
            'schema_type' => 'WebPage',
            'noindex'     => false,
        ],

        'facilities' => [
            'title'       => 'Shegaon Bhakta Niwas Accommodation Facilities | Mahaprasad & Parking',
            'description' => 'Discover facilities at Shegaon Bhakta Niwas including Mahaprasad bhojan, morning hot water, complimentary station bus and parking.',
            'h1'          => 'Shegaon Bhakta Niwas Accommodation Facilities',
            'og_image'    => '/frontend/images/temple1.jpg',
            'schema_type' => 'WebPage',
            'noindex'     => false,
        ],

        'availability' => [
            'title'       => 'Shegaon Bhakta Niwas Room Availability & Booking Guidance',
            'description' => 'Check room availability for Shegaon Bhakta Niwas. Guidance for festival rush dates, weekend stay planning and WhatsApp availability checks.',
            'h1'          => 'Shegaon Bhakta Niwas Room Availability',
            'og_image'    => '/frontend/images/temple1.jpg',
            'schema_type' => 'WebPage',
            'noindex'     => false,
        ],

        'affordable-stay' => [
            'title'       => 'Affordable Stay Near Gajanan Maharaj Temple Shegaon | Sansthan Stay',
            'description' => 'Guide to affordable pilgrim stay options in Shegaon. Compare Shegaon Bhakta Niwas, Anand Vihar, and Visawa operated by the Sansthan.',
            'h1'          => 'Affordable Stay Near Gajanan Maharaj Temple Shegaon',
            'og_image'    => '/frontend/images/temple1.jpg',
            'schema_type' => 'WebPage',
            'noindex'     => false,
        ],

        'nearby-places' => [
            'title'       => 'Places to Visit Near Shegaon | Anand Sagar & Pilgrimage Guide',
            'description' => 'Explore places to visit near Shegaon including Anand Sagar spiritual park, Shri Gajanan Maharaj Temple, and surrounding Buldhana attractions.',
            'h1'          => 'Places to Visit Near Shegaon',
            'og_image'    => '/frontend/images/temple1.jpg',
            'schema_type' => 'WebPage',
            'noindex'     => false,
        ],

        'faq' => [
            'title'       => 'Shegaon Bhakta Niwas FAQ | Frequently Asked Questions',
            'description' => 'Find answers to frequently asked questions about Shegaon Bhakta Niwas room booking, room rates, check-in guidelines, and temple darshan.',
            'h1'          => 'Shegaon Bhakta Niwas Frequently Asked Questions',
            'og_image'    => '/frontend/images/temple1.jpg',
            'schema_type' => 'FAQPage',
            'noindex'     => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Location Page SEO Data
    |--------------------------------------------------------------------------
    | Keyed by slug used in the route.
    | These are the CLEAN new URLs (e.g. /shegaon-bhakta-niwas).
    */
    'locations' => [

        'shegaon-bhakta-niwas' => [
            'title'       => 'Shegaon Bhakta Niwas Room Booking | Shri Gajanan Maharaj Sansthan',
            'description' => 'Book rooms at Shri Gajanan Maharaj Sansthan Shegaon Bhakta Niwas near the temple. Check room rent, AC/Non-AC options, facilities, check-in time and how to book via WhatsApp.',
            'h1'          => 'Shri Gajanan Maharaj Sansthan Shegaon Bhakta Niwas',
            'og_image'    => '/frontend/images/loc2.jpg',
            'schema_type' => 'LodgingBusiness',
            'noindex'     => false,
        ],

        'shegaon-anand-vihar' => [
            'title'       => 'Shegaon Anand Vihar Booking | Shri Gajanan Maharaj Sansthan',
            'description' => 'Book rooms at Shri Gajanan Maharaj Sansthan Shegaon Anand Vihar near Anand Sagar. AC rooms, facilities, room rent and booking process for devotees visiting Shegaon.',
            'h1'          => 'Shri Gajanan Maharaj Sansthan Shegaon Anand Vihar',
            'og_image'    => '/frontend/images/loc3.jpg',
            'schema_type' => 'LodgingBusiness',
            'noindex'     => false,
        ],

        'shegaon-visawa' => [
            'title'       => 'Shegaon Visawa Bhakta Niwas Booking | Near Railway Station',
            'description' => 'Book rooms at Shri Gajanan Maharaj Sansthan Shegaon Visawa near the railway station. Room rates, facilities and booking steps for devotees arriving by train to Shegaon.',
            'h1'          => 'Shri Gajanan Maharaj Sansthan Shegaon Visawa',
            'og_image'    => '/frontend/images/temple1.jpg',
            'schema_type' => 'LodgingBusiness',
            'noindex'     => false,
        ],

        'pandharpur-bhakta-niwas' => [
            'title'       => 'Pandharpur Bhakta Niwas Booking | Shri Gajanan Maharaj Sansthan',
            'description' => 'Book rooms at Shri Gajanan Maharaj Sansthan Pandharpur near Vitthal Rukmini Temple. Room rent, facilities and booking process for Pandharpur pilgrimage stay.',
            'h1'          => 'Shri Gajanan Maharaj Sansthan Pandharpur Bhakta Niwas',
            'og_image'    => '/frontend/images/location1.jpg',
            'schema_type' => 'LodgingBusiness',
            'noindex'     => false,
        ],

        'trimbakeshwar-bhakta-niwas' => [
            'title'       => 'Trimbakeshwar Bhakta Niwas Booking | Shri Gajanan Maharaj Sansthan',
            'description' => 'Book rooms at Shri Gajanan Maharaj Sansthan Trimbakeshwar near Jyotirlinga and Kushavarta Kund. Room rent, Satvik bhojan, parking and how to book your stay.',
            'h1'          => 'Shri Gajanan Maharaj Sansthan Trimbakeshwar Bhakta Niwas',
            'og_image'    => '/frontend/images/SansthanTrimbakeshwar.png',
            'schema_type' => 'LodgingBusiness',
            'noindex'     => false,
        ],

        'omkareshwar-bhakta-niwas' => [
            'title'       => 'Omkareshwar Bhakta Niwas Booking | Shri Gajanan Maharaj Sansthan',
            'description' => 'Book rooms at Shri Gajanan Maharaj Sansthan Omkareshwar near Jyotirlinga. Room rent, facilities and booking process for Omkareshwar Narmada pilgrimage stay.',
            'h1'          => 'Shri Gajanan Maharaj Sansthan Omkareshwar Bhakta Niwas',
            'og_image'    => '/frontend/images/SansthanOmkareshwar.png',
            'schema_type' => 'LodgingBusiness',
            'noindex'     => false,
        ],

    ],

];
