<?php

namespace App\Observers;

use App\Models\PackagesPageBlock;
use Illuminate\Support\Facades\Storage;

class PackagesBlockPageObserver
{
    /**
     * Handle the PackagesPageBlock "created" event.
     */
    public function created(PackagesPageBlock $packagesPageBlock): void
    {
        //
    }

    /**
     * Handle the PackagesPageBlock "updated" event.
     */
    public function updated(PackagesPageBlock $packagesPageBlock): void
    {
        if ($packagesPageBlock->isDirty('image')) {
            Storage::disk('public')->delete($packagesPageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the PackagesPageBlock "deleted" event.
     */
    public function deleted(PackagesPageBlock $packagesPageBlock): void
    {
        if (!is_null($packagesPageBlock->image)) {
            Storage::disk('public')->delete($packagesPageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the PackagesPageBlock "restored" event.
     */
    public function restored(PackagesPageBlock $packagesPageBlock): void
    {
        //
    }

    /**
     * Handle the PackagesPageBlock "force deleted" event.
     */
    public function forceDeleted(PackagesPageBlock $packagesPageBlock): void
    {
        //
    }
}
