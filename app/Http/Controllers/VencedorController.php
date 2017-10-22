<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Vencedor;  
use App\Atleta;    

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
                $atleta =Atleta::all();  
             return view("vencedor.create",compact('atleta'));
             }  

         public function store(Request $request)
            {   

        $this->validate(request(), [
           'nome' => 'required|unique:arbitros|max:30', 
           
            ]);
        $vencedor = new Vencedor([
          'juri' => $request->get('juri'),
          'escalao' => $request->get('escalao'),
          'nome' => $request->get('nome'),
          'primeiro' => $request->get('primeiro'),
          'segundo' => $request->get('segundo'),
          'terceiro' => $request->get('terceiro'),
          'terceiro2' => $request->get('terceiro2'),
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

             return redirect()->route('arbitro.index')

                        ->with('success','Actualizado com sucesso'); 
                   }
            
            
         public function destroy($id)
            {
               $vencedor = Vencedor::find($id);
               $vencedor->delete();

              return redirect('vencedor');
                   } 

          //  public function show($id) 
          //   { 
          // $vencedor = Vencedor::find($id);

          //   return view('vencedor.show',compact('vencedor')); 
          //          }  

         public function quatro(Request $request)
             { 
                $atleta =Atleta::all();  
             return view("vencedor.quatro",compact('atleta'));
             }  

}
