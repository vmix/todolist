@extends('layouts.app')

@section('content')

    @include('inc.messages')
    <div class="well">
        <h1>{{ $todo->text }}</h1>
        <p>{{ $todo->body }}</p><span class="label label-danger">{{ $todo->due }}</span>
    </div>
    <hr>
    <a class="btn btn-default" href="/">Назад</a>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-primary">Редактировать</a>
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{ Form::hidden('_method', 'Удалить') }}
        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}


@endsection