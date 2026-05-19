<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Models\Apartado;
use App\Models\Docente;
use App\Models\Convocatoria;

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
    $servicios = \App\Models\EstudiantesServicio::all();
    return view('estudiante', compact('apartados', 'servicios'));
})->name('estudiante');

Route::get('/docente', function () {
    $apartados = \App\Models\Apartado::all();
    $docentes = \App\Models\Docente::paginate(10); 
    return view('docente', compact('apartados', 'docentes')); 
})->name('docente');

Route::get('/egresados', [PrincipalController::class, 'egresados'])->name('egresados');

Route::get('/vinculacion', function () {
    $apartados = Apartado::all();
    return view('vinculacion', compact('apartados'));
})->name('vinculacion');


Route::get('/oferta', [PrincipalController::class, 'oferta'])->name('oferta');

Route::get('/nuestrafacultad', function () {
    $apartados = Apartado::all();
    return view('nuestrafacultad', compact('apartados'));
})->name('nuestrafacultad');

Route::get('/convocatorias', function () {
    $convocatorias = Convocatoria::all();
    $apartados = Apartado::all();
    return view('convocatorias', compact('convocatorias', 'apartados'));
})->name('convocatorias');

Route::get('/calendario', [PrincipalController::class, 'calendario'
])->name('calendario');

