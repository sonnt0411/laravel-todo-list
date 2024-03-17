<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        $todo = new Todo;
        $todo->title = $request->title;
        $todo->completed = isset($request->completed);
        $todo->save();

        return redirect('/todos')->with('success', 'Todo item created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $todo = Todo::find($id);

        if ($todo) {
            return view('todos.show', ['todo' => $todo]);
        }

        return redirect('/todos')->with('error', 'Todo item not found');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $todo = Todo::find($id);

        if ($todo) {
            return view('todos.edit', ['todo' => $todo]);
        }

        return redirect('/todos')->with('error', 'Todo item not found');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        $todo = Todo::find($id);

        if ($todo) {
            $todo->title = $request->title;
            $todo->completed = isset($request->completed);
            $todo->save();

            return redirect('/todos')->with('success', 'Todo item updated successfully');
        }

        return redirect('/todos')->with('error', 'Todo item not found');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);

        if ($todo) {
            $todo->delete();
            return redirect('/todos')->with('success', 'Todo item deleted successfully');
        }

        return redirect('/todos')->with('error', 'Todo item not found');
    }
}
