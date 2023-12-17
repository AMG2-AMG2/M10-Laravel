
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project lijst</title>
</head>
<body>
    <h1>project lijst</h1>

    <ul>
        @foreach ($projects as $project)
            <li>{{ $project->field_one }}</li>
        @endforeach
    </ul>
</body>
</html>
