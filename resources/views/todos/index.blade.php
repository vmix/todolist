@extends('layouts.app')

@section('content')
    <h1>Задачи</h1>
        @foreach($todos as $todo)
            <div class="well">
                <h3><a href="/todo/{{ $todo->id }}">{{ $todo->text }}</a></h3>
                <span class="label label-danger">{{ $todo->due }}</span>
            </div>
        @endforeach
@endsection

