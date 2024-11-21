<?php

namespace App\Observers;

use App\Models\PrivacyPolicy;
use Illuminate\Support\Facades\Storage;

class PrivacyPolicyObserver
{
    /**
     * Handle the PrivacyPolicy "created" event.
     */
    public function created(PrivacyPolicy $privacyPolicy): void
    {
        //
    }

    /**
     * Handle the PrivacyPolicy "updated" event.
     */
    public function updated(PrivacyPolicy $privacyPolicy): void
    {
        if ($privacyPolicy->isDirty('banner')) {
            Storage::disk('public')->delete($privacyPolicy->getOriginal('banner'));
        }
    }

    /**
     * Handle the PrivacyPolicy "deleted" event.
     */
    public function deleted(PrivacyPolicy $privacyPolicy): void
    {
        if (!is_null($privacyPolicy->banner)) {
            Storage::disk('public')->delete($privacyPolicy->getOriginal('banner'));
        }
    }

    /**
     * Handle the PrivacyPolicy "restored" event.
     */
    public function restored(PrivacyPolicy $privacyPolicy): void
    {
        //
    }

    /**
     * Handle the PrivacyPolicy "force deleted" event.
     */
    public function forceDeleted(PrivacyPolicy $privacyPolicy): void
    {
        //
    }
}
