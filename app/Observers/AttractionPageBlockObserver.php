<?php

namespace App\Observers;

use App\Models\AttractionPageBlock;
use Illuminate\Support\Facades\Storage;

class AttractionPageBlockObserver
{
    /**
     * Handle the AttractionPageBlock "created" event.
     */
    public function created(AttractionPageBlock $attractionPageBlock): void
    {
        //
    }

    /**
     * Handle the AttractionPageBlock "updated" event.
     */
    public function updated(AttractionPageBlock $attractionPageBlock): void
    {
        if ($attractionPageBlock->isDirty('image')) {
            Storage::disk('public')->delete($attractionPageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the AttractionPageBlock "deleted" event.
     */
    public function deleted(AttractionPageBlock $attractionPageBlock): void
    {
        if (!is_null($attractionPageBlock->image)) {
            Storage::disk('public')->delete($attractionPageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the AttractionPageBlock "restored" event.
     */
    public function restored(AttractionPageBlock $attractionPageBlock): void
    {
        //
    }

    /**
     * Handle the AttractionPageBlock "force deleted" event.
     */
    public function forceDeleted(AttractionPageBlock $attractionPageBlock): void
    {
        //
    }
}
