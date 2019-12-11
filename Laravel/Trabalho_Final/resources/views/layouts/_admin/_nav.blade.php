<nav>
  <div class="nav-wrapper teal darken-1">
  <div class="container">
    <a href="/" class="brand-logo">Home</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="">Animais para Adoção</a></li>
      <li><a href="">Finais Felizes</a></li>
      <li><a href="">Fale Conosco</a></li>
      @if(Auth::guest())
        <li><a href="{{route('admin.login')}}">Login</a></li>
      @else
      <li><a href="#">{{Auth::user()->name}}</a></li>
      @endif
      <li><a href="/">Home</a></li>
    </ul>
  </div>
  </div>
</nav>