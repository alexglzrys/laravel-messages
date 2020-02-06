@extends('pages.layout')

@section('title', 'Portfolio')

@section('content')
<h1>@lang('Projects')</h1>
{{-- Mostrar el enlace de crear proyectos, solo para usuarios autenticados --}}
@auth
    <a href="{{ route('projects.create') }}">Crear un proyecto</a>
@endauth
<ul>
    @forelse($projects as $project)
        <li>
            {{-- Laravel por defecto, pasa siempre el id del objeto en cuestión. A salvo que se le especifique lo contrario al hacer Route Model Binding - en su modelo (getRouteKeyName) --}}
            <a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a></li>
    @empty
        <li>@lang('Not found projects')</li>
    @endforelse
</ul>
{{ $projects->links() }}
@endsection
