<?php

namespace App\Observers;

use App\Models\BreakfastPage;
use Illuminate\Support\Facades\Storage;

class BreakfastPageObserver
{
    /**
     * Handle the BreakfastPage "created" event.
     */
    public function created(BreakfastPage $breakfastPage): void
    {
        //
    }

    /**
     * Handle the BreakfastPage "updated" event.
     */
    public function updated(BreakfastPage $breakfastPage): void
    {
        if ($breakfastPage->isDirty('banner')) {
            Storage::disk('public')->delete($breakfastPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the BreakfastPage "deleted" event.
     */
    public function deleted(BreakfastPage $breakfastPage): void
    {
        if (!is_null($breakfastPage->banner)) {
            Storage::disk('public')->delete($breakfastPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the BreakfastPage "restored" event.
     */
    public function restored(BreakfastPage $breakfastPage): void
    {
        //
    }

    /**
     * Handle the BreakfastPage "force deleted" event.
     */
    public function forceDeleted(BreakfastPage $breakfastPage): void
    {
        //
    }
}
