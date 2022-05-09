<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula_BoletoModel;

class Pelicula_BoletoController extends Controller
{
    public function guardar_pelicula_boleto(Request $request){
        $pelicula_boleto= new Pelicula_BoletoModel();
        $pelicula_boleto->id_pelicula_boleto= $request->id_pelicula_boleto;
        $pelicula_boleto->id_pelicula= $request->id_pelicula;
        $pelicula_boleto->id_boleto= $request->id_boleto;

        $pelicula_boleto->save();
        return back()->with('peliculaGuardado','Pelicula Guardada');
    }
}
