@extends('layouts.master')

@section('title', 'Project Bewerken')

@section('content')
    <h1>Project Bewerken</h1>

    <!-- Formulier voor het bewerken van een project -->
    <form action="{{ route('projects.update', $project) }}" method="post">
        @csrf
        @method('put')

        <label for="titel">Titel:</label>
        <input type="text" id="titel" name="titel" value="{{ $project->titel }}" required>

        <label for="beschrijving">Beschrijving:</label>
        <textarea id="beschrijving" name="beschrijving" required>{{ $project->beschrijving }}</textarea>

        <label for="active">Actief:</label>
        <input type="checkbox" id="active" name="active" {{ $project->active ? 'checked' : '' }}>

        <!-- Voeg andere velden toe voor meer -->

        <button type="submit">Bijwerken</button>
    </form>
@endsection
