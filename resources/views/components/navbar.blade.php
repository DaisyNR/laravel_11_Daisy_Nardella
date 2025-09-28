<nav class="navbar navbar-expand-lg shadow-lg">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item px-3">
          <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        @guest
        <li class="nav-item px-3">
          <a class="nav-link" href="{{route('register')}}">Register</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        @endguest
        @auth
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Welcome back {{Auth::user()->name}}</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="{{route('product.sell')}}">Upload an article</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="{{route('product.index')}}">Your articles</a>
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