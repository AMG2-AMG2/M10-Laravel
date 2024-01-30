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
        return view('dashboard.index', compact('projects'));
    }


    // Hij geeft 1 project weer
    public function show(Project $project)
{
    return view('dashboard.show', ['project' => $project]);
}

    // Formulier maken voor de nieuwe project
    public function create()
{
    return view('dashboard.create');
}

    // Opslaan van een nieuw project
    public function store(Request $request)
    {
        // Valideer de input
        $valid_data = $request->validate([
            'titel'      => 'required|unique:projects|max:255',
            'beschrijving'  => 'required',
        ]);
        // Maak de nieuwe project aan met gegevens die al ingevoerd zijn
        $project = new Project($valid_data);
        
        $project->save();
        
        // leid naar de projectweergave
        return redirect()->route('projects.index')->with('success', 'Project succesvol toegevoegd!');
    }



    // Formulier voor het bewerken van een project
    public function edit(Project $project)
{
    return view('dashboard.edit', ['project' => $project]);
}

    // Updaten van een project
    public function update(Request $request, Project $project)
    {
        // Valideer de input
        $valid_data = $this->validateProject($request, $project);

        // Update het project met de gevalideerde data
        $project->update($valid_data);

        // leid naar de projectweergave
        return redirect(route('projects.show', $project->id));
    }

    // Validderenfucctie toevoegen
    private function validateProject(Request $request, Project $project)
    {
        return $request->validate([
            'titel'       => 'required|max:255|unique:projects,id,' . $project->id,
            'beschrijving'       => 'required',
            'active'      => 'nullable',
        ]);
    }

    // Verwijderen van een project
    public function destroy(Project $project)
    {
        $project->delete();
    
        // leid naar de projectindex
        return redirect(route('projects.index'))->with('alert', 'Het item ' . $project->title . ' is nu verwijderd.');
    }
}
