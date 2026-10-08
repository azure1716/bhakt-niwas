@extends('frontend.layouts.master')

@push('page-css')
    <link rel="stylesheet" href="{{ asset('frontend/css/location.css') }}">
@endpush

@section('content')
<section class="container py-5" style="padding-top: 160px !important;">
    <h1 class="fw-bold mb-3" style="color: var(--theme-maroon, #800000);">Affordable Stay Near Gajanan Maharaj Temple Shegaon</h1>
    <p class="lead text-secondary mb-4">
        A guide comparing Shri Gajanan Maharaj Sansthan's official accommodation options to help pilgrim families choose the best stay for their budget and needs.
    </p>

    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="p-4 border rounded bg-white h-100">
                <h3 class="h5 fw-bold" style="color: var(--theme-maroon, #800000);">Main Shegaon Bhakta Niwas</h3>
                <p class="small text-secondary mb-3">Best for direct temple darshan access. Situated within short walking distance of the main temple complex.</p>
                <a href="{{ route('location.shegaon-bhakta-niwas') }}" class="btn btn-sm btn-outline-dark">Explore Complex</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 border rounded bg-white h-100">
                <h3 class="h5 fw-bold" style="color: var(--theme-maroon, #800000);">Anand Vihar Shegaon</h3>
                <p class="small text-secondary mb-3">Best for families and senior citizens. Quiet surroundings near Anand Sagar park with spacious family suites.</p>
                <a href="{{ route('location.shegaon-anand-vihar') }}" class="btn btn-sm btn-outline-dark">Explore Complex</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 border rounded bg-white h-100">
                <h3 class="h5 fw-bold" style="color: var(--theme-maroon, #800000);">Visawa Shegaon</h3>
                <p class="small text-secondary mb-3">Best for train travelers. Conveniently located near Shegaon Railway Station for easy transit.</p>
                <a href="{{ route('location.shegaon-visawa') }}" class="btn btn-sm btn-outline-dark">Explore Complex</a>
            </div>
        </div>
    </div>
</section>
@endsection
