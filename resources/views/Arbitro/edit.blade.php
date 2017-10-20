@extends('master')

@section('content')
    <title>Actualizando arbitro </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Editar Arbitro</h2> 
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
                        <p>{{URL::to('arbitro')}}</p>
                   </div><br>
               @endif
          
  <form method="post" action="{{action('ArbitroController@update', $id)}}">

    {{csrf_field()}}  
     <input name="_method" type="hidden" value="PATCH">                   
                         
      <div class="row">
         <div class="form-group col-md-10">
                                   <!-- Apelido -->
            <div class="col-md-4">
               <label for="apelido"> Apelido:</label>
               <input type="text" class="form-control" name="apelido"value="{{$arbitro->apelido}}"></div> 
                  
                                     <!-- Nome -->
            <div class="col-md-10">
               <label for="nome"> Nome :</label> 
               <input type="text" class="form-control" name="nome"value="{{$arbitro->nome}}"><br></div>
               
                                      <!-- Sexo -->
            <div class="col-md-4"> <br>
               <label for="sexo"> Sexo : 
                  <select name="sexo" id="sexo"value="{{$arbitro->sexo}}"> 
                  <option value="M">M</option>
                  <option value="F">F</option></select> </div>
          
                                        <!-- Idade  -->
                                 
            <div class="col-md-2">  
               <label for="idade"> Idade:</label> 
                   <input type="number" class="form-control" name="idade"value="{{$arbitro->idade}}"></div> 
                </div>

           <div class="form-group col-md-10">
                                         <!-- telefone -->
            <div class="col-md-4">
               <label for="telefone"> Telefone :</label> 
               <input type="text" class="form-control" name="telefone"value="{{$arbitro->telefone}}"> </div>  
                                           
                                           <!-- email -->   
           <div class="col-md-6">  
             <label for="email"> email :</label> 
             <input type="text" class="form-control" name="email"value="{{$arbitro->email}}">
           </div>
          </div>        
                                    <!-- Outros detalhes --> 
      
       </div> 
            <label for="descricao">Outros detalhes :
                
               <br><br>    <textarea name="descricao" rows="8" cols="90">{{$arbitro->descricao}}</textarea> </label>
           </div> 
       </div>
    <div class="form-group row"><br>
      <div class="col-md-2"></div> 
        <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar</button> 
    </div>
  </form>
</div>
@endsection