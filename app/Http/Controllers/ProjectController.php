<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; // voeg je Eloquent Model toe

class ProjectController extends Controller
{
    public function add()
    {
        // maak een nieuw model aan
        $project = new Project();

        // definieer de velden
        $project->field_one = 'Mijn data';

        // sla het model op
        $project->save();

        // optioneel: haal alle projecten op en geef ze door aan de view
        $projects = Project::all();

        return view('projects.index', ['projects' => $projects]);
    }
}
