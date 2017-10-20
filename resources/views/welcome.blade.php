<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pagina inicial</title>

        <!-- Fonts -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <br><br>

        <h1><p class="text-center">Federação Moçambicana de Judo</p></h1>
        <div class="container">
<!-- <div class="col-md-2"> -->   
           <div class="form-group row">
  <a href="{{URL::to('atleta')}}" title="" " class="btn btn-warning"><h4>Atletas</h4></a> 
   
  <a href="{{URL::to('treinador')}}" title="" " class="btn btn-warning"><h4>Treinadores</h4></a> 

  <a href="{{URL::to('clube')}}" title="" " class="btn btn-warning"><h4>Clubes</h4></a> 
 
  
  <a href="{{URL::to('arbitro')}}" title="" " class="btn btn-warning"><h4>Árbitros</h4></a> 

  <a href="{{URL::to('torneiro')}}" title="" " class="btn btn-warning"><h4>Torneiros</h4></a> 

  <a href="{{URL::to('vencedor')}}" title="" " class="btn btn-warning"><h4>Resultados</h4></a> 

 </div>
 <img src="{{URL::asset('/image/judo.png')}}" alt="profile Pic" height="600" width="900">
     <footer> 
      <h4>
        <p> 
          <marquee> 
       Desenvolvido por:  Fortunato Samo, Isaac Badrú e João Machiana 
          </marquee>
        </p> 
      </h4>
     </footer>
   
        @yield('content')
    </body>
</html>