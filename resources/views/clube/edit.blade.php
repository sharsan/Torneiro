@extends('admin')
@section('content')
<title>Actualizando clube</title>
 <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
  <body>
<div class="container">
  <h2>Editar clube</h2><br>
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
                               <!-- Nome -->
 
      <div class="row">
          <div class="form-group col-md-8">  
             
                             <!-- Nome -->
            <div class="col-md-8">
                <label for="nome"> Nome :</label>
                <input type="text" class="form-control" name="nome"placeholder="Ex: Costa do Sol"value="{{$clube->nome}}"></input><br>
            </div>
        </div>
                             <!-- Provincia -->
              

        <div class="col-md-12"> 
            <div class="col-md-3"> 
              <label  for="provincia">Provincia:
                <tr>  <select name="provincia" id="provincia">
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
                </tr>     
              </label>   
            </div> 
                               <!-- Cidade -->  
             <div class="col-md-3"> 
              <label for="cidade">Cidade:
                    <tr> 
                       <select name="cidade" id="cidade"> 
                          <option value="Maputo-Cidade">Maputo-Cidade</option> 
                          <option value="Boane">Boane</option>   
                          <option value="Matola">Matola</option>
                          <option value="Outra">--Outra--</option>      
                        </select>
                     </tr>   
               </label> 
            </div>  
                                    <!-- Outros detalhes --> 
      
      <div class="col-md-12"> 
          <br>  <label for="descricao">Outros detalhes :
                
               <br><br>  <textarea name="descricao" rows="8" cols="90">{{$clube->descricao}}</textarea> 
            </label>
            
       </div>
    <div class="form-group row"><br> 
        <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar</button> 
    </div>
  </form>
</div>
@endsection