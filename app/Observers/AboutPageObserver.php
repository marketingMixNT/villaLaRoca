<?php

namespace App\Observers;

use App\Models\AboutPage;
use Illuminate\Support\Facades\Storage;

class AboutPageObserver
{
    /**
     * Handle the AboutPage "created" event.
     */
    public function created(AboutPage $aboutPage): void
    {
        //
    }

    /**
     * Handle the AboutPage "updated" event.
     */
    public function updated(AboutPage $aboutPage): void
    {
        if ($aboutPage->isDirty('banner')) {
            Storage::disk('public')->delete($aboutPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the AboutPage "deleted" event.
     */
    public function deleted(AboutPage $aboutPage): void
    {
        if (!is_null($aboutPage->banner)) {
            Storage::disk('public')->delete($aboutPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the AboutPage "restored" event.
     */
    public function restored(AboutPage $aboutPage): void
    {
        //
    }

    /**
     * Handle the AboutPage "force deleted" event.
     */
    public function forceDeleted(AboutPage $aboutPage): void
    {
        //
    }
}
