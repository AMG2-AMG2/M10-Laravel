<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        return view('projects.index', ['projects' => $projects]);
    }

    
    // Toon een enkel project of alle projecten
    public function display(Project $project = null)
    {
        // Als er een specifiek project is opgegeven, laat dat project zien
        if ($project) {
            return view('project.show', ['project' => $project]);
        } else {
            // zo niet toon alle projecten
            $projects = Project::all();
            return view('project.index', ['projects' => $projects]);
        }
    }



    // Voeg een nieuw project toe
    // Maak een nieuw project aan
    // Vul een veld in met voorbeeldgegevens
    // Sla het project op
    // Verwijs door naar de weergavepagina
    public function add()
    {
        $project = new Project();

        $project->field_one = 'Mijn data';

        $project->save();

        return redirect()->route('projects.display');
    }

    // laat het formulier zien voor het maken van een nieuw project
    public function create()
    {
        return view('projects.create');
    }



    public function showList()
    {
        // Voeg hier de logica toe voor het weergeven van de lijst van projecten
        return view('list'); // We gaan ervan uit dat 'projects.list' het juiste pad is naar het Blade-bestand
    }
}
