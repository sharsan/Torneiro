<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Vencedor;  

//use DB;


class VencedorController extends Controller
{
           public function index()
             {
             $vencedor =Vencedor::all()->toArray();  
             return view("vencedor.index",compact('vencedor'));
             }

         public function create()
             {   
             return view("vencedor.create",compact('vencedor'));
             } 
    
 
         public function store(Request $request)
            {   
                 $vencedor =  new Vencedor([
                    'nome' => $request->get('nome'),
                    'escalao' => $request->get('escalao'),
                    'primeiro' => $request->get('primeiro'),
                    'segundo' => $request->get('segundo'),
                    'terceiro' => $request->get('terceiro'),
                    'terceiro2' => $request->get('terceiro2'),
                    'juri' => $request->get('juri'), 
                    'descricao' => $request->get('descricao') 
                     ]);
              Vencedor::create($request->all());
                        return back()->with('success', 'Vencedor adicionado com sucesso');  
            }  
         public function edit($id)
            {
                 $vencedor = Vencedor::find($id);
                 return view('vencedor.edit',compact('vencedor','id'));
            }

 
         public function update(Request $request, $id)
             /*   public function updateAtletas(Request $request, $id)  */
            {   request()->validate(
                 [ 

            'nome' => 'required' 
                  ]);
          Vencedor::find($id)->update($request->all());

        return redirect()->route('vencedor.index')

                        ->with('success','Actualizado com sucesso'); 
            }
            
            
         public function destroy($id)
            {
               $vencedor = Vencedor::find($id);
               $vencedor->delete();

              return redirect('vencedor');
       } 
}
