<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Producto;

class ApiController extends Controller
{
    //funcion para mostrar todos los registros de la tabla perosona
    public function personas()
    {
        $persona = Persona::all();
        return response()->json($persona);
    }
    
     //funcion para mostrar los registros de una persona en específico
    public function persona(Persona $persona)
    {
        $persona = Persona::where('id', $persona->id)->get();
        return response()->json($persona);
    } 

     //funcion para mostrar todos los registros de la tabla perosona
     public function productos()
     {
         $producto = Producto::all();
         return response()->json($producto);
     }
     
      //funcion para mostrar los registros de una persona en específico
     public function producto(Producto $producto)
     {
         $producto = Producto::where('id', $producto->id)->get();
         return response()->json($producto);
     } 
}
