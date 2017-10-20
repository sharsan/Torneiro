@extends('master')

@section('content')
    <title>Actualizando clube </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Editar Clube</h2>  
  <a href="{{URL::to('clube')}}" title=""><h4><- voltar</h4></a>
    
               @if ($errors->any())
                   <div class="alert alert-danger">
                      <ul>
                         @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                         @endforeach
                      </ul>
                   </div><br>
               @endif

               @if (\Session::has('success'))
                   <div class="alert alert-success">
                        <p>{{URL::to('clube')}}</p>
                   </div><br>
               @endif
          
  <form method="post" action="{{action('ClubeController@update', $id)}}">
   
          {{csrf_field()}} 
     <input name="_method" type="hidden" value="PATCH"> 
     
         <div class="row">      
                                     <!-- Nome -->
           <div class="col-md-5">
               <label for="nome"> Nome :</label> 
               <input type="text" class="form-control" name="nome"value="{{$clube->nome}}"><br>
             </div>
           </div>      
              
                             <!-- Provincia --> 
       <div class="form-group col-md-10"> 
          <div class="col-md-4"> 
             <label for="provincia">Provincia :</b> 
               <select name="provincia" id="provincia"> 
                 <option value="Maputo">Maputo</option> 
                 <option value="Maputo-Cidade">Maputo-Cidade</option> 
                 <option value="Gaza">Gaza</option>   
                 <option value="Inhambane">Inhambane</option>   
                 <option value="Manica">Manica</option> 
                 <option value="Sofala">Sofala</option> 
                 <option value="Zambezia">Zambezia</option> 
                 <option value="Tete">Tete</option>   
                 <option value="Cabo">Cabo-Delgado</option>  
                 <option value="Niassa">Niassa</option> 
                 <option value="Nampula">Nampula</option>   
                        </select> 
              </label>  </div> 
              
                               <!-- Cidade --> 
          <div class="col-md-6">
               <label for="cidade">Cidade :
                  <select name="cidade" id="cidade"> 
                     <option value="Maputo-Cidade">Maputo-Cidade</option> 
                     <option value="Boane">Boane</option>   
                     <option value="Matola">Matola</option>
                     <option value="Outra">--Outra--</option> 
                  </select> 
               </label>    
           </div> 
                                    <!-- Outros detalhes --> 
      
       </div> 
            <label for="descricao">Outros detalhes :
                
               <br><br>    <textarea name="descricao" rows="8" cols="90">{{$clube->descricao}}</textarea> </label>
           </div> 
       </div>
    <div class="form-group row"><br>
      <div class="col-md-2"></div> 
        <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar</button> 
    </div>
  </form>
</div>
@endsection