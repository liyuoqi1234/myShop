<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商品列表</title>
</head>
<body>
    <form action="{{url('/goods/doadd')}}" method="post" enctype="multipart/form-data">
    <!-- 令牌 -->
    <input type="hidden" name="_token" value="{{csrf_token()}}">
        <table border=1>
        <tr>
                <td>商品名称</td>
                <td><input type="text" name="goods_name"></td>
            </tr>

            <tr>
                <td>商品图片</td>
                <td>
                    <input type="file" name="goods_pic">
                </td>
            </tr>

            <tr>
                <td>商品价格</td>
                <td><input type="text" name="goods_price"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="提交"></td>
            </tr>

        </table>
    </form>
</body>
</html>