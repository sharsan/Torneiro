@extends('master')

@section('content')
 <title>Registrar arbitro </title>
<div class="container">
       <title>Adicionamento de arbitros </title>
       <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Registrar arbitro</h2><br>
  <a href="{{URL::to('arbitro')}}" title=""><h4><- voltar</h4></a>
             
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
                        <p>{{ \Session::get('success') }}</p>
                   </div><br>
               @endif

  <form method="post" action="{{url('arbitro')}}">
    <div class="form-group row">
       {{csrf_field()}}  
                          
        <div class="row">
          <div class="form-group col-md-6">  
            
                            <!-- Apelido -->
            <div class="col-md-6">
              <label for="apelido"> Apelido:</label>
                <input type="text" class="form-control" name="apelido"></input> </div>
             
                             <!-- Nome -->
             <div class="col-md-12">
               <label for="nome"> Nome :</label>
                 <input type="text" class="form-control" name="nome"></input><br></div>  
              
             <div class="col-md-4"> <br>
                               <!-- Sexo --> 
               <label for="sexo"> Sexo :</label> 
                 <select name="sexo" id="sexo"> 
                     <option value="M">M</option>
                     <option value="F">F</option> 
                 </select>    
             </div>
            
                            <!-- Idade  -->
                                  
             <div class="col-md-3"> 
               <label for="idade"> Idade:</label>
               <input type="number" class="form-control" name="idade"></input> </div>  
           </div>   
            <div class="form-group col-md-10">    
                                     <!-- telefone --> 
              <div class="col-md-3">                
               <label for="telefone"> telefone:</label>
                  <input type="int" class="form-control" name="telefone"></input> 
              </div>    
              <div class="col-md-6">         
                                     <!-- email --> 
                <label for="email"> email: </label> 
                     <input type="text" class="form-control" name="email"></input> 
              </div>
           </div>
 
 
                                    <!-- Outros detalhes --> 
      
         <div class="form-group col-md-10">
              <label for="descricao" class="col-sm-2 col-form-label col-form-label-sm"> Outros detalhes
                <br>
                   <textarea name="descricao" rows="8" cols="70"></textarea> 
              </label>
        </div>

   <div class="form-group col-md-4"><br>
    <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar arbitro</button>  
    <!-- -->
  </div>
</form>
 
@endsection