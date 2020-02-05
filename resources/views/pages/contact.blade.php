@extends('pages.layout')

@section('title', 'Contact')

@section('content')
<h1>Contac</h1>
@forelse($contacts as $contact)
    <li>Name: {{ $contact['name'] }} - Phone: {{ $contact['phone'] }}</li>
@empty
    <li>No hay registros</li>
@endforelse

{{-- Mostrar informe general de errores de validación --}}
<div>
    @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
</div>

<form action="{{ route('messages.store') }}" method="POST">
    @csrf
    <div>
        {{-- Mostrar errores de validación para cada campo, y recuperar los antigüos valores ingresados --}}
        <input type="text" name="name" placeholder="Nombre" value="{{ old('name') }}">
        {!! $errors->first('name', '<span>:message</span>') !!}
    </div>
    <div>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        {!! $errors->first('email', '<span>:message</span>') !!}
    </div>
    <div>
        <input type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}">
        {!! $errors->first('subject', '<span>:message</span>') !!}
    </div>
    <div>
        <textarea name="content" placeholder="Content...">{{ old('content') }}</textarea>
        {!! $errors->first('content', '<span>:message</span>') !!}
    </div>
    <button>Enviar</button>
</form>
@endsection
