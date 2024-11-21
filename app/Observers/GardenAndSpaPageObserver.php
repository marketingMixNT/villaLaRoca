<?php

namespace App\Observers;

use App\Models\GardenAndSpaPage;
use Illuminate\Support\Facades\Storage;

class GardenAndSpaPageObserver
{
    /**
     * Handle the GardenAndSpaPage "created" event.
     */
    public function created(GardenAndSpaPage $gardenAndSpaPage): void
    {
        //
    }

    /**
     * Handle the GardenAndSpaPage "updated" event.
     */
    public function updated(GardenAndSpaPage $gardenAndSpaPage): void
    {
        if ($gardenAndSpaPage->isDirty('banner')) {
            Storage::disk('public')->delete($gardenAndSpaPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the GardenAndSpaPage "deleted" event.
     */
    public function deleted(GardenAndSpaPage $gardenAndSpaPage): void
    {
        if (!is_null($gardenAndSpaPage->banner)) {
            Storage::disk('public')->delete($gardenAndSpaPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the GardenAndSpaPage "restored" event.
     */
    public function restored(GardenAndSpaPage $gardenAndSpaPage): void
    {
        //
    }

    /**
     * Handle the GardenAndSpaPage "force deleted" event.
     */
    public function forceDeleted(GardenAndSpaPage $gardenAndSpaPage): void
    {
        //
    }
}
