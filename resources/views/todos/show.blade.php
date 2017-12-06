@extends('layouts.welcome')

@section('content')
    <a class="btn btn-default" href="/">Go back</a>
    @include('inc.messages')
    <div class="well">
        <h1>{{ $todo->text }}</h1>
        <p>{{ $todo->body }}</p><span>{{ $todo->due }}</span>
    </div>
@endsection