<?php

namespace App\Providers;

use App\Models\Gallery;
use App\Models\GalleryPage;
use App\Observers\GalleryObserver;
use App\Observers\GalleryPageObserver;
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
        
        // Gallery
        Gallery::observe(GalleryObserver::class);
        GalleryPage::observe(GalleryPageObserver::class);
    }
}
