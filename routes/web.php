<?php

use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// =============================================================================
// DYNAMIC robots.txt (serves correct APP_URL without hardcoding)
// =============================================================================
Route::get('/robots.txt', function () {
    $baseUrl = rtrim(config('app.url'), '/');
    $content = "User-agent: *\n\n";
    $content .= "Allow: /\n";
    $content .= "Allow: /frontend/css/\n";
    $content .= "Allow: /frontend/images/\n\n";
    $content .= "Disallow: /admin/\n";
    $content .= "Disallow: /dashboard\n";
    $content .= "Disallow: /login\n";
    $content .= "Disallow: /register\n";
    $content .= "Disallow: /forgot-password\n";
    $content .= "Disallow: /reset-password\n";
    $content .= "Disallow: /verify-email\n";
    $content .= "Disallow: /confirm-password\n";
    $content .= "Disallow: /profile\n";
    $content .= "Disallow: /uploads/\n\n";
    $content .= "Sitemap: {$baseUrl}/sitemap.xml\n";
    return response($content, 200)->header('Content-Type', 'text/plain');
})->name('robots');


// =============================================================================
// PUBLIC FRONTEND ROUTES
// =============================================================================

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/booking', [FrontendController::class, 'booking'])->name('booking');
Route::get('/locations', [FrontendController::class, 'locations'])->name('locations');

Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [FrontendController::class, 'blogDetail'])->name('blog.detail');

Route::get('/darshan-timings', [FrontendController::class, 'darshanTimings'])->name('darshan-timings');
Route::get('/how-to-reach', [FrontendController::class, 'howToReach'])->name('how-to-reach');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-conditions', [FrontendController::class, 'termsConditions'])->name('terms-conditions');
Route::get('/refund-cancellation-policy', [FrontendController::class, 'refundCancellationPolicy'])->name('refund-cancellation-policy');
Route::get('/disclaimer', [FrontendController::class, 'disclaimer'])->name('disclaimer');

Route::get('/shegaon-bhakta-niwas-room-rent', [FrontendController::class, 'roomRent'])->name('room-rent');
Route::get('/shegaon-bhakta-niwas-facilities', [FrontendController::class, 'facilities'])->name('facilities');
Route::get('/shegaon-bhakta-niwas-availability', [FrontendController::class, 'availability'])->name('availability');
Route::get('/affordable-stay-near-gajanan-maharaj-temple-shegaon', [FrontendController::class, 'affordableStay'])->name('affordable-stay');
Route::get('/nearby-places-shegaon', [FrontendController::class, 'nearbyPlaces'])->name('nearby-places');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');

// =============================================================================
// CLEAN LOCATION URLS (Phase 3 - new keyword-rich URLs)
// These are the canonical URLs for each Bhakta Niwas location.
// Pattern: /{location-city}-bhakta-niwas or /{property-name}
// =============================================================================

Route::get('/shegaon-bhakta-niwas', [FrontendController::class, 'locationDetail'])
    ->defaults('slug', 'shegaon-bhakta-niwas')
    ->name('location.shegaon-bhakta-niwas');

Route::get('/shegaon-anand-vihar', [FrontendController::class, 'locationDetail'])
    ->defaults('slug', 'shegaon-anand-vihar')
    ->name('location.shegaon-anand-vihar');

Route::get('/shegaon-visawa', [FrontendController::class, 'locationDetail'])
    ->defaults('slug', 'shegaon-visawa')
    ->name('location.shegaon-visawa');

Route::get('/pandharpur-bhakta-niwas', [FrontendController::class, 'locationDetail'])
    ->defaults('slug', 'pandharpur-bhakta-niwas')
    ->name('location.pandharpur-bhakta-niwas');

Route::get('/trimbakeshwar-bhakta-niwas', [FrontendController::class, 'locationDetail'])
    ->defaults('slug', 'trimbakeshwar-bhakta-niwas')
    ->name('location.trimbakeshwar-bhakta-niwas');

Route::get('/omkareshwar-bhakta-niwas', [FrontendController::class, 'locationDetail'])
    ->defaults('slug', 'omkareshwar-bhakta-niwas')
    ->name('location.omkareshwar-bhakta-niwas');

// =============================================================================
// 301 REDIRECTS - OLD URLs TO NEW CLEAN URLs
// Keep these FOREVER to preserve any external links and Google indexing.
// =============================================================================

// /bhakta-niwas was an overview page that overlapped with /booking and location pages.
// Consolidated into the main Shegaon Bhakta Niwas location page.
Route::get('/bhakta-niwas', function () {
    return redirect('/shegaon-bhakta-niwas', 301);
})->name('bhaktaNiwas');

