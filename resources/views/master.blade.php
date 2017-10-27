<!doctype html>
<html lang="{{ config('app.locale') }}">  

        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"> 
    <body>
        <br><br> 
                  <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>      
   <ul class="nav navbar-nav navbar-right">
   <!-- <ul class="nav navbar-nav navbar-right"> -->
                         
             <li>
                   <a href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                   Sair
                   </a> 
                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                                   </form>
             </li>
   </ul>    </div>

        <h1><p class="text-center">Federação Moçambicana de Judo</p>
      <div class="container">
        </h1>

        @yield('content') 
    </body>
</html>

