<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>@yield('title', config('app.name'))</title>
    {{-- mix() es un helper que hace referencia a la utlima versión de los assets generados en modo versionado. Esto es util dado que si hacemos un cambio posterior, mix generará un archivo compilado con una versión diferente, la cual debemos incluir manualmente. --}}
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body class="d-flex flex-column">
    <header>
        @include('pages.partials._nav')
        {{-- Una buena idea es incluir los mensajes de sessión flash en el layout, para que las vistas que lo heredan queden mas limpias, y muestren el mensaje si deben de hacerlo --}}
        @include('partials.session-status')
    </header>
    <main style="min-height: 90vh" class="py-4">
        @yield('content')
    </main>
    <footer class="text-center bg-white py-4 shadow">
        <p class="m-0 text-primary">{{ config('app.name') }} &copy; | Todos los derechos reservados {{ date('Y') }}</p>
    </footer>
</body>
</html>
