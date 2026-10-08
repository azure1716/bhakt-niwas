<?php

namespace App\Providers;

use App\Models\Blog;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if (file_exists(app_path('helpers.php'))) {
            require_once app_path('helpers.php');
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        // 2. Footer Blogs को Globally Share करें (हर View में उपलब्ध)
        try {
            if (\Illuminate\Support\Facades\Schema::hasTable('blogs')) {
                $footerBlogs = Blog::where('status', 'active')
                    ->where('is_homepage', 1)
                    ->orderBy('published_date', 'desc')
                    ->take(5)
                    ->get();
                View::share('footerBlogs', $footerBlogs);
            } else {
                View::share('footerBlogs', collect());
            }
        } catch (\Throwable $e) {
            View::share('footerBlogs', collect());
        }
    }
}
