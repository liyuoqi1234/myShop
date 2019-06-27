
                                            
                            @extends('layout.nav')
                            @section('content')
                                <div class="row p-5">
                                    <div class="col-md-12">
                                    <form action="">
                                            <input type="text" name="name" value="{{$data['name']??''}}">
                                            <button>搜索</button>
                                    </form>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                                <th class="border-0 text-uppercase small font-weight-bold">商品名称</th>
                                                <th class="border-0 text-uppercase small font-weight-bold">商品图片</th>
                                                <th class="border-0 text-uppercase small font-weight-bold">商品价格</th>
                                                <th class="border-0 text-uppercase small font-weight-bold">添加时间</th>
                                                <th class="border-0 text-uppercase small font-weight-bold">操作</th>
                                            </tr>
                                            </thead>
                                            @if($zhkInfo)
                                            @foreach($zhkInfo as $v)
                                            <tbody>
                                            <tr>
                                                <td>{{$v->id}}</td>
                                                <td>{{$v->name}}</td>
                                                <td><img src="{{$v->filename}}" alt="" width='100'></td>
                                                <td>{{$v->price}}</td>
                                                <td>{{date('Y-m-d',$v->add_time)}}</td>
                                                <td>
                                                    <a href="{{url('/good/del',['id'=>$v->id])}}">删除</a>
                                                    <a href="{{url('/good/edit',['id'=>$v->id])}}">修改</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                            @endforeach
                                            @endif
                                        </table>
                                        {{$zhkInfo->appends($data)->links()}} 
                                    </div>
                                </div>
                                @endsection('content')

                         