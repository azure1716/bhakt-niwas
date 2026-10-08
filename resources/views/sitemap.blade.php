<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    {{-- Static pages --}}
    @foreach ($staticPages as $page)
    <url>
        <loc>{{ $page['url'] }}</loc>
        <lastmod>{{ \Carbon\Carbon::parse($page['updated'])->toAtomString() }}</lastmod>
        <priority>{{ $page['priority'] }}</priority>
    </url>
    @endforeach

    {{-- Blog posts (dynamic, real lastmod from updated_at) --}}
    @foreach ($blogs as $blog)
    <url>
        <loc>{{ $baseUrl }}/blog/{{ $blog->slug }}</loc>
        <lastmod>{{ \Carbon\Carbon::parse($blog->updated_at ?? $blog->published_date)->toAtomString() }}</lastmod>
        <priority>0.5</priority>
    </url>
    @endforeach

</urlset>
