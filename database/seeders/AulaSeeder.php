<?php

namespace Database\Seeders;

use App\Models\Aula;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AulaSeeder extends Seeder
{
    public function run()
    {
        if (Aula::count() === 0) {
            $aulas = [
                [
                    'nombre' => 'Aula 101',
                    'ubicacion' => 'Edificio Principal - Primer Piso',
                    'capacidad' => 30,
                    'descripcion' => 'Aula estándar equipada con pizarra y proyector',
                    'estado' => 'disponible',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Laboratorio de Ciencias',
                    'ubicacion' => 'Edificio de Ciencias - Planta Baja',
                    'capacidad' => 25,
                    'descripcion' => 'Laboratorio equipado para prácticas de ciencias',
                    'estado' => 'disponible',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Sala de Informática',
                    'ubicacion' => 'Edificio Tecnológico - Segundo Piso',
                    'capacidad' => 20,
                    'descripcion' => 'Sala con equipos de computación para clases de informática',
                    'estado' => 'disponible',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Aula Magna',
                    'ubicacion' => 'Edificio Central - Auditorio',
                    'capacidad' => 100,
                    'descripcion' => 'Espacio para eventos especiales y conferencias',
                    'estado' => 'mantenimiento',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Aula 102',
                    'ubicacion' => 'Edificio Principal - Primer Piso',
                    'capacidad' => 35,
                    'descripcion' => 'Aula multimedia con sistema de audio',
                    'estado' => 'disponible',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Taller de Arte',
                    'ubicacion' => 'Edificio Cultural - Planta Baja',
                    'capacidad' => 15,
                    'descripcion' => 'Espacio para clases de arte y manualidades',
                    'estado' => 'disponible',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ];

            DB::table('aulas')->insert($aulas);
            
            $this->command->info('Se crearon ' . count($aulas) . ' aulas exitosamente.');
        } else {
            $this->command->info('Ya existen aulas en la base de datos.');
        }
    }
}