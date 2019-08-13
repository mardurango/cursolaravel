<?php

namespace App\Models\seguridad;

use Illuminate\Foundation\Auth\User as Authenticatable;

class usuario extends Authenticatable 
{
    protected $remember_token = false;
    protected $table = 'usuario';
    protected $fillable = ['usuario', 'nombre', 'password'];
    protected $guarded = ['id'];
}
