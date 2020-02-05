<nav>
    <ul>
        {{-- setActive es una función de utilidad que añade una clase de CSS "active" si el nombre de la ruta esta actualmente activa --}}
        <li class="{{ setActive('pages.home') }}">
            <a href="{{ route('pages.home') }}">Home</a>
        </li>
        <li class="{{ setActive('pages.about') }}">
            <a href="{{ route('pages.about') }}">About</a>
        </li>
        <li class="{{ setActive('projects.index') }}">
            <a href="{{ route('projects.index') }}">Portfolio</a>
        </li>
        <li class="{{ setActive('pages.contact') }}">
            <a href="{{ route('pages.contact') }}">Contact</a>
        </li>
    </ul>
</nav>
