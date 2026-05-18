<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Models\Apartado;
use App\Models\Docente;

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
    $apartados = \App\Models\Apartado::all();
   // $docentes = \App\Models\Docente::paginate(10); 
    return view('docente', compact('apartados', 'docentes')); 
})->name('docente');

Route::get('/egresados', function () {
    $apartados = Apartado::all();
    return view('egresados', compact('apartados'));
})->name('egresados');

Route::get('/investigacion', function () {
    $apartados = Apartado::all();
    return view('investigacion', compact('apartados'));
})->name('investigacion');

Route::get('/vinculacion', function () {
    $apartados = Apartado::all();
    return view('vinculacion', compact('apartados'));
})->name('vinculacion');

Route::get('/internalizacion', function () {
    $apartados = Apartado::all();
    return view('internalizacion', compact('apartados'));
})->name('internalizacion');

Route::get('/oferta', function () {
    $apartados = Apartado::all();
    return view('oferta', compact('apartados'));
})->name('oferta');

Route::get('/nuestrafacultad', function () {
    $apartados = Apartado::all();
    return view('nuestrafacultad', compact('apartados'));
})->name('nuestrafacultad');
