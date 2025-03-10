<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TaoBangController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

Route::get('/shoppee', function () {
    return view('home');
});

// Thực hiện tạo table trong database
Route::get('database', function() {
    Schema::create('sanpham', function($table) {
        $table->increments('id');
        $table->string('ten');
        $table->float('gia');
        $table->string('image');
    });
    return 'Tạo bảng thành công';
});


Route::get('database-moi', [TaoBangController::class, 'taobang']);

Route::get('/trangchu', [PageController::class, 'getIndex']);