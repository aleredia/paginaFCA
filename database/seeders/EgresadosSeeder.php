<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Generacion;
use App\Models\EgresadoDestacado;

class EgresadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Generacion::create(['titulo' => 'Generación XCVIII', 'subtitulo' => 'Egresados de los programas de Licenciatura.', 'imagen' => 'img/gen1.png']);
        Generacion::create(['titulo' => 'Generación XLV', 'subtitulo' => 'Egresados de los programas de Licenciatura.', 'imagen' => 'img/gen2.png']);
        Generacion::create(['titulo' => 'Generación XXXI', 'subtitulo' => 'Egresados de los programas de Licenciatura.', 'imagen' => 'img/gen3.png']);
        Generacion::create(['titulo' => 'Generación XII', 'subtitulo' => 'Egresados de los programas de Licenciatura.', 'imagen' => 'img/gen4.png']);
        
        EgresadoDestacado::create([
            'nombre' => 'ALAN JAIR CHÍ MONTALVO',
            'imagen' => 'img/e2.jpg',
            'tipo' => 'licenciatura',
            'badge_texto' => 'Generación XLV',
            'programa' => 'Mercadotecnia y Negocios Internacionales',
            'promedio' => 97.33
        ]);

        EgresadoDestacado::create([
            'nombre' => 'JOSÉ CARLOS PIÑA TORRES',
            'imagen' => 'img/e4.jpg',
            'tipo' => 'licenciatura',
            'badge_texto' => 'Generación XXXI',
            'programa' => 'Administración de Tecnologías de la Información',
            'promedio' => 92.50
        ]);

        EgresadoDestacado::create([
            'nombre' => 'LISSIE BEATRIZ CALDERÓN ALCOCER',
            'imagen' => 'img/e3.jpg',
            'tipo' => 'licenciatura',
            'badge_texto' => 'Generación XCVIII',
            'programa' => 'Contaduría Pública',
            'promedio' => 97.77
        ]);

        EgresadoDestacado::create([
            'nombre' => 'SALMA DEL PILAR TEJERO GAMBOA',
            'imagen' => 'img/e5.jpg',
            'tipo' => 'licenciatura',
            'badge_texto' => 'Generación XII',
            'programa' => 'Administración',
            'promedio' => 94.50
        ]);

        // Egresados de Maestría
        EgresadoDestacado::create([
            'nombre' => 'Luis Pérez Gil Menéndez',
            'prefijo_profesional' => 'LIC. EN NEG. INTERN.',
            'imagen' => 'img/e6.jpg',
            'tipo' => 'maestria',
            'badge_texto' => 'MAESTRÍA EN FINANZAS: Generación XXIII',
            'programa' => 'Maestría en Finanzas',
            'promedio' => 98.44
        ]);

        EgresadoDestacado::create([
            'nombre' => 'Guillermo Josue Chanona Magaña',
            'prefijo_profesional' => 'LIC.CIENCIAS POLIT. Y REL. INTERN.',
            'imagen' => 'img/e7.jpg',
            'tipo' => 'maestria',
            'badge_texto' => 'MAESTRÍA GESTIÓN DE LA MERCADOTECNIA: Generación XIII',
            'programa' => 'Maestría en Gestión de la Mercadotecnia',
            'promedio' => 97.58
        ]);

        EgresadoDestacado::create([
            'nombre' => 'Ariadna Jaqueline Martínez Baas',
            'prefijo_profesional' => 'Contadora Publica',
            'imagen' => 'img/e8.jpg',
            'tipo' => 'maestria',
            'badge_texto' => 'MAESTRÍA EN ADMINISTRACIÓN TRIBUTARIA: Generación XXII',
            'programa' => 'Maestría en Administración Tributaria',
            'promedio' => 97.73
        ]);
    }
}
