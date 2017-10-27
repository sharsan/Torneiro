@extends('master')
@section('content')
<title>Torneiros </title>
  <div class="container">
 <a href="{{URL::to('usuario')}}" title=""><h4>Inicio</h4></a>  
 <h3><center><th>Eventos</th></center> </h3>
 <a href="{{URL::to('usuario')}}" title=""><h4><- voltar</h4></a>
    <table class="table table-striped">  
    <thead>
      <tr>
        <th>ID</th>
        <th>Evento</th> 
        <th>Inicio</th>
        <th>Término</th>
        <th>Participantes</th>
        <th>rapazes</th>
        <th>raparigas</th>
        <th>desclassificados</th> 
        <th>Criado em</th>
        <th>Actualizado em</th> 
      </tr>
    </thead>
    <tbody>
      @foreach($torneiro as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['nome']}}</td>
        <td>{{$post['datai']}}</td>
        <td>{{$post['datat']}}</td>
        <td>{{$post['participantes']}}</td>
        <td>{{$post['rapazes']}}</td>
        <td>{{$post['raparigas']}}</td>
        <td>{{$post['desclassificados']}}</td> 
        <td>{{$post['created_at']}}</td>
        <td>{{$post['updated_at']}}</td> 
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection