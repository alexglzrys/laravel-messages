@extends('pages.layout')

@section('title', "Proyecto - {$project->title}")

@section('content')
    <h1>{{ $project->title }}</h1>
    <a href="{{ route('projects.edit', $project) }}">Editar</a>
    <p>{{ $project->description }}</p>
    {{-- Los campos timestamps son instancias de Carbon, por lo que podemos formatearlas con dicho paquete --}}
    <small>Escrito hace: {{ $project->created_at->diffForHumans() }}</small>
@endsection
