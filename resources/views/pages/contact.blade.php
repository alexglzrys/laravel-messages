@extends('pages.layout')

@section('title', 'Contact')

@section('content')
<h1>Contac</h1>
@forelse($contacts as $contact)
    <li>Name: {{ $contact['name'] }} - Phone: {{ $contact['phone'] }}</li>
@empty
    <li>No hay registros</li>
@endforelse
@endsection
