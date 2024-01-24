<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Aanmaken</title>
</head>
<body>
    <h2>Project Aanmaken</h2>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('projects.store') }}">
        @csrf

        <label for="title">Titel:</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required>

        <label for="description">Omschrijving:</label>
        <textarea id="description" name="description" required>{{ old('description') }}</textarea>

        <button type="submit">Project Aanmaken</button>
    </form>
</body>
</html>
