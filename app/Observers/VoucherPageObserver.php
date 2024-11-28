<?php

namespace App\Observers;

use App\Models\VoucherPage;
use Illuminate\Support\Facades\Storage;

class VoucherPageObserver
{
    /**
     * Handle the VoucherPage "created" event.
     */
    public function created(VoucherPage $voucherPage): void
    {
        //
    }

    /**
     * Handle the VoucherPage "updated" event.
     */
    public function updated(VoucherPage $voucherPage): void
    {
        if ($voucherPage->isDirty('banner')) {
            Storage::disk('public')->delete($voucherPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the VoucherPage "deleted" event.
     */
    public function deleted(VoucherPage $voucherPage): void
    {
        if (!is_null($voucherPage->banner)) {
            Storage::disk('public')->delete($voucherPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the VoucherPage "restored" event.
     */
    public function restored(VoucherPage $voucherPage): void
    {
        //
    }

    /**
     * Handle the VoucherPage "force deleted" event.
     */
    public function forceDeleted(VoucherPage $voucherPage): void
    {
        //
    }
}
