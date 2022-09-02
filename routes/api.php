<?php

use App\Http\Controllers\LibrosController;
use App\Models\Editorial;
use App\Models\Libros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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


Route::get('prueba/libros', 'App\Http\Controllers\LibrosController@traerTodo');
Route::get('prueba/libros/{id}', 'App\Http\Controllers\LibrosController@traerPorId');
Route::post('prueba/libros', 'App\Http\Controllers\LibrosController@crear');
Route::put('prueba/libros/{id}','App\Http\Controllers\LibrosController@modificar');
Route::delete('prueba/libros/{id}','App\Http\Controllers\LibrosController@eliminar');

Route::get('prueba/editorial', 'App\Http\Controllers\EditorialController@traerTodo');
Route::get('prueba/editorial/{id}', 'App\Http\Controllers\EditorialController@traerPorId');
Route::post('prueba/editorial', 'App\Http\Controllers\EditorialController@crear');
Route::put('prueba/editorial/{id}','App\Http\Controllers\EditorialController@modificar');
Route::delete('prueba/editorial/{id}','App\Http\Controllers\EditorialController@eliminar');

