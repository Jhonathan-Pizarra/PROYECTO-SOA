<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LibreriaController extends Controller
{
    
    public function index()
    {
        //Get
        return response ()->json(App\Libreria::all(),200);
    }

 
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        $nuevaLibreria = new App\Libreria;
        $nuevaLibreria->nombre = $request->nombre;
        $nuevaLibreria->telefono = $request->telefono;
        $nuevaLibreria->direccion = $request->direccion;
        $nuevaLibreria->save();
        return response ()->json(['OK'=>'Editorial Registrado','codigo'=>200]);
    }
   
    public function show($id)
    {
        $f = App\Libreria::find($id);

        if(!$f){
            return response ()->json(['error'=>'Libreria no encontrada','codigo'=>202]);
        }
        else{
            
            return response ()->json($f,200);
        }
    }

    public function edit($id)
    {
        return "Mostrando el fomr para la edicion del editoria: $id";
    }
    
    public function update(Request $request, $id)
    {
        $nombreMetodo= $request-> method();

        if($nombreMetodo==='PUT'){

            $LibreriaActualizada= App\Libreria::find($id);

        if(!$LibreriaActualizada){
            return response ()->json(['error'=>'Libreria no encontrada','codigo'=>404]);
        }
        else{
            
            
            $LibreriaActualizada->nombre = $request->nombre;
            $LibreriaActualizada->telefono = $request->telefono;
            $LibreriaActualizada->direccion = $request->direccion;
            $LibreriaActualizada->save();
            return response ()->json(['error'=>'ACTUALIZADO','codigo'=>200]);
        }
        }
        else  {

            
            
        }
    }

    public function destroy($id)
    {
        $f = App\Libreria::find($id);

        if(!$f){
            return response ()->json(['error'=>'NO ENCONTRADO','codigo'=>202]);
        }
        else{
            $f->delete();
            return response ()->json($f,200);
        }
    }

}
