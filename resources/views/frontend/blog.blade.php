@extends('frontend.layouts.master')

@section('meta_title', $meta_title)
@section('meta_description', $meta_description)
@section('meta_keywords', $meta_keywords)

@section('content')
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
            background: var(--theme-maroon);
            color: #fff;
            border-color: var(--theme-maroon);
            transform: translateY(-2px);
        }

        .blog-cat-pill.active span {
            color: #fff;
        }
    </style>

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
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-card">
                                <div class="blog-meta">
                                    <i class="far fa-calendar-alt"></i>
                                    {{ \Carbon\Carbon::parse($blog->published_date)->format('M d, Y') }} •
                                    <i class="far fa-clock"></i> 2 min read
                                </div>
                                <div class="blog-title">
                                    {{ $blog->title }}
                                </div>
                                <p class="blog-desc">
                                    {{ \Illuminate\Support\Str::limit($blog->short_description, 80) }}
                                </p>
                                <div class="blog-tags">
                                    {{-- Categories --}}
                                    @if (!empty($blog->categories) && is_array($blog->categories))
                                        @foreach (array_slice($blog->categories, 0, 2) as $cat)
                                            <span class="blog-tag">{{ $cat }}</span>
                                        @endforeach
                                    @endif

                                    {{-- Topics --}}
                                    @if (!empty($blog->topics) && is_array($blog->topics))
                                        @foreach (array_slice($blog->topics, 0, 1) as $topic)
                                            <span class="blog-tag orange">{{ $topic }}</span>
                                        @endforeach
                                    @endif

                                    @if ((!empty($blog->categories) && count($blog->categories) > 2) || (!empty($blog->topics) && count($blog->topics) > 1))
                                        <span class="blog-tag" style="background: #e5e7eb; color: #333">+ more</span>
                                    @endif
                                </div>
                                <a href="{{ route('blog.detail', $blog->slug) }}" class="blog-read">
                                    Read More <i class="fas fa-arrow-right"></i>
                                </a>
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