// Old /location-detail/{slug} URLs - 301 to new clean URLs
$legacyRedirects = [
    'shegaon-bhakt-niwas'  => '/shegaon-bhakta-niwas',
    'shegaon-anand-vihar'  => '/shegaon-anand-vihar',
    'shegaon-visawa'       => '/shegaon-visawa',
    'pandharpur'           => '/pandharpur-bhakta-niwas',
    'trimbakeshwar'        => '/trimbakeshwar-bhakta-niwas',
    'omkareshwar'          => '/omkareshwar-bhakta-niwas',
];

foreach ($legacyRedirects as $oldSlug => $newUrl) {
    Route::get('/location-detail/' . $oldSlug, function () use ($newUrl) {
        return redirect($newUrl, 301);
    });
}

// Catch-all for any /location-detail/{slug} not in the map - redirect to /locations
Route::get('/location-detail/{slug}', function () {
    return redirect('/locations', 301);
})->name('location-detail');

// =============================================================================
// DYNAMIC SITEMAP (replaces static public/sitemap.xml)
// =============================================================================
Route::get('/sitemap.xml', function () {
    $locations = collect(config('locations', []));
    try {
        $blogs = \App\Models\Blog::where('status', 'active')
            ->orderBy('updated_at', 'desc')
            ->get(['slug', 'updated_at', 'published_date']);
    } catch (\Throwable $e) {
        $blogs = collect();
    }

    $baseUrl = config('app.url');

    $staticPages = [
        ['url' => $baseUrl . '/',                          'priority' => '1.0', 'updated' => now()],
        ['url' => $baseUrl . '/booking',                   'priority' => '0.9', 'updated' => now()],
        ['url' => $baseUrl . '/shegaon-bhakta-niwas',     'priority' => '0.9', 'updated' => now()],
        ['url' => $baseUrl . '/contact',                   'priority' => '0.8', 'updated' => now()],
        ['url' => $baseUrl . '/darshan-timings',           'priority' => '0.8', 'updated' => now()],
        ['url' => $baseUrl . '/how-to-reach',              'priority' => '0.8', 'updated' => now()],
        ['url' => $baseUrl . '/locations',                 'priority' => '0.8', 'updated' => now()],
        ['url' => $baseUrl . '/about',                     'priority' => '0.7', 'updated' => now()],
        ['url' => $baseUrl . '/shegaon-anand-vihar',       'priority' => '0.8', 'updated' => now()],
        ['url' => $baseUrl . '/shegaon-visawa',            'priority' => '0.7', 'updated' => now()],
        ['url' => $baseUrl . '/pandharpur-bhakta-niwas',   'priority' => '0.8', 'updated' => now()],
        ['url' => $baseUrl . '/trimbakeshwar-bhakta-niwas','priority' => '0.7', 'updated' => now()],
        ['url' => $baseUrl . '/omkareshwar-bhakta-niwas',  'priority' => '0.7', 'updated' => now()],
        ['url' => $baseUrl . '/blog',                      'priority' => '0.6', 'updated' => now()],
        ['url' => $baseUrl . '/privacy-policy',            'priority' => '0.3', 'updated' => now()],
        ['url' => $baseUrl . '/terms-conditions',          'priority' => '0.3', 'updated' => now()],
        ['url' => $baseUrl . '/refund-cancellation-policy','priority' => '0.3', 'updated' => now()],
        ['url' => $baseUrl . '/disclaimer',                'priority' => '0.3', 'updated' => now()],
        ['url' => $baseUrl . '/shegaon-bhakta-niwas-room-rent', 'priority' => '0.8', 'updated' => now()],
        ['url' => $baseUrl . '/shegaon-bhakta-niwas-facilities', 'priority' => '0.8', 'updated' => now()],
        ['url' => $baseUrl . '/shegaon-bhakta-niwas-availability', 'priority' => '0.8', 'updated' => now()],
        ['url' => $baseUrl . '/affordable-stay-near-gajanan-maharaj-temple-shegaon', 'priority' => '0.8', 'updated' => now()],
        ['url' => $baseUrl . '/nearby-places-shegaon',    'priority' => '0.7', 'updated' => now()],
        ['url' => $baseUrl . '/faq',                       'priority' => '0.7', 'updated' => now()],
    ];

    return response()->view('sitemap', compact('staticPages', 'blogs', 'baseUrl'))
        ->header('Content-Type', 'application/xml');
})->name('sitemap');

// =============================================================================
// ADMIN AND AUTH ROUTES (noindex enforced via X-Robots-Tag middleware)
// =============================================================================

Route::get('/dashboard', function () {
    return view('admin.dashboard.admin_dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('blog', BlogController::class);
    Route::put('blog/status/{id}', [BlogController::class, 'status'])->name('blog.status');
});

require __DIR__ . '/auth.php';
