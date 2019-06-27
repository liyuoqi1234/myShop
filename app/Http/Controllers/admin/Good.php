<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class Good extends Controller
{
    public function index()
    {
        $redis = new \Redis();
        $redis->connect('127.0.0.1','6379');
        $redis->incr('num');
        $num = $redis->get('num');
        echo $num."<br/>";

        $data = request()->all();
        $where = [];
        if($data['name']??''){
            $where[] = ['name','like',"%$data[name]%"];
        }
        $zhkInfo = DB::table('zhk')->orderBy('add_time','desc')->where($where)->paginate(2);
        return view('good.index',['zhkInfo'=>$zhkInfo,'data'=>$data]);
    }

    public function add()
    {
        return view('good.add');
    }

    public function doadd(Request $request){
        $data=$request->all();
        $path = $request->file('filename')->store('zhk');
        $s_img=asset('storage'.'/'.$path);
        $data['filename']=$s_img;
        $data['add_time']=time();
        unset($data['_token']);
        $res=DB::table('zhk')->insert($data);
        if ($res){
            return redirect('good/index');
        }else{
            return redirect('good/index');
        }
    }

    public function del($id)
    {
        $data = DB::table('zhk')->where(['id'=>$id])->delete();
        if($data){
            return redirect('good/index');
        }
    }

    public function edit($id)
    {
        $data = DB::table('zhk')->where('id',$id)->first();
        return view('good.edit',['data'=>$data]);
    }

    public function update(Request $request,$id)
    {
        $data = $request->except(['_token','id']);
        // $path = $request->file('filename')->store('zhk');
        // $s_img=asset('storage'.'/'.$path);
        // $data['filename']=$s_img;
        $res  = DB::table('zhk')->where('id',$id)->update($data);
        if($res){
            return redirect('good/index');
        }
    }
}
