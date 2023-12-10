<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Andere routes kunnen hier worden toegevoegd...