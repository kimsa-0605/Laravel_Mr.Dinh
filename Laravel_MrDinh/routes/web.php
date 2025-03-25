<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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
Route::get('/product/search', [PageController::class, 'searchProduct']);
Route::get('/login', [UserController::class, 'getFormLogin']);

// Post
Route::post('/admin/add', [AdminController::class, 'addProduct']);
Route::post('/admin/edit/{id}', [AdminController::class, 'updateProduct']);
Route::post('/admin/delete/{id}', [AdminController::class, 'deleteProduct']);
Route::post('/product/search', [PageController::class, 'searchProduct']);
Route::get('/login', [UserController::class, 'login']);


// User
Route::get('/register', [UserController::class, 'showRegisterForm'])->name('user.register');
Route::post('/register', [UserController::class, 'register'])->name('user.register');

Route::get('/login', [UserController::class, 'showLoginForm'])->name('user.login');
Route::post('/login', [UserController::class, 'login'])->name('user.login');