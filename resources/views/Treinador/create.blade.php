@extends('master')

@section('content')
 <title>Registrar treinador </title>
<div class="container">
       <title>Registrar treinador</title>
       <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Registrar treinador</h2><br>
  <a href="{{URL::to('treinador')}}" title=""><h4><- voltar</h4></a>
             
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

  <form method="post" action="{{url('treinador')}}">
    <div class="form-group row">
       {{csrf_field()}}  
                          
        <div class="row">
          <div class="form-group col-md-6">  
            
                            <!-- Apelido -->
             <div class="col-md-6">
                <label for="apelido">Apelido:
                   <input type="text" required class="form-control" name="apelido"></input>
                </label>
             </div>
                             <!-- Nome -->
             <div class="col-md-16">
               <label for="nome">Nome :
                 <input type="text" class="form-control" name="nome"></input> 
               </label>
             </div>
            
             <div class="col-md-12"> <br>
                               <!-- Sexo --> 
               <label for="sexo">Sexo : 
                 <select name="sexo" id="sexo"> 
                     <option value="M">M</option>
                     <option value="F">F</option> 
                 </select>     
               </label>  
             </div>
          </div>   
                       
                            <!-- Idade  -->
                                 
         <div class="col-md-8"> 
            <div class="form-group col-md-2">
                                     <!-- Clube --> 
                               
               <label for="clube">Clube:
                    <input type="text" class="form-control" name="clube"></input>
               </label>  

               <label for="idade">Idade:
                   
                   <input type="number" class="form-control" name="idade"></input> 
                 
               </label>  
                                     <!-- telefone --> 
                               
               <label for="telefone">telefone:
                    <input type="int" class="form-control" name="telefone"></input>
               </label>          
                                     <!-- email --> 
                <label for="email">email:
                     <input type="text" class="form-control" name="email"></input>
                </label>    
               </div>
            </div> 
                                    <!-- Outros detalhes --> 
            <div class="form-group col-md-12">
                <label for="descricao" class="col-sm-2 col-form-label col-form-label-sm">Outros detalhes
                <br>
                   <textarea name="descricao" rows="8" cols="80"></textarea> 
              </label>
        </div>

   <div class="form-group col-md-4"><br>
    <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar treinador</button>   
  </div>
</form>
 
@endsection  