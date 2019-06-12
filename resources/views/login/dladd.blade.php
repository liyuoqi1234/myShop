<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册</title>
</head>
<body>
    <form action="{{url('/login/dodladd')}}" method="post">
    <!-- 令牌 -->
    <input type="hidden" name="_token" value="{{csrf_token()}}">
        <table>
            <tr>
                <td>用户名</td>
                <td><input type="text" name="name"></td>
            </tr>

            <tr>
                <td>密码</td>
                <td><input type="password" name="pwd"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="登录"></td>
            </tr>
        </table>
    </form>
</body>
</html>