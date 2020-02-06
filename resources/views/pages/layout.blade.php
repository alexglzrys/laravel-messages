<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', config('app.name'))</title>
    {{-- mix() es un helper que hace referencia a la utlima versión de los assets generados en modo versionado. Esto es util dado que si hacemos un cambio posterior, mix generará un archivo compilado con una versión diferente, la cual debemos incluir manualmente. --}}
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body>
    @include('pages.partials._nav')
    {{-- Una buena idea es incluir los mensajes de sessión flash en el layout, para que las vistas que lo heredan queden mas limpias, y muestren el mensaje si deben de hacerlo --}}
    @include('partials.session-status')
    @yield('content')
</body>
</html>
