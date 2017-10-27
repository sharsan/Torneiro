<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Torneiro;  

class TorneiroController extends Controller
{ 
     public function index()
         {
             $torneiro = Torneiro::all()->toArray();        
             return view('torneiro.index', compact('torneiro'));
         }
 
      public function create()
         {
             return view("torneiro.create",compact('torneiro')); 
         } 
    
         public function edit($id)
         {
             $torneiro = Torneiro::find($id);
        
             return view('torneiro.edit', compact('torneiro','id')); 
         } 

         public function store(Request $request)
         {      
           $this->validate(request(), [
        'nome' => 'required|unique:torneiros|max:40',
            ]);
            $torneiro = new Torneiro([
                'nome' => $request->get('nome'),  
                'datai' => $request->get('datai'),   
                'datat' => $request->get('datat'),   
                'participantes' => $request->get('participantes'), 
                'rapazes' => $request->get('rapazes'), 
                'raparigas' => $request->get('raparigas'), 
                'desclassificados' => $request->get('desclassificados'), 
                'descricao' => $request->get('descricao')
               //campos de exigencia de valores
                              ]);
      Torneiro::create($request->all());
            return back()->with('success', 'Torneiro adicionado com sucesso'); 
 
         }
 
         public function update(Request $request, $id)
         {      
            $torneiro = Torneiro::find($id);
           $this->validate(request(), [
                  'nome' => 'required' 
            ]); 
             $torneiro->nome = $request->get('nome');  
             $torneiro->datai = $request->get('datai'); 
             $torneiro->datat = $request->get('datat'); 
             $torneiro->participantes = $request->get('participantes');  
             $torneiro->rapazes = $request->get('rapazes'); 
             $torneiro->raparigas = $request->get('raparigas');  
             $torneiro->desclassificados = $request->get('desclassificados'); 
             $torneiro->descricao = $request->get('descricao'); 
             $torneiro->save();
             return redirect('torneiro')->with('success','Torneiro actualizado com sucesso');
         }
         public function destroy($id)
        {
             $torneiro = Torneiro::find($id);
             $torneiro->delete();

           return redirect('/torneiro');
      }  
}
