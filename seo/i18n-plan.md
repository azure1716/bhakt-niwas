# Multilingual Route Prefix Plan (i18n Architecture)

This document outlines the architecture for introducing Marathi (`/mr/`) and Hindi (`/hi/`) versions of the Shegaon Bhakta Niwas platform when translations are authored.

## 1. Route Grouping Structure
```php
// English (Default - Root URLs)
Route::get('/shegaon-bhakta-niwas', [FrontendController::class, 'locationDetail'])->name('location.shegaon');

// Marathi (/mr/)
Route::prefix('mr')->name('mr.')->group(function () {
    Route::get('/shegaon-bhakta-niwas', [FrontendController::class, 'locationDetailMr'])->name('location.shegaon');
});

// Hindi (/hi/)
Route::prefix('hi')->name('hi.')->group(function () {
    Route::get('/shegaon-bhakta-niwas', [FrontendController::class, 'locationDetailHi'])->name('location.shegaon');
});
```

## 2. Hreflang Tag Implementation Rules
- Default English page (`en-IN`): `https://<domain>/shegaon-bhakta-niwas`
- Marathi page (`mr-IN`): `https://<domain>/mr/shegaon-bhakta-niwas`
- Hindi page (`hi-IN`): `https://<domain>/hi/shegaon-bhakta-niwas`
- Fallback (`x-default`): `https://<domain>/shegaon-bhakta-niwas`

When no translated alternate exists for a given URL, the `$translations` array remains empty, and zero `hreflang` tags are output to avoid broken alternate links.
