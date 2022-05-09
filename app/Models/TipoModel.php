<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoModel extends Model
{
    public $timestamps=false;
    protected $table='tipo'; 

    protected $fillable = [
        'id_tipo',
        'nombre_tipo',

    ];
}
