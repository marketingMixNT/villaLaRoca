<?php

namespace App\Observers;

use App\Models\Home;
use Illuminate\Support\Facades\Storage;

class HomeObserver
{
    /**
     * Handle the Home "created" event.
     */
    public function created(Home $home): void
    {
        //
    }

    /**
     * Handle the Home "updated" event.
     */
    public function updated(Home $home): void
    {
         // SINGLE
        // logo
        if ($home->isDirty('logo')) {
            Storage::disk('public')->delete($home->getOriginal('logo'));
        }
        // logo_dark
        if ($home->isDirty('logo_dark')) {
            Storage::disk('public')->delete($home->getOriginal('logo_dark'));
        }
        // slider_movie
        if ($home->isDirty('slider_movie')) {
            $originalSliderMovie = $home->getOriginal('slider_movie');
            if ($originalSliderMovie) {
                Storage::disk('public')->delete($originalSliderMovie);
            }
        }

           // ARRAY
        // slider_images
        if ($home->isDirty('slider_images')) {
            $original = $home->getOriginal('slider_images');
            $current = $home->slider_images;
            $deletedImages = array_diff($original, $current);

            foreach ($deletedImages as $image) {
                Storage::disk('public')->delete($image);
            }
        }
        // neighborhood_images
        if ($home->isDirty('neighborhood_images')) {
            $original = $home->getOriginal('neighborhood_images');
            $current = $home->neighborhood_images;
            $deletedImages = array_diff($original, $current);

            foreach ($deletedImages as $image) {
                Storage::disk('public')->delete($image);
            }
        }
    }

    /**
     * Handle the Home "deleted" event.
     */
    public function deleted(Home $home): void
    {
         // logo
         if (!is_null($home->logo)) {
            Storage::disk('public')->delete($home->getOriginal('logo'));
        }
         // logo_dark
         if (!is_null($home->logo_dark)) {
            Storage::disk('public')->delete($home->getOriginal('logo_dark'));
        }
         // slider_movie
         if (!is_null($home->slider_movie)) {
            Storage::disk('public')->delete($home->getOriginal('slider_movie'));
        }
         // sliderImages
         if (!is_null($home->slider_images)) {
            Storage::disk('public')->delete($home->getOriginal('slider_images'));
        }
         // neighborhoodImages
         if (!is_null($home->neighborhood_images)) {
            Storage::disk('public')->delete($home->getOriginal('neighborhood_images'));
        }
    }

    /**
     * Handle the Home "restored" event.
     */
    public function restored(Home $home): void
    {
        //
    }

    /**
     * Handle the Home "force deleted" event.
     */
    public function forceDeleted(Home $home): void
    {
        //
    }
}
