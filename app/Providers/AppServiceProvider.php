<?php

namespace App\Providers;

use App\Models\Gallery;
use App\Models\AboutPage;
use App\Models\GalleryPage;
use App\Models\AboutPageBlock;
use App\Observers\GalleryObserver;
use App\Observers\AboutPageObserver;
use App\Observers\GalleryPageObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\AboutPageBlockObserver;

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
        // About
        AboutPage::observe(AboutPageObserver::class);
        AboutPageBlock::observe(AboutPageBlockObserver::class);

        // Gallery
        Gallery::observe(GalleryObserver::class);
        GalleryPage::observe(GalleryPageObserver::class);
    }
}
