
@extends('master')

@section('title', 'todos')

@section('content')
{!! Form::open(['action' => ['TodosController@update', $todo->id], 'method'=>'POST']) !!}
    <a class="btn btn-warning" href="/todos/{{$todo->id}}">Go Back</a>
    <div class="form-group">
        {{ Form::label('text', 'Text')}}
            @method('PUT')
        {{Form::text('text',$todo->text,['class' => 'form-control', 'placeholder' => 'Enter Text'])}}

        @error('text')
            <p class = "text-danger" >
                {{$message}}
            </p>
        @enderror
    </div>
    <div class="form-group">
        {{ Form::label('due', 'Due') }}
        {{Form::text('due',$todo->due,['class' => 'form-control', 'placeholder' => 'Enter due date'] )}}
        @error('due')
            <p class = "text-danger" >
                {{$message}}
            </p> 
        @enderror
    </div>
    <div class="form-group">
        {{ Form::label('body', 'Body') }}
        {{Form::textarea('body',$todo->body,['class' => 'form-control', 'placeholder' => 'Enter message'] )}}
        @error('body')
            <p class = "text-danger" >
                {{$message}}
            </p> 
        @enderror
    </div>
    <div>
        {{form::submit('Update', ['class' => 'btn btn-primary'])}}
    </div>
    
{!! Form::close() !!}

@endsection