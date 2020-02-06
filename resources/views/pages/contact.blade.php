@extends('pages.layout')

@section('title', 'Contact')

@section('content')

{{-- @forelse($contacts as $contact)
    <li>Name: {{ $contact['name'] }} - Phone: {{ $contact['phone'] }}</li>
@empty
    <li>No hay registros</li>
@endforelse --}}

{{-- Mostrar informe general de errores de validación --}}
{{-- <div>
    @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
</div> --}}

{{-- Si no hay mensaje de session (feedback), es porque el usuario aun no envia el formulario. Por tanto lo mostramos --}}
@if(!session('info'))
<div class="container">
<div class="row">
    <div class="col-12 col-lg-10 mx-auto">
        <form action="{{ route('messages.store') }}" method="POST" class=" bg-white py-3 px-4 shadow rounded my-4">
            <h1 class="display-5">@lang('Contact')</h1>
            <hr>
            @csrf
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label for="name">Ingrese su nombre</label>
                        {{-- Mostrar errores de validación para cada campo, y recuperar los antigüos valores ingresados --}}
                        <input type="text" name="name" id="name" class="form-control bg-light @error('name') is-invalid @else border-0 shadow-sm @enderror rounded" placeholder="Nombre completo" value="{{ old('name') }}">
                        {{-- {!! $errors->first('name', '<span>:message</span>') !!} --}}
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" name="email" id="email" class="form-control bg-light @error('email') is-invalid @else border-0 shadow-sm @enderror rounded" placeholder="Email" value="{{ old('email') }}">
                         @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label for="subject">Asunto del Mensaje</label>
                <input type="text" name="subject" id="subject" class="form-control bg-light @error('subject') is-invalid @else border-0 shadow-sm @enderror rounded" placeholder="Asunto" value="{{ old('subject') }}">
                 @error('subject')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Contenido del Mensaje</label>
                <textarea name="content" id="content" class="form-control bg-light @error('content') is-invalid @else border-0 shadow-sm @enderror rounded" placeholder="Ingrese el contenido de su mensaje" rows="5">{{ old('content') }}</textarea>
                 @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-primary btn-block btn-lg">@lang('Send')</button>
        </form>
    </div>
</div>

</div>
@else
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5 offset-lg-1">
                <img src="{{ asset('img/mail.svg') }}" class="img-fluid">
            </div>
            <div class="col-12 col-lg-5">
                <div class="d-flex justify-content-center align-items-center flex-column " style="height: 100%; width: 100%;">
                    <h4>Mensaje recibido</h4>
                    <p>Gracias por establecer contacto con un servidor</p>
                    <a class="btn btn-outline-primary" href="{{ route('projects.index') }}">Visitar Portafolio</a>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection
