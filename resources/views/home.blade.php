@extends('layouts.mainLayout')

@section('content')
    <div class="card-container">
        @foreach ($movies as $movie)
            <div class="card">
                <h2>{{ $movie->title }}</h2>
                <span>{{ $movie->original_title }}</span><br>
                <span>{{ $movie->nationality }}</span><br>
                <span>{{ $movie->vote }}</span><br>
            </div>
        @endforeach
    </div>
@endsection
