@extends('layouts.app')

@section('content')
    <h1>Edit Todo</h1>
    <form method="POST" action="{{ route('todos.update', $todo->id) }}">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $todo->title }}">
        <input type="checkbox" name="completed" {{ $todo->completed ? 'checked' : '' }}>
        <button type="submit">Update</button>
    </form>
@endsection