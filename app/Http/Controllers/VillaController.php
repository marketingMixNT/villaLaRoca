<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\VillaRoomsPage;
use App\Models\VillaCommonPage;
use App\Models\VillaCommonPageGallery;

class VillaController extends Controller
{
    public function common()
    {
        $home = Home::select('logo','logo_dark', 'phone', 'phone_second', 'address', 'city', 'booking_link', 'booking_script', 'map', 'map_link', 'title', 'mail','mail_second')
        ->addSelect(['id'])
        ->with('socials')
        ->first();

        $rooms = Room::orderBy('sort')->select('title', 'slug',)->get();
        $gallery = VillaCommonPageGallery::first();


        $content = VillaCommonPage::with(['villaCommonPageBlocks' => function($query) {
            $query->orderBy('sort', 'asc');
        }])->first();

        return view('pages.villa.common', compact('content','home','gallery','rooms'));
    }
 
}
