@extends('layouts.app')

@section('main_content')
    <section class="container my-5">
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
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>
@endsection
