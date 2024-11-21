<?php

namespace App\Observers;

use App\Models\ContactPage;
use Illuminate\Support\Facades\Storage;

class ContactPageObserver
{
    /**
     * Handle the ContactPage "created" event.
     */
    public function created(ContactPage $contactPage): void
    {
        //
    }

    /**
     * Handle the ContactPage "updated" event.
     */
    public function updated(ContactPage $contactPage): void
    {
        if ($contactPage->isDirty('banner')) {
            Storage::disk('public')->delete($contactPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the ContactPage "deleted" event.
     */
    public function deleted(ContactPage $contactPage): void
    {
        if (!is_null($contactPage->banner)) {
            Storage::disk('public')->delete($contactPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the ContactPage "restored" event.
     */
    public function restored(ContactPage $contactPage): void
    {
        //
    }

    /**
     * Handle the ContactPage "force deleted" event.
     */
    public function forceDeleted(ContactPage $contactPage): void
    {
        //
    }
}
