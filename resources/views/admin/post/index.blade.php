@extends('layouts.dashboard')

@section('content')

@if (session('status'))
<div class="alert alert-success">
  {{session('status')}}
</div>
@endif

<table class="table">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Testo</th>
        <th scope="col">User</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        
        <td> {{$post->name}} </td>
        <td>{{$post->text}}</td>
        <td>{{$post->user->name}}</td>
        <td> 
            <a class="btn btn-primary" href=" {{route('post.show', [$post->id])}} ">Dettagli</a>
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
          
      @endforeach
      
    </tbody>
  </table>
@endsection