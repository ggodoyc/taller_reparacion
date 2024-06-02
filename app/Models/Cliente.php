<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'telefono',
        'email',
        'direccion',
    ];

    // Relación con el modelo Equipo
    public function equipos()
    {
        return $this->hasMany(Equipo::class);
    }
}
