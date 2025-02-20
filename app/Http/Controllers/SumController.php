<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SumController extends Controller {
    public function sumary (Request $request) {
        $a = $request->input('a');
        $b = $request->input('b');
        $total = $a + $b;
        return view('tong', ['total' => $total]);
    }
}