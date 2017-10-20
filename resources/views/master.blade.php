<!doctype html>
<html lang="{{ config('app.locale') }}"> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <title>Cadastro dos clubes</title> -->
        <!-- Fonts -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <br><br>

        <h1><p class="text-center">Federação Moçambicana de Judo</p>
      <div class="container">
     <a href="{{URL::to('home')}}" title=""><h4>Home</h4></a></div>
        </h1>

        @yield('content') 
    </body>
</html>