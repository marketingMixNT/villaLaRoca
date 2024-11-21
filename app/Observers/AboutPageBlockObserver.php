<?php

namespace App\Observers;

use App\Models\AboutPageBlock;
use Illuminate\Support\Facades\Storage;

class AboutPageBlockObserver
{
    /**
     * Handle the AboutPageBlock "created" event.
     */
    public function created(AboutPageBlock $aboutPageBlock): void
    {
        //
    }

    /**
     * Handle the AboutPageBlock "updated" event.
     */
    public function updated(AboutPageBlock $aboutPageBlock): void
    {
        if ($aboutPageBlock->isDirty('image')) {
            Storage::disk('public')->delete($aboutPageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the AboutPageBlock "deleted" event.
     */
    public function deleted(AboutPageBlock $aboutPageBlock): void
    {
        if (!is_null($aboutPageBlock->image)) {
            Storage::disk('public')->delete($aboutPageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the AboutPageBlock "restored" event.
     */
    public function restored(AboutPageBlock $aboutPageBlock): void
    {
        //
    }

    /**
     * Handle the AboutPageBlock "force deleted" event.
     */
    public function forceDeleted(AboutPageBlock $aboutPageBlock): void
    {
        //
    }
}
