@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/todo/{{$todo->id}}">Go Back</a>
    <h3>Edit Todo</h3>
    <hr>
    {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}

    {{ Form::bsText('text', $todo->text) }}
    {{ Form::bsTextarea('body', $todo->body) }}
    {{ Form::bsText('due', $todo->due) }}
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::bsSubmit('Submit', ['class' => 'btn  btn-primary']) }}

    {!! Form::close() !!}
@endsection