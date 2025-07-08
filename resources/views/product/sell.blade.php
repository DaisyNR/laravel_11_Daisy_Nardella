<x-layout>
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="container-fluid bg-custom">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <form class="rounded-4 p-3 bg-secondary-subtle my-2" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Cosa vuoi vendere?</label>
                        <input name="name" type="text" value="{{old('name')}}" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrivi brevemente il prodotto:</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="4">{{old('description')}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">A quanto lo vuoi vendere?</label>
                        <div class="d-flex justify-content-between">
                            <input name="price" type="text" value="{{old('price')}}" class="form-control" id="price">
                            <p class="px-2">€</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Cosa vuoi vendere?</label>
                        <input name="img" type="file" class="form-control" id="img">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Invio</button>

                </form>
            </div>
        </div>
    </div>
</x-layout>