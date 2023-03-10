<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ 'css/style.css' }}">
    <link rel="stylesheet" href="{{ 'css/bootstrap.min.css' }}">
    <link rel="stylesheet" href="{{ 'FA6pro/css/all.min.css' }}">
    <link rel="shortcut icon" href="{{ 'image/LOGO MTSU.ico' }}" type="image/x-icon">
    <title>@yield('title',$title)</title>
</head>
<body class="body">
    @yield('content')
    <script src="{{ 'FA6pro/js/all.min.js' }}"></script>
    <script src="{{ 'js/bootstrap.bundle.min.js' }}"></script>
</body>
</html>