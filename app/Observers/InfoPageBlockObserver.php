<?php

namespace App\Observers;

use App\Models\InfoPageBlock;
use Illuminate\Support\Facades\Storage;

class InfoPageBlockObserver
{
    /**
     * Handle the InfoPageBlock "created" event.
     */
    public function created(InfoPageBlock $infoPageBlock): void
    {
        //
    }

    /**
     * Handle the InfoPageBlock "updated" event.
     */
    public function updated(InfoPageBlock $infoPageBlock): void
    {
        if ($infoPageBlock->isDirty('image')) {
            Storage::disk('public')->delete($infoPageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the InfoPageBlock "deleted" event.
     */
    public function deleted(InfoPageBlock $infoPageBlock): void
    {
        if (!is_null($infoPageBlock->image)) {
            Storage::disk('public')->delete($infoPageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the InfoPageBlock "restored" event.
     */
    public function restored(InfoPageBlock $infoPageBlock): void
    {
        //
    }

    /**
     * Handle the InfoPageBlock "force deleted" event.
     */
    public function forceDeleted(InfoPageBlock $infoPageBlock): void
    {
        //
    }
}
