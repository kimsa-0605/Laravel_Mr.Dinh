<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Service\RequestHandling;

class AdminController extends Controller
{
    public function getIndex() {
        $products = Product::all();
        return view('pageadmin.admin', compact('products'));
    }
    public function getFormAddProduct() {
        return view('pageadmin.formAdd');
    }

    public function addProduct(AddProductRequest $request) {
        $name = $request->get('Name');
        $price = $request->get('Price');
        $promotion = $request->get('PromotionPrice');
        $unit = $request->get('Unit');
        $new = $request->get('New');
        $type = $request->get('Type');
        $description = $request->get('Description');
        $image = RequestHandling::uploadImage(request('Image'), 'image/product');
        Product::query()->create([
            'name'=> $name,
            'unit_price' => $price,
            'promotion_price' => $promotion,
            'unit' => $unit,
            'new' => $new,
            'id_type' => $type,
            'image' => $image,
            'description' => $description,
        ]);
        return redirect('/admin');
    }
    public function getFormEditProduct($id) {
        $products = Product::where('id', $id)->first();    
        return view('pageadmin.formEdit', compact('products'));
    }
    public function updateProduct(UpdateProductRequest $request, $id) {
        $product = Product::findOrFail($id);
        $name = $request->get('Name');
        $price = $request->get('Price');
        $promotion = $request->get('PromotionPrice');
        $unit = $request->get('Unit');
        $new = $request->get('New');
        $type = $request->get('Type');
        $description = $request->get('Description');
        if ($request->hasFile('Image')) {
            if ($product->image) {
                RequestHandling::deleteImage('image/product/' . $product->image);
            }
            $image = RequestHandling::uploadImage($request->file('Image'), 'image/product');
        } else {
            $image = $product->image;
        }
        $product->update([
            'name' => $name,
            'unit_price' => $price,
            'promotion_price' => $promotion,
            'unit' => $unit,
            'new' => $new,
            'id_type' => $type,
            'image' => $image,
            'description' => $description,
        ]);

        return redirect('/admin');
    }
    public function deleteProduct($id) {
        $product = Product::where('id', $id)->first();
        if (!$product) {
            return redirect('/admin');
        }
        if ($product->image) {
            RequestHandling::deleteImage('image/product/' . $product->image);
        }
        Product::where('id', $id)->delete();
        return redirect('/admin');
    }
}
