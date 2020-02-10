
@extends('master')

@section('title', 'todos')

@section('content')
{!! Form::open(['action' => 'TodosController@store', 'method'=>'POST']) !!}
<div class="form-group">
    {{ Form::label('text', 'Text')}}
    {{Form::text('text','',['class' => 'form-control', 'placeholder' => 'Enter Text'])}}

    @error('text')
        <p class = "text-danger" >
            {{$message}}
        </p>
    @enderror
</div>
<div class="form-group">
    {{ Form::label('due', 'Due') }}
    {{Form::text('due','',['class' => 'form-control', 'placeholder' => 'Enter due date'] )}}
    @error('due')
        <p class = "text-danger" >
            {{$message}}
        </p> 
    @enderror
</div>
<div class="form-group">
    {{ Form::label('body', 'Body') }}
    {{Form::textarea('body','',['class' => 'form-control', 'placeholder' => 'Enter message'] )}}
    @error('body')
        <p class = "text-danger" >
            {{$message}}
        </p> 
    @enderror
</div>
<div>
    {{form::submit('Submit', ['class' => 'btn btn-primary'])}}
</div>
    
{!! Form::close() !!}
{{-- <form action="TodosController@store" method="POST">
    @csrf
    <div class="form-group">
      <label for="text">Text</label>
      <input type="text" class="form-control" id="text" name="text">
    
    </div>
    <div class="form-group">
        <label for="text">Body</label>
        <input type="textarea" class="form-control" id="body" name="body">
    </div>
    <div class="form-group">
        <label for="text">Due</label>
        <input type="text" class="form-control" id="due" name="due">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form> --}}
@endsection