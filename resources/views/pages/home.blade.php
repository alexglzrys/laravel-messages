@extends('pages.layout')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-5">Bienvenidos</h1>
            <p class="lead text-black-50">Hola, te saluda tu amigo y docente Alejandro González</p>
            <p class="text-secondary">Si has llegado hasta aquí, es por que probablemente te has topado con alguno de mis proyectos alojado de forma pública y gratuita en la red de GitHub. Muchos de ellos han sido desarrollados como hobbie en mis ratos libres, haciendo uso de tecnologías como HTML5, CSS3, JavaScript, PHP, MySQL, Laravel, VueJS, ExpressJS, NodeJS, MongoDB, y hasta el extinto Adobe Flex/Air.</p>
            <p class="text-secondary">¿Necesitas ayuda o tienes una propuesta laboral?</p>
            <p class="text-secondary"></p>

            <a class="btn btn-primary btn-block" href="{{ route('pages.contact') }}">Contáctame</a>
            <a class="btn btn-block btn-outline-primary" href="{{ route('projects.index') }}">Ver Portafolio de Trabajo</a>
        </div>
        <div class="col-12 col-lg-6">
            <img src="{{ asset('img/home.svg') }}" class="img-fluid">
        </div>
        {{-- Si el usuario esta logeado, mostramos su nombre
        Esta verificación es importante si el controlador que invoca esta vista no tiene asignado el middleware auth. Ya que un usuario invitado al no estar logeado y acceder a esta vista, se lanzará un error al acceder a una propiedad de algo nulo  --}}
        {{-- @auth
            <p>Bienvenid@: {{ auth()->user()->name }}</p>
        @endauth --}}
    </div>
</div>
@endsection
