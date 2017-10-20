<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Clube;

class ClubeController extends Controller
{
      public function index()
         {
             $clube = Clube::all()->toArray();
        
             return view('clube.index', compact('clube'));
         }
 
      public function create()
         {
             return view('clube.create');
         } 
    
         public function store(Request $request)
         {
            $clube = new Clube([
                'nome' => $request->get('nome'), 
                'provincia' => $request->get('provincia'),
                'cidade' => $request->get('cidade'), 
                'descricao' => $request->get('descricao')
               //campos de exigencia de valores
                              ]);

             $clube->save();
             return redirect('/clube');
         }
 
         public function edit($id)
         {
             $clube = Clube::find($id);
        
             return view('clube.edit', compact('clube','id')); 
         } 

         public function update(Request $request, $id)
         {
             $clube = Clube::find($id);
             $clube->nome = $request->get('nome'); 
             $clube->provincia = $request->get('provincia');
             $clube->cidade = $request->get('cidade'); 
             $clube->descricao = $request->get('descricao'); 
             $clube->save();
             return redirect('/clube');
         }
 
         public function destroy($id)
        {
           $clube = Clube::find($id);
           $clube->delete();

           return redirect('/clube');
      } 
     }
