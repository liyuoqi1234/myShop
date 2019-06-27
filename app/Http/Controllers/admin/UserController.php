<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class UserController extends Controller
{
    // 展示
    public function index(Request $request)
    {
        $data = $request->all();
        $where = [];
        if($data['name']??''){
            $where[] = ['name','like',"%$data[name]%"];
        }
        $zhk4Info = DB::table('zhk4')->where($where)->orderBy('id','desc')->paginate(2);

        return view('zhk4.index',['zhk4Info'=>$zhk4Info,'data'=>$data]);
    }

    // 添加
    public function add()
    {
        return view('zhk4.add');
    }

    // 执行添加
    public function doadd(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $res = DB::table('zhk4')->insert($data);
        if($res){
            return redirect('zhk4/index');
        }else{
            return redirect('zhk4/index');

        }
    }

    // 删除
    public function del($id)
    {
        $data = DB::table('zhk4')->where(['id'=>$id])->delete();
        // dd($data);exit;
        if($data){
            return redirect('zhk4/index');
        }
    }

    // 修改
    public function edit($id)
    {
        $data = DB::table('zhk4')->where('id',$id)->first();

        return view('zhk4.edit',['data'=>$data]);
    }

    // 执行修改
    public function update(Request $request,$id)
    {
        $data = $request->except(['_token','id']);
        $res = DB::table('zhk4')->where('id',$id)->update($data);
        if($res){
            return redirect('zhk4/index');
        }
    }

}
