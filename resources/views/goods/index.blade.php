<table border=1>
    <tr>
        <td>ID</td>
        <td>商品名称</td>
        <td>商品图片</td>
        <td>商品价格</td>
        <td>添加时间</td>
        <td>操作</td>
    </tr>
@if($goodsInfo)
@foreach($goodsInfo as $v)
    <tr>
        <td>{{$v->id}}</td>
        <td>{{$v->goods_name}}</td>
        <td><img src="{{$v->goods_pic}}" alt="" width="100"></td>
        <td>{{$v->goods_price}}</td>
        <td>{{date('Y-m-d',$v->add_time)}}</td>
        <td>
            <a href="{{url('/goods/del',['id'=>$v->id])}}">删除</a>
            <a href="{{url('/goods/edit',['id'=>$v->id])}}">修改</a>
        </td>
    </tr>
@endforeach
@endif
</table>
