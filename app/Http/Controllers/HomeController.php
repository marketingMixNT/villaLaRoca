<?php

namespace App\Http\Controllers;

use App\Models\Cta;
use App\Models\Home;
use App\Models\HomeBanner;
use App\Models\Room;
use App\Models\Pictogram;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $home = Home::with([
            'homeFirstSectionBlocks' => function ($query) {
                $query->orderBy('sort', 'asc');
            },
            'homeSecondSectionBlocks' => function ($query) {
                $query->orderBy('sort', 'asc');
            }
        ])->first();

        

        $cta = Cta::firstOrFail();
        $banner = HomeBanner::firstOrFail();
        $pictograms = Pictogram::orderBy('sort', 'asc')->get();
        $testimonials = Testimonial::orderBy('sort', 'asc')->get();
        $rooms = Room::orderBy('sort', 'asc')->get();


        return view('pages.home.index', compact('home', 'pictograms', 'testimonials', 'rooms','cta','banner'));
    }
}
