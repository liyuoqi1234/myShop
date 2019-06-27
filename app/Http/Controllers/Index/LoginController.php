<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class LoginController extends Controller
{
    public function login()
    {
        return view('logins.login');
    }

    public function dologin(Request $request)
    {
        // 接收数据库里的值
        $res = $request->all();
        // dd($res);exit;
        // where条件
        $data = DB::table('zhuc')->where('name',$res['name'])->where('pwd',$res['pwd'])->first();
        // dd($data);exit;
        if(!empty($data)){
            Session(['data'=>$res['name']]);
            return redirect('/');
        }

    }
}
