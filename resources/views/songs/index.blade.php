@extends('layouts.app')

@section('main_content')
    <section class="container">
        <h2 class="text-center my-3">SONGS LIST</h2>

        <a href="{{ route('songs.create') }}" class="btn btn-outline-primary mb-3">Add new Song</a>
        <table class="table table-primary table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Album</th>
                    <th scope="col">Author</th>
                    <th scope="col">Editor</th>
                    <th scope="col">Length</th>
                    <th scope="col">Poster</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($songs as $song)
                    <tr>
                        <th scope="row">{{ $song->id }}</th>
                        <td>{{ $song->title }}</td>
                        <td>{{ $song->album }}</td>
                        <td>{{ $song->author }}</td>
                        <td>{{ $song->editor }}</td>
                        <td>{{ $song->length }}</td>
                        <td>{{ $song->poster }}</td>
                        <td><a href="{{ route('songs.show', ['song' => $song]) }}">Detail</a></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>
@endsection
