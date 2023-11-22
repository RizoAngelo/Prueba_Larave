<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $table = 'users';

    protected $fillable = [
        'id',
        'documento',
        'salario',
        'password',
    ];

    public static $rules=[
        'id',
        'documento',
        'salario',
        'password',
    ];
}
