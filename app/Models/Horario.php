<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $fillable = ['dia', 'hora_inicio', 'hora_fin'];

    // Relación: un horario puede tener varias reservas
    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}
