@extends('master')
@section('content')
<title>Clubes </title>

<div class="container"> 
  <table class="table table-striped">  
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <!-- Navbar content -->
</nav> 

  <div class="col-lg-4">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Insira a palavra a pesquisar..." aria-label="pesquisar">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button">Buscar!</button>
      </span>
    </div>
  </div>
  
    <div class="row">  <!--  este div inseri pra separa o Search com o restante -->
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