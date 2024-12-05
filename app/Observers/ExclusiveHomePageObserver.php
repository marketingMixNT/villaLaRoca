<?php

namespace App\Observers;

use App\Models\ExclusiveHomePage;
use Illuminate\Support\Facades\Storage;

class ExclusiveHomePageObserver
{
    /**
     * Handle the ExclusiveHomePage "created" event.
     */
    public function created(ExclusiveHomePage $exclusiveHomePage): void
    {
        //
    }

    /**
     * Handle the ExclusiveHomePage "updated" event.
     */
    public function updated(ExclusiveHomePage $exclusiveHomePage): void
    {
        if ($exclusiveHomePage->isDirty('banner')) {
            Storage::disk('public')->delete($exclusiveHomePage->getOriginal('banner'));
        }
    }

    /**
     * Handle the ExclusiveHomePage "deleted" event.
     */
    public function deleted(ExclusiveHomePage $exclusiveHomePage): void
    {
        if (!is_null($exclusiveHomePage->banner)) {
            Storage::disk('public')->delete($exclusiveHomePage->getOriginal('banner'));
        }
    }

    /**
     * Handle the ExclusiveHomePage "restored" event.
     */
    public function restored(ExclusiveHomePage $exclusiveHomePage): void
    {
        //
    }

    /**
     * Handle the ExclusiveHomePage "force deleted" event.
     */
    public function forceDeleted(ExclusiveHomePage $exclusiveHomePage): void
    {
        //
    }
}
