<x-layout>

<x-display-message/>
<x-display-errors/>

    <div class="container-fluid bg-custom vh-100">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <h1 class="text-center title-galaxy2">ACCEDI</h1>
                <form class="rounded-4 p-3 bg-secondary-subtle my-2" action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Inserisci la tua mail:</label>
                        <input name="email" type="email" value="{{old('email')}}" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Inserisci la tua password:</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Accedi</button>
                    
                </form>
            </div>
        </div>
    </div>
</x-layout>