<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('aire_acondicionados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aula_id')->constrained()->onDelete('cascade');
            $table->boolean('encendido')->default(false);
            $table->decimal('temperatura', 3, 1)->default(22.0); // 16.0 - 30.0
            $table->enum('modo', ['frio', 'calor', 'ventilador'])->default('frio');
            $table->integer('velocidad_ventilador')->default(2); // 1-3
            $table->boolean('automatico')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('aire_acondicionados');
    }
};