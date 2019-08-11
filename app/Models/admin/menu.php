<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table = 'menu';
    protected $fillable = ['nombre', 'url', 'icono'];
    protected $guarded = ['id'];
}
