@extends('layouts.master')

@section('title', 'Projecten Overzicht')

@section('content')
    <h1>Projecten Overzicht</h1>

    @foreach ($projects as $project)
        <div>
            <h2>{{ $project->title }}</h2>
            <p>{{ $project->onderdeel }}</p>
            <!-- Voeg andere velden toe indien nodig -->

            <a href="{{ route('admin.projects.show', $project) }}" class="rounded-md bg-blue">Bekijken</a>
            <a href="{{ route('admin.projects.edit', $project) }}" class="rounded-md bg-yellow">Bewerken</a>

            <!-- Verwijderformulier toevoegen -->
            <form action="{{ route('admin.projects.destroy', $project) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="rounded-md bg-orange">Verwijderen</button>
            </form>
        </div>
    @endforeach

    {{ $projects->links() }}
@endsection
