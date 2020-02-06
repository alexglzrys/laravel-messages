@extends('pages.layout')

@section('title', 'Crear Proyecto')

@section('content')
    <h1>Crear un proyecto</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div>
            <label>Titulo del Proyecto</label>
            <input type="text" name="title" placeholder="Ingrese un nombre para el proyecto" value="{{ old('title') }}">
            {!! $errors->first('title', '<span>:message</span>') !!}
        </div>
        <div>
            <label>URL Amigable</label>
            <input type="text" name="url" placeholder="Ingrese una URL amigable para el proyecto" value="{{ old('url') }}">
            {!! $errors->first('url', '<span>:message</span>') !!}
        </div>
        <div>
            <label>Descripción del Proyecto</label>
            <textarea name="description" placeholder="Ingrese una descripción detallada para el proyecto">{{ old('description') }}</textarea>
            {!! $errors->first('description', '<span>:message</span>') !!}
        </div>
        <button>Registrar</button>
    </form>
@endsection
