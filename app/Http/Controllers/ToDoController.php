<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ToDo;

class ToDoController extends Controller
{
    public function index()
    {
        $todo = ToDo::all();
        return view("todos.index", compact("todo"));
    }

    public function show(ToDo $todo) {
        return view("todos.show", compact("todo"));
    }
    public function create(){
        return view("todos.create");
    }
    public function store(Request $request) {
        $validated = $request->validate([
            "content" => ["required", "max:255"]
        ]);
    
        ToDo::create([
            "content" => $validated['content'],
            "completed" => false
        ]);
    
        return redirect("/todos");
    }
    
    public function edit(ToDo $todo) {
        return view("todos.edit", compact("todo"));
    }
    public function update(Request $request, Todo $todo) {
        $validated = $request->validate([
            "content" => ["required", "max:255"],
            "completed" => ["boolean"]
        ]);

        $todo->content = $validated["content"];
        $todo->completed = $validated["completed"];

        $todo->save();
        return view("todos.show", compact("todo"));
    }
    public function destroy(Todo $todo){
        $todo->delete();
        
        return redirect("/todos");
    }
}
