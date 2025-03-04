<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class TaoBangController extends Controller
{
    public function taobang () {
        Schema::create('products2', function($table) {
            $table->increments('id');
            $table->string('ten');
            $table->float('gia');
            $table->string('image');
        });
        return 'Tạo bảng thành công';
    }
}
