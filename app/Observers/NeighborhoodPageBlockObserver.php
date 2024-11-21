<?php

namespace App\Observers;

use App\Models\NeighborhoodPageBlock;
use Illuminate\Support\Facades\Storage;

class NeighborhoodPageBlockObserver
{
    /**
     * Handle the NeighborhoodPageBlock "created" event.
     */
    public function created(NeighborhoodPageBlock $neighborhoodPageBlock): void
    {
        //
    }

    /**
     * Handle the NeighborhoodPageBlock "updated" event.
     */
    public function updated(NeighborhoodPageBlock $neighborhoodPageBlock): void
    {
        if ($neighborhoodPageBlock->isDirty('image')) {
            Storage::disk('public')->delete($neighborhoodPageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the NeighborhoodPageBlock "deleted" event.
     */
    public function deleted(NeighborhoodPageBlock $neighborhoodPageBlock): void
    {
        if (!is_null($neighborhoodPageBlock->image)) {
            Storage::disk('public')->delete($neighborhoodPageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the NeighborhoodPageBlock "restored" event.
     */
    public function restored(NeighborhoodPageBlock $neighborhoodPageBlock): void
    {
        //
    }

    /**
     * Handle the NeighborhoodPageBlock "force deleted" event.
     */
    public function forceDeleted(NeighborhoodPageBlock $neighborhoodPageBlock): void
    {
        //
    }
}
