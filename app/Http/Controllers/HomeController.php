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

        $pictograms = Pictogram::orderBy('sort','asc')->get();
        $testimonials = Testimonial::orderBy('sort','asc')->get();

        return view('pages.home.index',compact('pictograms','testimonials'));
    }
}
