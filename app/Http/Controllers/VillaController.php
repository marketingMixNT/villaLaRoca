<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VillaRoomsPage;
use App\Models\VillaCommonPage;

class VillaController extends Controller
{
    public function common()
    {
        // $content = VillaCommonPage::with("villaCommonPageBlocks")->first();

        $content = VillaCommonPage::with(['villaCommonPageBlocks' => function($query) {
            $query->orderBy('sort', 'asc');
        }])->first();

        return view('pages.villa.common', compact('content'));
    }
    // public function rooms()
    // {

    //     $content = VillaRoomsPage::with("villaRoomsPageBlocks")->first();

    //     return view('pages.villa.rooms', compact('content'));
    // }
}
