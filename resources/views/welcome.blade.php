<x-layout>
    
  <div class="container-fluid bg-custom w-100 hero">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-12 col-md-8 text-center">
            @guest
            <h1 class="titolo display-3">THRIFT SHOP</h1>
            @endguest
            @auth
            <h1 class="titolo display-3">BENVENUT@ {{Auth::user()->name}}</h1>
            @endauth
            <a href="{{route('product.sell')}}">
                <button type="submit" class="btn btn-lg m-3 btn btn-outline-dark b-custom">Carica un articolo</button>
            </a>
            <a href="{{route('product.index')}}">
                <button type="submit" class="btn btn-lg m-3 btn-outline-dark b-custom">Vedi i tuoi annunci</button>
            </a>
        </div>
    </div>
</div>
    
    
    
    
</x-layout>