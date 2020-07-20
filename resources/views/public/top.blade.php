<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="./layui/css/layui.css" media="all" />
    <link rel="stylesheet" type="text/css" href="./css/login.css" />
</head>
<body class="beg-login-bg">
<div class="beg-login-box">
    <header>
        <h1>后台管理系统</h1>
    </header>

    @yield('content')

    <footer>
        <p></p>
    </footer>
</div>
<script type="text/javascript" src="./javascript/jquery.min.js"></script>
<script type="text/javascript" src="./layui/layui.js"></script>
<script type="text/javascript" src="./javascript/login.js"></script>
</body>
</html>
