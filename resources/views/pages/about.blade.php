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
            <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco ehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitatcat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullahenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="btn btn-block btn-outline-primary" href="{{ route('pages.contact') }}">Contáctame</a>
        </div>
    </div>
</div>
@endsection
