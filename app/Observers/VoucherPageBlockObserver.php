<?php

namespace App\Observers;

use App\Models\VoucherPageBlock;
use Illuminate\Support\Facades\Storage;

class VoucherPageBlockObserver
{
    /**
     * Handle the VoucherPageBlock "created" event.
     */
    public function created(VoucherPageBlock $voucherPageBlock): void
    {
        //
    }

    /**
     * Handle the VoucherPageBlock "updated" event.
     */
    public function updated(VoucherPageBlock $voucherPageBlock): void
    {
        if ($voucherPageBlock->isDirty('image')) {
            Storage::disk('public')->delete($voucherPageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the VoucherPageBlock "deleted" event.
     */
    public function deleted(VoucherPageBlock $voucherPageBlock): void
    {
        if (!is_null($voucherPageBlock->image)) {
            Storage::disk('public')->delete($voucherPageBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the VoucherPageBlock "restored" event.
     */
    public function restored(VoucherPageBlock $voucherPageBlock): void
    {
        //
    }

    /**
     * Handle the VoucherPageBlock "force deleted" event.
     */
    public function forceDeleted(VoucherPageBlock $voucherPageBlock): void
    {
        //
    }
}
