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
    {{-- Una buena idea es incluir los mensajes de sessión flash en el layout, para que las vistas que lo heredan queden mas limpias, y muestren el mensaje si deben de hacerlo --}}
    @include('partials.session-status')
    @yield('content')
</body>
</html>
