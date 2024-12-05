<?php

namespace App\Providers;

use App\Models\Cta;
use App\Models\Home;
use App\Models\Room;
use App\Models\Gallery;
use App\Models\InfoPage;
use App\Models\Packages;
use App\Models\AboutPage;
use App\Models\Pictogram;
use App\Models\HomeBanner;
use App\Models\ContactPage;
use App\Models\GalleryPage;
use App\Models\Regulations;
use App\Models\VoucherPage;
use App\Models\PackagesPage;
use App\Models\BreakfastPage;
use App\Models\InfoPageBlock;
use App\Models\PrivacyPolicy;
use App\Models\AboutPageBlock;
use App\Models\AttractionPage;
use App\Models\SpaRegulations;
use App\Models\VillaRoomsPage;
use App\Observers\CtaObserver;
use App\Models\VillaCommonPage;
use App\Observers\HomeObserver;
use App\Observers\RoomObserver;
use App\Models\AboutPageGallery;
use App\Models\GardenAndSpaPage;
use App\Models\NeighborhoodPage;
use App\Models\TestimonialsPage;
use App\Models\VoucherPageBlock;
use App\Models\PackagesPageBlock;
use App\Models\BreakfastPageBlock;
use App\Observers\GalleryObserver;
use App\Models\AttractionPageBlock;
use App\Models\VillaRoomsPageBlock;
use App\Observers\InfoPageObserver;
use App\Observers\PackagesObserver;
use App\Models\BreakfastPageGallery;
use App\Models\VillaCommonPageBlock;
use App\Observers\AboutPageObserver;
use App\Observers\PictogramObserver;
use App\Models\GardenAndSpaPageBlock;
use App\Models\HomeFirstSectionBlock;
use App\Models\NeighborhoodPageBlock;
use App\Models\HomeSecondSectionBlock;
use App\Observers\ContactPageObserver;
use App\Observers\GalleryPageObserver;
use App\Observers\RegulationsObserver;
use App\Observers\VoucherPageObserver;
use App\Observers\PackagesPageObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\BreakfastPageObserver;
use App\Observers\InfoPageBlockObserver;
use App\Observers\PrivacyPolicyObserver;
use App\Observers\AboutPageBlockObserver;
use App\Observers\AttractionPageObserver;
use App\Observers\SpaRegulationsObserver;
use App\Observers\VillaRoomsPageObserver;
use App\Observers\VillaCommonPageObserver;
use App\Observers\GardenAndSpaPageObserver;
use App\Observers\NeighborhoodPageObserver;
use App\Observers\TestimonialsPageObserver;
use App\Observers\VoucherPageBlockObserver;
use App\Observers\PackagesBlockPageObserver;
use App\Observers\BreakfastPageBlockObserver;
use App\Observers\AttractionPageBlockObserver;
use App\Observers\VillaRoomsPageBlockObserver;
use App\Observers\VillaCommonPageBlockObserver;
use App\Observers\GardenAndSpaPageBlockObserver;
use App\Observers\HomeFirstSectionBlockObserver;
use App\Observers\NeighborhoodPageBlockObserver;
use App\Observers\HomeSecondSectionBlockObserver;

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
        AboutPageGallery::observe(AboutPageGallery::class);

        // Attractions
        AttractionPage::observe(AttractionPageObserver::class);
        AttractionPageBlock::observe(AttractionPageBlockObserver::class);

        // Breakfast
        BreakfastPage::observe(BreakfastPageObserver::class);
        BreakfastPageBlock::observe(BreakfastPageBlockObserver::class);
        BreakfastPageGallery::observe(BreakfastPageGallery::class);

        //Contact
        ContactPage::observe(ContactPageObserver::class);

        // Gallery
        Gallery::observe(GalleryObserver::class);
        GalleryPage::observe(GalleryPageObserver::class);

        //Garden & Spa
        GardenAndSpaPage::observe(GardenAndSpaPageObserver::class);
        GardenAndSpaPageBlock::observe(GardenAndSpaPageBlockObserver::class);

        // Home
        Home::observe(HomeObserver::class);
        HomeFirstSectionBlock::observe(HomeFirstSectionBlockObserver::class);
        HomeSecondSectionBlock::observe(HomeSecondSectionBlockObserver::class);
        Cta::observe(CtaObserver::class);
        HomeBanner::observe(HomeObserver::class);
        Pictogram::observe(PictogramObserver::class);

        // Neighborhood
        NeighborhoodPage::observe(NeighborhoodPageObserver::class);
        NeighborhoodPageBlock::observe(NeighborhoodPageBlockObserver::class);

        // Packages
        Packages::observe(PackagesObserver::class);
        PackagesPage::observe(PackagesPageObserver::class);
        PackagesPageBlock::observe(PackagesBlockPageObserver::class);

        //Other Pages
        PrivacyPolicy::observe(PrivacyPolicyObserver::class);
        Regulations::observe(RegulationsObserver::class);
        SpaRegulations::observe(SpaRegulationsObserver::class);
        InfoPage::observe(InfoPageObserver::class);
        InfoPageBlock::observe(InfoPageBlockObserver::class);

        // Testimonial
        TestimonialsPage::observe(TestimonialsPageObserver::class);

        // Villa common
        VillaCommonPage::observe(VillaCommonPageObserver::class);
        VillaCommonPageBlock::observe(VillaCommonPageBlockObserver::class);

        // Villa rooms
        VillaRoomsPage::observe(VillaRoomsPageObserver::class);
        VillaRoomsPageBlock::observe(VillaRoomsPageBlockObserver::class);
        Room::observe(RoomObserver::class);

        // Voucher
        VoucherPage::observe(VoucherPageObserver::class);
        VoucherPageBlock::observe(VoucherPageBlockObserver::class);
    }
}
