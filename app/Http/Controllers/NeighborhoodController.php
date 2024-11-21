<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NeighborhoodController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('pages.neighborhood.index');
    }
}
