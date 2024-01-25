@extends('layouts.dashboard')

@section('content')
    <h2>Project toevoegen</h2>

    <form action="{{ route('projects.store') }}" method="post">
        @csrf

        <!-- Voeg hier de rest van je formulier toe -->
        <!-- Bijvoorbeeld: -->
        <label for="title">Titel:</label>
        <input type="text" id="title" name="title" required>

        <label for="description">Beschrijving:</label>
        <textarea id="description" name="description" required></textarea>

        <button type="submit">Opslaan</button>
    </form>
@endsection