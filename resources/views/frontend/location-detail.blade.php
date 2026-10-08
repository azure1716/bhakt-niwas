@extends('frontend.layouts.master')

@push('page-css')
    <link rel="stylesheet" href="{{ asset('frontend/css/location-detail.css') }}">
@endpush

@section('content')

    <style>
        /* --- Main Wrapper --- */
        .loc-detail-wrapper {
            padding: 40px 0 80px;
            padding-top: 150px;
            background: #fff0f0;
            overflow: visible;
        }

        /* --- Back to Locations Link --- */
        .loc-back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--theme-maroon);
            text-decoration: none;
            font-weight: 500;
            margin-bottom: 20px;
            transition: 0.3s;
        }

        .loc-back-link:hover {
            color: var(--theme-orange);
            transform: translateX(-4px);
        }

        /* --- Page Heading --- */
        .loc-detail-heading h1 {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            font-size: 2.5rem;
            margin-bottom: 5px;
        }

        .loc-detail-heading .address {
            color: #666;
            font-size: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .loc-detail-heading .address i {
            color: var(--theme-orange);
        }

        /* --- Hero Image Wrapper (Image + Overlay) --- */
        .loc-detail-hero-wrapper {
            position: relative;
            border-radius: 4px;
            overflow: hidden;
            margin: 20px 0 30px 0;
            height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .loc-detail-hero-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .loc-detail-hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.1) 80%);
            z-index: 1;
        }

        .loc-detail-hero-text {
            position: absolute;
            bottom: 30px;
            left: 30px;
            z-index: 2;
            color: #fff;
            max-width: 70%;
        }

        .loc-detail-hero-text h2 {
            font-family: "Playfair Display", serif;
            font-size: 2.5rem;
            margin-bottom: 5px;
        }

        .loc-detail-hero-text h5 {
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .loc-detail-hero-text p {
            font-size: 15px;
            opacity: 0.9;
            margin: 0;
        }

        /* --- Content Sections --- */
        .loc-detail-content h3 {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            margin-bottom: 15px;
            margin-top: 30px;
        }

        .loc-detail-content p {
            color: #555;
            line-height: 1.8;
            font-size: 15px;
            margin-bottom: .5rem;
        }

        /* --- Room Types Table --- */
        .loc-room-table-wrapper {
            border: 1px solid #f0f0f0;
            border-radius: 4px;
            overflow: hidden;
            background: #fff;
            margin-top: 15px;
        }

        .loc-room-table-wrapper table {
            width: 100%;
            border-collapse: collapse;
        }

        .loc-room-table-wrapper th {
            background: #f9fafb;
            text-align: left;
            padding: 12px 15px;
            font-weight: 600;
            color: #333;
            border-bottom: 1px solid #f0f0f0;
        }

        .loc-room-table-wrapper td {
            padding: 12px 15px;
            border-bottom: 1px solid #f0f0f0;
            color: #555;
        }

        .loc-room-table-wrapper tr:last-child td {
            border-bottom: none;
        }

        /* --- Sticky Sidebar --- */
        .loc-sticky-sidebar {
            position: -webkit-sticky;
            position: sticky;
            top: 120px;
            z-index: 999;
            transform: translateZ(0);
            will-change: transform;
        }

        /* --- Sidebar Cards --- */
        .loc-sidebar-card {
            background: #fff;
            border: 1px solid #f0f0f0;
            border-radius: 4px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
        }

        .loc-sidebar-card:last-child {
            margin-bottom: 0;
        }

        .loc-sidebar-card h5 {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            margin-bottom: 15px;
            font-size: 1.1rem;
        }

        .loc-btn-sidebar-wa {
            display: block;
            width: 100%;
            padding: 12px;
            border-radius: 4px;
            background: var(--theme-green);
            color: #fff;
            text-align: center;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
            margin-bottom: 10px;
        }

        .loc-btn-sidebar-wa:hover {
            background: #128C7E;
            transform: translateY(-2px);
        }

        .loc-btn-sidebar-outline {
            display: block;
            width: 100%;
            padding: 12px;
            border-radius: 4px;
            border: 1px solid var(--theme-maroon);
            color: var(--theme-maroon);
            text-align: center;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .loc-btn-sidebar-outline:hover {
            background: var(--theme-maroon);
            color: #fff;
            transform: translateY(-2px);
        }

        .loc-sidebar-note {
            font-size: 12px;
            color: #888;
            text-align: center;
            display: block;
            margin-top: 10px;
        }

        /* --- Related Blogs Grid --- */
        .loc-blog-rel-section {
            margin-top: 50px;
        }

        .loc-blog-rel-title {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            margin-bottom: 10px;
        }

        .loc-blog-rel-desc {
            color: #666;
            margin-bottom: 25px;
        }

        .loc-rel-blog-card {
            background: #fff;
            border: 1px solid #f0f0f0;
            border-radius: 4px;
            padding: 25px;
            height: 100%;
            transition: 0.3s;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
        }

        .loc-rel-blog-card:hover {
            transform: translateY(-5px);
            border-color: var(--theme-light-orange);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
        }

        .loc-rel-blog-meta {
            font-size: 12px;
            color: #999;
            display: flex;
            gap: 15px;
            margin-bottom: 10px;
        }

        .loc-rel-blog-title {
            font-weight: 600;
            color: #222;
            font-size: 16px;
            margin-bottom: 10px;
            line-height: 1.4;
            text-decoration: none;
        }

        .loc-rel-blog-title:hover {
            color: var(--theme-orange);
        }

        .loc-rel-blog-desc {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
            line-height: 1.5;
        }

        .loc-rel-blog-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 15px;
        }

        .loc-rel-blog-tag {
            background: var(--theme-maroon);
            color: #fff;
            padding: 3px 10px;
            border-radius: 4px;
            font-size: 11px;
            font-weight: 500;
        }

        .loc-rel-blog-tag.orange {
            background: var(--theme-orange);
        }

        .loc-rel-blog-read {
            font-size: 14px;
            font-weight: 500;
            color: #222;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .loc-rel-blog-read:hover {
            color: var(--theme-orange);
        }

        /* --- Responsive Breakpoints --- */
        @media (max-width: 991px) {
            .loc-detail-hero-text {
                max-width: 100%;
                left: 20px;
                bottom: 20px;
            }

            .loc-detail-hero-text h2 {
                font-size: 2rem;
            }

            .loc-sticky-sidebar {
                position: relative;
                top: 0;
            }
        }

        @media (max-width: 768px) {
            .loc-detail-heading h1 {
                font-size: 2rem;
            }

            .loc-detail-hero-text h2 {
                font-size: 1.5rem;
            }

            .loc-detail-hero-wrapper {
                height: 250px;
            }
        }
    </style>

    <div class="loc-detail-wrapper">
        <div class="container">
            <div class="row">
                <!-- LEFT COLUMN: Main Content -->
                <div class="col-lg-8">

                    <!-- Back Link -->
                    <a href="{{ route('locations') }}" class="loc-back-link">
                        <i class="fas fa-arrow-left"></i> Return to All Centres
                    </a>

                    <!-- Page Heading -->
                    <div class="loc-detail-heading">
                        <h1>{{ $location['name'] }}</h1>
                        <div class="address">
                            <i class="fas fa-map-marker-alt"></i>
                            {{ $location['address'] }}
                        </div>
                    </div>

                    <!-- Hero Image Wrapper with Gradient Fallback -->
                    <div class="loc-detail-hero-wrapper"
                        @if (empty($location['image'])) style="background: linear-gradient(135deg, var(--theme-maroon), var(--theme-orange));" @endif>

                        @if (!empty($location['image']))
                            <img src="{{ asset('frontend/images/' . $location['image']) }}" alt="{{ $location['name'] }}">
                        @endif

                        <div class="loc-detail-hero-overlay"></div>
                        <div class="loc-detail-hero-text">
                            <h2>{{ $location['hero_title'] }}</h2>
                            <h5>{{ $location['hero_subtitle'] }}</h5>
                            <p>{{ $location['hero_tag'] }}</p>
                        </div>
                    </div>

                    <!-- Content Sections -->
                    <div class="loc-detail-content">
                        <!--<h3>Overview</h3>-->
                        <!--<p>{{ $location['description'] }}</p>-->
                        
                        {{-- 2. Full SEO Content (if exists) --}}
                        @if(isset($location['seo_content']))
                            <div class="loc-seo-full-content">
                                {!! $location['seo_content'] !!}
                            </div>
                        @endif

                        <!--<h3>Facilities &amp; Services</h3>-->
                        <!--<div class="row g-3">-->
                        <!--    @foreach ($location['facilities'] as $facility)-->
                        <!--        <div class="col-md-6">-->
                        <!--            <p><i class="fas fa-check text-success me-2" style="color: var(--theme-orange);"></i>-->
                        <!--                {{ $facility }}</p>-->
                        <!--        </div>-->
                        <!--    @endforeach-->
                        <!--</div>-->

                        <!--<h3>Accommodation Options</h3>-->
                        <!--<div class="loc-room-table-wrapper">-->
                        <!--    <table>-->
                        <!--        <thead>-->
                        <!--            <tr>-->
                        <!--                <th>Room Category</th>-->
                        <!--                <th>Occupancy</th>-->
                        <!--                <th>Air Conditioning</th>-->
                        <!--            </tr>-->
                        <!--        </thead>-->
                        <!--        <tbody>-->
                        <!--            @foreach ($location['rooms'] as $room)-->
                        <!--                <tr>-->
                        <!--                    <td>{{ $room[0] }}</td>-->
                        <!--                    <td>{{ $room[1] }}</td>-->
                        <!--                    <td>{{ $room[2] }}</td>-->
                        <!--                </tr>-->
                        <!--            @endforeach-->
                        <!--        </tbody>-->
                        <!--    </table>-->
                        <!--</div>-->
                    </div>

                </div>

                <!-- RIGHT COLUMN: Sticky Sidebar -->
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="loc-sticky-sidebar">

                        <!-- Book Accommodation Card -->
                        <div class="loc-sidebar-card">
                            <h5>Reserve Your Stay</h5>
                            <a href="{{ seo_whatsapp_url('Hi, I would like to book accommodation at ' . $location['name'] . '.') }}"
                                target="_blank" class="loc-btn-sidebar-wa">
                                <i class="fab fa-whatsapp me-2"></i> Book via WhatsApp
                            </a>
                            <a href="{{ route('booking') }}" class="loc-btn-sidebar-outline">
                                <i class="fab fa-telegram me-1"></i> Submit Booking Request
                            </a>
                            <span class="loc-sidebar-note">* Rooms are subject to availability and Sansthan guidelines.</span>
                        </div>

                        <!-- Contact Details Card -->
                        <div class="loc-sidebar-card">
                            <h5>Reach Our Team</h5>
                            <div style="display: flex; align-items: center; gap: 10px; font-size: 15px; color: #333;">
                                <i class="fab fa-whatsapp" style="color: var(--theme-green); font-size: 18px;"></i>
                                <span style="font-weight: 500;">{{ seo_phone_display() }}</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- ========================================================== -->
            <!-- RELATED GUIDES SECTION (Dynamic Blogs)                      -->
            <!-- ========================================================== -->
            <div class="loc-blog-rel-section">
                <h3 class="loc-blog-rel-title">Helpful Pilgrim Guides</h3>
                <p class="loc-blog-rel-desc">Explore these articles to plan your darshan, accommodation, and travel to this sacred destination.</p>

                <div class="row g-4">
                    {{-- Loop for Blogs based on 'related_sansthan_location' --}}
                    @forelse($relatedBlogs as $blog)
                        <div class="col-lg-4 col-md-6">
                            <div class="loc-rel-blog-card">
                                <div class="loc-rel-blog-meta">
                                    <i class="far fa-calendar-alt"></i>
                                    {{ \Carbon\Carbon::parse($blog->published_date)->format('M d, Y') }} •
                                    <i class="far fa-clock"></i> 2 min reading
                                </div>
                                <a href="{{ route('blog.detail', $blog->slug) }}" class="loc-rel-blog-title">
                                    {{ \Illuminate\Support\Str::limit($blog->title, 60) }}
                                </a>
                                <p class="loc-rel-blog-desc">
                                    {{ \Illuminate\Support\Str::limit($blog->short_description, 80) }}
                                </p>
                                <div class="loc-rel-blog-tags">
                                    @if (!empty($blog->categories) && is_array($blog->categories))
                                        @foreach (array_slice($blog->categories, 0, 2) as $cat)
                                            <span class="loc-rel-blog-tag">{{ $cat }}</span>
                                        @endforeach
                                    @endif
                                    @if (!empty($blog->topics) && is_array($blog->topics))
                                        @foreach (array_slice($blog->topics, 0, 1) as $topic)
                                            <span class="loc-rel-blog-tag orange">{{ $topic }}</span>
                                        @endforeach
                                    @endif
                                </div>
                                <a href="{{ route('blog.detail', $blog->slug) }}" class="loc-rel-blog-read">
                                    Continue Reading <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center py-4">
                            <p class="text-muted">No related guides available at this time.</p>
                        </div>
                    @endforelse
                </div>
            </div>

        </div>
    </div>

@endsection