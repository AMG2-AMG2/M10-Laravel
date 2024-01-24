@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Projecten Overzicht</h2>

        <!-- Voeg hier de weergave van de projecten en paginering toe -->
        @foreach($projects as $project)
            <a href="{{ route('dashboard.projects.show', $project->id) }}">{{ $project->title }}</a><br>
        @endforeach

        {{ $projects->links() }}
    </div>
@endsection
