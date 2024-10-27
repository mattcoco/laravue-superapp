<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
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
        'task' => 'required|max:255',  // Asegúrate de que el nombre sea correcto
    ]);

    // Crea el To-Do usando los datos de la solicitud
    ToDo::create([
        'task' => $request->task,  // Asegúrate de que estás usando el campo correcto
    ]);

    return redirect()->route('todos.index')->with('success', 'Tarea añadida exitosamente.');
}


    public function destroy($id)
    {
        $toDo = ToDo::findOrFail($id);
        $toDo->delete();

        return redirect()->route('todos.index')->with('success', 'Tarea eliminada exitosamente.');
    }
}
