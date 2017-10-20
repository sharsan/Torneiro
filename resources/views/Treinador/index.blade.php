@extends('master')
@section('content')
  <div class="container">
    <table class="table table-striped">
  <a href="{{URL::to('treinador/create')}}" title=""><h4>Adicionar treinador</h4></a>
 
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th> 
        <th>Apelido</th> 
        <th>Clube</th>
        <th>Sexo</th>
        <th>Idade</th>
        <th>Telefone</th>
        <th>email</th> 
        <th>Criado em</th>
        <th>Actualizado em</th> 

      </tr>
    </thead>
    <tbody>
      @foreach($treinador as $post)
      <tr>
        <td>{{$post['id'        ]}}</td>
        <td>{{$post['nome'      ]}}</td>
        <td>{{$post['apelido'   ]}}</td> 
        <td>{{$post['clube'     ]}}</td>
        <td>{{$post['sexo'      ]}}</td>
        <td>{{$post['idade'     ]}}</td> 
        <td>{{$post['telefone'  ]}}</td>
        <td>{{$post['email'     ]}}</td> 
        <td>{{$post['created_at']}}</td>
        <td>{{$post['updated_at']}}</td>

        <td><a href="{{action('TreinadorController@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="{{action('TreinadorController@destroy', $post['id'])}}" method="post">
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