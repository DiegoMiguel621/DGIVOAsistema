<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visitas extends Model
{
    use HasFactory;

    // Especificar la tabla asociada
    protected $table = 'visita';

    // Permitir campos para asignación masiva
    protected $fillable = [
        'fecha',
        'dependencia',
        'nombreVisita',
        'asunto',
        'observaciones',
        'telefono',
        'horaIngreso',
        'horaSalida',
        'nomAtendio',
        'municipio',
    ];
}
