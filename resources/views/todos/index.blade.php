@extends('master')

@section('title', 'todos')

@section('content')
<div class=" alert-success">
    @if (session('success'))
        {{session('success')}};
    @endif
</div><br><br>

    @forelse ($todos as $todo)
        <a href="todos/{{$todo->id}}"><span  class="text-success" role="alert"> {{$todo->text}}</span></a> <br>
        <span class="text-primary">{{$todo->body}}</span> <br>
        <span class="text-danger">{{$todo->due}} </span>
        <br>
    @empty
        <h3 class="alert alert-info">
          Sorry Todo list is empty, <a class="btn btn-success" href="/todos/create">Create Todo</a> list  
        </h3>

       
    @endforelse
@endsection