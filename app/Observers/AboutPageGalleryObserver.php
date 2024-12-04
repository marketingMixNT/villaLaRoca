<?php

namespace App\Observers;

use App\Models\AboutPageGallery;
use Illuminate\Support\Facades\Storage;

class AboutPageGalleryObserver
{
    /**
     * Handle the AboutPageGallery "created" event.
     */
    public function created(AboutPageGallery $aboutPageGallery): void
    {
        //
    }

    /**
     * Handle the AboutPageGallery "updated" event.
     */
    public function updated(AboutPageGallery $aboutPageGallery): void
    {
        if ($aboutPageGallery->isDirty('images')) {
        
            $originalGallery = $aboutPageGallery->getOriginal('images');
            
         
            $currentGallery = $aboutPageGallery->images; 
    
           
            $deletedImages = array_diff($originalGallery, $currentGallery);
    
           
            foreach ($deletedImages as $image) {
                Storage::disk('public')->delete($image);
            }
        }
    }

    /**
     * Handle the AboutPageGallery "deleted" event.
     */
    public function deleted(AboutPageGallery $aboutPageGallery): void
    {
        if (!is_null($aboutPageGallery->gallery)) {
            Storage::disk('public')->delete($aboutPageGallery->getOriginal('images'));
        }
    }

    /**
     * Handle the AboutPageGallery "restored" event.
     */
    public function restored(AboutPageGallery $aboutPageGallery): void
    {
        //
    }

    /**
     * Handle the AboutPageGallery "force deleted" event.
     */
    public function forceDeleted(AboutPageGallery $aboutPageGallery): void
    {
        //
    }
}
