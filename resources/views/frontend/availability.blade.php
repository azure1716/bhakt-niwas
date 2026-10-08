@extends('frontend.layouts.master')

@push('page-css')
    <link rel="stylesheet" href="{{ asset('frontend/css/location.css') }}">
@endpush

@section('content')
<section class="container py-5" style="padding-top: 160px !important;">
    <h1 class="fw-bold mb-3" style="color: var(--theme-maroon, #800000);">Shegaon Bhakta Niwas Room Availability Guide</h1>
    <p class="lead text-secondary mb-4">
        Learn how room availability works at Shri Gajanan Maharaj Sansthan Bhakta Niwas and how to plan your stay during peak festival periods.
    </p>

    <div class="p-4 rounded mb-5 bg-white border">
        <h3 class="h5 fw-bold mb-3" style="color: var(--theme-maroon, #800000);">Understanding Room Allocation Rules</h3>
        <p class="text-secondary">
            Bhakta Niwas accommodations are allocated directly at official counters on a first-come, first-served basis upon pilgrim arrival. During major festival periods (such as Prakat Din, Ram Navami, or Ashadhi Ekadashi), pilgrim influx is very high, and room availability fills quickly.
        </p>
        <div class="row g-4 my-3">
            <div class="col-md-6">
                <div class="p-3 bg-light rounded">
                    <h4 class="h6 fw-bold" style="color: #800000;">Peak Travel Seasons</h4>
                    <p class="small text-secondary mb-0">Dec–Jan winter holidays, major festival days, and long weekends experience heavy crowd density.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 bg-light rounded">
                    <h4 class="h6 fw-bold" style="color: #800000;">Regular Weekdays</h4>
                    <p class="small text-secondary mb-0">Mon–Thu non-festival days generally offer easier counter availability for arriving families.</p>
                </div>
            </div>
        </div>
        <a href="{{ seo_whatsapp_url('Hi, I would like to check room availability status for my travel dates.') }}" target="_blank" class="btn btn-orange px-4 py-2" onclick="if(window.trackWhatsApp) window.trackWhatsApp()">
            <i class="fab fa-whatsapp me-2"></i> Check Availability via WhatsApp
        </a>
    </div>
</section>
@endsection
