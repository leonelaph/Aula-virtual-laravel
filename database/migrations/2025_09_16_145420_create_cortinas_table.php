<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cortinas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aula_id')->constrained()->onDelete('cascade');
            $table->boolean('automatica')->default(false);
            $table->enum('estado', ['abierta', 'cerrada', 'media'])->default('cerrada');
            $table->integer('nivel_apertura')->default(0); // 0-100%
            $table->boolean('modo_automatico')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cortinas');
    }
};