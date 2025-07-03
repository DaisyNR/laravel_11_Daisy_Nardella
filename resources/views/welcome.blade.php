<x-layout>
    <header class="height:200px;">
        <div class="container h-100 ">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 col-md-6">
                    <h1 class="titolo text-center">THRIFT SHOP</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form class="rounded-4 p-3 bg-secondary-subtle my-3" action="{{route('product.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Cosa vuoi vendere?</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrivi brevemente il prodotto:</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="4"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">A quanto lo vuoi vendere?</label>
                        <div class="d-flex justify-content-between">
                            <input name="price" type="text" class="form-control" id="price">
                            <p class="px-2">€</p>
                        </div>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Invio</button>

                </form>
            </div>
        </div>
    </div>

</x-layout>