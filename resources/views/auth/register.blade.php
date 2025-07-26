<x-layout>

    <x-display-errors/>
    <x-display-message/>

    <div class="container-fluid bg-custom">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <h1 class="text-center title-galaxy2">REGISTRATI</h1>
                <form class="rounded-4 p-3 bg-secondary-subtle my-2" action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Inserisci la tua mail</label>
                        <input name="email" type="email" value="{{old('email')}}" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                     <div class="mb-3">
                        <label for="name" class="form-label">Inserisci il tuo nome</label>
                        <input name="name" type="text" value="{{old('name')}}" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Inserisci una password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma la tua password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Registrati</button>
                    
                </form>
            </div>
        </div>
    </div>
</x-layout>