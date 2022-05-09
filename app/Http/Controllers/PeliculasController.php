<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\PeliculaModel;

class PeliculasController extends Controller
{
    public function registro_pelicula(){
        return view('adminPelicula.peliculaRegistrar');
    }

    public function cartelera(){
        return view('cartelera');
    }

    public function guardar_pelicula(Request $request){
        $pelicula=new PeliculaModel();

        $request->validate([
            'fecha_pelicula' => 'required',
            'hora_pelicula' => 'required',
            'nombre_pelicula' => 'required',
            'genero' => 'required',
            'resumen' => 'required',
            'precio' => 'required'
        ]);

        $pelicula->fecha_pelicula= $request->fecha_pelicula;
        $pelicula->hora_pelicula= $request->hora_pelicula;
        $pelicula->nombre_pelicula= $request->nombre_pelicula;
        $pelicula->genero= $request->genero;
        $pelicula->resumen= $request->resumen;
        $pelicula->precio= $request->precio;

        $pelicula->save();
        return back()->with('pelicula_g','Pelicula guardada');
    }

    public function listar_pelicula(){
        $data['user_p']=PeliculaModel::all();
        return view('adminPelicula.peliculaListar',$data);
        
    }

    public function modificar($id){
        $user_pelicula= PeliculaModel::findOrFail($id);
        return view('adminPelicula.peliculaEditar',compact('user_pelicula'));
       }
   
       public function editar(Request $request,$id){
       $datos= request()->except((['_token', '_method']));
       PeliculaModel::where('id','=',$id)->update($datos);
       return redirect('/pelicula/listar')->with('modicicado_p','Pelicula modificada');;
      }

      public function delete($id){
       PeliculaModel::destroy($id);
       return back()->with('eliminado_p','Pelicula eliminada');
    }
}
