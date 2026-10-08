@extends('frontend.layouts.master')

@push('page-css')
    <link rel="stylesheet" href="{{ asset('frontend/css/location.css') }}">
@endpush

@section('content')
<section class="container py-5" style="padding-top: 160px !important;">
    <h1 class="fw-bold mb-3" style="color: var(--theme-maroon, #800000);">Shegaon Bhakta Niwas Accommodation Facilities</h1>
    <p class="lead text-secondary mb-4">
        Shri Gajanan Maharaj Sansthan provides clean, disciplined, and comfortable lodging facilities designed to serve visiting pilgrim families and senior citizens.
    </p>

    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="p-4 border rounded bg-white h-100">
                <div class="mb-3 text-warning fs-3"><i class="fas fa-broom"></i></div>
                <h3 class="h5 fw-bold" style="color: var(--theme-maroon, #800000);">Pristine Cleanliness</h3>
                <p class="small text-secondary">Rooms, bed linen, corridors, and sanitation facilities are cleaned regularly by dedicated Sansthan volunteers and staff.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 border rounded bg-white h-100">
                <div class="mb-3 text-warning fs-3"><i class="fas fa-utensils"></i></div>
                <h3 class="h5 fw-bold" style="color: var(--theme-maroon, #800000);">Mahaprasad Dining</h3>
                <p class="small text-secondary">Bhojan Kaksha dining halls serve wholesome Satvik Mahaprasad to visiting devotees daily during designated meal hours.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 border rounded bg-white h-100">
                <div class="mb-3 text-warning fs-3"><i class="fas fa-bus"></i></div>
                <h3 class="h5 fw-bold" style="color: var(--theme-maroon, #800000);">Station Transport</h3>
                <p class="small text-secondary">Sansthan shuttle buses operate between Shegaon Railway Station (SGO) and the temple complex for arriving pilgrims.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 border rounded bg-white h-100">
                <div class="mb-3 text-warning fs-3"><i class="fas fa-shield-alt"></i></div>
                <h3 class="h5 fw-bold" style="color: var(--theme-maroon, #800000);">Safe & Peaceful Atmosphere</h3>
                <p class="small text-secondary">24-hour security personnel and quiet hours ensure a peaceful environment suitable for families and senior citizens.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 border rounded bg-white h-100">
                <div class="mb-3 text-warning fs-3"><i class="fas fa-shower"></i></div>
                <h3 class="h5 fw-bold" style="color: var(--theme-maroon, #800000);">Water & Sanitation</h3>
                <p class="small text-secondary">Continuous water supply and hot water facilities are provided across major accommodation blocks.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 border rounded bg-white h-100">
                <div class="mb-3 text-warning fs-3"><i class="fas fa-parking"></i></div>
                <h3 class="h5 fw-bold" style="color: var(--theme-maroon, #800000);">Vehicle Parking</h3>
                <p class="small text-secondary">Dedicated parking areas are available for pilgrim cars, private vehicles, and travel buses near Bhakta Niwas complexes.</p>
            </div>
        </div>
    </div>
</section>
@endsection
