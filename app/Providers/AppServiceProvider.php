<?php

namespace App\Providers;

use App\Models\Gallery;
use App\Models\AboutPage;
use App\Models\GalleryPage;
use App\Models\AboutPageBlock;
use App\Models\VillaRoomsPage;
use App\Models\VillaCommonPage;
use App\Observers\GalleryObserver;
use App\Models\VillaRoomsPageBlock;
use App\Models\VillaCommonPageBlock;
use App\Observers\AboutPageObserver;
use App\Observers\GalleryPageObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\AboutPageBlockObserver;
use App\Observers\VillaRoomsPageObserver;
use App\Observers\VillaCommonPageObserver;
use App\Observers\VillaRoomsPageBlockObserver;
use App\Observers\VillaCommonPageBlockObserver;

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

        // Villa common
        VillaCommonPage::observe(VillaCommonPageObserver::class);
        VillaCommonPageBlock::observe(VillaCommonPageBlockObserver::class);

        // Villa rooms
        VillaRoomsPage::observe(VillaRoomsPageObserver::class);
        VillaRoomsPageBlock::observe(VillaRoomsPageBlockObserver::class);
    }
}
