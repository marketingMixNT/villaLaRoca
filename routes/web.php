<?php

use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\VillaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\OtherPagesController;
use App\Http\Controllers\GardenAndSpaController;
use App\Http\Controllers\NeighborhoodController;
use App\Http\Controllers\TestimonialsController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/custom/livewire/update', $handle);
    });

    Route::get('/', HomeController::class)->name('home');
    Route::get('/o-villi', AboutController::class)->name('about');
    Route::get('/okolice', NeighborhoodController::class)->name('neighborhood');
    Route::get('/pokoje', [VillaController::class, 'rooms'])->name('rooms');
    Route::get('/serce-domu', [VillaController::class, 'common'])->name('house-heart');
    Route::get('/strefa-relaksu', GardenAndSpaController::class)->name('relax-zone');
    Route::get('/galeria', GalleryController::class)->name('gallery');

    Route::get('/kontakt', ContactController::class)->name('contact');
    Route::get('/opinie', TestimonialsController::class)->name('testimonials');

    Route::get('/polityka-prywatnosci', [OtherPagesController::class, 'privacyPolicy'])->name('privacy-policy');
    Route::get('/regulamin-obiektu', [OtherPagesController::class, 'regulations'])->name('regulations');
    Route::get('/regulamin-spa', [OtherPagesController::class, 'spaRegulations'])->name('spa-regulations');

    
    //opinie

    Route::fallback(function () {
        return redirect('/');
    });
});
