@extends('layouts.app')

@section('content')
    <h1>Создать задачу</h1>
    {!! Form::open(['action' => 'TodosController@store', 'method' => 'post']) !!}
        {{ Form::bsText('text') }}
        {{ Form::bsTextArea('body') }}
        {{ Form::bsText('due') }}
        {{ Form::bsSubmit('Создать', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection