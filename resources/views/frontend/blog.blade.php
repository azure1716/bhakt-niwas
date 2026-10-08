@extends('frontend.layouts.master')

@push('page-css')
    <link rel="stylesheet" href="{{ asset('frontend/css/blog.css') }}">
    <style>
        /* --- Banner --- */
        .blog-hero-banner {
            padding: 80px 0;
            padding-top: 180px;
            background: linear-gradient(to right, rgba(158, 30, 24, 0.8), rgba(255, 122, 0, 0.6)),
                url("{{ asset('frontend/images/location1.jpg') }}");
            background-size: cover;
            background-position: center;
            position: relative;
            text-align: center;
        }

        .blog-hero-banner h1 {
            color: #fff;
            font-family: "Playfair Display", serif;
            font-size: 3.5rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .blog-hero-banner p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Active state for category pills */
        .blog-cat-pill.active {
            background: var(--theme-maroon, #800000);
            color: #fff;
            border-color: var(--theme-maroon, #800000);
            transform: translateY(-2px);
        }

        .blog-cat-pill.active span {
            color: #fff;
        }

        .blog-card-img-wrapper {
            width: 100%;
            height: 200px;
            overflow: hidden;
            border-radius: 4px 4px 0 0;
            background-color: #f4f4f4;
            margin-bottom: 15px;
        }

        .blog-card-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .blog-card:hover .blog-card-img-wrapper img {
            transform: scale(1.05);
        }
    </style>
@endpush

@section('content')
    <!-- ========================================= -->
    <!-- Banner Section                           -->
    <!-- ========================================= -->
    <section class="blog-hero-banner">
        <div class="container">
            <h1>Welcome to the Sansthan Blog</h1>
            <p>
                Discover spiritual insights, practical travel guides, and heartfelt stories
                to enrich your pilgrimage journey.
            </p>
        </div>
    </section>

    <!-- ========================================= -->
    <!-- Main Content – Search, Categories, Posts  -->
    <!-- ========================================= -->
    <section class="blog-content-wrapper">
        <div class="container">
            <!-- Search Form -->
            <div class="blog-header-area">
                <form action="{{ route('blog') }}" method="GET"
                    class="d-flex align-items-center w-100 justify-content-center" style="max-width: 600px; gap: 10px;">
                    <div class="blog-search-wrapper" style="flex-grow: 1;">
                        <i class="fas fa-search blog-search-icon"></i>
                        <input type="text" name="search" class="blog-search-input"
                            placeholder="Search for articles, guides, or spiritual topics…" value="{{ request('search') }}" />
                    </div>
                    <button type="submit" class="btn-hero btn-orange" style="padding: 12px 25px; border-radius: 4px;">
                        Search
                    </button>
                </form>
            </div>

            <!-- Category Filter -->
            <div class="mb-5">
                <h4 class="blog-cat-title">Filter by Topic</h4>

                <div class="d-flex flex-wrap gap-2">
                    <!-- "All" link -->
                    <a href="{{ route('blog') }}" class="blog-cat-pill {{ !request()->has('category') ? 'active' : '' }}">
                        All <span>({{ $blogs->total() }})</span>
                    </a>

                    {{-- Dynamic category list --}}
                    @if (isset($categoriesCount) && count($categoriesCount) > 0)
                        @foreach ($categoriesCount as $catName => $count)
                            <a href="{{ route('blog', ['category' => $catName]) }}"
                                class="blog-cat-pill {{ request('category') == $catName ? 'active' : '' }}">
                                {{ $catName }}
                                <span>({{ $count }})</span>
                            </a>
                        @endforeach
                    @else
                        <span class="text-muted small">No categories available.</span>
                    @endif
                </div>
            </div>

            <!-- Blog Grid -->
            <div class="blog-grid-section">
                <h4 class="blog-cat-title" style="font-size: 1.8rem">
                    Recent Posts
                </h4>
                <div class="row g-4">
                    @forelse($blogs as $blog)
                        @php
                            // Normalize categories & topics safely
                            $cats = is_array($blog->categories) ? $blog->categories : (is_string($blog->categories) ? json_decode($blog->categories, true) ?? explode(',', $blog->categories) : []);
                            $topcs = is_array($blog->topics) ? $blog->topics : (is_string($blog->topics) ? json_decode($blog->topics, true) ?? explode(',', $blog->topics) : []);
                            $cats = array_filter(array_map('trim', (array)$cats));
                            $topcs = array_filter(array_map('trim', (array)$topcs));
                            $imgSrc = optimized_image_url($blog->image, 'frontend/images/loc2.webp');
                        @endphp
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-card d-flex flex-column h-100">
                                <div class="blog-card-img-wrapper">
                                    <a href="{{ route('blog.detail', $blog->slug) }}">
                                        <img src="{{ $imgSrc }}" alt="{{ $blog->title }}" loading="lazy" decoding="async" />
                                    </a>
                                </div>

                                <div class="blog-meta">
                                    <i class="far fa-calendar-alt" aria-hidden="true"></i>
                                    {{ \Carbon\Carbon::parse($blog->published_date)->format('M d, Y') }} •
                                    <i class="far fa-clock" aria-hidden="true"></i> 2 min read
                                </div>

                                <h3 class="blog-title" style="font-size: 1.1rem; font-weight: 600; line-height: 1.4;">
                                    <a href="{{ route('blog.detail', $blog->slug) }}" style="color: #222; text-decoration: none;">
                                        {{ $blog->title }}
                                    </a>
                                </h3>

                                <p class="blog-desc" style="flex-grow: 1;">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($blog->short_description ?? $blog->description), 100) }}
                                </p>

                                <div class="blog-tags">
                                    {{-- Categories --}}
                                    @foreach (array_slice($cats, 0, 2) as $cat)
                                        <span class="blog-tag">{{ $cat }}</span>
                                    @endforeach

                                    {{-- Topics --}}
                                    @foreach (array_slice($topcs, 0, 1) as $topic)
                                        <span class="blog-tag orange">{{ $topic }}</span>
                                    @endforeach

                                    @if (count($cats) > 2 || count($topcs) > 1)
                                        <span class="blog-tag" style="background: #e5e7eb; color: #333">+ more</span>
                                    @endif
                                </div>

                                <div class="mt-auto pt-2">
                                    <a href="{{ route('blog.detail', $blog->slug) }}" class="blog-read">
                                        Read More <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5">
                            <p class="text-muted">
                                No articles match your selection.
                                <a href="{{ route('blog') }}" class="text-decoration-underline">View all posts</a>
                            </p>
                        </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-5">
                    {{ $blogs->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection