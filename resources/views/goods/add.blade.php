<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>微商城-文件上传</title>
</head>
<body>
	<form action="{{url('goods/doadd')}}" method="post" enctype="multipart/form-data">
		@csrf
        <h2>文件上传</h2>
		<input type="file" name="filename">
		<input type="submit" value="上传">
	</form>

</body>
</html>