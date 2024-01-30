<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectAdminController;

require __DIR__ . '/auth.php';

// Normale routes
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about/{name}', [AboutController::class, 'show'])->name('about.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/users', [UserController::class, 'listUsers'])->name('users.list');

// Project routes
Route::get('/projects/add', [ProjectController::class, 'add'])->name('project.add');
Route::get('/projects/list', [ProjectController::class, 'showList'])->name('project.list');
Route::get('/project/{project}', [ProjectController::class, 'show'])->name('project.show');


// Admin routes
Route::prefix('/dashboard')
    ->middleware(['auth', 'verified'])
    ->group(function () {
        Route::get('/', [ProjectAdminController::class, 'index'])->name('dashboard.projects.index');
        // Voeg andere CRUD-routes toe indien nodig
        Route::resources(['projects'=> ProjectAdminController::class]);
         // Admin Projects
    });     