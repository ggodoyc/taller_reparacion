<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'marca_id',
        'tipo',
        'modelo',
        'numero_serie',
        'fecha_recepcion',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
}
