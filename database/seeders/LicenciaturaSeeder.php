<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Licenciatura;

class LicenciaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Licenciatura::create([
        'imagen' => 'img/conta.png',
        'titulo' => 'Licenciatura en Contador Público',
        'descripcion' => 'Forma profesionistas en contabilidad, auditoría y gestión financiera para la toma de decisiones y cumplimiento empresarial.'
    ]);

    Licenciatura::create([
        'imagen' => 'img/merca.png',
        'titulo' => 'Licenciatura en Mercadotecnia y Negocios Internacionales',
        'descripcion' => 'Forma profesionales innovadores en mercadotecnia y estrategias digitales para fortalecer la competitividad empresarial.'
    ]);

    Licenciatura::create([
        'imagen' => 'img/lati.png',
        'titulo' => 'Licenciatura en Administración de Tecnologías de Información',
        'descripcion' => 'Forma profesionales en tecnologías de la información capaces de desarrollar soluciones innovadoras y optimizar procesos organizacionales.'
    ]);

    Licenciatura::create([
        'imagen' => 'img/admin.png',
        'titulo' => 'Licenciatura en Administración',
        'descripcion' => 'Forma profesionales en administración y mercadotecnia capaces de liderar organizaciones y fortalecer su competitividad.'
    ]);
    }
}
