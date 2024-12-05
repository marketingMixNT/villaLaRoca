<?php

namespace App\Observers;

use App\Models\PackagesPage;
use Illuminate\Support\Facades\Storage;

class PackagesPageObserver
{
    /**
     * Handle the PackagesPage "created" event.
     */
    public function created(PackagesPage $packagesPage): void
    {
        //
    }

    /**
     * Handle the PackagesPage "updated" event.
     */
    public function updated(PackagesPage $packagesPage): void
    {
        if ($packagesPage->isDirty('banner')) {
            Storage::disk('public')->delete($packagesPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the PackagesPage "deleted" event.
     */
    public function deleted(PackagesPage $packagesPage): void
    {
        if (!is_null($packagesPage->banner)) {
            Storage::disk('public')->delete($packagesPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the PackagesPage "restored" event.
     */
    public function restored(PackagesPage $packagesPage): void
    {
        //
    }

    /**
     * Handle the PackagesPage "force deleted" event.
     */
    public function forceDeleted(PackagesPage $packagesPage): void
    {
        //
    }
}
