<x-layout>
    <header class="height:200px;">
        <div class="container h-100 ">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 col-md-6">
                    <h1 class="titolo text-center">I TUOI ANNUNCI</h1>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container">
        <div class="row">
            @foreach($products as $product)
            <div class="col-12 col-md-3 d-flex justify-content-center my-3">
                <div class="card d-flex flex-column" style="width: 10rem; height: 100%">
                    <img src="https://picsum.photos/100" class="card-img-top" alt="immagine casuale">
                    <div class="card-body p-2 d-flex flex-column">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <h6 class="card-subtitle mb-3">{{$product->price}}€</h6>
                        <p class="card-text">{{$product->description}}</p>
                        <a href="#" class="btn btn-primary btn-sm mt-auto ">Continua a leggere</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    
</x-layout>