@extends('layouts.master')

@section('title', 'Show Overzicht')

@section('content')
    <h1>Show Overzicht</h1>

        <div>
            <h2>{{ $project->titel }}</h2>
            <p>{{ $project->beschrijving }}</p>
            <!-- Voeg andere velden toe indien nodig -->

            <a href="{{ route('projects.show', $project) }}" class="rounded-md bg-blue">Bekijken</a>
            <a href="{{ route('projects.edit', $project) }}" class="rounded-md bg-yellow">Bewerken</a>

            <!-- Verwijderformulier toevoegen -->
            <form action="{{ route('projects.destroy', $project) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="rounded-md bg-orange">Verwijderen</button>
            </form>
        </div>
@endsection
