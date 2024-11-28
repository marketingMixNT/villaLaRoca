<?php

namespace App\Observers;

use App\Models\TestimonialsPage;
use Illuminate\Support\Facades\Storage;

class TestimonialsPageObserver
{
    /**
     * Handle the TestimonialPage "created" event.
     */
    public function created(TestimonialsPage $testimonialPage): void
    {
        //
    }

    /**
     * Handle the TestimonialPage "updated" event.
     */
    public function updated(TestimonialsPage $testimonialPage): void
    {
        if ($testimonialPage->isDirty('banner')) {
            Storage::disk('public')->delete($testimonialPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the TestimonialPage "deleted" event.
     */
    public function deleted(TestimonialsPage $testimonialPage): void
    {
        if (!is_null($testimonialPage->banner)) {
            Storage::disk('public')->delete($testimonialPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the TestimonialPage "restored" event.
     */
    public function restored(TestimonialsPage $testimonialPage): void
    {
        //
    }

    /**
     * Handle the TestimonialPage "force deleted" event.
     */
    public function forceDeleted(TestimonialsPage $testimonialPage): void
    {
        //
    }
}
