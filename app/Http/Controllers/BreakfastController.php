<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Models\BreakfastPage;
use App\Models\BreakfastPageGallery;

class BreakfastController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $home = Home::select('logo', 'logo_dark', 'phone', 'phone_second', 'address', 'city', 'booking_link', 'booking_script', 'map', 'map_link', 'title', 'mail', 'mail_second')
            ->addSelect(['id'])
            ->with('socials')
            ->first();

        $content = BreakfastPage::with(['breakfastPageBlocks' => function ($query) {
            $query->orderBy('sort', 'asc');
        }])->first();

        $gallery = BreakfastPageGallery::first();


        return view('pages.breakfast.index', compact('content',  'home','gallery'));
    }
}
