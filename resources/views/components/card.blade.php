<div class="card d-flex flex-column" style="width: 10rem; height: 100%">
    <img src="{{Storage::url($movie->img)}}" class="card-img-top" alt="">
    <div class="card-body p-2 d-flex flex-column">
        <h5 class="card-title">{{$movie->title}}</h5>
        <h6 class="card-subtitle mb-3">By {{$movie->director}}</h6>
        <p class="card-text">{{$movie->plot}}</p>
        <a href="#" class="btn btn-light btn-sm mt-auto ">Read more</a>
    </div>
</div>