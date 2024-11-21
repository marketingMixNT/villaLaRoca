<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VillaController extends Controller
{
    public function rooms()
    {
        return view('pages.villa.rooms');
    }
    public function common()
    {
        return view('pages.villa.common');
    }
}
