<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SeoRouteTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test 301 redirects for legacy URLs.
     */
    public function test_legacy_url_redirects(): void
    {
        $redirects = [
            '/bhakta-niwas' => '/shegaon-bhakta-niwas',
            '/location-detail/shegaon-bhakt-niwas' => '/shegaon-bhakta-niwas',
            '/location-detail/shegaon-anand-vihar' => '/shegaon-anand-vihar',
            '/location-detail/shegaon-visawa' => '/shegaon-visawa',
            '/location-detail/pandharpur' => '/pandharpur-bhakta-niwas',
            '/location-detail/trimbakeshwar' => '/trimbakeshwar-bhakta-niwas',
            '/location-detail/omkareshwar' => '/omkareshwar-bhakta-niwas',
        ];

        foreach ($redirects as $oldUrl => $expectedTarget) {
            $response = $this->get($oldUrl);
            $response->assertStatus(301);
            $response->assertRedirect($expectedTarget);
        }
    }

    /**
     * Test public pages return 200 status with proper HTML structure.
     */
    public function test_public_pages_status_and_metadata(): void
    {
        $publicUrls = [
            '/',
            '/booking',
            '/contact',
            '/shegaon-bhakta-niwas',
            '/shegaon-anand-vihar',
            '/shegaon-visawa',
            '/pandharpur-bhakta-niwas',
            '/trimbakeshwar-bhakta-niwas',
            '/omkareshwar-bhakta-niwas',
            '/locations',
            '/about',
            '/darshan-timings',
            '/how-to-reach',
            '/blog',
            '/privacy-policy',
            '/terms-conditions',
            '/refund-cancellation-policy',
            '/disclaimer',
            '/shegaon-bhakta-niwas-room-rent',
            '/shegaon-bhakta-niwas-facilities',
            '/shegaon-bhakta-niwas-availability',
            '/affordable-stay-near-gajanan-maharaj-temple-shegaon',
            '/nearby-places-shegaon',
            '/faq',
        ];

        foreach ($publicUrls as $url) {
            $response = $this->get($url);
            $response->assertStatus(200);

            $content = $response->getContent();
            $this->assertStringContainsString('<title>', $content, "Missing <title> tag on {$url}");
            $this->assertStringContainsString('<meta name="description"', $content, "Missing meta description on {$url}");
            $this->assertStringContainsString('<link rel="canonical"', $content, "Missing canonical tag on {$url}");
            $this->assertStringContainsString('<h1', $content, "Missing <h1> tag on {$url}");
        }
    }

    /**
     * Test 404 response on invalid route.
     */
    public function test_non_existent_page_returns_404(): void
    {
        $response = $this->get('/non-existent-page-xyz-123');
        $response->assertStatus(404);
    }

    /**
     * Test sitemap functionality.
     */
    public function test_sitemap_returns_valid_xml(): void
    {
        $response = $this->get('/sitemap.xml');
        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/xml');
        $this->assertStringContainsString('<urlset', $response->getContent());
    }

    /**
     * Test robots.txt functionality.
     */
    public function test_robots_txt_returns_valid_content(): void
    {
        $response = $this->get('/robots.txt');
        $response->assertStatus(200);
        $this->assertStringContainsString('text/plain', $response->headers->get('Content-Type'));
        $this->assertStringContainsString('Sitemap:', $response->getContent());
        $this->assertStringContainsString('User-agent:', $response->getContent());
    }

    /**
     * Test noindex header on admin/auth routes.
     */
    public function test_noindex_on_protected_routes(): void
    {
        $response = $this->get('/login');
        $response->assertHeader('X-Robots-Tag', 'noindex, nofollow');
    }

    /**
     * Test hreflang tags behave conditionally based on translations data.
     */
    public function test_hreflang_tags_only_appear_when_translations_exist(): void
    {
        // 1. Default page render: no translations passed -> no hreflang tag
        $response = $this->get('/');
        $this->assertStringNotContainsString('hreflang="mr-IN"', $response->getContent());
        $this->assertStringNotContainsString('hreflang="hi-IN"', $response->getContent());

        // 2. View rendered with translations -> hreflang tags render
        $html = view('frontend.partials.seo', [
            'translations' => [
                'en' => 'http://localhost/shegaon-bhakta-niwas',
                'mr' => 'http://localhost/mr/shegaon-bhakta-niwas',
                'hi' => 'http://localhost/hi/shegaon-bhakta-niwas',
            ]
        ])->render();

        $this->assertStringContainsString('hreflang="en-IN"', $html);
        $this->assertStringContainsString('hreflang="mr-IN"', $html);
        $this->assertStringContainsString('hreflang="hi-IN"', $html);
        $this->assertStringContainsString('hreflang="x-default"', $html);
    }

    /**
     * Test blog search works case-insensitively.
     */
    public function test_blog_search_case_insensitive(): void
    {
        \App\Models\Blog::create([
            'title' => 'Shegaon Bhakta Niwas Booking Guide',
            'slug' => 'test-shegaon-booking-guide',
            'short_description' => 'Test description for Shegaon pilgrimage stay',
            'description' => '<p>Detailed guide for Shegaon room booking.</p>',
            'published_date' => now(),
            'status' => 'active',
        ]);

        $responseLower = $this->get('/blog?search=shegaon');
        $responseLower->assertStatus(200);

        $responseUpper = $this->get('/blog?search=Shegaon');
        $responseUpper->assertStatus(200);

        $this->assertStringContainsString('class="blog-card', $responseLower->getContent());
        $this->assertStringContainsString('class="blog-card', $responseUpper->getContent());
    }
}
