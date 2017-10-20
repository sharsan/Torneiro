@extends('master') 
@section('content')
<title>Registrar clube</title>
<div class="container">
  <h2>Registrar clube</h2><br>
            <a href="{{URL::to('clube')}}" title=""><h4><- voltar</h4></a>

  <form method="post" action="{{url('clube')}}">
          {{csrf_field()}}
                               <!-- Nome -->

           <div class="col-md-12">
              <label class="ls-label">
                <b class="ls-label-text">Nome</b>
                   <div class="ls-field-md">
                      <input class="uppercase" name="nome" id="nome" placeholder="Ex: Real Madrid" type="text" value="">
                   </div><br>
              </label>
           </div>
                             <!-- Provincia -->
             
           <div class="col-md-12">
             <div class="form-group col-md-10"> <br>
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
                               <!-- Cidade --> 
       
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
                   

        <div class="form-group col-md-12">
              <label for="descricao" class="col-sm-2 col-form-label col-form-label-sm">Outros detalhes
                <br>
                   <textarea name="descricao" rows="8" cols="80"></textarea> 
              </label>
        </div>

   <div class="form-group col-md-4"><br>
    <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar clube</button>  
    <!-- -->
  </div>
</form>
 
@endsection