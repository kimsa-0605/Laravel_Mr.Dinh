<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RuleNhapSV;


class NhapSVController extends Controller
{
    public function index() {
        return view('nhapSVForm');
    }
    public function formNHapSV(RuleNhapSV $request)
    {
        $user = [
            'name' => $request->input('name'),
            'age' =>  $request->input('age'),
            'date' => $request->input('date'),
            'phone' => $request->input('phone'),
            'web' => $request->input('web'),
            'address' => $request->input('address')
        ];
        return view('nhapSVForm')->with('user',$user);
    }
}
