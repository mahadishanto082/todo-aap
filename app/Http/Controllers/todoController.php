<?php

namespace App\Http\Controllers;

use App\Http\Requests\todoRequest;
use App\Models\Todo; // 
use Illuminate\Http\Request;

class todoController extends Controller
{
    public function index(){

        $todo = Todo::all();
        return view('todo.todoindex',[
        'todo' => $todo
        ]);
}
    public function create(){
        return view('todo.create');
    }
    public function store(todoRequest $request){
        $todo = Todo::create ([
            'title' => $request->title,
            'description' => $request->description,
            'is_completed' => 0,
        ]);
        
        // Flash a success message to the session
        session()->flash('alert-success', 'To-do created successfully');
        
        // Redirect to the todo index page
        return redirect()->route('todo');
    }
    
    public function delete($id) {
        $todo = Todo::findOrFail($id);
        $todo->delete();
    
        // Flash a success message to the session
        session()->flash('alert-success', 'Todo deleted successfully');
    
        // Redirect back to the todo index page
        return redirect()->route('todo');

    }
    public function view($id){
        $todo =Todo::find($id);
        if(! $todo){
            return redirect()->route('todo')->withErrors([
                'error' => 'unable to locate'
            ]);

        }

        return view('todo.view', ['todo' => $todo]) ;
    }
    public function edit($id){
        $todo =Todo::find($id);
        if(! $todo){
            return redirect()->route('todo')->withErrors([
                'error' => 'unable to locate'
            ]);

        }

        return view('todo.edit', ['todo' => $todo]) ;
    }
    public function update(todoRequest $request){
        $todo = Todo::find($request->todo_id);
        if(! $todo){
            return redirect()->route('todo')->withErrors([
                'error' => 'Unable to locate the todo'
            ]);
        }
        
        // Update the todo
        $todo->update([
            'title' => $request->title,
            'description' => $request->description,
            'is_completed' => $request->is_completed
        ]);
    
        // Flash a success message to the session
        session()->flash('alert-success', 'Todo updated successfully');
    
        // Redirect back to the todo index page
        return redirect()->route('todo');
    }
    
    }

 
    
