
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('pages.home') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                {{-- setActive es una función de utilidad que añade una clase de CSS "active" si el nombre de la ruta esta actualmente activa --}}
                <li class="nav-item {{ setActive('pages.home') }}">
                    {{--
                        Sitios Multi-idioma
                        Traducir el idioma de ciertas partes de nuestra aplicación mediante la directiva @lang('Llave')
                        Laravel busca archivos de idioma en formato JSON dentro de /resources/lang/idioma.json

                        @lang busca la clave dentro del archivo, y la reemplaza por el valor asociado. Si la clave no existe, se utiliza como valor el parámetro pasado a la directiva @lang

                        @lang('llave') - Plantillas blade
                        __('llave') - Archivos PHP
                    --}}
                    <a class="nav-link" href="{{ route('pages.home') }}">@lang('Home')</a>
                </li>
                <li class="nav-item {{ setActive('pages.about') }}">
                    <a class="nav-link" href="{{ route('pages.about') }}">@lang('About')</a>
                </li>
                {{-- El comodín * indica que el nombre de ruta debe coincidir con projects.(lo que sea) --}}
                <li class="nav-item {{ setActive('projects.*') }}">
                    <a class="nav-link" href="{{ route('projects.index') }}">@lang('Projects')</a>
                </li>
                <li class="nav-item {{ setActive('pages.contact') }}">
                    <a class="nav-link" href="{{ route('pages.contact') }}">@lang('Contact')</a>
                </li>
                {{-- Si el usario actual es un invitado --}}
                @guest
                    {{-- mostramos el enlace de iniciar sesion --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                    </li>
                @else
                    {{-- Caso contrario, mostramos el enlace de cerrar sesión --}}
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="nav-link btn btn-link text-primary">Cerrar sesión</button>
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

