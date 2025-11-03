<?php

use Illuminate\Support\Facades\Route;

// Controladores
use App\Http\Controllers\AulaController;
use App\Http\Controllers\FocoController;
use App\Http\Controllers\AireAcondicionadoController;
use App\Http\Controllers\HistorialFocoController;
use App\Http\Controllers\HistorialAireController;
use App\Http\Controllers\DisponibilidadController;


// Página de inicio: redirige a aulas
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Rutas resource para cada módulo
Route::resource('aulas', AulaController::class);
Route::resource('focos', FocoController::class);
Route::resource('aires', AireAcondicionadoController::class);
Route::resource('historial-focos', HistorialFocoController::class);
Route::resource('historial-aires', HistorialAireController::class);
Route::resource('disponibilidades', DisponibilidadController::class);



// Rutas para Aulas
Route::resource('aulas', AulaController::class);

// Ruta adicional para cambiar disponibilidad
Route::patch('/aulas/{aula}/cambiar-disponibilidad', [AulaController::class, 'cambiarDisponibilidad'])
    ->name('aulas.cambiar-disponibilidad');

// Ruta API para aulas disponibles
Route::get('/api/aulas-disponibles', [AulaController::class, 'apiAulasDisponibles'])
    ->name('api.aulas.disponibles'); 


