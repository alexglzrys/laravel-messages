@extends('pages.layout')

@section('title', 'Crear Proyecto')

@section('content')
    <h1>Crear un proyecto</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        {{-- Incluir una vista parcial, con algunas variables para personalizar su presentación --}}
        @include('projects._form', ['btnText' => 'Guardar'])
    </form>
@endsection
