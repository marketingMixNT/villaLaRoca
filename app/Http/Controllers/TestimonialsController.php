<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\TestimonialsPage;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)


    {        
        $content = TestimonialsPage::first();
        $testimonials = Testimonial::orderBy('sort','asc')->get();

        return view('pages.testimonials.index',compact('testimonials','content'));
    }
}
