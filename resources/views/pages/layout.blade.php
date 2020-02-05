<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', config('app.name'))</title>
</head>
<body>
    @include('pages.partials._nav')
    @yield('content')
</body>
</html>
