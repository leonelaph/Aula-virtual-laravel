<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'email', 'materia_id'];

    // Relación: un docente puede impartir una materia
    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }

    // Relación: un docente puede tener varias disponibilidades
    public function disponibilidades()
    {
        return $this->hasMany(Disponibilidad::class);
    }
}
