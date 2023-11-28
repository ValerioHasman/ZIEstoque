<ul id="dropdowndesktop" class="dropdown-content">
  @foreach ($categoriasMenu as $categoria)
      <li><a href="{{ route('site.categoria', $categoria->id ) }}">{{ $categoria->nome }}</a></li>
  @endforeach
</ul>

<ul id="dropdownmobile" class="dropdown-content">
  @foreach ($categoriasMenu as $categoria)
      <li><a href="{{ route('site.categoria', $categoria->id ) }}">{{ $categoria->nome }}</a></li>
  @endforeach
</ul>

@auth
<ul id="dropdowndashboard" class="dropdown-content">
  <li><a href="{{ route("admin.dashboard") }}">Dashboard</a></li>
  <li><a href="{{ route("login.logout") }}">Sair</a></li>
</ul>

<ul id="dropdowndashboardmobile" class="dropdown-content">
  <li><a href="{{ route("admin.dashboard") }}">Dashboard</a></li>
  <li><a href="{{ route("login.logout") }}">Sair</a></li>
</ul>
@endauth

<nav class="red sticky-top">
  <div class="nav-wrapper">
    <a href="" class="brand-logo">ZI</a>
    <a href="" data-target="mobile-sidenav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="">Home</a></li>
      <li><a href="carrinho"><i class="material-icons left">shopping_cart</i>Carrinho 
          @if (\Cart::getContent()->count() > 0)
              <span class="new blue badge" data-badge-caption="">{{ \Cart::getContent()->count() }}</span>
          @endif
      </a></li>
      <li><a class="dropdown-trigger" href="" data-target="dropdowndesktop">Categorias<i class="material-icons right">arrow_drop_down</i></a></li>
      @auth
        <li><a class="dropdown-trigger" href="" data-target="dropdowndashboard">{{ auth()->user()->nome }}<i class="material-icons right">arrow_drop_down</i></a></li>
      @else
        <li><a href="{{ route('login.formulario') }}">Login</a></li>
      @endauth
      </ul>
  </div>
</nav>

<ul class="sidenav" id="mobile-sidenav">
  <li><a href="">Home</a></li>
  <li><a href="carrinho"><i class="material-icons left">shopping_cart</i>Carrinho 
      @if (\Cart::getContent()->count() > 0)
          <span class="new blue badge" data-badge-caption="">{{ \Cart::getContent()->count() }}</span>
      @endif
  </a></li>
  <li><a class="dropdown-trigger" href="" data-target="dropdownmobile">Categorias<i class="material-icons right">arrow_drop_down</i></a></li>
  @auth
    <li><a class="dropdown-trigger" href="" data-target="dropdowndashboardmobile">{{ auth()->user()->nome }}<i class="material-icons right">arrow_drop_down</i></a></li>
  @else
    <li><a href="{{ route('login.auth') }}">Login</a></li>
  @endauth
</ul>
