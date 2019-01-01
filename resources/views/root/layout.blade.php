<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <p>
        @section('content')
            This is content of Layout
        @show
    </p>
    <p>
        @yield('noidung')
    </p>
</body>
</html>