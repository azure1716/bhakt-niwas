{{--
    JSON-LD Structured Data Partial
    =================================
    Included just before </body> in master.blade.php.
    Outputs schema.org JSON-LD based on the current page type.

    Variables used (set in controller):
      $schema_type   - 'WebSite', 'LodgingBusiness', 'BlogPosting', 'ContactPage', etc.
      $location      - array from config/locations.php (on location pages)
      $blog          - Blog model (on blog detail pages)
      $seo_canonical - Canonical URL for the current page
--}}

@php
    $baseUrl   = config('app.url');
    $siteName  = config('seo.site_name');
    $seoPhone  = config('seo.phone');
    $seoEmail  = config('seo.email');
    $logoUrl   = $baseUrl . config('seo.org.logo', '/frontend/images/GM_sansthan.png');
    $canonical = $seo_canonical ?? url()->current();
    $schemaType = $schema_type ?? 'WebPage';
@endphp

<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@graph": [

    {{-- ===== Organisation (on every page) ===== --}}
    {
      "@type": "Organization",
      "@id": "{{ $baseUrl }}/#organization",
      "name": "{{ $siteName }}",
      "legalName": "Shri Gajanan Maharaj Sansthan Shegaon",
      "url": "{{ $baseUrl }}",
      "logo": {
        "@type": "ImageObject",
        "url": "{{ $logoUrl }}",
        "width": 300,
        "height": 100
      },
      "foundingDate": "1908",
      "telephone": "{{ seo_schema_phone() }}",
      "email": "{{ $seoEmail }}",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Near Shri Gajanan Maharaj Temple",
        "addressLocality": "Shegaon",
        "addressRegion": "Maharashtra",
        "postalCode": "444203",
        "addressCountry": "IN"
      },
      "areaServed": ["Shegaon", "Pandharpur", "Trimbakeshwar", "Omkareshwar"],
      "sameAs": []
    },

    {{-- ===== WebSite (home page only) ===== --}}
    @if ($schemaType === 'WebSite')
    {
      "@type": "WebSite",
      "@id": "{{ $baseUrl }}/#website",
      "url": "{{ $baseUrl }}",
      "name": "{{ $siteName }} - Shegaon Bhakta Niwas Booking",
      "description": "Official website for Shri Gajanan Maharaj Sansthan Shegaon. Book Bhakta Niwas rooms, check darshan timings and plan your pilgrimage.",
      "publisher": {
        "@id": "{{ $baseUrl }}/#organization"
      },
      "inLanguage": "en-IN"
    },
    @endif

    {{-- ===== LodgingBusiness (location pages) ===== --}}
    @if ($schemaType === 'LodgingBusiness' && !empty($location))
    @php
        $locImage = !empty($location['image'])
            ? $baseUrl . '/frontend/images/' . $location['image']
            : $logoUrl;
    @endphp
    {
      "@type": "LodgingBusiness",
      "@id": "{{ $canonical }}#lodging",
      "name": "{{ $location['name'] }}",
      "description": "{{ $location['description'] }}",
      "url": "{{ $canonical }}",
      "image": "{{ $locImage }}",
      "telephone": "{{ seo_schema_phone() }}",
      "email": "{{ $seoEmail }}",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "{{ $location['address'] }}",
        "addressLocality": "{{ $location['city'] }}",
        "addressRegion": "{{ $location['state'] }}",
        "addressCountry": "IN"
      },
      @if (!empty($location['geo']['latitude']))
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": {{ $location['geo']['latitude'] }},
        "longitude": {{ $location['geo']['longitude'] }}
      },
      @endif
      "amenityFeature": [
        @foreach ($location['facilities'] as $index => $facility)
        {
          "@type": "LocationFeatureSpecification",
          "name": "{{ $facility }}",
          "value": true
        }{{ !$loop->last ? ',' : '' }}
        @endforeach
      ],
      @if (fact('check_in_time'))
      "checkinTime": "{{ fact('check_in_time') }}",
      @endif
      @if (fact('check_out_time'))
      "checkoutTime": "{{ fact('check_out_time') }}",
      @endif
      @if (fact('room_rates'))
      "priceRange": "{{ fact('room_rates') }}",
      @endif
      "containedInPlace": {
        "@type": "Place",
        "name": "Shri Gajanan Maharaj Temple",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Shegaon",
          "addressRegion": "Maharashtra",
          "addressCountry": "IN"
        }
      }
    },
    @endif

    {{-- ===== BlogPosting (blog detail pages) ===== --}}
    @if ($schemaType === 'BlogPosting' && !empty($blog))
    @php
        $blogImage = !empty($blog->image) ? $baseUrl . '/' . $blog->image : $logoUrl;
    @endphp
    {
      "@type": "BlogPosting",
      "@id": "{{ $canonical }}#article",
      "headline": "{{ $blog->title }}",
      "description": "{{ $blog->meta_description ?? \Illuminate\Support\Str::limit($blog->short_description, 160) }}",
      "url": "{{ $canonical }}",
      "image": {
        "@type": "ImageObject",
        "url": "{{ $blogImage }}",
        "width": 1200,
        "height": 630
      },
      "datePublished": "{{ \Carbon\Carbon::parse($blog->published_date)->toIso8601String() }}",
      "dateModified": "{{ \Carbon\Carbon::parse($blog->updated_at ?? $blog->published_date)->toIso8601String() }}",
      "author": {
        "@type": "Organization",
        "@id": "{{ $baseUrl }}/#organization"
      },
      "publisher": {
        "@type": "Organization",
        "@id": "{{ $baseUrl }}/#organization",
        "name": "{{ $siteName }}",
        "logo": {
          "@type": "ImageObject",
          "url": "{{ $logoUrl }}"
        }
      },
      "inLanguage": "en-IN",
      "isPartOf": {
        "@type": "Blog",
        "@id": "{{ $baseUrl }}/blog#blog"
      }
    },
    @endif

    {{-- ===== BreadcrumbList (all inner pages) ===== --}}
    @if (!empty($breadcrumbs) && count($breadcrumbs) > 1)
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        @foreach ($breadcrumbs as $i => $crumb)
        {
          "@type": "ListItem",
          "position": {{ $i + 1 }},
          "name": "{{ $crumb['name'] }}",
          "item": "{{ $crumb['url'] }}"
        }{{ !$loop->last ? ',' : '' }}
        @endforeach
      ]
    },
    @endif

    {{-- ===== FAQPage (where $faqs array is provided) ===== --}}
    @if (!empty($faqs) && count($faqs) > 0)
    {
      "@type": "FAQPage",
      "@id": "{{ $canonical }}#faq",
      "mainEntity": [
        @foreach ($faqs as $faq)
        {
          "@type": "Question",
          "name": "{{ $faq['q'] }}",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "{{ $faq['a'] }}"
          }
        }{{ !$loop->last ? ',' : '' }}
        @endforeach
      ]
    },
    @endif

    {{-- ===== WebPage (catch-all) ===== --}}
    {
      "@type": "WebPage",
      "@id": "{{ $canonical }}#webpage",
      "url": "{{ $canonical }}",
      "name": "{{ $seo_title ?? config('seo.pages.home.title') }}",
      "description": "{{ $seo_description ?? config('seo.pages.home.description') }}",
      "isPartOf": {
        "@id": "{{ $baseUrl }}/#website"
      },
      "publisher": {
        "@id": "{{ $baseUrl }}/#organization"
      },
      "inLanguage": "en-IN"
    }

  ]
}
</script>
