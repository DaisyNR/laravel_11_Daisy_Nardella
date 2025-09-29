<x-layout>

    <div class="container-fluid vh-100">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1 class="text-center title-galaxy2 my-3">WHAT'S YOUR FAVOURITE MOVIE?</h1>
                <form class="rounded-4 p-3 glass-card my-2" action="{{route('movie.submit')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" name="title" value="{{old('title')}}" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="director" class="form-label">Director:</label>
                        <input type="text" name="director" value="{{old('director')}}" class="form-control" id="director">
                    </div>
                    <div class="mb-3">
                        <label for="plot" class="form-label">Plot:</label>
                        <textarea name="plot" id="plot" cols="30" rows="10" class="form-control">{{old('plot')}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Poster:</label>
                        <input type="file" name="img" class="form-control" id="img">
                    </div>
                    <button type="submit" class="btn btn-light">Post</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>