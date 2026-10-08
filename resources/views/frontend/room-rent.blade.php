@extends('frontend.layouts.master')

@push('page-css')
    <link rel="stylesheet" href="{{ asset('frontend/css/location.css') }}">
@endpush

@section('content')
<section class="container py-5" style="padding-top: 160px !important;">
    <h1 class="fw-bold mb-3" style="color: var(--theme-maroon, #800000);">Shegaon Bhakta Niwas Room Rent & Tariff Information</h1>
    <p class="lead text-secondary mb-4">
        Discover how room rent and nominal tariff contributions work for pilgrim lodging at Shri Gajanan Maharaj Sansthan Bhakta Niwas across Shegaon, Pandharpur, Trimbakeshwar, and Omkareshwar.
    </p>

    @if(fact('room_rates'))
    <div class="table-responsive my-4">
        <table class="table table-bordered align-middle">
            <thead class="table-dark">
                <tr><th>Property</th><th>Room Category</th><th>Nominal Rent Tariff</th><th>Occupancy</th></tr>
            </thead>
            <tbody>
                <tr><td>Shegaon Main Bhakta Niwas</td><td>Standard Family Room</td><td>{{ fact('room_rates') }}</td><td>2-4 Persons</td></tr>
                <tr><td>Anand Vihar Shegaon</td><td>AC Family Suite</td><td>{{ fact('room_rates') }}</td><td>2-4 Persons</td></tr>
            </tbody>
        </table>
    </div>
    @else
    <div class="p-4 rounded mb-5" style="background: #fff8f0; border: 1px solid #fed7aa;">
        <h3 class="h5 fw-bold mb-2" style="color: #800000;">Official Tariff Confirmation Policy</h3>
        <p class="text-secondary mb-3">
            Room tariffs and nominal maintenance contributions at Bhakta Niwas are fixed directly by the Sansthan administrative office. Rates are kept affordable on a donation and cost-recovery basis to support visiting pilgrim families. Exact daily room rates are confirmed by the booking counter and official helpline at the time of inquiry.
        </p>
        <div class="d-flex flex-wrap gap-2">
            <a href="{{ seo_whatsapp_url('Hi, I would like to inquire about room rent tariffs for Bhakta Niwas accommodation.') }}" target="_blank" class="btn btn-orange px-4 py-2" onclick="if(window.trackWhatsApp) window.trackWhatsApp()">
                <i class="fab fa-whatsapp me-2"></i> Inquire Room Rates on WhatsApp
            </a>
            <a href="{{ seo_phone_tel() }}" class="btn btn-outline-dark px-4 py-2" onclick="if(window.trackCall) window.trackCall()">
                <i class="fas fa-phone me-2"></i> Call Booking Office
            </a>
        </div>
    </div>
    @endif

    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="p-4 border rounded bg-white h-100">
                <h4 class="h5 fw-bold" style="color: var(--theme-maroon, #800000);">How Tariff Contributions Work</h4>
                <p class="small text-secondary">
                    Shri Gajanan Maharaj Sansthan operates on a non-profit, service-oriented framework. Maintenance contributions received from room lodging are utilized for housekeeping, sanitation, water supply, electricity, and continuous maintenance of pilgrim complexes.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-4 border rounded bg-white h-100">
                <h4 class="h5 fw-bold" style="color: var(--theme-maroon, #800000);">Check-in & Payment Guidelines</h4>
                <p class="small text-secondary">
                    Tariff payments and receipts are issued directly at the official Bhakta Niwas booking counters upon check-in. Devotees are advised to collect an official Sansthan receipt for all contributions made.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
