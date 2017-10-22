<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Arbitro;  


class ArbitroController extends Controller
{
    public function index()
         {
          $arbitro =Arbitro::all()->toArray();      
            return view("arbitro.index",compact('arbitro'));
         }
    public function create()
        {                                               
             return view("arbitro.create",compact('arbitro')); 
        }

    public function edit($id)
        {        
           $arbitro = Arbitro::find($id);
           return view('arbitro.edit',compact('arbitro','id'));
         } 

    public function store(Request $request)
         { 
           $this->validate(request(), [
           'nome' => 'required|unique:arbitros|max:40',
           // 'email' => 'unique:users,email'
           // 'email' => Rule::unique('users')->ignore($user->id, 'user_id'),
           // 'foto' => 'mimes:jpeg,bmp,png'
           // 'email' => 'unique:connection.users,email_address'
           
            ]);
        $arbitro = new Arbitro([
          'nome' => $request->get('nome'),
          'apelido' => $request->get('apelido'),   
          'sexo' => $request->get('sexo'),
          'idade' => $request->get('idade'),
          'telefone' => $request->get('telefone'),
          'email' => $request->get('email'),
          'descricao' => $request->get('descricao')

        ]);

        Arbitro::create($request->all());
            return back()->with('success', 'Arbitro adicionado com sucesso'); 

         } 
 
    public function update(Request $request, $id)
         {      
         $this->validate(request(), [
          'nome' => 'required' 
            ]);

        $arbitro = Arbitro::find($id); 
        $arbitro ->apelido = $request->get('apelido');
        $arbitro ->nome = $request->get('nome');
        $arbitro ->sexo = $request->get('sexo');
        $arbitro ->idade = $request->get('idade');  
        $arbitro ->telefone = $request->get('telefone');
        $arbitro ->email = $request->get('email');
        $arbitro ->descricao = $request->get('descricao');
        $arbitro->save();
        return redirect('arbitro')->with('success','Arbitro actualizado com sucesso');
 
    }  

    public function destroy(Request $request, $id)

    {

         Arbitro::find($id)->delete();
        // return back()->with('success', 'Arbitro apagado com sucesso');
        return redirect()->route('arbitro.index')

                        ->with('success','Arbitro apagado com successo');

    }  
}