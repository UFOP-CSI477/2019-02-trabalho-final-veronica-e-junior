<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
   <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Chamando o Materialize -->

    <link rel="stylesheet" type="text/css" href="{{asset('lib/materialize/dist/css/materialize.css')}}">

    <title>{{ config('app.name', 'Não compre, adote!') }}</title>


    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body>
    <div id="app">

      <!-- /header -->    
      <header>
        @include('layouts._site._nav')
      </header>    

        @yield('content')
    </div>


        <!--Rodapé -->
    
        <footer class="page-footer  teal darken-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">#naocompreadote</h5>
                <p class="grey-text text-lighten-4">Adoção é amor. Simples assim.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="\">Home</a></li>
                  <li><a class="grey-text text-lighten-3" href="login">Login</a></li>
                  <li><a class="grey-text text-lighten-3" href="finaisfelizes">Quem já adotou</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
          </div>
        </footer>





    <!-- Scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="{{ asset('lib/jquery/dist/jquery.js')}}"></script>
    <script src="{{ asset('lib/materialize/dist/js/materialize.js')}}"></script>
    <script src="{{asset('js/init.js')}}"></script>

</body>
</html>
