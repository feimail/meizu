<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<input type="text" name="captcha" class="form-control" style="width: 300px;">
        <img src="{{ URL('/vcode') }}" onclick = "this.src = this.src+'?s'" alt="验证码" title="刷新图片">
</body>
</html>