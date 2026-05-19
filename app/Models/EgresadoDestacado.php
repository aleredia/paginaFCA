<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EgresadoDestacado extends Model
{
   protected $table = 'egresados_destacados';

    protected $fillable = [
        'nombre',
        'imagen',
        'tipo',
        'badge_texto', 
        'programa',
        'promedio',
        'prefijo_profesional',
    ];
}
