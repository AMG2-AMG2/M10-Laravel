@extends('layouts.master')

@section('title', 'Project Bewerken')

@section('content')
    <h1>Project Bewerken</h1>

    <!-- Formulier voor het bewerken van een project -->
    <form action="{{ route('admin.projects.update', $project) }}" method="post">
        @csrf
        @method('put')

        <label for="title">Titel:</label>
        <input type="text" id="title" name="title" value="{{ $project->title }}" required>

        <label for="intro">Intro:</label>
        <input type="text" id="intro" name="intro" value="{{ $project->intro }}" required>

        <label for="description">Beschrijving:</label>
        <textarea id="description" name="description" required>{{ $project->description }}</textarea>

        <label for="active">Actief:</label>
        <input type="checkbox" id="active" name="active" {{ $project->active ? 'checked' : '' }}>

        <!-- Voeg andere velden toe voor meer -->

        <button type="submit">Bijwerken</button>
    </form>
@endsection
