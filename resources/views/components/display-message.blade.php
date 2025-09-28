@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@if(session()->has('successMessage'))
    <div class="alert alert-success m-5 p-5">
        {{ session('successMessage') }}
    </div>
@endif