@extends('master') 
@section('content')
<title>Adicionar clube</title>
<div class="container"> 
            <a href="{{URL::to('clube')}}" title=""><h4><- voltar</h4></a>

  <form method="post" action="{{url('clube')}}">
          {{csrf_field()}}
                               <!-- Nome -->
 
        <div class="row">
          <div class="form-group col-md-8">  
             
                             <!-- Nome -->
            <div class="col-md-8">
                <label for="nome"> Nome :</label>
                <input type="text" class="form-control" name="nome"placeholder="Ex: Costa do Sol"></input><br>
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
          </div>  

                                     <!-- Outros detalhes --> 

         <div class="form-group col-md-12">
             <br> <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Outros detalhes
               
          <br> <br><textarea name="nota" rows="8" cols="80"></textarea> 
              </label>
        </div>

   <div class="form-group col-md-4"> 
    <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar clube</button>  
    <!-- -->
  </div>
</form>
 
@endsection 