@extends('layouts.dashboard')

@section('content')
    <div class="container">
        
        <form action=" {{route('post.update', $post->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$post->name}}">
            </div>
            <div class="form-group">
                <label for="text">Testo</label>
                <input type="text" class="form-control" id="text" name="text" value="{{$post->text}}">
            </div>
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection