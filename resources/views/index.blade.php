<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
</head>
<body>
    <h1>Project</h1>

    <ul>
        @forelse ($projects as $project)
            <li>
                <a href="{{ route('projects.show', $project->id) }}">
                    {{ $project->titel }}
                </a>
                - {{ $project->beschrijving }} (Active: {{ $project->active ? 'Yes' : 'No' }})
            </li>
        @empty
            <li>No projects available</li>
        @endforelse
    </ul>
</body>
</html>
