<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Celertron - {{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/website.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="header">
        <ul class="nav nav-pills pull-right">
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
        </ul>
        <h3 class="text-muted">URL Shortener</h3>
    </div>
    <div id="main">
        @yield('content')
    </div>
</div>
</body>
</html>