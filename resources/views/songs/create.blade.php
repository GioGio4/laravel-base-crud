@extends('layouts.app')

@section('main_content')
    <section class="container">
        <h2 class="text-center my-3">ADD NEW SONG</h2>

        <form action="{{ route('songs.store') }}" method="POST" class="row row-cols-3 g-5">
            @csrf
            <div class="col">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" placeholder="Add title" class="form-control">
            </div>

            <div class="col">
                <label for="album" class="form-label">Album</label>
                <input type="text" name="album" id="album" placeholder="Add Album" class="form-control">
            </div>

            <div class="col">
                <label for="author" class="form-label">Author</label>
                <input type="text" name="author" id="author" placeholder="Add Author" class="form-control">
            </div>


            <div class="col">
                <label for="editor" class="form-label">Editor</label>
                <input type="text" name="editor" id="editor" placeholder="Add Editor" class="form-control">
            </div>

            <div class="col">
                <label for="length" class="form-label">Length</label>
                <input type="number" step=".01" name="length" id="length" placeholder="Add Length"
                    class="form-control">
            </div>

            <div class="col">

                <label for="poster" class="form-label">Poster</label>
                <input type="text" name="poster" id="poster" placeholder="Add Poster" class="form-control">
            </div>

            <div class="col">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>



        {{-- Title

        Album
        
        Author
        
        Editor
        
        Length
        
        Poster --}}
    </section>
@endsection
