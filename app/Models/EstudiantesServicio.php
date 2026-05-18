<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstudiantesServicio extends Model
{
    protected $table = 'estudiantes_servicios';

    protected $fillable = [
        'nombre',
        'descripcion',
        'contacto',
        'correo',
        'puesto',
        'img_cont',
        'img_serv'
    ];
}
