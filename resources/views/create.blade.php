@extends('layouts.master')

@section('title', 'Nieuw Project bijvoegen')

@section('content')
    <h1>Nieuw Project Toevoegen</h1>

    <!-- Formulier voor het toevoegen van een nieuw project -->
    <form action="{{ route('admin.projects.store') }}" method="post">
        @csrf
        <label for="title">Titel:</label>
        <input type="text" id="title" name="title" required>

        <label for="onderdeel">Onderdeel:</label>
        <input type="text" id="onderdeel" name="onderdeel" required>

        <!-- Voeg andere velden toe voor meer -->

        <button type="submit">Opslaan</button>
    </form>
@endsection
