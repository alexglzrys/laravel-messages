@extends('pages.layout')

@section('title', 'Editar Proyecto')

@section('content')
<h1>Editar el proyecto</h1>
<form action="{{ route('projects.update', $project) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label>Nombre del Proyecto</label>
        <input type="text" name="title" placeholder="Ingrese un nombre para el proyecto" value="{{ old('title', $project->title) }}">
        {!! $errors->first('title', '<span>:message</span>') !!}
    </div>
    <div>
        <label>URL Amigable</label>
        <input type="text" name="url" placeholder="Ingrese una URL para el proyecto" value="{{ old('url', $project->url) }}">
        {!! $errors->first('url', '<span>:message</span>') !!}
    </div>
    <div>
        <label>Descripción</label>
        <textarea name="description" placeholder="Ingrese una descripción detallada para el proyecto">{{ old('description', $project->description) }}</textarea>
        {!! $errors->first('description', '<span>:message</span>') !!}
    </div>
    <button>Actualizar</button>
</form>
@endsection
