<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       Schema::create('egresados_destacados', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');       
        $table->string('imagen');      
        $table->string('tipo');
        $table->string('badge_texto');
        $table->string('programa');
        $table->decimal('promedio', 4, 2);
        $table->string('prefijo_profesional')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('egresado_destacados');
    }
};
