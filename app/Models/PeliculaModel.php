<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeliculaModel extends Model
{
    public $timestamps=false;
    protected $table='pelicula'; 

    protected $fillable = [
        
        'fecha_pelicula',
        'hora_pelicula',
        'nombre_pelicula',
        'genero',
        'resumen',
        'precio',
    ];
}
