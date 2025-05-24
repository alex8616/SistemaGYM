<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('general.principal');
});

Route::get('/cliente', [CategoriaController::class, 'Cliente']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


///general
Route::get('/full-categorias', [CategoriaController::class, 'categoriafull']);

require __DIR__.'/auth.php';
