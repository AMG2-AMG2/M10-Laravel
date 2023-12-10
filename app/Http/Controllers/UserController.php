<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function listUsers()
    {
        $users = User::all();

        return view('users.list', compact('users'));
    }
}
