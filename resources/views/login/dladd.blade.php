<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>微商城-登录</title>
    <link rel="stylesheet" href="/admin/dist/vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/admin/dist/vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/admin/dist/css/styles.css">
</head>
<body>
<div class="page-wrapper flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card p-4">
                    <div class="card-header text-center text-uppercase h4 font-weight-light">
                        登录
                    </div>
                <form action="{{url('/login/dodladd')}}" method="post">
                <!-- 令牌 -->
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="card-body py-5">
                        <div class="form-group">
                            <label class="form-control-label">用户名</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">密码</label>
                            <input type="password" name="pwd" class="form-control">
                        </div>

                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary px-5">登录</button>
                            </div>

                            <div class="col-6">
                                <a href="#" class="btn btn-link">忘记密码了吗?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<script src="./vendor/jquery/jquery.min.js"></script>
<script src="./vendor/popper.js/popper.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="./vendor/chart.js/chart.min.js"></script>
<script src="./js/carbon.js"></script>
<script src="./js/demo.js"></script>
</body>
</html>
