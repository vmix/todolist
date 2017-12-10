@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/todo/{{$todo->id}}">Назад</a>
    <h1>Редактировать задачу</h1>
    {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'post']) !!}
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::bsText('text', $todo->text) }}
        {{ Form::bsTextArea('body', $todo->body) }}
        {{ Form::bsText('due', $todo->due) }}
        {{ Form::bsSubmit('Записать', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection