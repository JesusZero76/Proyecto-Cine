<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonaModel;
use App\Models\TipoModel;


class PersonaController extends Controller
{
    public function registro_persona(){
        $tipos['tipos']=TipoModel::all();
        return view('adminPersona.personaRegistrar', $tipos);
    }

    public function guardar_persona(Request $request){

        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula' => 'required',
            'direccion' => 'required' 
        ]);

        $persona=new PersonaModel();
        $persona->nombre= $request->nombre;
        $persona->apellido= $request->apellido;
        $persona->cedula= $request->cedula;
        $persona->direccion= $request->direccion;
        $persona->id_tipo= $request->id_tipo;
        
        $persona->save();
        return back()->with('personaGuardado','Persona guardada');
    }
    
  
    public function listar_cliente(){
        $data['user_cliente']=PersonaModel::all();
        return view('adminPersona.personaListar',$data);
    }

    public function modificarr($id){
        $user_cliente= PersonaModel::findOrFail($id);
        return view('adminPersona.personaEditar',compact('user_cliente'));
       }
   
       public function editarr(Request $request,$id){
       $datos= request()->except((['_token', '_method']));
       PersonaModel::where('id','=',$id)->update($datos);
       return redirect('/persona/listar')->with('modicicado_per','Persona modificada');;
      }

      public function deleter($id){
       PersonaModel::destroy($id);
       return back()->with('eliminado_per','Persona eliminada');
}
}