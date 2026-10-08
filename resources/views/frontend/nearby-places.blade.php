@extends('frontend.layouts.master')

@push('page-css')
    <link rel="stylesheet" href="{{ asset('frontend/css/location.css') }}">
@endpush

@section('content')
<section class="container py-5" style="padding-top: 160px !important;">
    <h1 class="fw-bold mb-3" style="color: var(--theme-maroon, #800000);">Places to Visit Near Shegaon</h1>
    <p class="lead text-secondary mb-4">
        Explore spiritual, cultural, and scenic attractions around Shegaon during your pilgrimage stay.
    </p>

    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="p-4 border rounded bg-white h-100">
                <h3 class="h5 fw-bold" style="color: var(--theme-maroon, #800000);">Anand Sagar Spiritual Park</h3>
                <p class="small text-secondary">A magnificent spiritual park featuring water bodies, landscaped gardens, meditation centers, and evening light shows.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-4 border rounded bg-white h-100">
                <h3 class="h5 fw-bold" style="color: var(--theme-maroon, #800000);">Historical Temple Precincts</h3>
                <p class="small text-secondary">Holy sites in and around Shegaon associated with the life, teachings, and spiritual presence of Shri Gajanan Maharaj.</p>
            </div>
        </div>
    </div>
</section>
@endsection
