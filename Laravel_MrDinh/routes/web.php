<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

Route::get('/cake', [PageController::class, 'getIndex']);
Route::get('/type-cake/{type}', [PageController::class, 'getProductType'])->name('type-cake');