<?php

namespace App\Http\Controllers;

use App\Models\BillDetail;
use App\Models\Product;
use App\Models\Slide;
use App\Models\TypeProduct;
use App\Models\Comment;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        $slides = Slide::all();  
        $products = Product::where('new', 1)->paginate(4);
        $topProducts = Product::whereIn('id', (BillDetail::query()
        ->select('id_product')
        ->groupBy('id_product')
        ->selectRaw('count(id_product) as count, id_product')
        ->orderByDesc('count')
        ->limit(10)
        ->get()->pluck('id_product')->toArray()))->paginate(4);
        return view('home', compact('slides', 'products', 'topProducts' ));
    }
    public function getProductType($type)  {
        $sp_theoloai= Product::where('id_type',$type)->get();	
        $loai_sp = TypeProduct::all();
        return view('typeCake', compact('sp_theoloai', 'loai_sp'));
    }

    public function getProductDetail ($id) {
        $products = Product::where('id',$id)->first();	
        $splienquan = Product::where('id', '<>', $products->id)->where('id_type', '=', $products->id_type)->paginate(3);
        $comments = Comment::where('id_product', $id)->get();
        return view('detail', compact('products', 'splienquan', 'comments'));
    }
    public function searchProduct(Request $request) {
        $value = $request->get('s');
        $products = Product::where('name', 'like', '%'.$value.'%')->paginate(8);
        return view('search', compact('products'));
    }
}

