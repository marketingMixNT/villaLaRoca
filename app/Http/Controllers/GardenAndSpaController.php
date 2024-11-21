<?php

namespace App\Http\Controllers;

use App\Models\GardenAndSpaPage;
use Illuminate\Http\Request;

class GardenAndSpaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $content = GardenAndSpaPage::with('gardenAndSpaPageBlocks')->first();

        return view('pages.garden-and-spa.index',compact('content'));
    }
}
