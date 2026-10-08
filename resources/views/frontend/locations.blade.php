@extends('frontend.layouts.master')

@push('page-css')
    <link rel="stylesheet" href="{{ asset('frontend/css/location.css') }}">
@endpush

@section('content')
    <div class="wrapper" style="background: #fff0f0">
        <section class="loc-page-header">
            <div class="container">
                <h1 class="loc-page-title">Our Pilgrim Centres</h1>
                <p class="loc-page-desc">
                    Explore our sacred facilities across holy destinations, each offering comfortable accommodation and
                    a peaceful atmosphere for your spiritual journey.
                </p>
            </div>
        </section>

        <!-- Locations Grid -->
        <section class="container">
            <div class="row g-4">
                <!-- Location 1: Shegaon Bhakt Niwas -->
                <div class="col-lg-4 col-md-6">
                    <div class="loc-card">
                        <div class="loc-card-img-wrapper">
                            <img src="{{ asset('frontend/images/loc2.jpg') }}" alt="Shegaon Bhakt Niwas" class="loc-img" />
                        </div>
                        <div class="loc-body">
                            <h5 class="loc-title">Shri Gajanan Maharaj Sansthan Shegaon Bhakt Niwas</h5>
                            <p class="loc-desc">
                                Official Bhakta Niwas near Gajanan Maharaj Temple. Check Shegaon Bhakt Niwas room booking, rent, and availability for a peaceful stay.
                            </p>
                            <div class="loc-buttons">
                                <a href="{{ route('location-detail', ['slug' => 'shegaon-bhakt-niwas']) }}" class="btn-explore">Discover <i class="fas fa-arrow-right ms-1"></i></a>
                                <a href="{{ seo_whatsapp_url('Hi%2C%20I%20would%20like%20to%20book%20accommodation%20at%20Shri%20Gajanan%20Maharaj%20Sansthan%20Shegaon.') }}"
                                    target="_blank" class="btn-book-loc"><i class="fab fa-whatsapp me-1"></i> Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Location 2: Pandharpur -->
                <div class="col-lg-4 col-md-6">
                    <div class="loc-card">
                        <div class="loc-card-img-wrapper">
                            <img src="{{ asset('frontend/images/location1.jpg') }}" alt="Pandharpur Bhakt Niwas" class="loc-img" />
                        </div>
                        <div class="loc-body">
                            <h5 class="loc-title">Shri Gajanan Maharaj Sansthan Pandharpur Bhakt Niwas</h5>
                            <p class="loc-desc">
                                Affordable stay for Pandharpur pilgrims near Vitthal Rukmini Temple. Book rooms with simple facilities and easy darshan access.
                            </p>
                            <div class="loc-buttons">
                                <a href="{{ route('location-detail', ['slug' => 'pandharpur']) }}" class="btn-explore">Discover <i class="fas fa-arrow-right ms-1"></i></a>
                                <a href="{{ seo_whatsapp_url('Hi%2C%20I%20would%20like%20to%20book%20accommodation%20at%20Shri%20Gajanan%20Maharaj%20Sansthan%20Pandharpur.') }}"
                                    target="_blank" class="btn-book-loc"><i class="fab fa-whatsapp me-1"></i> Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Location 3: Anand Vihar -->
                <div class="col-lg-4 col-md-6">
                    <div class="loc-card">
                        <div class="loc-card-img-wrapper">
                            <img src="{{ asset('frontend/images/loc3.jpg') }}" alt="Anand Vihar Shegaon" class="loc-img" />
                        </div>
                        <div class="loc-body">
                            <h5 class="loc-title">Shri Gajanan Maharaj Sansthan Shegaon Anand Vihar</h5>
                            <p class="loc-desc">
                                Premium AC rooms and suites near Anand Sagar and Gajanan Maharaj Temple. Ideal for families and senior citizens.
                            </p>
                            <div class="loc-buttons">
                                <a href="{{ route('location-detail', ['slug' => 'shegaon-anand-vihar']) }}" class="btn-explore">Discover <i class="fas fa-arrow-right ms-1"></i></a>
                                <a href="{{ seo_whatsapp_url('Hi%2C%20I%20would%20like%20to%20book%20accommodation%20at%20Shri%20Gajanan%20Maharaj%20Sansthan%20Anand%20Vihar.') }}"
                                    target="_blank" class="btn-book-loc"><i class="fab fa-whatsapp me-1"></i> Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Location 4: Visawa -->
                <div class="col-lg-4 col-md-6">
                    <div class="loc-card">
                        <div class="loc-body">
                            <h5 class="loc-title">Shri Gajanan Maharaj Sansthan Shegaon Visawa</h5>
                            <p class="loc-desc">
                                Convenient lodging near Shegaon Railway Station. Practical rooms for train travellers and devotees visiting the temple.
                            </p>
                            <div class="loc-buttons">
                                <a href="{{ route('location-detail', ['slug' => 'shegaon-visawa']) }}" class="btn-explore">Discover <i class="fas fa-arrow-right ms-1"></i></a>
                                <a href="{{ seo_whatsapp_url('Hi%2C%20I%20would%20like%20to%20book%20accommodation%20at%20Shri%20Gajanan%20Maharaj%20Sansthan%20Visawa.') }}"
                                    target="_blank" class="btn-book-loc"><i class="fab fa-whatsapp me-1"></i> Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Location 5: Trimbakeshwar -->
                <div class="col-lg-4 col-md-6">
                    <div class="loc-card">
                        <div class="loc-body">
                            <h5 class="loc-title">Shri Gajanan Maharaj Sansthan Trimbakeshwar</h5>
                            <p class="loc-desc">
                                Pilgrim accommodation close to Trimbakeshwar Jyotirlinga and Kushavarta Kund. Satvik bhojan, parking and hot water available.
                            </p>
                            <div class="loc-buttons">
                                <a href="{{ route('location-detail', ['slug' => 'trimbakeshwar']) }}" class="btn-explore">Discover <i class="fas fa-arrow-right ms-1"></i></a>
                                <a href="{{ seo_whatsapp_url('Hi%2C%20I%20would%20like%20to%20book%20accommodation%20at%20Shri%20Gajanan%20Maharaj%20Sansthan%20Trimbakeshwar.') }}"
                                    target="_blank" class="btn-book-loc"><i class="fab fa-whatsapp me-1"></i> Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Location 6: Omkareshwar -->
                <div class="col-lg-4 col-md-6">
                    <div class="loc-card">
                        <div class="loc-body">
                            <h5 class="loc-title">Shri Gajanan Maharaj Sansthan Omkareshwar</h5>
                            <p class="loc-desc">
                                Peaceful stay near Omkareshwar Jyotirlinga. Book rooms for families, senior citizens and devotees at affordable rates.
                            </p>
                            <div class="loc-buttons">
                                <a href="{{ route('location-detail', ['slug' => 'omkareshwar']) }}" class="btn-explore">Discover <i class="fas fa-arrow-right ms-1"></i></a>
                                <a href="{{ seo_whatsapp_url('Hi%2C%20I%20would%20like%20to%20book%20accommodation%20at%20Shri%20Gajanan%20Maharaj%20Sansthan%20Omkareshwar.') }}"
                                    target="_blank" class="btn-book-loc"><i class="fab fa-whatsapp me-1"></i> Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blogs Section (Dynamically showing $blogs passed from Controller) -->
            <div class="loc-blog-section">
                <h3 class="loc-blog-title">Guides by Destination</h3>
                <div class="row g-4">
                    @if (isset($blogs) && count($blogs) > 0)
                        @foreach ($blogs as $blog)
                            <div class="col-lg-4 col-md-6">
                                <div class="loc-blog-card">
                                    <div class="loc-blog-meta">
                                        <i class="far fa-calendar-alt"></i>
                                        {{ \Carbon\Carbon::parse($blog->published_date)->format('M d, Y') }} •
                                        <i class="far fa-clock"></i> 2 min read
                                    </div>
                                    <div class="loc-blog-title-text">
                                        <a href="{{ route('blog.detail', $blog->slug) }}">{{ $blog->title }}</a>
                                    </div>
                                    <p class="loc-blog-desc">
                                        {{ \Illuminate\Support\Str::limit($blog->short_description, 80) }}
                                    </p>
                                    <div class="loc-blog-tags">
                                        @if (!empty($blog->categories) && is_array($blog->categories))
                                            @foreach (array_slice($blog->categories, 0, 2) as $cat)
                                                <span class="loc-blog-tag">{{ $cat }}</span>
                                            @endforeach
                                        @endif
                                        @if (!empty($blog->topics) && is_array($blog->topics))
                                            @foreach (array_slice($blog->topics, 0, 1) as $topic)
                                                <span class="loc-blog-tag orange">{{ $topic }}</span>
                                            @endforeach
                                        @endif
                                    </div>
                                    <a href="{{ route('blog.detail', $blog->slug) }}" class="loc-blog-read">Read
                                        Article <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-12 text-center text-muted py-4">
                            No guides available at this time.
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </div>
@endsection