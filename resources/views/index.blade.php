@extends('layouts.app')

@section('title', 'Projecten Overzicht')

@section('content')
    <h1>Projecten Overzicht</h1>

    @foreach ($projects as $project)
        <div class="project-item">
            <p>{{ $project->title }}</p>
            <!-- Meer projject informatie -->  


            @if(Auth::check()) <!-- Controle of gebruiker is ingelogd -->
                <a href="{{ route('projects.edit', $project) }}"
                   class="bg-yellow me-2 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                    Wijzig
                </a>
            @endif
        </div>
    @endforeach
@endsection