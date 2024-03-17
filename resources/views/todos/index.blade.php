@extends('layouts.app')

@section('content')
    <h1>All Todos</h1>
    @foreach($todos as $todo)
        <p>
            {{ $todo->title }} - 
            <span>{{ $todo->completed ? 'Completed' : 'Not Completed' }}</span>
            <a href="{{ route('todos.edit', $todo->id) }}">Edit</a>
        </p>
    @endforeach
@endsection