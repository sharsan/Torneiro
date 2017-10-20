<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artigo;

class ArtigoController extends Controller
{  
    public function index()
    {
        $artigos = Artigo::all()->toArray();
        
        return view('artigo.index', compact('artigos'));
    }

    public function create()
    {
        return view('artigo.create');
    }
 
    public function store(Request $request)
    {
        $artigo = new artigo([
          'title' => $request->get('title'),
          'post' => $request->get('post')
        ]);

        $artigo->save();
        return redirect('/artigo');
    } 

    public function edit($id)
    {
        $artigo = artigo::find($id);        
        return view('artigo.edit', compact('artigo','id'));
    }
 
    public function update(Request $request, $id)
    {
        $artigo = Artigo::find($id);
        $artigo->title = $request->get('title');
        $artigo->post = $request->get('post');
        $artigo->save();
        return redirect('/artigo');
    }
 
    public function destroy($id)
    {
      $artigo = Artigo::find($id);
      $artigo->delete();

      return redirect('/artigo');
    } 
}
