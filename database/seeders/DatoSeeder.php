<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Apartado;

class DatoSeeder extends Seeder
{
    public function run(): void
    {
        Apartado::insert([
            [
                'nombre' => 'Servicios en línea',
                'ruta' => 'aspirante',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Correo',
                'ruta' => 'aspirante',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Calendario',
                'ruta' => 'aspirante',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Personal',
                'ruta' => 'aspirante',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Protocolo de género',
                'ruta' => 'aspirante',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Inicio',
                'ruta' => 'inicio',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Aspirantes',
                'ruta' => 'aspirante',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Estudiantes',
                'ruta' => 'estudiante',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Docentes',
                'ruta' => 'docente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Egresados',
                'ruta' => 'aspirante',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Nuestra facultad',
                'ruta' => 'aspirante',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Oferta educativa',
                'ruta' => 'aspirante',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Investigación',
                'ruta' => 'aspirante',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Vinculación',
                'ruta' => 'aspirante',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Internacionalización',
                'ruta' => 'aspirante',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
