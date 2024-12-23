<?php

use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\VillaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\BreakfastController;
use App\Http\Controllers\ExclusiveHomeController;
use App\Http\Controllers\OtherPagesController;
use App\Http\Controllers\GardenAndSpaController;
use App\Http\Controllers\NeighborhoodController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TestimonialsController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/custom/livewire/update', $handle);
    });

    Route::get('/', HomeController::class)->name('home');

    Route::get(LaravelLocalization::transRoute('routes.about'), AboutController::class)->name('about');

    Route::get(LaravelLocalization::transRoute('routes.neighborhood'), NeighborhoodController::class)->name('neighborhood');

    Route::get(LaravelLocalization::transRoute('routes.rooms'), [RoomController::class, 'index'])->name('room.index');

    Route::get(LaravelLocalization::transRoute(routeName: 'routes.room'), [RoomController::class, 'show'])->name('room.show');


    Route::get(LaravelLocalization::transRoute(routeName: 'routes.heart'), [VillaController::class, 'common'])->name('house-heart');

    Route::get(LaravelLocalization::transRoute('routes.relax-zone'), GardenAndSpaController::class)->name('relax-zone');

    Route::get(LaravelLocalization::transRoute('routes.attractions'), AttractionController::class)->name('attractions');

    Route::get(LaravelLocalization::transRoute('routes.gallery'), GalleryController::class)->name('gallery');

    Route::get(LaravelLocalization::transRoute(routeName: 'routes.voucher'), VoucherController::class)->name('voucher');

    Route::get(LaravelLocalization::transRoute('routes.breakfast'), BreakfastController::class)->name('breakfast');

    Route::get(LaravelLocalization::transRoute('routes.house'), ExclusiveHomeController::class)->name('exclusive-home');



    Route::get(LaravelLocalization::transRoute('routes.packages'), [PackagesController::class, 'index'])->name('packages.index');

    Route::get(LaravelLocalization::transRoute('routes.package'), [PackagesController::class, 'show'])->name('packages.show');


    Route::get(LaravelLocalization::transRoute('routes.contact'), ContactController::class)->name('contact');

    Route::get(LaravelLocalization::transRoute('routes.testimonials'), TestimonialsController::class)->name('testimonials');


    Route::get(LaravelLocalization::transRoute('routes.privacy-policy'), [OtherPagesController::class, 'privacyPolicy'])->name('privacy-policy');

    Route::get(LaravelLocalization::transRoute('routes.regulations'), [OtherPagesController::class, 'regulations'])->name('regulations');

    Route::get(LaravelLocalization::transRoute('routes.spa-regulations'), [OtherPagesController::class, 'spaRegulations'])->name('spa-regulations');

    Route::get(LaravelLocalization::transRoute('routes.info'), [OtherPagesController::class, 'info'])->name('info');



    Route::get(LaravelLocalization::transRoute('routes.booking'), ReservationController::class)->name('booking');


    //opinie

    Route::fallback(function () {
        return redirect('/');
    });
});
