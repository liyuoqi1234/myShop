<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Login extends Controller
{
    public function index()
    {
        $zhucInfo = DB::table('zhuc')->paginate(2);
        // dd($zhucInfo);exit;
        return view('login.index',['zhucInfo'=>$zhucInfo]);
    }

    // 注册添加
    public function add()
    {
        return view('login.add');
    }

    // 执行注册添加
    public function doadd(Request $request)
    {
        // 令牌
        $res = $request->except(['_token','id']);
        // DB类
        $pp = DB::table('zhuc')->insert($res);
        if($pp){
            return redirect('login/dladd');
        }
    }

    // 登录
    public function dladd()
    {
        return view('login.dladd');
        
    }

    // 执行登录
    public function dodladd(Request $request)
    {
        // 接收数据库里的值
        $res = $request->all();
        // dd($res);exit;
        // where条件
        $data = DB::table('zhuc')->where('name',$res['name'])->where('pwd',$res['pwd'])->first();
        // dd()
        if(!empty($data)){
            Session(['data'=>$res['name']]);
            return redirect('good/index');
        }

    }
}
