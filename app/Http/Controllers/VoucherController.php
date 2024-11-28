<?php

namespace App\Http\Controllers;

use App\Models\VoucherPage;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $content = VoucherPage::with(['voucherPageBlocks' => function($query) {
            $query->orderBy('sort', 'asc');
        }])->first();

        return view('pages.voucher.index', compact('content'));
    }
}
