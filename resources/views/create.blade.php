@extends('layouts.app')

@section('title', 'Nieuw Project')

@section('content')
    <h1>Nieuw Project</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf

        <label for="title">Titel:</label>
        <input type="text" name="title" value="{{ old('title') }}" required>

        <label for="onderdeel">Onderdeel:</label>
        <input type="text" name="onderdeel" value="{{ old('onderdeel') }}" required>

        <!-- Meer formulierelementen hier -->

        <button type="submit">Opslaan</button>
    </form>
@endsection