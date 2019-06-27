<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/good/update/'.$data->id)}}" method="post" enctype="multipart/form-data">
        <!-- 令牌 -->
        <input type="hidden" name="_token" value="{{csrf_token()}}"> 
        <table>
            <tr>
                <td>货物名称</td>
                <td><input type="text" name="name" value="{{$data->name}}"></td>
            </tr>

            <tr>
                <td>货物图片</td>
                <td>
                    <input type="file" name="filename">
                </td>
            </tr>

            <tr>
                <td>货物库存</td>
                <td><input type="text" name="price" value="{{$data->price}}"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="修改"></td>
            </tr>
        </table>
    </form>
</body>
</html>