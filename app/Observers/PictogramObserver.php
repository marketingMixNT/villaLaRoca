<?php

namespace App\Observers;

use App\Models\Pictogram;
use Illuminate\Support\Facades\Storage;

class PictogramObserver
{
    /**
     * Handle the Pictogram "created" event.
     */
    public function created(Pictogram $pictogram): void
    {
        //
    }

    /**
     * Handle the Pictogram "updated" event.
     */
    public function updated(Pictogram $pictogram): void
    {
        if ($pictogram->isDirty('icon')) {
            Storage::disk('public')->delete($pictogram->getOriginal('icon'));
        }
    }

    /**
     * Handle the Pictogram "deleted" event.
     */
    public function deleted(Pictogram $pictogram): void
    {
        if (!is_null($pictogram->icon)) {
            Storage::disk('public')->delete($pictogram->getOriginal('icon'));
        }
    }

    /**
     * Handle the Pictogram "restored" event.
     */
    public function restored(Pictogram $pictogram): void
    {
        //
    }

    /**
     * Handle the Pictogram "force deleted" event.
     */
    public function forceDeleted(Pictogram $pictogram): void
    {
        //
    }
}
