<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title'             => 'How to Book Shegaon Bhakta Niwas: Step-by-Step Pilgrim Guide',
                'slug'              => 'how-to-book-shegaon-bhakta-niwas',
                'meta_title'        => 'How to Book Shegaon Bhakta Niwas | Step-by-Step Guide',
                'meta_description'  => 'Step-by-step guide to booking Shegaon Bhakta Niwas room online via WhatsApp or phone. Learn room options, documents needed and check-in rules.',
                'short_description' => 'Complete guide on booking Shegaon Bhakta Niwas room accommodation via WhatsApp or call. Learn room categories, documents required, and tips for a comfortable stay.',
                'description'       => file_get_contents(base_path('seo/posts/how-to-book-shegaon-bhakta-niwas.md')),
                'image'             => 'frontend/images/loc2.jpg',
                'categories'        => ['Booking', 'Shegaon'],
                'topics'            => ['Shegaon', 'Bhakta Niwas'],
                'status'            => 'active',
                'is_homepage'       => 1,
                'is_aboutpage'      => 0,
                'is_locationpage'   => 1,
                'published_date'    => now()->format('Y-m-d'),
            ],
            [
                'title'             => 'How to Reach Shegaon from Mumbai by Train: Complete Travel Guide',
                'slug'              => 'how-to-reach-shegaon-from-mumbai-by-train',
                'meta_title'        => 'How to Reach Shegaon from Mumbai by Train | Pilgrim Travel Guide',
                'meta_description'  => 'Complete travel guide: how to reach Shegaon from Mumbai by train. Popular trains like direct express trains, timings, free station shuttle bus, and travel tips.',
                'short_description' => 'Travel guide for pilgrims going from Mumbai to Shegaon by train. Information on popular overnight trains, station shuttle bus, and pre-booking Bhakta Niwas.',
                'description'       => file_get_contents(base_path('seo/posts/how-to-reach-shegaon-from-mumbai-by-train.md')),
                'image'             => 'frontend/images/temple1.jpg',
                'categories'        => ['Travel', 'Mumbai'],
                'topics'            => ['Shegaon', 'Train'],
                'status'            => 'active',
                'is_homepage'       => 1,
                'is_aboutpage'      => 0,
                'is_locationpage'   => 1,
                'published_date'    => now()->format('Y-m-d'),
            ],
            [
                'title'             => 'How to Reach Shegaon from Pune: Train, Bus & Road Travel Guide',
                'slug'              => 'how-to-reach-shegaon-from-pune-train-bus-road',
                'meta_title'        => 'How to Reach Shegaon from Pune | Train, Bus & Road Guide',
                'meta_description'  => 'Comprehensive guide to traveling from Pune to Shegaon by train, bus or car. Train schedules, MSRTC sleeper buses, driving route, and Bhakta Niwas stay.',
                'short_description' => 'Guide for Pune pilgrims traveling to Shegaon. Detailed routes for train, bus, and driving via Samruddhi Mahamarg with Bhakta Niwas lodging guidance.',
                'description'       => file_get_contents(base_path('seo/posts/how-to-reach-shegaon-from-pune-train-bus-road.md')),
                'image'             => 'frontend/images/temple2.jpg',
                'categories'        => ['Travel', 'Pune'],
                'topics'            => ['Shegaon', 'Pune'],
                'status'            => 'active',
                'is_homepage'       => 1,
                'is_aboutpage'      => 1,
                'is_locationpage'   => 0,
                'published_date'    => now()->format('Y-m-d'),
            ],
            [
                'title'             => 'How to Reach Shegaon from Nagpur by Train, Bus & Car',
                'slug'              => 'how-to-reach-shegaon-from-nagpur',
                'meta_title'        => 'How to Reach Shegaon from Nagpur | Express Train & Road Guide',
                'meta_description'  => 'Travel from Nagpur to Shegaon in via direct travel routes by train or car. Express train list, NH-53 highway route, day-trip tips, and Bhakta Niwas booking.',
                'short_description' => 'Quick travel guide from Nagpur to Shegaon via express trains and NH-53 highway. Tips for day trips and pre-booking Bhakta Niwas.',
                'description'       => file_get_contents(base_path('seo/posts/how-to-reach-shegaon-from-nagpur.md')),
                'image'             => 'frontend/images/temple3.jpg',
                'categories'        => ['Travel', 'Nagpur'],
                'topics'            => ['Shegaon', 'Nagpur'],
                'status'            => 'active',
                'is_homepage'       => 1,
                'is_aboutpage'      => 0,
                'is_locationpage'   => 1,
                'published_date'    => now()->format('Y-m-d'),
            ],
            [
                'title'             => 'Shegaon Pilgrimage Complete Guide: Temple Darshan, Stay & Travel Tips',
                'slug'              => 'shegaon-pilgrimage-complete-guide',
                'meta_title'        => 'Shegaon Pilgrimage Complete Guide | Temple Darshan & Stay',
                'meta_description'  => 'Ultimate guide to Shegaon pilgrimage: Shri Gajanan Maharaj Temple darshan, Anand Sagar spiritual park, Bhakta Niwas stay, Mahaprasad, and travel tips.',
                'short_description' => 'Complete pilgrimage guide to Shegaon. Covers Shri Gajanan Maharaj Temple darshan, Anand Sagar park, Bhakta Niwas accommodation, and essential tips.',
                'description'       => file_get_contents(base_path('seo/posts/shegaon-pilgrimage-complete-guide.md')),
                'image'             => 'frontend/images/loc3.jpg',
                'categories'        => ['Pilgrimage', 'Guide'],
                'topics'            => ['Shegaon', 'Gajanan Maharaj'],
                'status'            => 'active',
                'is_homepage'       => 1,
                'is_aboutpage'      => 1,
                'is_locationpage'   => 1,
                'published_date'    => now()->format('Y-m-d'),
            ],
        ];

        foreach ($posts as $postData) {
            Blog::updateOrCreate(
                ['slug' => $postData['slug']],
                $postData
            );
        }
    }
}
