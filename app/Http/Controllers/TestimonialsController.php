<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Room;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\TestimonialsPage;

class TestimonialsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)


    {        

        $home = Home::select('logo','logo_dark', 'phone', 'phone_second', 'address', 'city', 'booking_link', 'booking_script', 'map', 'map_link', 'title', 'mail','mail_second','google_reviews','google_reviews_average','google_reviews_link','google_reviews')
        ->addSelect(['id'])
        ->with('socials')
        ->first();
    
        $rooms = Room::orderBy('sort')->select('title', 'slug',)->get();

        $content = TestimonialsPage::first();
        $testimonials = Testimonial::orderBy('sort','asc')->get();

        return view('pages.testimonials.index',compact('testimonials','content','home','rooms'));
    }
}
