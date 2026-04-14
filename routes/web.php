<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Models\Apartado;

Route::get('/', [PrincipalController::class, 'principal'])->name('inicio');


Route::get('/inicio', function () {
    $apartados = Apartado::all();
    return view('inicio', compact('apartados'));
})->name('inicio');

Route::get('/aspirante', function () {
    $apartados = Apartado::all();
    return view('aspirante', compact('apartados'));
})->name('aspirante');

Route::get('/estudiante', function () {
    $apartados = Apartado::all();
    return view('estudiante', compact('apartados'));
})->name('estudiante');

Route::get('/docente', function () {
    $apartados = Apartado::all();
    return view('docente', compact('apartados'));
})->name('docente');