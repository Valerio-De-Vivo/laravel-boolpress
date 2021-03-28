@extends('layouts.dashboard')

@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">Nome</th>
        <th scope="col">Testo</th>
        <th scope="col">User</th>
    </tr>
    </thead>
    <tbody>
    
    <tr>
        
        <td> {{$post->name}} </td>
        <td>{{$post->text}}</td>
        <td>{{$post->user->name}}</td>
        <td> 
            
            <a class="btn btn-secondary" href=" {{route('post.edit', [$post->id])}} ">Modifica</a>
        </td>
        <td>
            <form method="post" action="{{route('post.destroy', $post->id)}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">CANCELLA</button>
            </form>
        </td>
    </tr>
        
    
    
    </tbody>
</table>
@endsection