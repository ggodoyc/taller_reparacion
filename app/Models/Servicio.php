<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'equipo_id',
        'tecnico_id',
        'estado',
        'diagnostico',
        'solucion',
        'fecha_inicio',
        'fecha_fin',
    ];

    /**
     * Get the cliente that owns the servicio.
     */
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    /**
     * Get the equipo that owns the servicio.
     */
    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

    /**
     * Get the tecnico that owns the servicio.
     */
    public function tecnico()
    {
        return $this->belongsTo(Tecnico::class);
    }
}
