<?php

namespace App\Http\Controllers;

use App\Models\AttractionPage;
use Illuminate\Http\Request;

class AttractionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $content = AttractionPage::with(['attractionPageBlocks' => function($query) {
            $query->orderBy('sort', 'asc');
        }])->first();
    
        return view('pages.attraction.index', compact('content'));
    }
}
