<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Agregando nueva ruta - NOSOTROS - por vista
// Route::get('/nosotros', function () {
//     return view('nosotros');
// });

// //Agregando ruta desde controlador y metodo (varios)
// Route::get('/nosotros', 'PruebaController@hola');

// //agregando ruta con __invoke para un controlador con un solo metodo
// Route::get('/buscar', 'BuscarController');

//Route::get('/recetas', 'RecetasController');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/recetas', 'RecetaController@index')->name('recetas.index');
Route::get('/recetas/create', 'RecetaController@create')->name('recetas.create');
Route::post('/recetas', 'RecetaController@store')->name('recetas.store');

Auth::routes();