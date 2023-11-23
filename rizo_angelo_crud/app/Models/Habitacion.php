<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;
    protected $table = 'habitaciones';

    protected $fillable = [
        'id',
        'id_habitacion',
        'nombre_tipo',
        'precio',
        'estado',
        'cantidad_personas',
    ];

    public static $rules=[
        'id',
        'id_habitacion',
        'nombre_tipo',
        'precio',
        'estado',
        'cantidad_personas',
    ];
}
