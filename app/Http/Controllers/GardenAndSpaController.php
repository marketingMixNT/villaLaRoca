<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Models\GardenAndSpaPage;

class GardenAndSpaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $home = Home::select('logo','logo_dark', 'phone', 'phone_second', 'address', 'city', 'booking_link', 'booking_script', 'map', 'map_link', 'title', 'mail','mail_second')
        ->addSelect(['id'])
        ->with('socials')
        ->first();

        $content = GardenAndSpaPage::with(['gardenAndSpaPageBlocks' => function($query) {
            $query->orderBy('sort', 'asc');
        }])->first();

        return view('pages.garden-and-spa.index',compact('content','home'));
    }
}
