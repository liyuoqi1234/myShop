<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    // 列表
    public function index()
    {
    //    $shopInfo = DB::table('shop')->get();
        // 缓存
        $redis = new \Redis();
        $redis->connect('127.0.0.1','6379');
        $redis->incr('num');
        $num = $redis->get('num');
        echo $num."<br/>";
        // 搜索
       $data = request()->all();
       $where = [];
       if($data['name']??''){
           $where[] = ['name','like',"%$data[name]%"];
       }

       $shopInfo = DB::table('shop')->where($where)->orderBy('id','desc')->paginate(2);
        return view('user.index',['shopInfo'=>$shopInfo,'data'=>$data]);
    }

    // 添加
    public function add()
    {
        $redis = new \Redis();
        $redis->connect('127.0.0.1','6379');
        $redis->incr('num');
        $num = $redis->get('num');
        echo $num."<br/>";

        return view('user.add');
    }

    // 执行添加
    public function do_add(Request $request)
    {
        // 令牌
        $req = $request->except(['_token','id']);
        // Db类
        $res = DB::table('shop')->insert($req);
        // dd($res);
        if($res){
            return redirect('user/index');
        }
    }

    // 删除
    public function del($id)
    {
        $data = DB::table('shop')->where(['id'=>$id])->delete();
        if($data){
            return redirect('user/index');
        }
    }

    // 修改
    public function edit($id)
    {
        $pp = DB::table('shop')->where('id',$id)->first();
        
        // dd($data);
        return view('user.edit',['pp'=>$pp]);
    }

    // 执行修改
    public function update(Request $request,$id)
    {
        $data = $request->except(['_token','id']);
        $res = DB::table('shop')->where('id',$id)->update($data);
        if($res){
            return redirect('user/index');
        }
        
    }

}
