<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Treinador;
use App\Clube;

class TreinadorController extends Controller
{
         public function index()
             {
             $treinador =Treinador::all(); 

             return view("treinador.index",compact('treinador'));
             }

         public function create()
             { 
             $clube =Clube::all();  
             return view("treinador.create",compact('clube'));
             } 
         // public function create()
         //     { 
         //     return view("treinador.create",compact('treinador'));
         //     } 

         public function edit($id)
             {
                 $treinador = Treinador::find($id);
                 return view('treinador.edit',compact('treinador','id'));
             }

         public function store(Request $request)
             { 
           $this->validate(request(), [
          'nome' => 'required'  
            ]);
                 $treinador = new Treinador([
                  'nome' => $request->get('nome'),
                  'apelido' => $request->get('apelido'),   
                  'sexo' => $request->get('sexo'),
                  'idade' => $request->get('idade'),
                  'telefone' => $request->get('telefone'),
                  'email' => $request->get('email'),
                  'descricao' => $request->get('descricao')

                         ]);
                        Treinador::create($request->all());
            return back()->with('success', 'Treinador adicionado com sucesso');
      // return redirect()->route('treinador.index')

      //               ->with('success','Treinador adicionado com sucesso');

             }


    public function update(Request $request, $id)
         {  

        $treinador = Treinador::find($id);
        $this->validate(request(), [
          'nome' => 'required' 
            ]);
        $treinador ->apelido = $request->get('apelido');
        $treinador ->nome = $request->get('nome');
        $treinador ->clube = $request->get('clube');
        $treinador ->sexo = $request->get('sexo');
        $treinador ->idade = $request->get('idade');
        $treinador ->telefone = $request->get('telefone');
        $treinador ->email = $request->get('email');
        $treinador ->descricao = $request->get('descricao');
        $treinador->save();
        return redirect('treinador')->with('success','Treinador actualizado com sucesso');
 
    }   

 
         public function destroy($id)
            {
               $treinador = Treinador::find($id);
               $treinador->delete();

              return redirect('treinador');
            } 
}