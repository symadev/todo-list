<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // Show all To-Do items
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    // Store a new To-Do item
    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required|max:255',
        ]);

        Todo::create([
            'task' => $request->task,
        ]);

        return redirect()->route('todos.index');
    }

    // Mark a To-Do item as done
    public function update(Todo $todo)
    {
        $todo->is_done = !$todo->is_done;
        $todo->save();

        return redirect()->route('todos.index');
    }

    // Delete a To-Do item
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index');
    }
}
