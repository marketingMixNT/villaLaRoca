<?php

namespace App\Observers;

use App\Models\BreakfastPageGallery;
use Illuminate\Support\Facades\Storage;

class BreakfastPageGalleryObserver
{
    /**
     * Handle the BreakfastPageGallery "created" event.
     */
    public function created(BreakfastPageGallery $breakfastPageGallery): void
    {
        //
    }

    /**
     * Handle the BreakfastPageGallery "updated" event.
     */
    public function updated(BreakfastPageGallery $breakfastPageGallery): void
    {
        if ($breakfastPageGallery->isDirty('images')) {
        
            $originalGallery = $breakfastPageGallery->getOriginal('images');
            
         
            $currentGallery = $breakfastPageGallery->images; 
    
           
            $deletedImages = array_diff($originalGallery, $currentGallery);
    
           
            foreach ($deletedImages as $image) {
                Storage::disk('public')->delete($image);
            }
        }
    }

    /**
     * Handle the BreakfastPageGallery "deleted" event.
     */
    public function deleted(BreakfastPageGallery $breakfastPageGallery): void
    {
        if (!is_null($breakfastPageGallery->gallery)) {
            Storage::disk('public')->delete($breakfastPageGallery->getOriginal('images'));
        }
    }

    /**
     * Handle the BreakfastPageGallery "restored" event.
     */
    public function restored(BreakfastPageGallery $breakfastPageGallery): void
    {
        //
    }

    /**
     * Handle the BreakfastPageGallery "force deleted" event.
     */
    public function forceDeleted(BreakfastPageGallery $breakfastPageGallery): void
    {
        //
    }
}
