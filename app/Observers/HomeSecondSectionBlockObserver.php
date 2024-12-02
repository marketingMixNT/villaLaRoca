<?php

namespace App\Observers;

use App\Models\HomeSecondSectionBlock;
use Illuminate\Support\Facades\Storage;

class HomeSecondSectionBlockObserver
{
    /**
     * Handle the HomeSecondSectionBlock "created" event.
     */
    public function created(HomeSecondSectionBlock $homeSecondSectionBlock): void
    {
        //
    }

    /**
     * Handle the HomeSecondSectionBlock "updated" event.
     */
    public function updated(HomeSecondSectionBlock $homeSecondSectionBlock): void
    {
        if ($homeSecondSectionBlock->isDirty('image')) {
            Storage::disk('public')->delete($homeSecondSectionBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the HomeSecondSectionBlock "deleted" event.
     */
    public function deleted(HomeSecondSectionBlock $homeSecondSectionBlock): void
    {
        if (!is_null($homeSecondSectionBlock->image)) {
            Storage::disk('public')->delete($homeSecondSectionBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the HomeSecondSectionBlock "restored" event.
     */
    public function restored(HomeSecondSectionBlock $homeSecondSectionBlock): void
    {
        //
    }

    /**
     * Handle the HomeSecondSectionBlock "force deleted" event.
     */
    public function forceDeleted(HomeSecondSectionBlock $homeSecondSectionBlock): void
    {
        //
    }
}
