<?php

/**
 * Unverified Facts Registry
 *
 * All unconfirmed client facts MUST remain null until confirmed.
 * When a fact is null, Blade templates must NOT render the dependent UI element,
 * and JSON-LD schema objects must omit dependent properties entirely.
 */

return [
    'phone'                => env('SEO_PHONE', '9031525548'),
    'email'                => env('SEO_EMAIL', 'bhaktnivasujjainbookingmahakal@gmail.com'),

    // All facts below are unconfirmed by client (set to null)
    'room_rates'           => null,
    'check_in_time'        => null,
    'check_out_time'       => null,
    'id_documents'         => null,
    'darshan_timings'      => null,
    'aarti_timings'        => null,
    'free_bus_schedule'    => null,
    'parking_capacity'     => null,
    'mahaprasad_timings'   => null,
    'hot_water_timings'    => null,
    'anand_sagar_fee'      => null,
    'anand_sagar_timings'  => null,
    'cancellation_rules'   => null,
];
