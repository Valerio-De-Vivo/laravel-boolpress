@extends('layouts.dashboard')

@section('content')
    <div class="container">
        

        <form action=" {{route('post.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="testo">Testo</label>
                <input type="text" class="form-control" id="testo" name="text">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection