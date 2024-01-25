@extends('layouts.master')

@section('title', 'Project Bewerken')

@section('content')
    <h1>Je gaat nu dit project bewerken: {{ $project->title }}</h1>

    @if ($errors->any())
        <!-- Foutmeldingen vermellden -->
    @endif

    @include('dashboard.projects.form', ['route' => route('projects.update', $project), 'method' => 'put', 'project' => $project])
@endsection