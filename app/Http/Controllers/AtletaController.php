<?php
/* */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;  
use App\Atleta;

class AtletaController extends Controller
{   

   public function index()
       {
        $atleta = Atleta::all()->toArray();
        
        return view('atleta.index', compact('atleta'));
       } 
   public function create()
       { 
      return view("Atleta.create",compact('atleta'));
       } 

    public function edit($id)
       {
        $atleta= Atleta::find($id);
        return view('atleta.edit',compact('atleta'));
       } 

    public function store(Request $request)
    { 
        $atleta = new atleta([
          'nome' => $request->get('nome'),
          'apelido' => $request->get('apelido'),
          'cinturao' => $request->get('cinturao'), 
          'clube' => $request->get('clube'), 
          'categoria' => $request->get('categoria'), 
          'escalao' => $request->get('escalao'), 
          'peso' => $request->get('peso'), 
          'sexo' => $request->get('sexo'), 
          'idade' => $request->get('idade'), 
          'telefone' => $request->get('telefone'), 
          'email' => $request->get('email'), 
          'descricao' => $request->get('descricao') 
          //campos de exigencia de valores
        ]);

        $atleta->save();
        return redirect('/atleta');
    }  

        public function show($id)

    {

        $atleta = Article::find($id);

        return view('atleta.show',compact('atleta'));

    }
      public function update(Request $request, $id)
    {
        request()->validate([

            'nome' => 'required',
 

        ]);

        Atleta::find($id)->update($request->all());

        return redirect()->route('atleta.index')

                        ->with('success','Atleta updated successfully');
  }



    //   public function update(Request $request, $id)
    // {
    //     $atleta = Atleta::find($id);
    //     $atleta->nome = $request->get('nome');
    //          // $table->string('email')/*->unique()*/; 
    //     $atleta->apelido = $request->get('apelido');
    //     $atleta->cinturao = $request->get('cinturao');
    //     $atleta->clube = $request->get('clube');
    //     $atleta->categoria = $request->get('categoria');
    //     $atleta->escalao = $request->get('escalao');
    //     $atleta->peso = $request->get('peso');
    //     $atleta->sexo = $request->get('sexo');
    //     $atleta->idade = $request->get('idade');
    //     $atleta->telefone = $request->get('telefone');
    //     $atleta->email = $request->get('email');
    //     $atleta->descricao = $request->get('descricao');
    //     $atleta->save();
    //     return redirect('/atleta')->with('success','Arbitro actualizado com sucesso');
    // }

    public function destroy($id)
    {
      $atleta = Atleta::find($id);
      $atleta->delete();

      return redirect('atleta');
    } 

} 