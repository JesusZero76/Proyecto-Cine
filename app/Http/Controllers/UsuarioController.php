<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UsuarioModel;
use App\Models\PersonaModel;
use App\Models\TipoModel;

class UsuarioController extends Controller
{
    public function registro_usuario_persona(){
        $tipos['tipos']=TipoModel::all();
        return view('adminUsuario.registrarUsuario', $tipos);
    }

    public function guardar_usuario_persona(Request $request){ 
        $persona=new PersonaModel();
        
        $usuario=new UsuarioModel();
        $persona->nombre= $request->nombre;
        $persona->apellido= $request->apellido;
        $persona->cedula= $request->cedula;
        $persona->direccion= $request->direccion;
        $persona->id_tipo= $request->id_tipo;
        $persona->save();
        $usuario->nombre_usuario= $request->nombre_usuario;
        $usuario->password= $request->password;
        $usuario->id_persona= $request->id_persona;

        $usuario->save();
        return back()->with('usuarioGuardado','Usuario guardado');
        
    }
}
