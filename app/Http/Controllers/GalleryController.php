<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryPage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $pageGallery = GalleryPage::first();

        $images = Gallery::orderBy('sort')->get();

        return view('pages.gallery.index',compact('pageGallery','images'));
    }
}
