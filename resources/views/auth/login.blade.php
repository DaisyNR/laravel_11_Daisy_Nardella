<x-layout>

<x-display-message/>
<x-display-errors/>
    <div class="container-fluid bg-custom vh-100">
        <canvas class="bg-universe"></canvas>
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <h1 class="text-center title-galaxy2 my-3">LOGIN</h1>
                <form class="rounded-4 p-3 login-card my-2" action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Your email:</label>
                        <input name="email" type="email" value="{{old('email')}}" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Your password:</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    
                    <button type="submit" class="btn btn-light rounded-4">Login</button>
                    
                </form>
            </div>
        </div>
    </div>
</x-layout>