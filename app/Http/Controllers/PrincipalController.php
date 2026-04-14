<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\Apartado;
use App\Models\Curso;
use App\Models\Convocatoria;
use App\Models\Aviso; 

class PrincipalController extends Controller
{
    public function principal()
    {
        $apartados = Apartado::all();

        $evento1 = Evento::find(1);
        $evento2 = Evento::find(2);
        $evento3 = Evento::find(3);
        $evento4 = Evento::find(4);
        $evento5 = Evento::find(5);
        $evento6 = Evento::find(6);
        $evento7 = Evento::find(7);

        $curso1 = Curso::find(1);
        $curso2 = Curso::find(2);
        $curso3 = Curso::find(3);
        $curso4 = Curso::find(4);
        $curso5 = Curso::find(5);

        $convocatorias = Convocatoria::all();

        $avisos = Aviso::all();

        return view('principal', compact('evento1','evento2','evento3','evento4','evento5','evento6','evento7','apartados', 'curso1','curso2','curso3','curso4','curso5','convocatorias','avisos'));
        
    }
}
