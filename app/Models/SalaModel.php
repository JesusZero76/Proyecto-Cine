<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaModel extends Model
{
    public $timestamps=false;
    protected $table='sala'; 
       
    protected $fillable = [
        'id_sala',
        'nombre_sala',
        'numero_butacas',
        'id_pelicula',
    ];
}
