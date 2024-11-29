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

        // $content = GardenAndSpaPage::with('gardenAndSpaPageBlocks')->first();

        $content = GardenAndSpaPage::with(['gardenAndSpaPageBlocks' => function($query) {
            $query->orderBy('sort', 'asc');
        }])->first();

        return view('pages.garden-and-spa.index',compact('content'));
    }
}
