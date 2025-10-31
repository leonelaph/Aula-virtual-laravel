<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'capacidad', 'ubicacion'];

    public function disponibilidades()
    {
        return $this->hasMany(Disponibilidad::class);
    }
}
