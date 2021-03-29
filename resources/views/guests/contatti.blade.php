@extends('layouts.app')

@section('content')
    <div class="container">
        
        <form action=" {{ route('guest.contatti.sent') }} " method="POST">
            @csrf
            @method('POST')
            @if (session('status'))
            <h2> {{session('status')}} </h2>
            @endif
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="mail" name="email">
            </div>
            
            <div class="form-group">
                <label for="text-area">Messaggio</label>
                <textarea class="form-control" id="text-area" name="text" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection