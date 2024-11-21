<?php

namespace App\Observers;

use App\Models\VillaRoomsPageBlock;
use Illuminate\Support\Facades\Storage;

class VillaRoomsPageBlockObserver
{
    /**
     * Handle the VillaRoomsPageBlock "created" event.
     */
    public function created(VillaRoomsPageBlock $villaRoomsPageBlock): void
    {
        //
    }

    /**
     * Handle the VillaRoomsPageBlock "updated" event.
     */
    public function updated(VillaRoomsPageBlock $villaRoomsPageBlock): void
    {
        if ($villaRoomsPageBlock->isDirty('image')) {
            Storage::disk('public')->delete($villaRoomsPageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the VillaRoomsPageBlock "deleted" event.
     */
    public function deleted(VillaRoomsPageBlock $villaRoomsPageBlock): void
    {
        if (!is_null($villaRoomsPageBlock->image)) {
            Storage::disk('public')->delete($villaRoomsPageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the VillaRoomsPageBlock "restored" event.
     */
    public function restored(VillaRoomsPageBlock $villaRoomsPageBlock): void
    {
        //
    }

    /**
     * Handle the VillaRoomsPageBlock "force deleted" event.
     */
    public function forceDeleted(VillaRoomsPageBlock $villaRoomsPageBlock): void
    {
        //
    }
}
