<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg">
  <div class="container-fluid">
    <a class="navbar-brand me-5" href="#">Thrift shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item px-3">
          <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        @guest
        <li class="nav-item px-3">
          <a class="nav-link" href="{{route('register')}}">Registrati</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="{{route('login')}}">Accedi</a>
        </li>
        @endguest
        @auth
        <li class="nav-item px-3">
          <a class="nav-link" href="{{route('product.sell')}}">Carica un articolo</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="{{route('product.index')}}">I tuoi annunci</a>
        </li>
        <li class="nav-item px-3">
          <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-link nav-link" style="border: none; background: none;">
              Logout
            </button>
          </form>
        </li>
        @endauth
      </ul>
      
    </div>
  </div>
</nav>