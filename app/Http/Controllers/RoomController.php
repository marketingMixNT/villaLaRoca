<?php

namespace App\Http\Controllers;

use App\Models\Cta;
use App\Models\Home;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\VillaRoomsPage;

class RoomController extends Controller
{
    public function index()
    {

        $home = Home::select('logo','logo_dark', 'phone', 'phone_second', 'address', 'city', 'booking_link', 'booking_script', 'map', 'map_link', 'title', 'mail','mail_second')
            ->addSelect(['id'])
            ->with('socials')
            ->first();

        $content = VillaRoomsPage::with(['villaRoomsPageBlocks' => function($query) {
            $query->orderBy('sort', 'asc');
        }])->first();

        $rooms = Room::orderBy('sort','asc')->get();

        return view('pages.room.index', compact('content','rooms','home'));
    }

    public function show($slug)
    {

        $home = Home::select('logo','logo_dark', 'phone', 'phone_second', 'address', 'city', 'booking_link', 'booking_script', 'map', 'map_link', 'title', 'mail','mail_second')
        ->addSelect(['id'])
        ->with('socials')
        ->first();

        $rooms = Room::orderBy('sort')->select('title', 'slug',)->get();

        $locale = app()->getLocale();


        $room = Room::where("slug->{$locale}", $slug)->firstOrFail();


        $cta = Cta::first();


        $otherRooms = Room::select('title', 'slug', 'thumbnail', 'short_desc')
            ->where('id', '!=', $room->id)
            ->orderBy('sort')
            ->get();

        return view('pages.room.show', compact('room','otherRooms','home','cta','rooms'));
    }
}
