<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\VillaRoomsPage;

class RoomController extends Controller
{
    public function index()
    {

        // $content = VillaRoomsPage::with("villaRoomsPageBlocks")->first();

        $content = VillaRoomsPage::with(['villaRoomsPageBlocks' => function($query) {
            $query->orderBy('sort', 'asc');
        }])->first();

        $rooms = Room::orderBy('sort','asc')->get();

        return view('pages.room.index', compact('content','rooms'));
    }

    public function show($slug)
    {

        // $home = Home::select('logo', 'phone', 'phone_second', 'address', 'city', 'booking_link', 'booking_script', 'map', 'map_link', 'title', 'mail')
        //     ->addSelect(['id'])
        //     ->with('socials')
        //     ->firstOrFail();

        $locale = app()->getLocale();


        $room = Room::where("slug->{$locale}", $slug)->firstOrFail();

        // $rooms = Room::orderBy('sort')->select('title', 'slug',)->get();

        // $cta = Cta::first();


        $otherRooms = Room::select('title', 'slug', 'thumbnail', 'short_desc')
            ->where('id', '!=', $room->id)
            ->orderBy('sort')
            ->get();

        return view('pages.room.show', compact('room','otherRooms'));
    }
}
