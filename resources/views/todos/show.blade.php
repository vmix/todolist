@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/">Go back</a>
    @include('inc.messages')
    <div class="well">
        <h1>{{ $todo->text }}</h1>
        <p>{{ $todo->body }}</p><span class="label label-danger">{{ $todo->due }}</span>
    </div>
@endsection