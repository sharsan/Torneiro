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

Route::get('home', function () {
  return view('welcome');
});

Route::resource('artigo', 'ArtigoController');
Route::resource('arbitro', 'ArbitroController');
Route::resource('atleta', 'AtletaController'); 
Route::resource('clube', 'ClubeController'); 
Route::resource('treinador', 'TreinadorController');   
Route::resource('vencedor', 'VencedorController');   
 

Route::get('/login', 'LoginController@form');
Route::post('/login', 'LoginController@login');

Route::get('/quatro', 'VencedorController@quatro');
 