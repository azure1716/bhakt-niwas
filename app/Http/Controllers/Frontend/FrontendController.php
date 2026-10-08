<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class FrontendController extends Controller
{
    /**
     * Build an SEO data array for a page from config/seo.php.
     * Controllers can override individual keys via $overrides.
     *
     * @param  string $pageKey   Key in config('seo.pages')
     * @param  array  $overrides Override specific keys
     * @return array
     */
    private function seoData(string $pageKey, array $overrides = []): array
    {
        $defaults = config('seo.pages.' . $pageKey, [
            'title'       => config('seo.pages.home.title', 'Shegaon Bhakta Niwas Room Booking'),
            'description' => config('seo.pages.home.description', ''),
            'h1'          => '',
            'og_image'    => config('seo.default_og_image', '/frontend/images/temple1.jpg'),
            'schema_type' => 'WebPage',
            'noindex'     => false,
        ]);

        $merged = array_merge($defaults, $overrides);

        return [
            'seo_title'       => $merged['title'],
            'seo_description' => $merged['description'],
            'seo_h1'          => $merged['h1'] ?? '',
            'seo_og_image'    => asset($merged['og_image'] ?? '/frontend/images/temple1.jpg'),
            'seo_noindex'     => $merged['noindex'] ?? false,
            'schema_type'     => $merged['schema_type'] ?? 'WebPage',
        ];
    }

    /**
     * Get all locations from config as a Collection.
     */
    private function getLocations(): Collection
    {
        return collect(config('locations', []));
    }

    // =========================================================================
    // PUBLIC FRONTEND ROUTES
    // =========================================================================

    public function index()
    {
        $seo = $this->seoData('home');

        // Homepage FAQ for FAQPage schema
        $faqs = [
            ['q' => 'How can I book a room at Shegaon Bhakta Niwas?',
             'a' => 'You can book a room by contacting our helpline via WhatsApp or call. Share your travel dates, guest count, and room preference to receive instant assistance.'],
            ['q' => 'What is the room rent at Shegaon Bhakta Niwas?',
             'a' => 'Room rates are nominal donation-based contributions. Contact our helpline on WhatsApp for current tariff details and room availability.'],
            ['q' => 'Is Shegaon Bhakta Niwas the official accommodation of the Sansthan?',
             'a' => 'Yes. Shegaon Bhakta Niwas is operated directly by Shri Gajanan Maharaj Sansthan, Shegaon - the official trust established in 1908.'],
            ['q' => 'What documents are required for check-in at Shegaon Bhakta Niwas?',
             'a' => 'All guests must present a valid government-issued photo ID (such as Aadhaar Card, Voter ID, or Passport) at the time of check-in.'],
            ['q' => 'Is there a free bus from Shegaon Railway Station to the temple?',
             'a' => 'Yes. Shri Gajanan Maharaj Sansthan operates a complimentary bus service between Shegaon Railway Station and the temple complex for devotees.'],
        ];

        try {
            $homeBlogs = Blog::where('status', 'active')
                ->where('is_homepage', 1)
                ->orderBy('published_date', 'desc')
                ->take(6)
                ->get(['id', 'title', 'slug', 'short_description', 'published_date', 'categories', 'topics']);
        } catch (\Throwable $e) {
            $homeBlogs = collect();
        }

        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('home')],
        ];

        return view('frontend.index', array_merge($seo, compact('homeBlogs', 'faqs', 'breadcrumbs')));
    }

    public function about()
    {
        $seo = $this->seoData('about');

        try {
            $aboutBlogs = Blog::where('status', 'active')
                ->where('is_aboutpage', 1)
                ->orderBy('published_date', 'desc')
                ->take(6)
                ->get();
        } catch (\Throwable $e) {
            $aboutBlogs = collect();
        }

        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'About Sansthan', 'url' => route('about')],
        ];

        return view('frontend.about', array_merge($seo, compact('aboutBlogs', 'breadcrumbs')));
    }

    public function booking()
    {
        $seo = $this->seoData('booking');

        $faqs = [
            ['q' => 'How do I book a Shegaon Bhakta Niwas room online?',
             'a' => 'Use the WhatsApp button on this page or call our helpline. Share your check-in date, number of guests, and room preference to receive reservation details.'],
            ['q' => 'What is the advance booking period for Shegaon Bhakta Niwas?',
             'a' => 'Advance booking is recommended, especially during peak festival days. Contact the booking office on WhatsApp for current availability.'],
            ['q' => 'Can I get same-day or walk-in accommodation at Bhakta Niwas?',
             'a' => 'Same-day walk-in rooms are allocated based on availability at the counter. Contacting the helpline prior to arrival is advised.'],
            ['q' => 'What ID is required for check-in?',
             'a' => 'Government-issued photo identification (Aadhaar Card, Voter ID, Passport, or Driving License) is required for every adult guest.'],
            ['q' => 'Is group booking available for yatra groups or bus parties?',
             'a' => 'Group inquiries are handled directly by the booking office. Contact us on WhatsApp with group size and dates for guidance.'],
        ];

        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Book a Room', 'url' => route('booking')],
        ];

        return view('frontend.booking', array_merge($seo, compact('faqs', 'breadcrumbs')));
    }

    public function locations()
    {
        $seo = $this->seoData('locations');

        $allLocations = $this->getLocations();

        try {
            $blogs = Blog::where('status', 'active')
                ->where('is_locationpage', 1)
                ->orderBy('published_date', 'desc')
                ->take(6)
                ->get();
        } catch (\Throwable $e) {
            $blogs = collect();
        }

        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Our Locations', 'url' => route('locations')],
        ];

        return view('frontend.locations', array_merge($seo, compact('allLocations', 'blogs', 'breadcrumbs')));
    }

    public function blog(Request $request)
    {
        $seo = $this->seoData('blog');

        // For /blog?search=... or /blog?category=... set noindex
        $hasFilters = $request->filled('search') || $request->filled('category');
        if ($hasFilters) {
            $seo['seo_noindex']  = true;
            $seo['seo_canonical'] = route('blog'); // canonical points to clean /blog
        }

        $query = Blog::where('status', 'active');

        // Category filter
        if ($request->filled('category')) {
            $category = strtolower(trim($request->category));
            if ($category === 'locations') {
                $category = 'location';
            }
            if ($category === 'location') {
                $query->where(function ($q) {
                    $q->whereJsonContains('categories', 'location')
                        ->orWhereJsonContains('categories', 'Location')
                        ->orWhereJsonContains('categories', 'locations')
                        ->orWhereJsonContains('categories', 'Locations');
                });
            } else {
                $query->whereJsonContains('categories', $category);
            }
        }

        // Search filter (case-insensitive across SQLite, MySQL, and PostgreSQL)
        if ($request->filled('search')) {
            $searchTerm = '%' . mb_strtolower(trim($request->search)) . '%';
            $query->where(function ($q) use ($searchTerm) {
                $q->whereRaw('LOWER(title) LIKE ?', [$searchTerm])
                    ->orWhereRaw('LOWER(short_description) LIKE ?', [$searchTerm])
                    ->orWhereRaw('LOWER(description) LIKE ?', [$searchTerm]);
            });
        }

        try {
            $totalBlogs = Blog::where('status', 'active')->count();
            $blogs = $query->orderBy('published_date', 'desc')->paginate(30);

            $allActiveBlogs = Blog::where('status', 'active')->get();
            $categoriesCount = [];
            foreach ($allActiveBlogs as $b) {
                $cats = is_array($b->categories) ? $b->categories : (is_string($b->categories) ? json_decode($b->categories, true) ?? explode(',', $b->categories) : []);
                if (!empty($cats) && is_array($cats)) {
                    foreach (array_unique($cats) as $cat) {
                        $cleanCat = trim((string)$cat);
                        if (empty($cleanCat)) continue;
                        $displayName = ucwords(strtolower($cleanCat));
                        $categoriesCount[$displayName] = ($categoriesCount[$displayName] ?? 0) + 1;
                    }
                }
            }
            arsort($categoriesCount);
        } catch (\Throwable $e) {
            $totalBlogs = 0;
            $blogs = new \Illuminate\Pagination\LengthAwarePaginator(collect(), 0, 30);
            $categoriesCount = [];
        }

        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Blog', 'url' => route('blog')],
        ];

        return view('frontend.blog', array_merge($seo, compact(
            'blogs', 'categoriesCount', 'totalBlogs', 'breadcrumbs'
        )));
    }

    public function blogDetail($slug)
    {
        $blog = Blog::where('slug', $slug)->where('status', 'active')->firstOrFail();

        // Compute real reading time (avg 200 wpm)
        $wordCount   = str_word_count(strip_tags($blog->description ?? ''));
        $readingTime = max(1, (int) ceil($wordCount / 200));

        $seo = [
            'seo_title'       => $blog->meta_title ?? $blog->title,
            'seo_description' => $blog->meta_description ?? \Illuminate\Support\Str::limit($blog->short_description, 155),
            'seo_og_image'    => !empty($blog->image) ? asset($blog->image) : asset('frontend/images/temple1.jpg'),
            'seo_noindex'     => false,
            'schema_type'     => 'BlogPosting',
        ];

        $relatedBlogs = Blog::where('status', 'active')
            ->where('id', '!=', $blog->id)
            ->where(function ($query) use ($blog) {
                if (!empty($blog->categories) && is_array($blog->categories)) {
                    foreach ($blog->categories as $cat) {
                        $query->orWhereJsonContains('categories', $cat);
                    }
                }
            })
            ->orderBy('published_date', 'desc')
            ->take(3)
            ->get();

        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Blog', 'url' => route('blog')],
            ['name' => \Illuminate\Support\Str::limit($blog->title, 50), 'url' => url()->current()],
        ];

        return view('frontend.blog-detail', array_merge($seo, compact(
            'blog', 'relatedBlogs', 'readingTime', 'breadcrumbs'
        )));
    }

    /**
     * /bhakta-niwas is now a 301 redirect to /shegaon-bhakta-niwas.
     * Kept here in case it is called directly.
     */
    public function bhaktaNiwas()
    {
        return redirect()->route('location.shegaon-bhakta-niwas', [], 301);
    }

    public function darshanTimings()
    {
        $seo = $this->seoData('darshan-timings');

        $faqs = [
            ['q' => 'What are the Gajanan Maharaj darshan timings at Shegaon?',
             'a' => 'Temple darshan is open daily for devotees. Please contact the Sansthan office or helpline for current session timings and holiday updates.'],
            ['q' => 'What time is the morning aarti at Shri Gajanan Maharaj Temple?',
             'a' => 'Kakad Aarti is performed in the early morning hours. Contact the office directly for exact daily aarti timings.'],
            ['q' => 'Are there special darshan timings on Thursdays and festival days?',
             'a' => 'On Thursdays and major festivals (such as Prakat Din), special darshan arrangements are put in place. Inquire on WhatsApp before your visit.'],
        ];

        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Darshan Timings', 'url' => route('darshan-timings')],
        ];

        return view('frontend.darshan-timings', array_merge($seo, compact('faqs', 'breadcrumbs')));
    }

    public function howToReach()
    {
        $seo = $this->seoData('how-to-reach');

        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'How to Reach Shegaon', 'url' => route('how-to-reach')],
        ];

        return view('frontend.how-to-reach', array_merge($seo, compact('breadcrumbs')));
    }

    public function contact()
    {
        $seo = $this->seoData('contact');

        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Contact', 'url' => route('contact')],
        ];

        return view('frontend.contact', array_merge($seo, compact('breadcrumbs')));
    }

    public function privacyPolicy()
    {
        $seo = $this->seoData('privacy-policy');

        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Privacy Policy', 'url' => route('privacy-policy')],
        ];

        return view('frontend.privacy-policy', array_merge($seo, compact('breadcrumbs')));
    }

    public function termsConditions()
    {
        $seo = $this->seoData('terms-conditions');

        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Terms & Conditions', 'url' => route('terms-conditions')],
        ];

        return view('frontend.terms-conditions', array_merge($seo, compact('breadcrumbs')));
    }

    public function refundCancellationPolicy()
    {
        $seo = $this->seoData('refund-cancellation-policy');

        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Refund & Cancellation Policy', 'url' => route('refund-cancellation-policy')],
        ];

        return view('frontend.refund-cancellation-policy', array_merge($seo, compact('breadcrumbs')));
    }

    public function disclaimer()
    {
        $seo = $this->seoData('disclaimer');

        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Disclaimer', 'url' => route('disclaimer')],
        ];

        return view('frontend.disclaimer', array_merge($seo, compact('breadcrumbs')));
    }

    public function roomRent()
    {
        $seo = $this->seoData('room-rent');

        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Room Rent', 'url' => route('room-rent')],
        ];

        return view('frontend.room-rent', array_merge($seo, compact('breadcrumbs')));
    }

    public function facilities()
    {
        $seo = $this->seoData('facilities');

        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Facilities', 'url' => route('facilities')],
        ];

        return view('frontend.facilities', array_merge($seo, compact('breadcrumbs')));
    }

    public function availability()
    {
        $seo = $this->seoData('availability');

        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Availability', 'url' => route('availability')],
        ];

        return view('frontend.availability', array_merge($seo, compact('breadcrumbs')));
    }

    public function affordableStay()
    {
        $seo = $this->seoData('affordable-stay');

        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Affordable Stay', 'url' => route('affordable-stay')],
        ];

        return view('frontend.affordable-stay', array_merge($seo, compact('breadcrumbs')));
    }

    public function nearbyPlaces()
    {
        $seo = $this->seoData('nearby-places');

        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Nearby Places', 'url' => route('nearby-places')],
        ];

        return view('frontend.nearby-places', array_merge($seo, compact('breadcrumbs')));
    }

    public function faq()
    {
        $seo = $this->seoData('faq');

        $faqs = [
            ['q' => 'How can I book a room at Shegaon Bhakta Niwas?',
             'a' => 'Room booking is managed by Shri Gajanan Maharaj Sansthan. Contact our helpline via WhatsApp or phone to check room options and confirm your stay.'],
            ['q' => 'What documents are required for check-in?',
             'a' => 'All guests must present a valid government-issued photo ID (Aadhaar Card, Voter ID, Passport) at check-in.'],
            ['q' => 'Are meals included with the stay?',
             'a' => 'Satvik meals (Breakfast, Lunch, Dinner) are provided by the Sansthan Mahaprasad canteen for staying guests.'],
            ['q' => 'Is there a free bus from Shegaon Railway Station to Bhakta Niwas?',
             'a' => 'Yes. Shri Gajanan Maharaj Sansthan operates a free shuttle bus between Shegaon Railway Station and the temple complex.'],
            ['q' => 'What are the check-in and check-out timings?',
             'a' => 'Rooms are allocated for a 24-hour cycle starting from check-in time.'],
        ];

        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'FAQ', 'url' => route('faq')],
        ];

        return view('frontend.faq', array_merge($seo, compact('faqs', 'breadcrumbs')));
    }

    /**
     * New clean location detail URLs:
     *   /shegaon-bhakta-niwas
     *   /shegaon-anand-vihar
     *   /shegaon-visawa
     *   /pandharpur-bhakta-niwas
     *   /trimbakeshwar-bhakta-niwas
     *   /omkareshwar-bhakta-niwas
     *
     * Old URLs (/location-detail/{slug}) 301 redirect here via routes/web.php.
     */
    public function locationDetail(Request $request, $slug = null)
    {
        $slug = $slug ?? $request->route('slug') ?? basename($request->path());
        $locations = $this->getLocations();
        $location  = $locations->firstWhere('slug', $slug);

        if (!$location) {
            abort(404);
        }

        // Get SEO data from config/seo.php locations section
        $locationSeo = config('seo.locations.' . $slug, []);

        $seoTitle       = $locationSeo['title']       ?? ($location['name'] . ' | Shri Gajanan Maharaj Sansthan');
        $seoDescription = $locationSeo['description'] ?? $location['description'];
        $seoH1          = $locationSeo['h1']          ?? $location['name'];
        $seoOgImage     = !empty($locationSeo['og_image'])
            ? asset($locationSeo['og_image'])
            : (!empty($location['image']) ? asset('frontend/images/' . $location['image']) : asset('frontend/images/temple1.jpg'));

        $seo = [
            'seo_title'       => $seoTitle,
            'seo_description' => $seoDescription,
            'seo_h1'          => $seoH1,
            'seo_og_image'    => $seoOgImage,
            'seo_noindex'     => false,
            'schema_type'     => 'LodgingBusiness',
        ];

        // Related blogs by search_term topic
        try {
            $relatedBlogs = Blog::where('status', 'active')
                ->where('topics', 'LIKE', '%' . ($location['search_term'] ?? '') . '%')
                ->orderBy('published_date', 'desc')
                ->take(6)
                ->get();
        } catch (\Throwable $e) {
            $relatedBlogs = collect();
        }

        // Location-specific FAQs
        $faqs = $this->locationFaqs($slug);

        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Locations', 'url' => route('locations')],
            ['name' => $location['short_name'] ?? $location['name'], 'url' => url()->current()],
        ];

        return view('frontend.location-detail', array_merge($seo, compact(
            'location', 'relatedBlogs', 'faqs', 'breadcrumbs'
        )));
    }

    /**
     * FAQs per location - unique questions for each, no duplication.
     */
    private function locationFaqs(string $slug): array
    {
        $common = [
            ['q' => 'How do I book a room at this location?',
             'a' => 'Send a WhatsApp message or call our helpline with your travel dates and guest count for instant assistance.'],
            ['q' => 'What documents are required at check-in?',
             'a' => 'All guests must present valid government photo identification (Aadhaar, Voter ID, Passport) at check-in.'],
        ];

        $specific = [
            'shegaon-bhakta-niwas' => [
                ['q' => 'Is Shegaon Bhakta Niwas donation-based?',
                 'a' => 'Accommodation is offered on a voluntary donation basis. Devotees may contribute according to their capacity.'],
                ['q' => 'What is the room rent at Shegaon Bhakta Niwas?',
                 'a' => 'Tariffs are nominal and donation-based. Please contact the booking office on WhatsApp for room availability and details.'],
                ['q' => 'Is there a free bus from Shegaon Railway Station to Bhakta Niwas?',
                 'a' => 'Yes. Shri Gajanan Maharaj Sansthan operates a free shuttle bus between Shegaon Railway Station and the temple complex.'],
                ['q' => 'What are the check-in and check-out times at Shegaon Bhakta Niwas?',
                 'a' => 'Rooms are allocated for a 24-hour cycle from your check-in time. Contact the office for extension procedures.'],
            ],
            'shegaon-anand-vihar' => [
                ['q' => 'What is the difference between Anand Vihar and Bhakta Niwas in Shegaon?',
                 'a' => 'Anand Vihar is located near Anand Sagar spiritual park and offers AC rooms and suites. Main Bhakta Niwas is adjacent to the temple with a wider variety of rooms.'],
                ['q' => 'Is Anand Sagar near Anand Vihar accommodation?',
                 'a' => 'Yes, Anand Vihar is situated conveniently close to the Anand Sagar spiritual park complex in Shegaon.'],
            ],
            'shegaon-visawa' => [
                ['q' => 'How far is Shegaon Visawa from the railway station?',
                 'a' => 'Shegaon Visawa is located close to Shegaon Railway Station for easy access by train passengers.'],
                ['q' => 'Is Visawa a good choice for train travellers?',
                 'a' => 'Yes, Visawa is specifically located near the station for convenient stay of devotees arriving by rail.'],
            ],
            'pandharpur-bhakta-niwas' => [
                ['q' => 'Is the Pandharpur Bhakta Niwas near Vitthal Rukmini Temple?',
                 'a' => 'Yes, Pandharpur Bhakta Niwas is located within convenient distance of the Vitthal Rukmini Temple for pilgrims.'],
                ['q' => 'Can I stay at Pandharpur Bhakta Niwas during Ashadhi Ekadashi?',
                 'a' => 'Advance booking is recommended for Ashadhi and Kartik Ekadashi festivals due to heavy pilgrim rush.'],
            ],
            'trimbakeshwar-bhakta-niwas' => [
                ['q' => 'How far is the Trimbakeshwar Bhakta Niwas from the Jyotirlinga temple?',
                 'a' => 'Trimbakeshwar Bhakta Niwas is located close to the sacred Jyotirlinga temple and Kushavarta Kund.'],
                ['q' => 'Is Satvik (vegetarian) food available at Trimbakeshwar?',
                 'a' => 'Yes, Satvik Mahaprasad dining facilities are available for devotees staying at Trimbakeshwar Bhakta Niwas.'],
            ],
            'omkareshwar-bhakta-niwas' => [
                ['q' => 'How do I reach Omkareshwar Bhakta Niwas from Indore?',
                 'a' => 'Omkareshwar is approximately 75 km from Indore and easily reachable by road, bus, or taxi.'],
                ['q' => 'Is the Omkareshwar Bhakta Niwas near the Narmada river ghats?',
                 'a' => 'Yes, Omkareshwar Bhakta Niwas provides peaceful lodging close to the Narmada river and Jyotirlinga temple.'],
            ],
        ];

        return array_merge($specific[$slug] ?? [], $common);
    }
}
