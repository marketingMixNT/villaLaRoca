<?php

namespace App\Observers;

use App\Models\Packages;
use Illuminate\Support\Facades\Storage;

class PackagesObserver
{
    /**
     * Handle the Packages "created" event.
     */
    public function created(Packages $packages): void
    {
        //
    }

    /**
     * Handle the Packages "updated" event.
     */
    public function updated(Packages $packages): void
    {
        if ($packages->isDirty('banner')) {
            Storage::disk('public')->delete($packages->getOriginal('banner'));
        }
    }

    /**
     * Handle the Packages "deleted" event.
     */
    public function deleted(Packages $packages): void
    {
        if (!is_null($packages->banner)) {
            Storage::disk('public')->delete($packages->getOriginal('banner'));
        }
    }

    /**
     * Handle the Packages "restored" event.
     */
    public function restored(Packages $packages): void
    {
        //
    }

    /**
     * Handle the Packages "force deleted" event.
     */
    public function forceDeleted(Packages $packages): void
    {
        //
    }
}
