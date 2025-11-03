<?php

namespace Database\Seeders;

use App\Models\Aula;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AulaSeeder extends Seeder
{
    public function run()
    {
        // Limpiar la tabla primero
        DB::table('aulas')->delete();

        $aulas = [
            [
                'nombre' => 'Aula 101',
                'ubicacion' => 'Edificio Principal - Primer Piso',
                'capacidad' => 30,
                'descripcion' => null, // Mantener como null
                'estado' => null,      // Mantener como null  
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Laboratorio de Ciencias',
                'ubicacion' => 'Edificio de Ciencias - Planta Baja',
                'capacidad' => 25,
                'descripcion' => null,
                'estado' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Sala de Informática',
                'ubicacion' => 'Edificio Tecnológico - Segundo Piso',
                'capacidad' => 20,
                'descripcion' => null,
                'estado' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Aula Magna',
                'ubicacion' => 'Edificio Central - Auditorio',
                'capacidad' => 100,
                'descripcion' => null,
                'estado' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('aulas')->insert($aulas);
        
        $this->command->info('Se crearon ' . count($aulas) . ' aulas exitosamente.');
    }
}