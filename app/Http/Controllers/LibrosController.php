<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use App\Models\Libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function  traerTodo(){
        return Libros::all();
    }

    public function traerPorId($id){
        return Libros::find($id);
    }
    public function crear(Request $request){
        $editorial = new Editorial();
        $editorial->nombre_editorial=$request->nombre_editorial;
        $editorial->ciudad=$request->ciudad;
        $editorial->estado=$request->estado;
        $editorial->save();
        return $editorial; 
    }
    public function modificar(Request $request, $id){
        $libros= Libros::find($id);
        $libros->titulo=$request->titulo;
        $libros->autor=$request->autor;
        $libros->precio=$request->precio;
        $libros->cantidad=$request->cantidad;
        $libros->save();
    }
    public function eliminar($id){
        $libros= libros::find($id);
        $libros->delete();
    }
         
    
}
