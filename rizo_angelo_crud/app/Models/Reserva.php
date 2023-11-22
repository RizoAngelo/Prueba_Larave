<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table = 'users';

    protected $fillable = [
        'id',
        'documento',
        'tipo_documento',
        'nombre',
        'primer_apellido',
        'segundo_apellido',
        'telefono',
        'email',
        'password',
        'id_roles',
    ];

    public static $rules=[
        'id',
        'documento',
        'tipo_documento',
        'nombre',
        'primer_apellido',
        'segundo_apellido',
        'telefono',
        'email',
        'password',
        'id_roles',
    ];
}
