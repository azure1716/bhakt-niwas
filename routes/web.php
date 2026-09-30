<?php

use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/booking', [FrontendController::class, 'booking'])->name('booking');
Route::get('/locations', [FrontendController::class, 'locations'])->name('locations');

Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [FrontendController::class, 'blogDetail'])->name('blog.detail');

Route::get('/bhakta-niwas', [FrontendController::class, 'bhaktaNiwas'])->name('bhaktaNiwas');

Route::get('/darshan-timings', [FrontendController::class, 'darshanTimings'])->name('darshan-timings');
Route::get('/how-to-reach', [FrontendController::class, 'howToReach'])->name('how-to-reach');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('privacy-policy');

Route::get('/terms-conditions', [FrontendController::class, 'termsConditions'])->name('terms-conditions');
Route::get('/refund-cancellation-policy', [FrontendController::class, 'refundCancellationPolicy'])->name('refund-cancellation-policy');

Route::get('/disclaimer', [FrontendController::class, 'disclaimer'])->name('disclaimer');

Route::get('/location-detail/{slug}', [FrontendController::class, 'locationDetail'])->name('location-detail');





Route::get('/dashboard', function () {
    return view('admin.dashboard.admin_dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


// Admin Routes
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('blog', BlogController::class);
    Route::put('blog/status/{id}', [BlogController::class, 'status'])->name('blog.status');
});


require __DIR__ . '/auth.php';
