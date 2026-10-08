{{--
    SEO Meta Partial
    ================
    Included in master.blade.php <head>.
    Outputs: title, description, canonical, robots, Open Graph, Twitter card.

    Variables expected (passed from controller via compact or view()->share()):
      $seo_title        - Page <title> tag
      $seo_description  - Meta description
      $seo_canonical    - Canonical URL (defaults to url()->current())
      $seo_noindex      - bool: true outputs noindex,follow
      $seo_og_image     - Absolute URL to OG image (1200x630 recommended)
--}}

{{-- ===================== TITLE ===================== --}}
<title>{{ $seo_title ?? config('seo.pages.home.title', 'Shegaon Bhakta Niwas Room Booking') }}</title>

{{-- ===================== META BASICS ===================== --}}
<meta name="description" content="{{ $seo_description ?? config('seo.pages.home.description') }}" />

{{-- Meta keywords intentionally omitted: Google ignores this tag.
     Keywords are tracked in config/seo.php comments and keyword-master.csv. --}}

{{-- ===================== ROBOTS ===================== --}}
@if (!empty($seo_noindex) && $seo_noindex)
<meta name="robots" content="noindex, follow" />
@else
<meta name="robots" content="index, follow" />
@endif

{{-- ===================== CANONICAL ===================== --}}
@php
    // Use explicit canonical if provided, else strip query strings from current URL
    $canonicalUrl = $seo_canonical ?? url()->current();
@endphp
<link rel="canonical" href="{{ $canonicalUrl }}" />

{{-- ===================== HREFLANG (activates if translation exists) ===================== --}}
@if (!empty($translations))
<link rel="alternate" hreflang="en-IN" href="{{ $translations['en'] ?? $canonicalUrl }}" />
@if (!empty($translations['mr']))
<link rel="alternate" hreflang="mr-IN" href="{{ $translations['mr'] }}" />
@endif
@if (!empty($translations['hi']))
<link rel="alternate" hreflang="hi-IN" href="{{ $translations['hi'] }}" />
@endif
<link rel="alternate" hreflang="x-default" href="{{ $translations['en'] ?? $canonicalUrl }}" />
@endif

{{-- ===================== OPEN GRAPH ===================== --}}
@php
    $ogImage = $seo_og_image ?? config('seo.default_og_image', '/frontend/images/temple1.jpg');
    // Ensure absolute URL
    if (!str_starts_with($ogImage, 'http')) {
        $ogImage = url($ogImage);
    }
    $ogTitle       = $seo_title ?? config('seo.pages.home.title');
    $ogDescription = $seo_description ?? config('seo.pages.home.description');
    $ogUrl         = $canonicalUrl;
@endphp
<meta property="og:type"        content="{{ $og_type ?? 'website' }}" />
<meta property="og:site_name"   content="{{ config('seo.site_name', 'Shri Gajanan Maharaj Sansthan') }}" />
<meta property="og:locale"      content="en_IN" />
<meta property="og:url"         content="{{ $ogUrl }}" />
<meta property="og:title"       content="{{ $ogTitle }}" />
<meta property="og:description" content="{{ $ogDescription }}" />
<meta property="og:image"       content="{{ $ogImage }}" />
<meta property="og:image:width"  content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:image:alt"   content="{{ config('seo.site_name') }} - Official Pilgrim Accommodation" />

{{-- ===================== TWITTER CARD ===================== --}}
<meta name="twitter:card"        content="summary_large_image" />
<meta name="twitter:title"       content="{{ $ogTitle }}" />
<meta name="twitter:description" content="{{ $ogDescription }}" />
<meta name="twitter:image"       content="{{ $ogImage }}" />

{{-- ===================== GOOGLE SITE VERIFICATION ===================== --}}
@if (config('seo.gsc_token'))
<meta name="google-site-verification" content="{{ config('seo.gsc_token') }}" />
@endif

{{-- ===================== GA4 ANALYTICS ===================== --}}
@if (config('seo.ga4_id') && !config('app.debug'))
<!-- Google Analytics 4 -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{ config('seo.ga4_id') }}"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '{{ config('seo.ga4_id') }}', {
        send_page_view: true
    });

    // Conversion event helpers (call these from CTA click handlers)
    window.trackWhatsApp = function() {
        gtag('event', 'whatsapp_click', { event_category: 'engagement', event_label: window.location.pathname });
    };
    window.trackCall = function() {
        gtag('event', 'call_click', { event_category: 'engagement', event_label: window.location.pathname });
    };
    window.trackBookingForm = function() {
        gtag('event', 'booking_form_submit', { event_category: 'conversion', event_label: window.location.pathname });
    };
</script>
@endif
