<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//ruta protegida --> Middleware
Route::get("", [HomeController::class, 'index'])
    ->name('alumnos')
    ->middleware('auth');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::view("about", "about");
Route::view("noticias", "noticias");
require __DIR__.'/auth.php';

Route::fallback(function () {
    return "<h1>Ruta no encontrada</h1>";
}); 

