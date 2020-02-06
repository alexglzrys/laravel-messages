@extends('pages.layout')

@section('title', 'Crear Proyecto')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-10 mx-auto">
            <form action="{{ route('projects.store') }}" method="POST" class="bg-white px-4 py-3 shadow rounded">
                <h1 class="display-6">Nuevo proyecto</h1>
                <hr>
                {{-- Incluir una vista parcial, con algunas variables para personalizar su presentación --}}
                @include('projects._form', ['btnText' => 'Guardar'])
            </form>
        </div>
    </div>
</div>
@endsection
