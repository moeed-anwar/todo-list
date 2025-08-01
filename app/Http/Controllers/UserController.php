<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function get(){
        $task = Auth::user()->todos;
        // $task = Todo::all();
        // dd($task);
        return view('todos.index',['tasks'=> $task]);
    }
    public function create(){
        return view('todos.create');
    }
    public function add(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'status' => 'required',
    ]);

    Auth::user()->todos()->create([
        'name' => $request->name,
        'status' => $request->status,
    ]);

    return redirect()->route('todo');
}

    // public function add(Request $request){
    //     Todo::create($request->all());
    //     // return($request);

    //     return redirect()->route('todo');
    // }
    public function edit( Todo $task){
        return view('todos.edit',['task'=> $task]);
    }
    public function update(Request $request,Todo $task){
       $data = $request->all();
       $task->update($data);
      return redirect()->route('todo');
    }
    public function delete(Todo $task){
        $task->delete();
        return redirect()->route('todo');
    }
}
