@extends('layouts.app')

@section('main_content')
    <section class="container">

        <h2 class="text-center my-3">SONG DETAIL </h2>

        <div class="card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ $song->poster }}" class="img-fluid rounded-start" alt="{{ $song->title }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text"><strong>ID: </strong>{{ $song->id }}</p>
                        <p class="card-text"><strong>Title: </strong>{{ $song->title }}</p>
                        <p class="card-text"><strong>Album: </strong>{{ $song->album }}</p>
                        <p class="card-text"><strong>Author: </strong>{{ $song->author }}</p>
                        <p class="card-text"><strong>Editor: </strong>{{ $song->editor }}</p>
                        <p class="card-text"><strong>Length: </strong>{{ $song->length }}</p>
                        <p class="card-text"><strong>Poster: </strong>{{ $song->poster }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
