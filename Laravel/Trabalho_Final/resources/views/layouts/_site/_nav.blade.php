<nav>
  <div class="nav-wrapper teal darken-1">
  <div class="container">
    <a href="/" class="brand-logo">#naocompreadote</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="">Animais para Adoção</a></li>
      <li><a href="finaisfelizes">Finais Felizes</a></li>
      @if(Auth::guest())
        <li><a href="{{route('admin.login')}}">Login</a></li>
      @else
      <li><a href="{{route('admin.perfil')}}">{{Auth::user()->name}}</a></li>
      @endif
    </ul>
  </div>
  </div>
</nav>