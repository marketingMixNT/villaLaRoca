<?php

namespace App\Observers;

use App\Models\BreakfastPageBlock;
use Illuminate\Support\Facades\Storage;

class BreakfastPageBlockObserver
{
    /**
     * Handle the BreakfastPageBlock "created" event.
     */
    public function created(BreakfastPageBlock $breakfastPageBlock): void
    {
        //
    }

    /**
     * Handle the BreakfastPageBlock "updated" event.
     */
    public function updated(BreakfastPageBlock $breakfastPageBlock): void
    {
        if ($breakfastPageBlock->isDirty('image')) {
            Storage::disk('public')->delete($breakfastPageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the BreakfastPageBlock "deleted" event.
     */
    public function deleted(BreakfastPageBlock $breakfastPageBlock): void
    {
        if (!is_null($breakfastPageBlock->image)) {
            Storage::disk('public')->delete($breakfastPageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the BreakfastPageBlock "restored" event.
     */
    public function restored(BreakfastPageBlock $breakfastPageBlock): void
    {
        //
    }

    /**
     * Handle the BreakfastPageBlock "force deleted" event.
     */
    public function forceDeleted(BreakfastPageBlock $breakfastPageBlock): void
    {
        //
    }
}
