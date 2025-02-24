<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\StoreProductRequest;
class ProductController extends Controller
{
    private $apiUrl = "https://656ca88ee1e03bfd572e9c16.mockapi.io/products";						
	public function index() {						
	    $response = Http::get($this->apiUrl);	
        $data = $response ->json();									
	    return view('product')->with('products', $data);						
	}	
	public function create() {						
	    return view('addProductForm');						
	}	
	public function store(StoreProductRequest $request) {						
        $response = Http::post($this->apiUrl, $request->validated());						
        if ($response->successful()) {						
            return redirect()->route('product.index')->with('success', 'Sản phẩm đã được tạo!');						
        }						
        return back()->withErrors(['message' => 'Lỗi khi tạo sản phẩm']);						
	}	
	public function edit($id) {							
        $response = Http::get("$this->apiUrl/$id");							
        if ($response->successful()) {							
            $product = $response->json();							
            return view('updateProduct')->with('product', $product);							
	    }							
	    return redirect()->route('product.index')->withErrors(['message' => 'Không tìm thấy sản phẩm']);							
	}							
	public function update(StoreProductRequest $request, $id) {							
            $response = Http::put("$this->apiUrl/$id", $request->validated());							
            if ($response->successful()) {							
                return redirect()->route('product.index')->with('success', 'Sản phẩm đã được cập nhật!');							
            }							
        return back()->withErrors(['message' => 'Lỗi khi cập nhật sản phẩm']);							
    }												
	public function destroy($id) {							
        $response = Http::delete("$this->apiUrl/$id");							
        if ($response->successful()) {							
            return redirect()->route('product.index')->with('success', 'Sản phẩm đã được xóa!');							
        }							
        return back()->withErrors(['message' => 'Lỗi khi xóa sản phẩm']);							
	}													
}
