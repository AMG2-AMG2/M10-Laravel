<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    // Methode om de home-weergave te tonen
    public function index()
    {
        // Toon de 'home'-weergave (view)
        return view('home');
    }
}
