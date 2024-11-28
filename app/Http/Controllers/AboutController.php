<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $content = AboutPage::with(['aboutPageBlocks' => function($query) {
            $query->orderBy('sort', 'asc');
        }])->first();
    
        return view('pages.about.index', compact('content'));
    }
    
}
