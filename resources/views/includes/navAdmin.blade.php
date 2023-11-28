<nav class="navbar sticky-top bg-opacity-75 p-1 bg-danger">
  <div class="container-fluid">
    <button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ZI</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link border-bottom" aria-current="page" href="{{ route('admin.dashboard') }}">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link border-bottom" aria-current="page" href="{{ route('admin.produtos') }}">Produtos</a>
          </li>
        </ul>
      </div>
    </div>
    <a class="navbar-brand px-5" href="">ZI</a>
    <button class="ms-auto btn btn-danger" onclick="fullScreen(this)" type="button"><i class="bi bi-fullscreen"></i></button>
    <div class="navbar-expand">
      <ul class="navbar-nav mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ auth()->user()->nome }}
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="">Dashboard</a></li>
            <li><a class="dropdown-item" href="">Sair</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
