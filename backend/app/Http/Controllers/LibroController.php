<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response ()->json(App\Libro::all(),200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        $f = App\Libro::find($id);

        if(!$f){
            return response ()->json(['error'=>'NO ENCONTRADO','codigo'=>202]);
        }
        else{
            
            return response ()->json($f,200);
        }
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
