<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class GoodsController extends Controller
{

    // 展示
    public function index(Request $request)
    {
        $data = $request->all();
        $goodsInfo = DB::table('goods')->get();
        // dd($goodsInfo);exit;

        return view('goods.index',['goodsInfo'=>$goodsInfo]);
    }

    // 添加
    public function add()
    {
        return view('goods.add');
    }

    // 执行添加
    public function doadd(Request $request)
    {
        $data=$request->all();
        $path = $request->file('goods_pic')->store('goods');
        $img=asset('storage'.'/'.$path);
        $data['goods_pic']=$img;
        $data['add_time']=time();
        unset($data['_token']);
        $res=DB::table('goods')->insert($data);
        if ($res){
            return redirect('goods/index');
        }else{
            return redirect('goods/index');
        }
    }

    // 删除
    public function del($id)
    {
        $data = DB::table('goods')->where(['id'=>$id])->delete();
        if($data){
            return redirect('goods/index');
        }
    }
}
