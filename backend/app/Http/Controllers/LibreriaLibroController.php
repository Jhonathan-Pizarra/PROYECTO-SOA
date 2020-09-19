<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


class LibreriaLibroController extends Controller
{
   
    public function index($id)
    {
        
        $libreria = App\Libreria::find($id);
    
        if(!$libreria){
            return response ()->json(['error'=>'NO SE ENCUENTRA LA LIBERIA','codigo'=>404]);
        }
        else{
            $v = $libreria->libro;
            return response ()->json($v,200);
        }
    }


    public function create()
    {
        //
    }

    public function store(Request $request, $id)
    {
        $libreria = App\Libreria::find($id);
        if(!$libreria){
            return response ()->json(['ERROR'=>'NO EXISTE','codigo'=>400]);
        }
        else {
            $newlibro= new App\Libro;
            $newlibro->titulo=$request->titulo;
            $newlibro->genero=$request->genero;
            $newlibro->anio=$request->anio;
            $newlibro->libreria_id=$id;
            $newlibro->save();
            return response ()->json(['OK'=>' CREADO','codigo'=>200]);
        }

    }

  
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
