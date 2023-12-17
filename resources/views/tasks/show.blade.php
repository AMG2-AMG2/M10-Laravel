<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Model</title>
</head>
<body>
    <h1>Task Model</h1>

    @if ($project)
        <h2>{{ $project->field_one }}</h2>
        <p>{{ $project->description }}</p>

        <h3>Tasks</h3>
        <ul>
            @forelse ($project->tasks as $task)
                <li>
                    <a href="{{ route('tasks.show', $task->id) }}">
                        {{ $task->name }}
                    </a>
                </li>
            @empty
                <li>No tasks for this project</li>
            @endforelse
        </ul>
    @else
        <p>Project not found</p>
    @endif
</body>
</html>
