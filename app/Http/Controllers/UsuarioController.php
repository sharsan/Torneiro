<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\Atleta; 
use App\Vencedor;
use App\Torneiro; 

class UsuarioController extends Controller
{
         public function index()
             {
             $atleta =Atleta::all(); 

              return view("usuario.index",compact('atleta'));
             //return view("usuario/resultados",compact('atleta')); 
             } 
         // public function index()
         //     {
         //     $vencedor =Vencedor::all()->toArray();  
         //     return view("usuario.resultados",compact('vencedor'));
         //     } 

         public function eventos()
             {
             $torneiro = Torneiro::all(); 

             return view("usuario.eventos",compact('torneiro'));
             } 

         public function resultados()
             {
             $vencedor =Vencedor::all(); 

             return view("usuario.resultados",compact('vencedor'));
             } 
         // public function index()
         //     {
         //     $treinador =Usuario::all(); 

         //     return view("treinador.index",compact('treinador'));
         //     }
}
