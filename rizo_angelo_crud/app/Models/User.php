<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
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

    protected $rules=[
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

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
