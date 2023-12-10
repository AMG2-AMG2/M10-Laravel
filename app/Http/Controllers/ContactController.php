<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Voeg hier de logica toe voor het verwerken van het formulier

        return view('contact');
    }
}
