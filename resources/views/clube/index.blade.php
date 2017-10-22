@extends('master') 
@section('content')
<title>Clubes </title>

<div class="container"> 
  <table class="table table-striped">  
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <!-- Navbar content -->
</nav> 

      <div class="col-md-4">   <!--  este div inseri pra separa o Search com o restante -->
         <form class="form-inline my-2 my-lg-0"> 
          <input class="form-control mr-sm-2" type="search" placeholder="Insira a palavra a pesquisar..." aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
         </form> 
      </div> 
  
    <div class="row">
    <thead>    


   <a href="{{URL::to('clube/create')}}" title=""><h4>Adicionar clube</h4></a> 

 
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Provincia</th>
          <th>Cidade</th>
          <th>Criado em</th>
          <th>Actualizado em</th>  
        </tr>
      </thead>
      <tbody>
        @foreach($clube as $post)
        <tr>
          <td>{{$post['id']}}</td>
          <td>{{$post['nome']}}</td>
          <td>{{$post['provincia']}}</td>
          <td>{{$post['cidade']}}</td>
          <td>{{$post['created_at']}}</td>
          <td>{{$post['updated_at']}}</td> 

          
         <td><a href="{{action('ClubeController@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>




          <form action="{{action('ClubeController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Apagar</button>
          </form>
        </td>
        </div>  <!--  este div inseri pra separa o Search com o restante -->

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @endsection