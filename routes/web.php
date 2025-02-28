<?php

use App\Http\Controllers\NhapSVController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SumController;
use App\Http\Controllers\Vidu2Controller;
use App\Http\Controllers\Vidu3Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\CovidController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/tong', [SumController::class, 'sumary']);
Route::post('/tong', [SumController::class, 'sumary']);

// vidu 1,2,3
Route::get('/vidu1', function () {
    return "Hello PNV";
});
Route::get('/vidu2', [Vidu2Controller::class, 'vidu2']);
Route::get('/vidu3', [Vidu3Controller::class, 'vidu3']);

// Them san pham
Route::get('/them-sp', function () {
    return view('themSp');
});
Route::get('/form-them', function () {
    return view('addSpForm');
})->name('add-product');


// Nhập sinh viên 
Route::get('/nhapSV', [NhapSVController::class, 'index']); // Hiển thị form
Route::post('/nhapSV', [NhapSVController::class, 'formNHapSV']); // Xử lý dữ liệu


Route::post('/clear', function () {
    session()->forget('userSession');
    return redirect('/nhapSV');
});

Route::get('/covid-api', [CovidController::class, 'getData']); // Hiển thị form

use App\Http\Controllers\ProductController;

// Route::get('/product', [ProductController::class, 'show']);
// Route::get('/form', [ProductController::class, 'index']);
// Route::post('/save', [ProductController::class, 'save']);


// Thêm sửa xoá sản phẩm 
// get
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/create-product', [ProductController::class, 'create'])->name('product.create');

// post
Route::post('/add-product', [ProductController::class, 'store'])->name('product.store');

// put
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
// Delete
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
