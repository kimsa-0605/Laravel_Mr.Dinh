<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        $slides = Slide::all();  
        $products = Product::where('new', 1)->get();
        $topProducts = Product::where('new', 0)->get();
        return view('home', compact('slides', 'products', 'topProducts' ));
    }
    public function getProductType($type)  {
        $sp_theoloai= Product::where('id_type',$type)->get();	
        return view('typeCakePage', compact('sp_theoloai'));
    }
}

