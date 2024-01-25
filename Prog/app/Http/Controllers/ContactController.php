<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Methode om de contact-weergave te tonen
    public function index()
    {
        return view('contact');
    }

    // Methode om het formulier te versturen
    public function submit(Request $request)
    {
        // Verwerk de ingediende formuliergegevens (in dit geval wordt er niets verwerkt)
        
        // Stuur door naar de 'contact'-weergave met een succesmelding
        return redirect()->route('contact')->with('success', 'Formulier verstuurd.');
    }
}
