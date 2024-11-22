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

        $content = GalleryPage::first();

        $images = Gallery::orderBy('sort')->get();

        return view('pages.gallery.index',compact('content','images'));
    }
}
