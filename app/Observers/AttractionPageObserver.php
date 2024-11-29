<?php

namespace App\Observers;

use App\Models\AttractionPage;
use Illuminate\Support\Facades\Storage;

class AttractionPageObserver
{
    /**
     * Handle the AttractionPage "created" event.
     */
    public function created(AttractionPage $attractionPage): void
    {
        //
    }

    /**
     * Handle the AttractionPage "updated" event.
     */
    public function updated(AttractionPage $attractionPage): void
    {
        if ($attractionPage->isDirty('banner')) {
            Storage::disk('public')->delete($attractionPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the AttractionPage "deleted" event.
     */
    public function deleted(AttractionPage $attractionPage): void
    {
        if (!is_null($attractionPage->banner)) {
            Storage::disk('public')->delete($attractionPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the AttractionPage "restored" event.
     */
    public function restored(AttractionPage $attractionPage): void
    {
        //
    }

    /**
     * Handle the AttractionPage "force deleted" event.
     */
    public function forceDeleted(AttractionPage $attractionPage): void
    {
        //
    }
}
