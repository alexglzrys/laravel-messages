@extends('pages.layout')

@section('title', 'Contact')

@section('content')
<h1>Contac</h1>
@forelse($contacts as $contact)
    <li>Name: {{ $contact['name'] }} - Phone: {{ $contact['phone'] }}</li>
@empty
    <li>No hay registros</li>
@endforelse

<form action="{{ route('messages.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nombre">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="subject" placeholder="Subject">
    <textarea name="content" placeholder="Content..."></textarea>
    <button>Enviar</button>
</form>
@endsection
