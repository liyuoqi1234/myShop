<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Goods extends Controller
{
    public function add()
    {
        return view('goods.add');
    }

    public function doadd(Request $request)
    {
        $path = $request->file('filename')->store('goods');
        echo asset('storage'.'/'.$path);
        dd($path);
    }
}
