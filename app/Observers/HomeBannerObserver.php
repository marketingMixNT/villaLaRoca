<?php

namespace App\Observers;

use App\Models\HomeBanner;
use Illuminate\Support\Facades\Storage;

class HomeBannerObserver
{
    /**
     * Handle the HomeBanner "created" event.
     */
    public function created(HomeBanner $homeBanner): void
    {
        //
    }

    /**
     * Handle the HomeBanner "updated" event.
     */
    public function updated(HomeBanner $homeBanner): void
    {
        if ($homeBanner->isDirty('image')) {
            Storage::disk('public')->delete($homeBanner->getOriginal('image'));
        }
    }

    /**
     * Handle the HomeBanner "deleted" event.
     */
    public function deleted(HomeBanner $homeBanner): void
    {
        if (!is_null($homeBanner->image)) {
            Storage::disk('public')->delete($homeBanner->getOriginal('image'));
        }
    }

    /**
     * Handle the HomeBanner "restored" event.
     */
    public function restored(HomeBanner $homeBanner): void
    {
        //
    }

    /**
     * Handle the HomeBanner "force deleted" event.
     */
    public function forceDeleted(HomeBanner $homeBanner): void
    {
        //
    }
}
