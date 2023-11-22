<?php

namespace App\Models;

use App\Models\Roles;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return  $this->belongsTo(Roles::class,'id_roles','id');
    }
}
