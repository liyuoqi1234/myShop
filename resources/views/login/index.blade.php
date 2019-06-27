<table>
    <tr>
        <td>ID</td>
        <td>用户名</td>
        <td>密码</td>
        <td>操作</td>
    </tr>
@if($zhucInfo)
@foreach($zhucInfo as $v)
    <tr>
        <td>{{$v->id}}</td>
        <td>{{$v->name}}</td>
        <td>{{$v->pwd}}</td>
        <td>
            <a href="">删除</a>
            <a href="">修改</a>
        </td>
    </tr>
@endforeach
@endif
</table>
