<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
    public $timestamps=false;
    protected $table='usuario'; 
       
    protected $fillable = [
        'id_usuario',
        'nombre_usuario',
        'password',
        'id_persona',
    ];
}
