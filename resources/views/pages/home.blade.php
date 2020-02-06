@extends('pages.layout')

@section('title', 'Home')

@section('content')
<h1>Home</h1>
{{-- Si el usuario esta logeado, mostramos su nombre
Esta verificación es importante si el controlador que invoca esta vista no tiene asignado el middleware auth. Ya que un usuario invitado al no estar logeado y acceder a esta vista, se lanzará un error al acceder a una propiedad de algo nulo  --}}
@auth
    <p>Bienvenid@: {{ auth()->user()->name }}</p>
@endauth
@endsection
