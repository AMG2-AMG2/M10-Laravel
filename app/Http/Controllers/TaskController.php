<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // Toon alle taken
    public function index()
    {
        // Haal alle taken op uit de database
        $tasks = Task::all();

        // Geef de taken door aan de weergave (view)
        return view('tasks.index', ['tasks' => $tasks]);
    }

    // Toon een specifieke taak op basis van ID
    public function show($id)
    {
        // Zoek een taak op basis van het gegeven ID
        $task = Task::findOrFail($id);

        // Geef de specifieke taak door aan de weergave (view)
        return view('tasks.show', ['task' => $task]);
    }
}
