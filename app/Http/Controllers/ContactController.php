<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {

        return redirect()->route('contact')->with('success', 'Formulier verstuurd.');
    }
}