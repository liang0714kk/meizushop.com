<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="/admin/back" method="post">
	    {{ csrf_field() }}
		<input type="text">
		<button>提交</button>
	</form>

	
</body>
</html>