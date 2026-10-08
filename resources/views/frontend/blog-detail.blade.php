@extends('frontend.layouts.master')

@section('content')

@push('page-css')
<link rel="stylesheet" href="{{ asset('frontend/css/blog-detail.css') }}">
@endpush


    <!-- Hero Section: LCP image as proper <img> for alt text and crawlability -->
    <section class="bd-hero-section bd-hero-section--with-img">
        @if ($blog->image)
        <img
            src="{{ asset($blog->image) }}"
            alt="{{ $blog->title }}"
            class="bd-hero-bg-img"
            width="1200"
            height="400"
            fetchpriority="high"
            loading="eager"
        />
        @endif
        <div class="container">
            <div class="bd-hero-content">
                <h1>{{ $blog->title }}</h1>
                <div class="bd-hero-meta">
                    <span><i class="far fa-calendar-alt" aria-hidden="true"></i>
                        <time datetime="{{ \Carbon\Carbon::parse($blog->published_date)->toDateString() }}">
                        {{ \Carbon\Carbon::parse($blog->published_date)->format('M d, Y') }}
                        </time>
                    </span>
                    <span><i class="far fa-clock" aria-hidden="true"></i> {{ $readingTime }} min read</span>
                    <span><i class="fas fa-building" aria-hidden="true"></i> Shri Gajanan Maharaj Sansthan</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content & Sidebar -->
    <section class="bd-content-wrapper">
        <div class="container">
            <div class="row g-5">
                <!-- LEFT COLUMN: Blog Content -->
                <div class="col-lg-8">
                    <div class="bd-content-body">
                        {!! $blog->description !!}

                        <!-- Author Bio Box -->
                        <div class="bd-author-box">
                            <div class="bd-author-avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <h6>Shri Gajanan Maharaj Sansthan – Official</h6>
                                <p>
                                    Our content team is committed to sharing authentic guidance and
                                    inspiration to enrich your pilgrimage experience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN: Sidebar (Quick Actions & Enquiry) -->
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div style="position: sticky; top: 140px; z-index: 10;">
                        <!-- Quick Action Card -->
                        <div class="bd-sidebar-card">
                            <h5>
                                <i class="fas fa-bolt me-2" style="color: var(--theme-orange)"></i>
                                Reach Us Instantly
                            </h5>
                            <div class="bd-sidebar-btn-group">
                                <a href="{{ seo_whatsapp_url('Hi%2C%20I%20read%20your%20article%20and%20want%20to%20know%20more%20about%20accommodation.') }}"
                                    target="_blank" class="bd-sidebar-btn bd-btn-wa">
                                    <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                                </a>
                                <a href="{{ seo_phone_tel() }}" class="bd-sidebar-btn bd-btn-call">
                                    <i class="fas fa-phone"></i> Call Now
                                </a>
                            </div>
                        </div>

                        <!-- Enquiry Form Card -->
                        <div class="bd-sidebar-card">
                            <h5>
                                <i class="fas fa-pen me-2" style="color: var(--theme-orange)"></i>
                                Submit a Quick Query
                            </h5>
                            <form id="waEnquiryForm">
                                <label class="bd-form-label">Choose Pilgrim Centre</label>
                                <select class="bd-form-select" id="enqLocation">
                                    <option value="Shri Gajanan Maharaj Sansthan Shegaon">Shegaon</option>
                                    <option value="Shri Gajanan Maharaj Sansthan Pandharpur">Pandharpur</option>
                                    <option value="Shri Gajanan Maharaj Sansthan Trimbakeshwar">Trimbakeshwar</option>
                                    <option value="Shri Gajanan Maharaj Sansthan Omkareshwar">Omkareshwar</option>
                                </select>

                                <label class="bd-form-label">Check‑in Date</label>
                                <input type="date" class="bd-form-input" id="enqDate" required />

                                <label class="bd-form-label">Number of Guests</label>
                                <input type="number" class="bd-form-input" id="enqGuests" value="2" min="1" />

                                <label class="bd-form-label">Your Full Name</label>
                                <input type="text" class="bd-form-input" id="enqName" placeholder="Enter your full name"
                                    required />

                                <label class="bd-form-label">Contact Number</label>
                                <input type="tel" class="bd-form-input" id="enqPhone" placeholder="+91 90000 00000"
                                    required />

                                <label class="bd-form-label">Additional Notes</label>
                                <textarea class="bd-form-input" id="enqMessage" placeholder="Any special requests or questions..."></textarea>

                                <button type="button" class="bd-btn-submit" onclick="submitEnquiryWhatsApp()">
                                    <i class="fab fa-whatsapp me-2"></i> Send via WhatsApp
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </section>

    <!-- Related Articles (Dynamic) -->
    <section class="bd-related-wrapper">
        <div class="container">
            <h3 class="bd-related-title">You May Also Enjoy</h3>
            <div class="row g-4">
                @forelse($relatedBlogs as $related)
                    <div class="col-lg-4 col-md-6">
                        <div class="bd-related-card">
                            <div class="bd-related-meta">
                                <i class="far fa-calendar-alt"></i>
                                {{ \Carbon\Carbon::parse($related->published_date)->format('M d, Y') }} •
                                <i class="far fa-clock"></i> 2 min read
                            </div>
                            <a href="{{ route('blog.detail', $related->slug) }}" class="bd-related-title-link">
                                {{ $related->title }}
                            </a>
                            <p class="bd-related-desc">
                                {{ \Illuminate\Support\Str::limit($related->short_description, 80) }}
                            </p>
                            <div class="bd-related-tags">
                                @if (!empty($related->categories) && is_array($related->categories))
                                    @foreach (array_slice($related->categories, 0, 2) as $cat)
                                        <span class="bd-related-tag">{{ $cat }}</span>
                                    @endforeach
                                @endif
                                @if (!empty($related->topics) && is_array($related->topics))
                                    @foreach (array_slice($related->topics, 0, 1) as $topic)
                                        <span class="bd-related-tag orange">{{ $topic }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <a href="{{ route('blog.detail', $related->slug) }}" class="bd-related-read">
                                Continue Reading <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted">No related articles at this time.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection

@section('javascript-section')
    <!-- WhatsApp Enquiry Handler -->
    <script>
        function submitEnquiryWhatsApp() {
            // Gather form values
            const location = document.getElementById('enqLocation').value;
            const date = document.getElementById('enqDate').value;
            const guests = document.getElementById('enqGuests').value;
            const name = document.getElementById('enqName').value;
            const phone = document.getElementById('enqPhone').value;
            const message = document.getElementById('enqMessage').value;

            // Basic validation
            if (!date || !name || !phone) {
                alert("Please fill in the check-in date, your name, and phone number.");
                return;
            }

            // Build the WhatsApp message (URL‑encoded)
            let finalMessage = `🙏 *New Blog Enquiry*%0A%0A`;
            finalMessage += `*Location:* ${location}%0A`;
            finalMessage += `*Check-in:* ${date}%0A`;
            finalMessage += `*Guests:* ${guests}%0A`;
            finalMessage += `*Name:* ${name}%0A`;
            finalMessage += `*Phone:* ${phone}%0A%0A`;
            finalMessage += `*Message:* ${message || 'No additional details provided.'}`;

            const whatsappNumber = "{{ preg_replace('/[^0-9]/', '', config('seo.phone')) }}";

            const waUrl = `https://wa.me/${whatsappNumber}?text=${finalMessage}`;
            window.open(waUrl, '_blank');
        }
    </script>
@endsection