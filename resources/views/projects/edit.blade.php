@extends('pages.layout')

@section('title', 'Editar Proyecto')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-10 mx-auto">
            <form action="{{ route('projects.update', $project) }}" method="POST" class="bg-white px-4 py-3 shadow rounded">
                <h1 class="display-5">Editar proyecto</h1>
                <hr>
                @method('PUT')
                @include('projects._form', ['btnText' => 'Actualizar'])
                <a class="text-center d-block btn-lg mt-3 text-decoration-none" href="{{ route('projects.index') }}">Cancelar</a>
            </form>
        </div>
    </div>

</div>
@endsection
