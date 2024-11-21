<?php

namespace App\Observers;

use App\Models\Regulations;
use Illuminate\Support\Facades\Storage;

class RegulationsObserver
{
    /**
     * Handle the Regulations "created" event.
     */
    public function created(Regulations $regulations): void
    {
        //
    }

    /**
     * Handle the Regulations "updated" event.
     */
    public function updated(Regulations $regulations): void
    {
        if ($regulations->isDirty('banner')) {
            Storage::disk('public')->delete($regulations->getOriginal('banner'));
        }
    }

    /**
     * Handle the Regulations "deleted" event.
     */
    public function deleted(Regulations $regulations): void
    {
        if (!is_null($regulations->banner)) {
            Storage::disk('public')->delete($regulations->getOriginal('banner'));
        }
    }

    /**
     * Handle the Regulations "restored" event.
     */
    public function restored(Regulations $regulations): void
    {
        //
    }

    /**
     * Handle the Regulations "force deleted" event.
     */
    public function forceDeleted(Regulations $regulations): void
    {
        //
    }
}
