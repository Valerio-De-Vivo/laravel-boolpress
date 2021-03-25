@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($posts as $post)
        <div class="card">
            <h5 class="card-header"> {{$post->name}} </h5>
            <div class="card-body">
                <p class="card-text">{{$post->text}}</p>
                <p> {{ $post->user->name }} </p>
                <a href=" {{route('guests.post.show' , $post->slug)}} " class="btn btn-primary">Dettagli</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection