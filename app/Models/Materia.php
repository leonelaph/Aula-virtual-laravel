<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'codigo'];

    // Relación: una materia puede tener varias disponibilidades
    public function disponibilidades()
    {
        return $this->hasMany(Disponibilidad::class);
    }
}

