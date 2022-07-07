<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

                /**Listado de API* */

// registros de la tabla persona.. eje: api/personas
Route::get('/personas', [ApiController::class, 'personas'])->name('personas.show');

// registros de un persona en específico.. eje: api/personas/1
Route::get('/personas/{persona}', [ApiController::class, 'persona'])->name('persona.show');

// registros de la tabla producto.. eje: api/productos
Route::get('/productos', [ApiController::class, 'productos'])->name('productos.show');

// registros de un producto en específico.. eje: api/productos/1
Route::get('/productos/{producto}', [ApiController::class, 'producto'])->name('producto.show');

