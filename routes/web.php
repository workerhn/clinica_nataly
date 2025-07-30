<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagoController;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    // otras rutas...
    Route::resource('citas', CitaController::class);
});

Route::middleware('auth')->group(function () {
    // Otras rutas...
    Route::resource('doctores', DoctorController::class);
});
Route::resource('pacientes', PacienteController::class)->middleware('auth');
require __DIR__.'/auth.php';

Route::resource('pagos', App\Http\Controllers\PagoController::class);