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
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        // 2. Footer Blogs को Globally Share करें (हर View में उपलब्ध)
        $footerBlogs = Blog::where('status', 'active')
            ->where('is_homepage', 1)
            ->orderBy('published_date', 'desc')
            ->take(5)
            ->get();

        View::share('footerBlogs', $footerBlogs);
    }
}
