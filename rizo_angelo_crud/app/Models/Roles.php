<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $fillable = [
        'role_nombre',
        'description',
    ];
    public static $rules=[
        'role_nombre',
        'description',
    ];
    public function users(){
        return $this-> hasMany(User::class, 'id_roles', 'id');
    }
}
