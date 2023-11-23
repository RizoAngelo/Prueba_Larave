<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table = 'reservas';

    protected $fillable = [
        'id',
        'id_reservas',
        'documento',
        'id_habitacion',
        'cantidad_personas',
        'fecha_inicio',
        'fecha_final',
        'dias',
        'cantidad_personas',
    ];

    public static $rules=[
        'id',
        'id_reservas',
        'documento',
        'id_habitacion',
        'cantidad_personas',
        'fecha_inicio',
        'fecha_final',
        'dias',
        'cantidad_personas',
    ];
}
