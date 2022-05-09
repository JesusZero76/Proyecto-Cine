<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoletoModel extends Model
{
    public $timestamps=false;
    protected $table='boleto'; 
       
    protected $fillable = [
        'id_boleto',
        'boleto_disponible',
    ];
}
