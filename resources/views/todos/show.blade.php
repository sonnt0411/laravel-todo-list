@extends('layouts.app')

@section('content')
    <h1>{{ $todo->title }}</h1>
    <p>{{ $todo->completed ? 'Completed' : 'Not Completed' }}</p>
@endsection