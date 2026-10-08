<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SeoLaunchCheckCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seo:launch-check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verifies production launch readiness including APP_URL, APP_DEBUG, GA4, GSC, contact config, placeholders, and robots.txt';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('Starting Production Launch Readiness Check...');

        $failures = [];

        // 1. Check APP_URL
        $appUrl = config('app.url');
        if (empty($appUrl) || str_contains($appUrl, 'localhost') || str_contains($appUrl, '127.0.0.1')) {
            $failures[] = "APP_URL is set to local/default ('{$appUrl}'). Set to production domain in .env.";
        }

        // 2. Check APP_DEBUG
        if (config('app.debug') === true) {
            $failures[] = "APP_DEBUG is enabled (true). Must be set to false for production.";
        }

        // 3. Check GSC Verification Token
        if (empty(config('seo.gsc_token'))) {
            $failures[] = "GSC_VERIFICATION token is empty in config/seo.php / .env.";
        }

        // 4. Check GA4 Measurement ID
        if (empty(config('seo.ga4_id'))) {
            $failures[] = "GA4_ID is empty in config/seo.php / .env.";
        }

        // 5. Check SEO_PHONE & SEO_EMAIL
        if (empty(config('seo.phone'))) {
            $failures[] = "SEO_PHONE contact number is empty in .env.";
        }
        if (empty(config('seo.email'))) {
            $failures[] = "SEO_EMAIL contact address is empty in .env.";
        }

        // 6. Run Placeholders Scan
        $exitCode = $this->call('seo:placeholders');
        if ($exitCode !== 0) {
            $failures[] = "SEO Placeholders Scan failed. Unverified placeholders or draft tokens found in rendered pages.";
        }

        // 7. Check Robots.txt
        try {
            $robotsResponse = $this->laravel->handle(
                \Illuminate\Http\Request::create('/robots.txt', 'GET')
            );
            $robotsTxt = $robotsResponse->getContent();
            if (str_contains($robotsTxt, 'Disallow: /') && !str_contains($robotsTxt, 'Allow: /')) {
                $failures[] = "robots.txt contains global 'Disallow: /' blocking site indexing.";
            }
        } catch (\Throwable $e) {
            $failures[] = "Error checking robots.txt: " . $e->getMessage();
        }

        if (!empty($failures)) {
            $this->error("\nProduction Launch Check FAILED with " . count($failures) . " issue(s):");
            foreach ($failures as $f) {
                $this->line(" - {$f}");
            }
            return 1;
        }

        $this->info("\nProduction Launch Check PASSED! Site is 100% ready for production deployment.");
        return 0;
    }
}
