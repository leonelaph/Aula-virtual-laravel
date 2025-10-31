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
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique(); // Código único de la materia
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->integer('creditos');
            $table->string('carrera'); // Ingeniería, Medicina, etc.
            $table->integer('semestre'); // 1, 2, 3, etc.
            $table->boolean('estado')->default(true); // Activa o inactiva
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};