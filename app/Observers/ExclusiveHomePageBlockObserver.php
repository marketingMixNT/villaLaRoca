<?php

namespace App\Observers;

use App\Models\ExclusiveHomePageBlock;
use Illuminate\Support\Facades\Storage;

class ExclusiveHomePageBlockObserver
{
    /**
     * Handle the ExclusiveHomePageBlock "created" event.
     */
    public function created(ExclusiveHomePageBlock $exclusiveHomePageBlock): void
    {
        //
    }

    /**
     * Handle the ExclusiveHomePageBlock "updated" event.
     */
    public function updated(ExclusiveHomePageBlock $exclusiveHomePageBlock): void
    {
        if ($exclusiveHomePageBlock->isDirty('image')) {
            Storage::disk('public')->delete($exclusiveHomePageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the ExclusiveHomePageBlock "deleted" event.
     */
    public function deleted(ExclusiveHomePageBlock $exclusiveHomePageBlock): void
    {
        if (!is_null($exclusiveHomePageBlock->image)) {
            Storage::disk('public')->delete($exclusiveHomePageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the ExclusiveHomePageBlock "restored" event.
     */
    public function restored(ExclusiveHomePageBlock $exclusiveHomePageBlock): void
    {
        //
    }

    /**
     * Handle the ExclusiveHomePageBlock "force deleted" event.
     */
    public function forceDeleted(ExclusiveHomePageBlock $exclusiveHomePageBlock): void
    {
        //
    }
}
