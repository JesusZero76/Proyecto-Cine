<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula_BoletoModel extends Model
{
    public $timestamps=false;
    protected $table='pelicula_boleto'; 
       
    protected $fillable = [
        'id_pelicula_boleto',
        'id_pelicula',
        'id_boleto',
    ];
}
