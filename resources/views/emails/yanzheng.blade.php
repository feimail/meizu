<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>找回密码</title>
</head>
<body>
	<p>亲,请 
	<a href={{route('index.resets').'/'.$token}}>  点击  </a>  
	重置密码,如果不成功复制以下链接到地址栏进行访问
	</p>
	<br>
	{{ route('index.resets').'/'.$token }}
</body>
</html>