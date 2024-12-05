<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Room;
use App\Models\InfoPage;
use App\Models\Regulations;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use App\Models\SpaRegulations;

class OtherPagesController extends Controller
{
    public function privacyPolicy()
    {
        $home = Home::select('logo','logo_dark', 'phone', 'phone_second', 'address', 'city', 'booking_link', 'booking_script', 'map', 'map_link', 'title', 'mail','mail_second')
        ->addSelect(['id'])
        ->with('socials')
        ->first();

        $rooms = Room::orderBy('sort')->select('title', 'slug',)->get();

        $content = PrivacyPolicy::first();

        return view('pages.other-pages.privacy-policy', compact('content','home','rooms'));
    }

    public function regulations()
    {


        $home = Home::select('logo','logo_dark', 'phone', 'phone_second', 'address', 'city', 'booking_link', 'booking_script', 'map', 'map_link', 'title', 'mail','mail_second')
        ->addSelect(['id'])
        ->with('socials')
        ->first();
        $rooms = Room::orderBy('sort')->select('title', 'slug',)->get();

        $content = Regulations::first();

        return view('pages.other-pages.regulations', compact('content','home','rooms'));
    }

    public function SpaRegulations()
    {

        $home = Home::select('logo','logo_dark', 'phone', 'phone_second', 'address', 'city', 'booking_link', 'booking_script', 'map', 'map_link', 'title', 'mail','mail_second')
        ->addSelect(['id'])
        ->with('socials')
        ->first();

        $rooms = Room::orderBy('sort')->select('title', 'slug',)->get();

        $content = SpaRegulations::first();

        return view('pages.other-pages.spa-regulations', compact('content','home','rooms'));
    }

    public function info()
    {
        $home = Home::select('logo','logo_dark', 'phone', 'phone_second', 'address', 'city', 'booking_link', 'booking_script', 'map', 'map_link', 'title', 'mail','mail_second')
        ->addSelect(['id'])
        ->with('socials')
        ->first();

        $rooms = Room::orderBy('sort')->select('title', 'slug',)->get();

        $content = InfoPage::with(['infoPageBlocks' => function ($query) {
            $query->orderBy('sort', 'asc');
        }])->first();

        return view('pages.other-pages.info', compact('content','home','rooms'));
    }
}
