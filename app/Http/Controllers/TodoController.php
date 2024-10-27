<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $toDos = ToDo::all();
        return view('todos.index', compact('toDos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required|max:255', 
        ]);

        ToDo::create([
            'task' => $request->task, 
        ]);

        return redirect()->route('todos.index')->with('success', 'Tarea añadida exitosamente.');
    }

    public function edit($id)
    {
        $todo = ToDo::findOrFail($id);
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'task' => 'required|max:255',
            'completed' => 'boolean', // Si quieres actualizar el estado completado
        ]);

        $todo = ToDo::findOrFail($id);
        $todo->update([
            'task' => $request->task,
            'completed' => $request->completed,
        ]);

        return redirect()->route('todos.index')->with('success', 'Tarea actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $toDo = ToDo::findOrFail($id);
        $toDo->delete();

        return redirect()->route('todos.index')->with('success', 'Tarea completada.');
    }

    public function show($id)
    {
        $todo = ToDo::findOrFail($id);
        $toDos = ToDo::all();

        return view('todos.show', compact('todo', 'toDos'));
    }
}
