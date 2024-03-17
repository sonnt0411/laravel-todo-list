<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <!-- Add your CSS files here -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav>
        <!-- Add your navigation links here -->
        <a href="{{ route('todos.index') }}">Home</a>
        <a href="{{ route('todos.create') }}">Create Todo</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Add your JavaScript files here -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>