<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('disponibilidades', function (Blueprint $table) {
            $table->id();
            
            // Relación con docentes y aulas (si existen en tu proyecto)
            $table->foreignId('docente_id')->constrained()->onDelete('cascade');
            $table->foreignId('aula_id')->constrained()->onDelete('cascade');

            // Día de la semana (lunes, martes, etc.)
            $table->string('dia');

            // Horario disponible
            $table->time('hora_inicio');
            $table->time('hora_fin');

            // Estado de la disponibilidad
            $table->enum('estado', ['disponible', 'ocupado'])->default('disponible');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('disponibilidades');
    }
};
