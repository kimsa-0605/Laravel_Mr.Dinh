<?php

namespace App\Http\Controllers;

class Vidu3Controller extends Controller {
    public function vidu3 () {
        $hello = 'Hello vidu3 nè';
        $choa = "choà cậu nha";
        $arr = ['sa'=> $hello, 'chao'=> $choa];
        return view('vidu3')->with('mang', $arr);
    }
}
