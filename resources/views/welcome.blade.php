<x-layout>
<canvas class="bg-universe"></canvas>
     <div class="container-fluid w-100 hero">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-12 col-md-8 text-center">
            @guest
            <h1 class="titolo display-3">MOVIEVERSE</h1>
            @endguest
            @auth
            <h1 class="titolo display-3">BENVENUT@ {{Auth::user()->name}}</h1>
            @endauth
            <a href="{{route('product.sell')}}">
                <button type="submit" class="btn btn-lg m-3 btn btn-outline-dark b-custom">All articles</button>
            </a>
            <a href="{{route('product.index')}}">
                <button type="submit" class="btn btn-lg m-3 btn-outline-dark b-custom">Upload an article</button>
            </a>
        </div>
    </div>
</div>


    
    
    
    
</x-layout>