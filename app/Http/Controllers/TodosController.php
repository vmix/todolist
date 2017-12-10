<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::orderBy('created_at', 'desc')->get();

        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'text' => 'required'
        ]);

        //Create todo
        $todo = new Todo();
        $todo->text = $request->input('text');
        $todo->body = $request->input('body');
        $todo->due = $request->input('due');

        $todo->save();

        return redirect('/')->with('success', 'Todo created');
    }

    public function show($id)
    {
        $todo = Todo::find($id);
        return view('todos.show', compact('todo'));
    }


    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);

        $todo->text = $request->input('text');
        $todo->body = $request->input('body');
        $todo->due = $request->input('due');

        $todo->save();

        return redirect('/')->with('success', 'Todo updated');
    }

    public function destroy($id)
    {
        $todo = Todo::find($id);

        $todo->delete();

        return redirect('/')->with('success', 'Todo deleted');
    }
}
