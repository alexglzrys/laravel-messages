<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', config('app.name'))</title>
    <style>
        .active > a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    @include('pages.partials._nav')
    @yield('content')
</body>
</html>
