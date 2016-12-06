<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>验证信息</title>
</head>
<body>
    <div style="width:500px;height:200px;background-color:#ccc;">
        {{ $res -> name }} ，您好：<br>
        感谢您使用Flyme服务。您正在进行Flyme重置密码操作，请点击链接{{ url('/home/user/reset/') }}/{{ $res -> id }}/{{ $res -> remember_token }}<br>
        重置密码。

    </div>
</body>
</html>