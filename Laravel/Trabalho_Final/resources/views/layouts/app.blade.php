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

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
  </head>
  <body>
    @include('layouts._admin._nav')
    <main>
      @if(Session::has('mensagem'))
        <div class="container">
          <div class="row">
            <div class="card {{Session::get('mensagem')['class']}}">
              <div align="center" class="card-content">
                {{Session::get('mensagem')['msg']}}
              </div>
            </div>
          </div>
        </div>
      @endif
      @yield('content')
    </main>
  

    <!--Rodapé -->
    
    <footer class="page-footer  teal darken-1">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Footer Content</h5>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Site</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        ©2019 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
      </div>
    </footer>


    <!-- Scripts -->
    <script src="{{ asset('lib/jquery/dist/jquery.js')}}"></script>
    <script src="{{ asset('lib/materialize/dist/js/materialize.js')}}"></script>
  </body id="app-layout">
</html>
