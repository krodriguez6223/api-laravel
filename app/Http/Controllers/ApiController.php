<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Persona;

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
}
