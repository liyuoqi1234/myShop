<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register.register');
    }

    public function doregister(Request $request)
    {
        // 令牌
        $res = $request->except(['_token','id']);
        // DB类
        $pp = DB::table('zhuc')->insert($res);
        if($pp){
            return redirect('/login/dladd');
        }
    }
}
