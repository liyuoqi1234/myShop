<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
    // 展示
    public function Index()
    {
        $data = DB::table('goods')->get();

        return view('index.index',['data'=>$data]);
    }

    // 详情页
    public function wishlist(Request $request)
    {
        $id = request()->id;
        $data = DB::table('goods')->where('id',$id)->first();

        return view('wishlist.wishlist',['data'=>$data]);
    }
}
