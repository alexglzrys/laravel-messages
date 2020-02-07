@extends('pages.layout')

@section('title', 'About')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 mb-4">
            <img src="{{ asset('img/about.svg') }}" class="img-fluid">
        </div>
        <div class="col-12 col-lg-6">
            <h1 class="display-5">Quién soy</h1>
            <p class="text-secondary">Me considero un creativo multimedia con más de cuatro años de experiencia en desarrollo de proyectos Web e impartición de formación especializada.</p>
            <p class="text-secondary">Actualmente trabajo como desarrollador Web Frelance, y en el aspecto educativo, imparto cursos y masters en varios Institutos de alto rendimiento en la zona centro de la Ciudad de México.</p>
            <p class="text-secondary">Mi interés principal en el ámbito del desarrollo, es la aplicación y combinación de diferentes herramientas, con el objetivo de mejorar la experiencia para el usuario final.</p>
            <a class="btn btn-block btn-outline-primary" href="{{ route('pages.contact') }}">Contáctame</a>
        </div>
    </div>
</div>
@endsection
