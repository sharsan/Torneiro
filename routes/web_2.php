<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('artigo', 'ArtigoController');

Route::resource('clube', 'ArtigoController@create');
Route::resource('clube', 'ClubeController');

//                       /*  Atletas */
// Route::get('/verAt', 'AtletaController@listar');
// Route::get('/novoAt', 'AtletaController@criar');
// Route::get('/editAt', 'AtletaController@editar');

//                       /*  Arbitros */
// Route::get('/verAr', 'ArbitroController@listar');
// Route::get('/novoAr', 'ArbitroController@criar');
// Route::get('/editAr', 'ArbitroController@editar');

//                       /*  Clubes */

// Route::get('/verC', 'ClubeController@listar');
// Route::get('/store', 'ClubeController@store');
// Route::post('/cadastrar', 'ClubeController@criar');


//                       /* Treinador  */
// Route::get('/verT', 'TreinadorController@listar');
// Route::get('/novoT', 'TreinadorController@criar');

 
    /*  

Route::get('/login', 'LoginController@form');
Route::post('/login', 'LoginController@login');

*/