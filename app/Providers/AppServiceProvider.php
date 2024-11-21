<?php

namespace App\Providers;

use App\Models\Gallery;
use App\Models\AboutPage;
use App\Models\GalleryPage;
use App\Models\AboutPageBlock;
use App\Models\VillaRoomsPage;
use App\Models\VillaCommonPage;
use App\Models\GardenAndSpaPage;
use App\Models\NeighborhoodPage;
use App\Observers\GalleryObserver;
use App\Models\VillaRoomsPageBlock;
use App\Models\VillaCommonPageBlock;
use App\Observers\AboutPageObserver;
use App\Models\GardenAndSpaPageBlock;
use App\Models\NeighborhoodPageBlock;
use App\Observers\GalleryPageObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\AboutPageBlockObserver;
use App\Observers\VillaRoomsPageObserver;
use App\Observers\VillaCommonPageObserver;
use App\Observers\GardenAndSpaPageObserver;
use App\Observers\NeighborhoodPageObserver;
use App\Observers\VillaRoomsPageBlockObserver;
use App\Observers\VillaCommonPageBlockObserver;
use App\Observers\GardenAndSpaPageBlockObserver;
use App\Observers\NeighborhoodPageBlockObserver;

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

        //Garden & Spa
        GardenAndSpaPage::observe(GardenAndSpaPageObserver::class);
        GardenAndSpaPageBlock::observe(GardenAndSpaPageBlockObserver::class);

        // Neighborhood
        NeighborhoodPage::observe(NeighborhoodPageObserver::class);
        NeighborhoodPageBlock::observe(NeighborhoodPageBlockObserver::class);

        // Villa common
        VillaCommonPage::observe(VillaCommonPageObserver::class);
        VillaCommonPageBlock::observe(VillaCommonPageBlockObserver::class);

        // Villa rooms
        VillaRoomsPage::observe(VillaRoomsPageObserver::class);
        VillaRoomsPageBlock::observe(VillaRoomsPageBlockObserver::class);
    }
}
