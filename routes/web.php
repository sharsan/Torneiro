<?php
 

Route::get('/', function () {
  return view('welcome');
});

Route::get('home', function () {
  return view('welcome');
});
 
Route::resource('arbitro', 'ArbitroController');
Route::resource('atleta', 'AtletaController'); 
Route::resource('clube', 'ClubeController'); 
Route::resource('treinador', 'TreinadorController');   
Route::resource('vencedor', 'VencedorController');   
 

Route::get('/login', 'LoginController@form');
Route::post('/login', 'LoginController@login');

Route::get('/quatro', 'VencedorController@quatro');
 
// Route::get('/novoT', 'TreinadorController@criar');