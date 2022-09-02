<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    public function traerTodo(){   
        return Editorial::all();
    }

    public function traerPorId($id){   
        return Editorial::find($id);
    }

    public function crear(Request $request){   
        $editorial = new Editorial;
        $editorial->nombre_editorial=$request->nombre_editorial;
        $editorial->ciudad=$request->ciudad;
        $editorial->estado=$request->estado;
        $editorial->save();
        return $editorial;
    }

    public function modificar(Request $request,$id){
        $editorial= Editorial::find($id);
        $editorial->nombre_editorial=$request->nombre_editorial;
        $editorial->ciudad=$request->ciudad;
        $editorial->estado=$request->estado;
        $editorial->save();
    }
    public function eliminar($id){
        $editorial= Editorial::find($id);
        $editorial->delete();

    }




}
