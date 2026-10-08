<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;

class SeoPlaceholdersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seo:placeholders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scans rendered public pages for unverified placeholders, null strings, or empty JSON-LD fields';

    /**
     * Forbidden tokens that must never appear in rendered HTML.
     *
     * @var array
     */
    protected array $forbidden = [
        'CLIENT TO CONFIRM',
        '[CLIENT',
        'TBD',
        'Lorem',
        'undefined',
        '"checkinTime": ""',
        '"checkoutTime": ""',
        '"priceRange": ""',
        '"checkinTime": null',
        '"checkoutTime": null',
        '"priceRange": null',
        '9523016487',
        '8603790855',
        'gajananmaharajsansthanbhaktnivas.com',
    ];

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('Starting SEO Placeholders Scan...');

        $publicRoutes = [
            '/',
            '/booking',
            '/contact',
            '/shegaon-bhakta-niwas',
            '/shegaon-anand-vihar',
            '/shegaon-visawa',
            '/pandharpur-bhakta-niwas',
            '/trimbakeshwar-bhakta-niwas',
            '/omkareshwar-bhakta-niwas',
            '/darshan-timings',
            '/how-to-reach',
            '/about',
            '/locations',
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

        $failures = [];

        foreach ($publicRoutes as $uri) {
            try {
                $response = $this->laravel->handle(
                    \Illuminate\Http\Request::create($uri, 'GET')
                );
                $status = $response->getStatusCode();
                $html = $response->getContent();

                if ($status !== 200 && $status !== 301) {
                    $failures[] = [
                        'uri' => $uri,
                        'reason' => "Returned HTTP status {$status}",
                    ];
                    continue;
                }

                foreach ($this->forbidden as $token) {
                    if (stripos($html, $token) !== false) {
                        $failures[] = [
                            'uri' => $uri,
                            'reason' => "Contains forbidden token '{$token}'",
                        ];
                    }
                }
            } catch (\Throwable $e) {
                $failures[] = [
                    'uri' => $uri,
                    'reason' => 'Exception: ' . $e->getMessage(),
                ];
            }
        }

        if (!empty($failures)) {
            $this->error('SEO Placeholders scan FAILED with ' . count($failures) . ' issue(s):');
            foreach ($failures as $f) {
                $this->line(" - {$f['uri']}: {$f['reason']}");
            }
            return 1;
        }

        $this->info('SEO Placeholders scan PASSED. All rendered public pages are clean!');
        return 0;
    }
}
