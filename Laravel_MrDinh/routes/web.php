<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

// Get
Route::get('/cake', [PageController::class, 'getIndex']);
Route::get('/type-cake/{type}', [PageController::class, 'getProductType'])->name('type-cake');
Route::get('/product-detail/{id}', [PageController::class, 'getProductDetail']);
Route::get('/about', function (){
    return view('about');
});
Route::get('/contact', function (){
    return view('contact');
});
Route::get('/admin', [AdminController::class, 'getIndex']);
Route::get('/admin/add', [AdminController::class, 'getFormAddProduct']);
Route::get('/admin/edit/{id}', [AdminController::class, 'getFormEditProduct']);

// Post
Route::post('/admin/add', [AdminController::class, 'addProduct']);
Route::post('/admin/edit/{id}', [AdminController::class, 'updateProduct']);
Route::post('/admin/delete/{id}', [AdminController::class, 'deleteProduct']);