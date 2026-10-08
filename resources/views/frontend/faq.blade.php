@extends('frontend.layouts.master')

@push('page-css')
    <link rel="stylesheet" href="{{ asset('frontend/css/location.css') }}">
@endpush

@section('content')
<section class="container py-5" style="padding-top: 160px !important;">
    <h1 class="fw-bold mb-3" style="color: var(--theme-maroon, #800000);">Shegaon Bhakta Niwas FAQ & Help Center</h1>
    <p class="lead text-secondary mb-4">
        Find answers to common questions about room booking, check-in rules, travel guidance, and temple etiquette.
    </p>

    <div class="accordion mb-5" id="faqAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#f1">
                    How do I inquire about room booking at Shegaon Bhakta Niwas?
                </button>
            </h2>
            <div id="f1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-secondary">
                    You can submit an inquiry via our online form, contact the official helpline on WhatsApp, or speak to the booking office by telephone. Rooms are allocated at official counters upon arrival.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#f2">
                    What ID documents are required at check-in?
                </button>
            </h2>
            <div id="f2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-secondary">
                    Every adult guest must present a valid government-issued photo ID (Aadhaar Card, Voter ID, Passport, or Driving License) at the check-in counter.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#f3">
                    Is entry or darshan ticket required at the temple?
                </button>
            </h2>
            <div id="f3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-secondary">
                    No. Temple darshan is open to all devotees without any entry fee or ticket.
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
