<?php

namespace App\Http\Controllers;

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

        $pictograms = Pictogram::all();
        $testimonials = Testimonial::all();

        return view('pages.home.index',compact('pictograms','testimonials'));
    }
}
