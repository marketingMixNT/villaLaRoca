<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Room;
use App\Models\ContactPage;
use Illuminate\Http\Request;

class ContactController extends Controller
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

        $rooms = Room::orderBy('sort')->select('title', 'slug',)->get();

        $content = ContactPage::first();

        return view('pages.contact.index',compact('content','home','rooms'));
    }
}
