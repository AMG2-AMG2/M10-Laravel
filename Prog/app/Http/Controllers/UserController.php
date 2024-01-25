<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    // Methode om alle gebruikers op te halen en weer te geven
    public function listUsers()
    {
        // Haal alle gebruikers op uit de database met behulp van het User-model
        $users = User::all();

        // Geef de gebruikers door aan de 'users.list'-weergave (view)
        return view('users.list', compact('users'));
    }
}
