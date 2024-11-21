<?php

namespace App\Observers;

use App\Models\GardenAndSpaPageBlock;
use Illuminate\Support\Facades\Storage;

class GardenAndSpaPageBlockObserver
{
    /**
     * Handle the GardenAndSpaPageBlock "created" event.
     */
    public function created(GardenAndSpaPageBlock $gardenAndSpaPageBlock): void
    {
        //
    }

    /**
     * Handle the GardenAndSpaPageBlock "updated" event.
     */
    public function updated(GardenAndSpaPageBlock $gardenAndSpaPageBlock): void
    {
        if ($gardenAndSpaPageBlock->isDirty('image')) {
            Storage::disk('public')->delete($gardenAndSpaPageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the GardenAndSpaPageBlock "deleted" event.
     */
    public function deleted(GardenAndSpaPageBlock $gardenAndSpaPageBlock): void
    {
        if (!is_null($gardenAndSpaPageBlock->image)) {
            Storage::disk('public')->delete($gardenAndSpaPageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the GardenAndSpaPageBlock "restored" event.
     */
    public function restored(GardenAndSpaPageBlock $gardenAndSpaPageBlock): void
    {
        //
    }

    /**
     * Handle the GardenAndSpaPageBlock "force deleted" event.
     */
    public function forceDeleted(GardenAndSpaPageBlock $gardenAndSpaPageBlock): void
    {
        //
    }
}
