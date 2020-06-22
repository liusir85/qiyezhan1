<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="/bootstrap.min.css">
</head>
<body>

<form class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-3">
            <input class="form-control" id="name" type="text">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">电话</label>
        <div class="col-sm-3">
            <input class="form-control" id="tel" type="text">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">验证码</label>
        <div class="col-sm-3">
            <input class="form-control" id="verify" type="text">
            <button type="button" class="btn btn-success">获取验证码</button>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label"></label>
        <div class="col-sm-3">
            <button type="button" class="btn btn-success" id="smb">注册</button>
        </div>
    </div>
</form>
</body>
</html>
<script>
    $(function(){
        $(document).on('click','#smb',function () {
            var name = $('#name').val();
            var tel = $('#tel').val();
            $.ajax({
                url:"{{url('reg/sodo')}}"
            });
        });
    });
</script>