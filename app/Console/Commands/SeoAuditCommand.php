<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SeoAuditCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seo:audit';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Audits public routes to verify unique title, meta description, H1, canonical, and sitemap presence';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('Starting SEO Audit Scan...');

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

        $titles = [];
        $descriptions = [];
        $h1s = [];
        $failures = [];

        foreach ($publicRoutes as $uri) {
            try {
                $response = $this->laravel->handle(
                    \Illuminate\Http\Request::create($uri, 'GET')
                );
                $html = $response->getContent();

                // 1. Check Title
                if (preg_match('/<title>(.*?)<\/title>/i', $html, $m)) {
                    $title = trim($m[1]);
                    if (empty($title)) {
                        $failures[] = "{$uri}: Empty <title> tag.";
                    } elseif (in_array($title, $titles)) {
                        $failures[] = "{$uri}: Duplicate title '{$title}'.";
                    } else {
                        $titles[$uri] = $title;
                    }
                } else {
                    $failures[] = "{$uri}: Missing <title> tag.";
                }

                // 2. Check Description
                if (preg_match('/<meta\s+name="description"\s+content="(.*?)"/i', $html, $m)) {
                    $desc = trim($m[1]);
                    if (empty($desc)) {
                        $failures[] = "{$uri}: Empty meta description.";
                    } elseif (in_array($desc, $descriptions)) {
                        $failures[] = "{$uri}: Duplicate meta description.";
                    } else {
                        $descriptions[$uri] = $desc;
                    }
                } else {
                    $failures[] = "{$uri}: Missing meta description.";
                }

                // 3. Check H1
                if (preg_match_all('/<h1[^>]*>(.*?)<\/h1>/is', $html, $m)) {
                    $h1Count = count($m[1]);
                    if ($h1Count !== 1) {
                        $failures[] = "{$uri}: Expected 1 H1 tag, found {$h1Count}.";
                    } else {
                        $h1Text = trim(strip_tags($m[1][0]));
                        if (in_array($h1Text, $h1s)) {
                            $failures[] = "{$uri}: Duplicate H1 '{$h1Text}'.";
                        } else {
                            $h1s[$uri] = $h1Text;
                        }
                    }
                } else {
                    $failures[] = "{$uri}: Missing H1 tag.";
                }

                // 4. Check Canonical
                if (!preg_match('/<link\s+rel="canonical"\s+href="(.*?)"/i', $html)) {
                    $failures[] = "{$uri}: Missing canonical link.";
                }

                // 5. Extract & Validate JSON-LD Schema
                if (preg_match_all('/<script\s+type="application\/ld\+json">(.*?)<\/script>/is', $html, $schemaMatches)) {
                    foreach ($schemaMatches[1] as $idx => $jsonString) {
                        $jsonString = trim($jsonString);
                        $decoded = json_decode($jsonString, true);
                        if (json_last_error() !== JSON_ERROR_NONE) {
                            $failures[] = "{$uri}: JSON-LD block #{$idx} contains invalid JSON syntax (" . json_last_error_msg() . ").";
                        } else {
                            if (!isset($decoded['@context'])) {
                                $failures[] = "{$uri}: JSON-LD block #{$idx} missing @context.";
                            }
                            if (isset($decoded['@graph']) && is_array($decoded['@graph'])) {
                                foreach ($decoded['@graph'] as $gIdx => $graphNode) {
                                    if (!isset($graphNode['@type'])) {
                                        $failures[] = "{$uri}: JSON-LD @graph node #{$gIdx} missing @type.";
                                    }
                                }
                            } elseif (!isset($decoded['@type'])) {
                                $failures[] = "{$uri}: JSON-LD block #{$idx} missing @type.";
                            }
                        }
                    }
                } else {
                    $failures[] = "{$uri}: Missing JSON-LD structured data script block.";
                }

            } catch (\Throwable $e) {
                $failures[] = "{$uri}: Exception during render: " . $e->getMessage();
            }
        }

        // 5. Verify Sitemap Inclusion
        try {
            $sitemapResponse = $this->laravel->handle(
                \Illuminate\Http\Request::create('/sitemap.xml', 'GET')
            );
            $sitemapXml = $sitemapResponse->getContent();

            foreach ($publicRoutes as $uri) {
                if ($uri === '/') continue;
                $expectedUrl = url($uri);
                if (strpos($sitemapXml, $expectedUrl) === false && strpos($sitemapXml, $uri) === false) {
                    $failures[] = "{$uri}: Missing from sitemap.xml.";
                }
            }
        } catch (\Throwable $e) {
            $failures[] = "Sitemap check exception: " . $e->getMessage();
        }

        if (!empty($failures)) {
            $this->error('SEO Audit FAILED with ' . count($failures) . ' issue(s):');
            foreach ($failures as $f) {
                $this->line(" - {$f}");
            }
            return 1;
        }

        $this->info('SEO Audit PASSED. All public routes have unique titles, descriptions, H1s, canonicals, and sitemap entries!');
        return 0;
    }
}
