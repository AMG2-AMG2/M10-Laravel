<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; 

class ProjectController extends Controller
{
    public function display(Project $project = null)
    {
        if ($project) {
            return view('project.show', ['project' => $project]);
        } else {
            $projects = Project::all();
            return view('project.index', ['projects' => $projects]);
        }
    }

    public function add()
    {
        $project = new Project();

        $project->field_one = 'Mijn data';

        $project->save();

        return redirect()->route('projects.display');
    }
}   