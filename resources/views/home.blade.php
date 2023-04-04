@extends('layouts.app')

@section('main_content')
    <section class="container">
        <h2 class="text-center my-3">WELCOME </h2>
        <div class="alert alert-primary text-center" role="alert">
            <a class="text-center" href="{{ route('songs.index') }}">Go to songs list</a>
        </div>
    </section>
@endsection
