@extends('pages.layout')

@section('title', 'Editar Proyecto')

@section('content')
<h1>Editar el proyecto</h1>
<form action="{{ route('projects.update', $project) }}" method="POST">
    @method('PUT')
    @include('projects._form', ['btnText' => 'Actualizar'])
</form>
@endsection
