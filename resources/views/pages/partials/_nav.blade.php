<nav>
    <ul>
        {{-- setActive es una función de utilidad que añade una clase de CSS "active" si el nombre de la ruta esta actualmente activa --}}
        <li class="{{ setActive('pages.home') }}">
            {{--
                Sitios Multi-idioma
                Traducir el idioma de ciertas partes de nuestra aplicación mediante la directiva @lang('Llave')
                Laravel busca archivos de idioma en formato JSON dentro de /resources/lang/idioma.json

                @lang busca la clave dentro del archivo, y la reemplaza por el valor asociado. Si la clave no existe, se utiliza como valor el parámetro pasado a la directiva @lang

                @lang('llave') - Plantillas blade
                __('llave') - Archivos PHP
            --}}
            <a href="{{ route('pages.home') }}">@lang('Home')</a>
        </li>
        <li class="{{ setActive('pages.about') }}">
            <a href="{{ route('pages.about') }}">@lang('About')</a>
        </li>
        {{-- El comodín * indica que el nombre de ruta debe coincidir con projects.(lo que sea) --}}
        <li class="{{ setActive('projects.*') }}">
            <a href="{{ route('projects.index') }}">@lang('Projects')</a>
        </li>
        <li class="{{ setActive('pages.contact') }}">
            <a href="{{ route('pages.contact') }}">@lang('Contact')</a>
        </li>
        {{-- Si el usario actual es un invitado --}}
        @guest
            {{-- mostramos el enlace de iniciar sesion --}}
            <li>
                <a href="{{ route('login') }}">Iniciar sesión</a>
            </li>
        @else
            {{-- Caso contrario, mostramos el enlace de cerrar sesión --}}
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button>Cerrar sesión</button>
                </form>
            </li>
        @endguest
    </ul>
</nav>
