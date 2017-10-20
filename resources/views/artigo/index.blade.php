@extends('master')
@section('content')
  <div class="container">
    <table class="table table-striped">
  <a href="{{URL::to('artigo/create')}}" title=""><h4>Criar clube</h4></a>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
       <!-- <th colspan="2">Action</th>-->  
      </tr>
    </thead>
    <tbody>
      @foreach($artigos as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['title']}}</td>
        <td>{{$post['post']}}</td>
        <td><a href="{{action('ArtigoController@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="{{action('ArtigoController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Apagar</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection