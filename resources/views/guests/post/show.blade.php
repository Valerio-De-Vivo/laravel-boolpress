@extends('layouts.app')

@section('content')
    <div class="container">
        
        <div class="card">
            <h5 class="card-header"> {{$post->name}} </h5>
            <div class="card-body">
                <p class="card-text">{{$post->text}}</p>
                <p> {{ $post->user->name }} </p>
            </div>
        </div>
    
    </div>
@endsection