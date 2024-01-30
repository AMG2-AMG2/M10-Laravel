@extends('layouts.master')

@section('title', 'Nieuw Project bijvoegen')

@section('content')
    <h1>Nieuw Project Toevoegen</h1>

    <!-- Formulier voor het toevoegen van een nieuw project -->
    <form action="{{ route('projects.store') }}" method="post">
        @csrf
        <label for="titel">Titel:</label>
        <input type="text" id="titel" name="titel" required>

        <label for="beschrijving">Onderdeel:</label>
        <input type="text" id="beschrijving" name="beschrijving" required>

        <!-- Voeg andere velden toe voor meer -->

        <button type="submit">Opslaan</button>
    </form>
@endsection
