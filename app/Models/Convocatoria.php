<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    protected $table = 'convocatorias';

    protected $fillable = [
        'nombre',
        'inicio',
        'cierre',
        'tipo'
    ];
}
