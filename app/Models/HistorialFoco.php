<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialFoco extends Model
{
    use HasFactory;

    // Campos que se pueden llenar con create() o update()
    protected $fillable = ['foco_id', 'fecha', 'estado'];

    // Relación con el modelo Foco
    public function foco()
    {
        return $this->belongsTo(Foco::class);
    }
}

