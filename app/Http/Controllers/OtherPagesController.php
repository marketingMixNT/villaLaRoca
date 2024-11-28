<?php

namespace App\Http\Controllers;

use App\Models\Regulations;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use App\Models\SpaRegulations;

class OtherPagesController extends Controller
{
    public function privacyPolicy(){

        $content = PrivacyPolicy::first();

        return view('pages.other-pages.privacy-policy',compact('content'));
    }

    public function regulations(){

        $content = Regulations::first();

        return view('pages.other-pages.regulations',compact('content'));
    }
    
    public function SpaRegulations(){

        $content = SpaRegulations::first();

        return view('pages.other-pages.spa-regulations',compact('content'));
    }
}
