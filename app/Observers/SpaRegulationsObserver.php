<?php

namespace App\Observers;

use App\Models\SpaRegulations;
use Illuminate\Support\Facades\Storage;

class SpaRegulationsObserver
{
    /**
     * Handle the SpaRegulations "created" event.
     */
    public function created(SpaRegulations $spaRegulations): void
    {
        //
    }

    /**
     * Handle the SpaRegulations "updated" event.
     */
    public function updated(SpaRegulations $spaRegulations): void
    {
        if ($spaRegulations->isDirty('banner')) {
            Storage::disk('public')->delete($spaRegulations->getOriginal('banner'));
        }
    }

    /**
     * Handle the SpaRegulations "deleted" event.
     */
    public function deleted(SpaRegulations $spaRegulations): void
    {
        if (!is_null($spaRegulations->banner)) {
            Storage::disk('public')->delete($spaRegulations->getOriginal('banner'));
        }
    }

    /**
     * Handle the SpaRegulations "restored" event.
     */
    public function restored(SpaRegulations $spaRegulations): void
    {
        //
    }

    /**
     * Handle the SpaRegulations "force deleted" event.
     */
    public function forceDeleted(SpaRegulations $spaRegulations): void
    {
        //
    }
}
