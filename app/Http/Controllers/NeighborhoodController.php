<?php

namespace App\Http\Controllers;

use App\Models\NeighborhoodPage;
use Illuminate\Http\Request;

class NeighborhoodController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $content = NeighborhoodPage::with("neighborhoodPageBlocks")->first();


        return view('pages.neighborhood.index',compact('content'));
    }
}
