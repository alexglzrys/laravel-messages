@extends('pages.layout')

@section('title', 'Crear Proyecto')

@section('content')
    <h1>Crear un proyecto</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div>
            <label>Titulo del Proyecto</label>
            <input type="text" name="title" placeholder="Ingrese un nombre para el proyecto">
        </div>
        <div>
            <label>URL Amigable</label>
            <input type="text" name="url" placeholder="Ingrese una URL amigable para el proyecto">
        </div>
        <div>
            <label>Descripción del Proyecto</label>
            <textarea name="description" placeholder="Ingrese una descripción detallada para el proyecto"></textarea>
        </div>
        <button>Registrar</button>
    </form>
@endsection
