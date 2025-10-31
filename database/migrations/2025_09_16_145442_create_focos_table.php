<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('focos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aula_id')->constrained()->onDelete('cascade');
            $table->string('ubicacion'); // Techo, Pared frontal, Pared trasera, etc.
            $table->boolean('encendido')->default(false);
            $table->integer('intensidad')->default(100); // 0-100%
            $table->string('color')->default('blanco');
            $table->boolean('automatico')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('focos');
    }
};