@extends('master')

@section('title', 'todos')

@section('content')
     
            <a href="/todos/{{$todo->id}}"><span  class="text-success" role="alert"> {{$todo->text}}</span></a> <br>
            <span class="text-primary">{{$todo->body}}</span> <br>
            <span class="text-danger">{{$todo->due}} </span>
            <br>
            <a class='btn btn-info' href="/todos/{{$todo->id}}/edit">Edit</a>

            <a class='btn btn-warning' href="/">Back</a>

            {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method'=>'POST']) !!}
               @method('DELETE')
                <div>
                    {{form::submit('Delete', ['class' => 'btn btn-primary btn-danger float-right'])}}
                </div>
    
            {!! Form::close() !!}
            
@endsection