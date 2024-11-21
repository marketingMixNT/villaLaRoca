<?php

namespace App\Observers;

use App\Models\VillaCommonPageBlock;
use Illuminate\Support\Facades\Storage;

class VillaCommonPageBlockObserver
{
    /**
     * Handle the VillaCommonPageBlock "created" event.
     */
    public function created(VillaCommonPageBlock $villaCommonPageBlock): void
    {
        //
    }

    /**
     * Handle the VillaCommonPageBlock "updated" event.
     */
    public function updated(VillaCommonPageBlock $villaCommonPageBlock): void
    {
        if ($villaCommonPageBlock->isDirty('image')) {
            Storage::disk('public')->delete($villaCommonPageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the VillaCommonPageBlock "deleted" event.
     */
    public function deleted(VillaCommonPageBlock $villaCommonPageBlock): void
    {
        if (!is_null($villaCommonPageBlock->image)) {
            Storage::disk('public')->delete($villaCommonPageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the VillaCommonPageBlock "restored" event.
     */
    public function restored(VillaCommonPageBlock $villaCommonPageBlock): void
    {
        //
    }

    /**
     * Handle the VillaCommonPageBlock "force deleted" event.
     */
    public function forceDeleted(VillaCommonPageBlock $villaCommonPageBlock): void
    {
        //
    }
}
