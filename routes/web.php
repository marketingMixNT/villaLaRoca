<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GardenAndSpaController;
use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NeighborhoodController;
use App\Http\Controllers\OtherPagesController;
use App\Http\Controllers\VillaController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/custom/livewire/update', $handle);
    });

    Route::get('/', HomeController::class)->name('home');
    Route::get('/o-nas', AboutController::class)->name('about');
    Route::get('/villa/pokoje', [VillaController::class, 'rooms'])->name('villa.rooms');
    Route::get('/villa/czesci-wspolne', [VillaController::class, 'common'])->name('villa.common');
    Route::get('/garden-spa', GardenAndSpaController::class)->name('garden-and-spa');
    Route::get('/okolica', NeighborhoodController::class)->name('neighborhood');
    Route::get('/galeria', GalleryController::class)->name('gallery');
    Route::get('/kontakt', ContactController::class)->name('contact');

    Route::get('/polityka-prywatnosci', [OtherPagesController::class, 'privacyPolicy'])->name('privacy-policy');
    Route::get('/regulamin', [OtherPagesController::class, 'regulations'])->name('regulations');
});
