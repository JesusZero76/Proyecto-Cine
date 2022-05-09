<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta_BoletoModel extends Model
{
    public $timestamps=false;
    protected $table='venta_boleto'; 
       
    protected $fillable = [
        'id_venta_boleto',
        'boleto_vendido',
        'fecha_venta_boleto',
        'id_persona',
        'id_usuario',
        'id_boleto',
        'id_sala',

    ];
}