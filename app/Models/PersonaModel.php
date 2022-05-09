<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonaModel extends Model
{
    public $timestamps=false;
    protected $table='persona'; 

    protected $fillable = [
        'id_persona',
        'nombre',
        'apellido',
        'cedula',
        'direccion',
        'id_tipo',
    ];
}
