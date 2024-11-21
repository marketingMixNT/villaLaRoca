<?php

namespace App\Observers;

use App\Models\VillaCommonPage;
use Illuminate\Support\Facades\Storage;

class VillaCommonPageObserver
{
    /**
     * Handle the VillaCommonPage "created" event.
     */
    public function created(VillaCommonPage $villaCommonPage): void
    {
        //
    }

    /**
     * Handle the VillaCommonPage "updated" event.
     */
    public function updated(VillaCommonPage $villaCommonPage): void
    {
        if ($villaCommonPage->isDirty('banner')) {
            Storage::disk('public')->delete($villaCommonPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the VillaCommonPage "deleted" event.
     */
    public function deleted(VillaCommonPage $villaCommonPage): void
    {
       if (!is_null($villaCommonPage->banner)) {
            Storage::disk('public')->delete($villaCommonPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the VillaCommonPage "restored" event.
     */
    public function restored(VillaCommonPage $villaCommonPage): void
    {
        //
    }

    /**
     * Handle the VillaCommonPage "force deleted" event.
     */
    public function forceDeleted(VillaCommonPage $villaCommonPage): void
    {
        //
    }
}
