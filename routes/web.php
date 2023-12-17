<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;



Route::get('/', function () {
    return view('home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about/{name}', [AboutController::class, 'show']);
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit']);
Route::get('/users', [UserController::class, 'listUsers'])->name('users.list');
Route::get('/projects/add', [ProjectController::class, 'add'])->name('project.add');
