<?php

namespace App\Observers;

use App\Models\InfoPage;
use Illuminate\Support\Facades\Storage;

class InfoPageObserver
{
    /**
     * Handle the InfoPage "created" event.
     */
    public function created(InfoPage $infoPage): void
    {
        //
    }

    /**
     * Handle the InfoPage "updated" event.
     */
    public function updated(InfoPage $infoPage): void
    {
        if ($infoPage->isDirty('banner')) {
            Storage::disk('public')->delete($infoPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the InfoPage "deleted" event.
     */
    public function deleted(InfoPage $infoPage): void
    {
        if (!is_null($infoPage->banner)) {
            Storage::disk('public')->delete($infoPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the InfoPage "restored" event.
     */
    public function restored(InfoPage $infoPage): void
    {
        //
    }

    /**
     * Handle the InfoPage "force deleted" event.
     */
    public function forceDeleted(InfoPage $infoPage): void
    {
        //
    }
}
