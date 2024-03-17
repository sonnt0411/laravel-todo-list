@extends('layouts.app')

@section('content')
    <h1>Create Todo</h1>
    <form method="POST" action="{{ route('todos.store') }}">
        @csrf
        <input type="text" name="title">
        <input type="checkbox" name="completed">
        <button type="submit">Create</button>
    </form>
@endsection