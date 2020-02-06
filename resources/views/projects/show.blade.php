@extends('pages.layout')

@section('title', "Proyecto - {$project->title}")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-10 mx-auto">
            <div class="bg-white shadow rounded p-5">
                <h1 class="display-5">{{ $project->title }}</h1>
                <p class="text-secondary">{{ $project->description }}</p>
                {{-- Los campos timestamps son instancias de Carbon, por lo que podemos formatearlas con dicho paquete --}}
                <p class="text-black-50">Fecha de registro: {{ $project->created_at->diffForHumans() }}</p>
                {{-- Mostrar los enlaces de edición y eliminación de proyectos, solo a usuarios autenticados --}}
                @auth
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('projects.index') }}">Regresar</a>
                        <div class="btn-group btn-group-sm">
                            <a class="btn btn-primary" href="{{ route('projects.edit', $project) }}">Editar</a>
                            <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">Eliminar</a>
                            <form action="{{ route('projects.destroy', $project) }}" method="POST" id="delete-project" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</div>
@endsection
