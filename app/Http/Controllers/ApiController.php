<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Persona;

class ApiController extends Controller
{
    public function persona()
    {
        $persona = Persona::all();
        return response()->json($persona);
    }
}
