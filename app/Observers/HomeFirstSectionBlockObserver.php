<?php

namespace App\Observers;

use App\Models\HomeFirstSectionBlock;
use Illuminate\Support\Facades\Storage;

class HomeFirstSectionBlockObserver
{
    /**
     * Handle the HomeFirstSectionBlock "created" event.
     */
    public function created(HomeFirstSectionBlock $homeFirstSectionBlock): void
    {
        //
    }

    /**
     * Handle the HomeFirstSectionBlock "updated" event.
     */
    public function updated(HomeFirstSectionBlock $homeFirstSectionBlock): void
    {
        if ($homeFirstSectionBlock->isDirty('image')) {
            Storage::disk('public')->delete($homeFirstSectionBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the HomeFirstSectionBlock "deleted" event.
     */
    public function deleted(HomeFirstSectionBlock $homeFirstSectionBlock): void
    {
        if (!is_null($homeFirstSectionBlock->image)) {
            Storage::disk('public')->delete($homeFirstSectionBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the HomeFirstSectionBlock "restored" event.
     */
    public function restored(HomeFirstSectionBlock $homeFirstSectionBlock): void
    {
        //
    }

    /**
     * Handle the HomeFirstSectionBlock "force deleted" event.
     */
    public function forceDeleted(HomeFirstSectionBlock $homeFirstSectionBlock): void
    {
        //
    }
}
