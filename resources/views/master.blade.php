<!doctype html>
<html lang="{{ config('app.locale') }}">  

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