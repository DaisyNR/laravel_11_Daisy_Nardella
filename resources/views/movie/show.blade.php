<x-layout>
    <div class="container">
    <div class="row justify-content-center glass-card m-5 p-5 rounded-4 d-flex flex-column flex-md-row">

            <div class="col-12 col-md-4">
                <img src="{{ Storage::url($movie->img) }}" class="card-img-top rounded shadow" alt="poster">
            </div>
    
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                <h2>{{ $movie->title }}</h2>
                <h3>By {{ $movie->director }}</h3>
                <p>{{ $movie->plot }}</p>
                <a href="#" class="btn btn-light mt-3 align-self-start">
                    Edit
                </a>
                <a href="{{ route('movie.index') }}" class="btn btn-light mt-3 align-self-start">
                    < Go back
                </a>
            </div>

        </div>

    </div>
</div>
</x-layout>