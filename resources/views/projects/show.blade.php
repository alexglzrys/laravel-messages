@extends('pages.layout')

@section('title', "Proyecto - {$project->title}")

@section('content')
    <h1>{{ $project->title }}</h1>
    {{-- Mostrar los enlaces de edición y eliminación de proyectos, solo a usuarios autenticados --}}
    @auth
        <a href="{{ route('projects.edit', $project) }}">Editar</a>
        <form action="{{ route('projects.destroy', $project) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Eliminar</button>
        </form>
    @endauth
    <p>{{ $project->description }}</p>
    {{-- Los campos timestamps son instancias de Carbon, por lo que podemos formatearlas con dicho paquete --}}
    <small>Escrito hace: {{ $project->created_at->diffForHumans() }}</small>
@endsection
