<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']);




Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Post => trên trình duyệt /api/danh-sach
Route::resource('/danh-sach',PostController::class);
Route::get('/form-users', [PostController::class, 'create']);