<link href="{{asset('css/page2.css')}}" rel="stylesheet" type="text/css">

<form action="">
    <input type="text" name="name" value="{{$data['name']??''}}">
    <button>搜索</button>
</form>

<table border=1>
    <tr>
        <td>ID</td>
        <td>学生姓名</td>
        <td>学生性别</td>
        <td>学生电话</td>
        <td>操作</td>
    </tr>
@foreach($zhk4Info as $v)
    <tr>
        <td>{{$v->id}}</td>
        <td>{{$v->name}}</td>
        <td>{{$v->sex}}</td>
        <td>{{$v->tel}}</td>
        <td>
            <a href="{{url('/zhk4/del',['id'=>$v->id])}}">删除</a>
            <a href="{{url('/zhk4/edit',['id'=>$v->id])}}">修改</a>
        </td>
    </tr>
@endforeach
</table>
{{$zhk4Info->appends($data)->links()}}