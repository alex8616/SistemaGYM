<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('general.principal');
});

Route::get('/cliente', [ClienteController::class, 'Cliente'])->name('cliente.principal');
Route::get('/horario', [ClienteController::class, 'Horario'])->name('cliente.horario');
Route::get('/perfil', [ClienteController::class, 'Perfil'])->name('cliente.perfil');
Route::get('/pagos', [ClienteController::class, 'Pagos'])->name('cliente.pagos');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


///general
Route::get('/full-categorias', [CategoriaController::class, 'categoriafull']);

require __DIR__.'/auth.php';
