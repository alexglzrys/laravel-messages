@extends('pages.layout')

@section('title', 'Portfolio')

@section('content')
<h1>Portfolio</h1>
<ul>
    @forelse($projects as $project)
        <li>{{ $project->title }}</li>
    @empty
        <li>@lang('Not found projects')</li>
    @endforelse
</ul>
{{ $projects->links() }}
@endsection
