<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>周考</title>
</head>
<body>
    <form action="{{url('/zhk4/doadd')}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}"> 
        <table border=1>
            <tr>
                <td>学生姓名</td>
                <td><input type="text" name="name"></td>
            </tr>

            <tr>
                <td>学生性别</td>
                <td>
                    <input type="radio" name="sex" value="男">男
                    <input type="radio" name="sex" value="女">女
                </td>
            </tr>

            <tr>
                <td>学生电话</td>
                <td><input type="tel" name="tel"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="提交"></td>
            </tr>
        </table>
    </form>
</body>
</html>