<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Room;
use App\Models\Packages;
use App\Models\PackagesPage;
use Illuminate\Http\Request;

class PackagesController extends Controller
{

    public function index()
    {
        $home = Home::select('logo', 'logo_dark', 'phone', 'phone_second', 'address', 'city', 'booking_link', 'booking_script', 'map', 'map_link', 'title', 'mail', 'mail_second')
            ->addSelect(['id'])
            ->with('socials')
            ->first();

        $rooms = Room::orderBy('sort')->select('title', 'slug',)->get();

        $content = PackagesPage::with(['packagesPageBlocks' => function ($query) {
            $query->orderBy('sort', 'asc');
        }])->first();

        $packages = Packages::orderBy('sort', 'asc')->get();

        return view('pages.packages.index', compact('content', 'packages', 'home','rooms'));
    }

    public function show($slug)
    {

        $home = Home::select('logo', 'logo_dark', 'phone', 'phone_second', 'address', 'city', 'booking_link', 'booking_script', 'map', 'map_link', 'title', 'mail', 'mail_second')
            ->addSelect(['id'])
            ->with('socials')
            ->first();

            $rooms = Room::orderBy('sort')->select('title', 'slug',)->get();

        $locale = app()->getLocale();


        $package = Packages::where("slug->{$locale}", $slug)->firstOrFail();




        $otherPackages = Packages::select('header_heading', 'slug', 'banner',)
            ->where('id', '!=', $package->id)

            ->orderBy('sort')
            ->take(3)
            ->get();



        return view('pages.packages.show', compact('package', 'otherPackages', 'home','rooms'));
    }
}
