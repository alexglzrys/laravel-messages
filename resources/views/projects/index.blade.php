@extends('pages.layout')

@section('title', 'Portfolio')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h1 class="display-6 mb-0">@lang('Projects')</h1>
                    {{-- Mostrar el enlace de crear proyectos, solo para usuarios autenticados --}}
                    @auth
                        <a class="btn btn-primary" href="{{ route('projects.create') }}">Crear un proyecto</a>
                    @endauth
                </div>
                <p class="text-secondary">Listado de proyectos profesionales, realizados durante mi estancia en la firma de diseño/desarrollo XPSmart México.</p>
                <ul class="list-group mb-3">
                    @forelse($projects as $project)
                        <li class="list-group-item border-0 shadow-sm mb-3">
                            {{-- Laravel por defecto, pasa siempre el id del objeto en cuestión. A salvo que se le especifique lo contrario al hacer Route Model Binding - en su modelo (getRouteKeyName) --}}
                            <a class="d-flex justify-content-between align-items-center text-decoration-none" href="{{ route('projects.show', $project) }}">
                                <span class="text-secondary font-weight-bold">{{ $project->title }}</span>
                                <span class="text-black-50">{{ $project->created_at->format('d/m/Y') }}</span>
                            </a>
                        </li>
                    @empty
                        <li class="list-group-item border-0 shadow-sm mb-3">@lang('Not found projects')</li>
                    @endforelse
                </ul>
                {{ $projects->links() }}
            </div>
        </div>
    </div>
@endsection
