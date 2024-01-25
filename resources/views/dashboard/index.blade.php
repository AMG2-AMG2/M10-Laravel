@extends('layouts.master')

@section('title', 'Projecten Overzicht')

@section('content')
    <h1>Projecten Overzicht</h1>

    @foreach ($projects as $project)
        <!-- Projectgegevens weergeven -->
        <p>{{ $project->field_one }}</p>
        
        <!-- Verwijderformulier toevoegen -->
        <form action="{{ route('projects.destroy', $project) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="rounded-md bg-orange">Verwijder</button>
        </form>
    @endforeach
@endsection