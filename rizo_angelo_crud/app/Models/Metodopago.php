<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metodopago extends Model
{
    use HasFactory;
    protected $table = 'users';

    protected $fillable = [
        'id',
        'nombre_tipo',
        'precio_dia',
    ];

    public static $rules=[
        'id',
        'nombre_tipo',
        'precio_dia',
    ];
}
