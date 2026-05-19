<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Licenciatura extends Model
{
    protected $table = 'licenciaturas';
    protected $fillable = [
        'imagen',
        'titulo',
        'descripcion'
    ];
}
