<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改</title>
</head>
<body>
    <form action="{{url('/zhk4/update/'.$data->id)}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}"> 
        <table border=1>
            <tr>
                <td>学生姓名</td>
                <td><input type="text" name="name" value="{{$data->name}}"></td>
            </tr>

            <tr>
                <td>学生性别</td>
                <td>
                    <input type="radio" name="sex" value="男" {{$data->sex=='男'?'checked':''}}>男
                    <input type="radio" name="sex" value="女" {{$data->sex=='女'?'checked':''}}>女
                </td>
            </tr>

            <tr>
                <td>学生电话</td>
                <td><input type="tel" name="tel" value="{{$data->tel}}"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="修改"></td>
            </tr>
        </table>
    </form>
</body>
</html>