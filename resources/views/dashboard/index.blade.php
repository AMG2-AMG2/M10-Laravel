@extends('layouts.master')

@section('title', 'Projecten Overzicht')

@section('content')
    <h1>Projecten Overzicht</h1>

    @foreach ($projects as $project)
        <!-- Projectgegevens weergeven -->
        <div>
            <h2>{{ $project->title }}</h2>
            <p>{{ $project->onderdeel }}</p>
            <!-- Voeg andere velden toe voor meeer -->

            <!-- Verwijderformulier toevoegen -->
            <form action="{{ route('admin.projects.destroy', $project) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="rounded-md bg-orange">Verwijder</button>
            </form>
        </div>
    @endforeach

    {{ $projects->links() }}
@endsection
