@extends('pages.layout')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-5">Bienvenidos</h1>
            <p class="lead text-black-50">Este es el sitio Web oficial de su amigo Alejandro González</p>
            <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="btn btn-primary btn-block" href="{{ route('pages.contact') }}">Contáctame</a>
            <a class="btn btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
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
