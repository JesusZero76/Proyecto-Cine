<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BoletoModel;

class BoletoController extends Controller
{
    public function guardar_boleto(Request $request){
        $boleto=new BoletoModel();
        $boleto->id_boleto= $request->id_boleto;
        $boleto->boleto_disponible= $request->boleto_dispobible;
        
        $boleto->save();
        return back()->with('personaGuardado','Persona guardada');
    }
}
