<?php

namespace App\Observers;

use App\Models\Room;
use Illuminate\Support\Facades\Storage;

class RoomObserver
{
    /**
     * Handle the Room "created" event.
     */
    public function created(Room $room): void
    {
        //
    }

    /**
     * Handle the Room "updated" event.
     */
    public function updated(Room $room): void
    {
        if ($room->isDirty('thumbnail')) {
            Storage::disk('public')->delete($room->getOriginal('thumbnail'));
        }
        
    if ($room->isDirty('gallery')) {
        
        $originalGallery = $room->getOriginal('gallery');
        
     
        $currentGallery = $room->gallery; 

       
        $deletedImages = array_diff($originalGallery, $currentGallery);

       
        foreach ($deletedImages as $image) {
            Storage::disk('public')->delete($image);
        }
    }
    }

    /**
     * Handle the Room "deleted" event.
     */
    public function deleted(Room $room): void
    {
        if (!is_null($room->thumbnail)) {
            Storage::disk('public')->delete($room->getOriginal('thumbnail'));
        }
        if (!is_null($room->gallery)) {
            Storage::disk('public')->delete($room->getOriginal('gallery'));
        }
    }

    /**
     * Handle the Room "restored" event.
     */
    public function restored(Room $room): void
    {
        //
    }

    /**
     * Handle the Room "force deleted" event.
     */
    public function forceDeleted(Room $room): void
    {
        //
    }
}
