<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        $sl = Slide::all();
        return view('trangchu',compact('sl'));
    }
}
