<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;


class ProjectAdminController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(10);
        return view('dashboard.projects.index', compact('projects'));
    }


    // Hij geeft 1 project weer
    public function show(Project $project)
    {
        return view('projects.show', ['project' => $project]);
    }

    // Formulier maken voor de nieuwe project
    public function create()
    {
        return view('projects.create');
    }

    // Opslaan van een nieuw project
    public function store(Request $request)
    {
        // Valideren van de formuliergegevens
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Maak de nieuwe project aan met gegevens die al ingevoerd zijn
        $project = Project::create($validatedData);

        // leid naar de projectweergave
        return redirect()->route('project.show', $project);
    }

    // Formulier voor het bewerken van een project
    public function edit(Project $project)
    {
        return view('projects.edit', ['project' => $project]);
    }

    // Updaten van een project
    public function update(Request $request, Project $project)
    {
        // Valideer het formuliergegevens
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Werk het project bij met de ingevoerde gegevens
        $project->update($validatedData);

        // leid naar de projectweergave
        return redirect()->route('project.show', $project);
    }

    // Verwijderen van een project
    public function destroy(Project $project)
    {
        // Verwijder het project
        $project->delete();

        // leid naar de projectindex
        return redirect()->route('project.index');
    }
}
