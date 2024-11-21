<?php

namespace App\Observers;

use App\Models\NeighborhoodPage;
use Illuminate\Support\Facades\Storage;

class NeighborhoodPageObserver
{
    /**
     * Handle the NeighborhoodPage "created" event.
     */
    public function created(NeighborhoodPage $neighborhoodPage): void
    {
        //
    }

    /**
     * Handle the NeighborhoodPage "updated" event.
     */
    public function updated(NeighborhoodPage $neighborhoodPage): void
    {
        if ($neighborhoodPage->isDirty('banner')) {
            Storage::disk('public')->delete($neighborhoodPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the NeighborhoodPage "deleted" event.
     */
    public function deleted(NeighborhoodPage $neighborhoodPage): void
    {
        if (!is_null($neighborhoodPage->banner)) {
            Storage::disk('public')->delete($neighborhoodPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the NeighborhoodPage "restored" event.
     */
    public function restored(NeighborhoodPage $neighborhoodPage): void
    {
        //
    }

    /**
     * Handle the NeighborhoodPage "force deleted" event.
     */
    public function forceDeleted(NeighborhoodPage $neighborhoodPage): void
    {
        //
    }
}
