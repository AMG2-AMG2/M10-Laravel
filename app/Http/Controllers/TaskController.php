<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);

        return view('tasks.show', ['task' => $task]);
    }
}
