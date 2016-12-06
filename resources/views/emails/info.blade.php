<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>邮箱验证信息</title>
</head>
<body>
    <div style="width:500px;height:200px;background-color:#ccc;">
        {{ $res -> name }} ，您好：<br>
        感谢您使用Flyme服务。您正在进行Flyme修改邮箱，验证码是：<br>
        {{$code}}。
    </div>
</body>
</html>