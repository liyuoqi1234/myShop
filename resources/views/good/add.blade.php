<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/good/doadd')}}" method="post" enctype="multipart/form-data">
        <!-- 令牌 -->
        <input type="hidden" name="_token" value="{{csrf_token()}}"> 
        <table>
            <tr>
                <td>商品名称</td>
                <td><input type="text" name="name"></td>
            </tr>

            <tr>
                <td>商品图片</td>
                <td>
                    <input type="file" name="filename">
                </td>
            </tr>

            <tr>
                <td>商品价格</td>
                <td><input type="text" name="price"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="提交"></td>
            </tr>
        </table>
    </form>
</body>
</html>