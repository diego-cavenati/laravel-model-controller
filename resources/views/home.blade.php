@extends('layouts.app')

@section('contents')
<main>
    <div class="container">
        <div class="row row-cols-3 g-3">
            @foreach($movies as $movie)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$movie->title}}</h4>
                        <h5>{{$movie->original_title}}</h5>
                        <p class="card-text">{{$movie->nationality}}</p>
                        <div>{{$movie->date}}</div>
                        <div>{{$movie->vote}}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection