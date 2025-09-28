<x-layout>
<canvas class="bg-universe"></canvas>
     <div class="container-fluid w-100 hero">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-12 col-md-8 text-center">
            <h1 class="titolo display-3">MOVIEVERSE</h1>
            <a href="{{route('movie.index')}}">
                <button type="submit" class="btn btn-lg m-3 btn btn-outline-dark b-custom">All articles</button>
            </a>
            <a href="{{route('movie.create')}}">
                <button type="submit" class="btn btn-lg m-3 btn-outline-dark b-custom">Upload article</button>
            </a>
        </div>
    </div>
</div>


    
    
    
    
</x-layout>