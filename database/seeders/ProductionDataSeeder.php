<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProductionDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonPath = database_path('seeders/production_data.json');

        if (!file_exists($jsonPath)) {
            return;
        }

        $data = json_decode(file_get_contents($jsonPath), true);

        // 1. Seed Admin User
        if (isset($data['user'])) {
            User::updateOrCreate(
                ['email' => $data['user']['email']],
                [
                    'name'              => $data['user']['name'],
                    'password'          => $data['user']['password'],
                    'role'              => $data['user']['role'] ?? 'admin',
                    'email_verified_at' => $data['user']['email_verified_at'] ?? null,
                    'remember_token'    => $data['user']['remember_token'] ?? null,
                ]
            );
        }

        // 2. Seed All 17 Blog Posts
        if (isset($data['blogs']) && is_array($data['blogs'])) {
            foreach ($data['blogs'] as $post) {
                Blog::updateOrCreate(
                    ['slug' => $post['slug']],
                    [
                        'title'                     => $post['title'],
                        'short_description'         => $post['short_description'] ?? null,
                        'description'               => $post['description'] ?? null,
                        'image'                     => $post['image'] ?? null,
                        'categories'                => $post['categories'] ?? [],
                        'topics'                    => $post['topics'] ?? [],
                        'related_sansthan_location' => $post['related_sansthan_location'] ?? null,
                        'related_sansthan_link'     => $post['related_sansthan_link'] ?? null,
                        'meta_title'                => $post['meta_title'] ?? null,
                        'meta_description'          => $post['meta_description'] ?? null,
                        'meta_keywords'             => $post['meta_keywords'] ?? null,
                        'is_homepage'               => $post['is_homepage'] ?? 0,
                        'is_aboutpage'              => $post['is_aboutpage'] ?? 0,
                        'is_locationpage'           => $post['is_locationpage'] ?? 0,
                        'published_date'            => $post['published_date'] ?? null,
                        'status'                    => $post['status'] ?? 'active',
                    ]
                );
            }
        }
    }
}
