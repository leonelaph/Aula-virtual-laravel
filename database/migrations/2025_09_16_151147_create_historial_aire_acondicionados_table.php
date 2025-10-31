<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('historial_aire_acondicionados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aire_acondicionado_id')->constrained()->onDelete('cascade');
            $table->boolean('encendido');
            $table->decimal('temperatura', 3, 1);
            $table->enum('modo', ['frio', 'calor', 'ventilador']);
            $table->integer('velocidad_ventilador');
            $table->decimal('consumo_energia', 8, 2)->default(0);
            $table->timestamp('fecha_registro')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('historial_aire_acondicionados');
    }
};