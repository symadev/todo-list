<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <style>
        .done { text-decoration: line-through; }
    </style>
</head>
<body>

<h1>Todo List</h1>

<form action="{{ route('todos.store') }}" method="POST">
    @csrf
    <input type="text" name="task" placeholder="Add a new task" required>
    <button type="submit">Add</button>
</form>

<ul>
    @foreach($todos as $todo)
        <li>
            <form action="{{ route('todos.update', $todo->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('PATCH')
                <button type="submit" class="{{ $todo->is_done ? 'done' : '' }}">
                    {{ $todo->task }}
                </button>
            </form>
            
            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>

</body>
</html>
