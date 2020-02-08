<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My Wheather app')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
</head>
<body>
    @yield('content')
</body>
</html>