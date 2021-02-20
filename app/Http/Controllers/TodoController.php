<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Redirect;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return \view('todos.index', compact('todos'));
    }
    public function show($id)
    {
        $todos = Todo::findOrFail($id);
        return \view('todos.show', compact('todos'));
    }
    public function create()
    {
        return \view('todos.create');
    }
    public function store(Request $request)
    {
        // Create Rules

        $request->validate([

            'title' => 'required',
            'desc' => 'required'
        ]);
        $todos = new Todo();
        $todos->title = $request->title;
        $todos->desc = $request->desc;
        $todos->status = false;

        $todos->save();
        return redirect('/');
    }
    public function edit($id)
    {
        $todos = Todo::findOrFail($id);
        return \view('todos.edit', compact('todos'));
    }
    public function update(Request $request, $id)
    {
        // Create Rules

        $request->validate([

            'title' => 'required',
            'desc' => 'required'
        ]);
        $todos = Todo::findOrFail($id);
        $todos->title = $request->title;
        $todos->desc = $request->desc;

        $todos->save();
        return redirect('/');
    }
    public function delete($id)
    {
        $todos = Todo::findOrFail($id);
        $todos->delete();
        return Redirect('/');
    }
    public function status($id)
    {
        $todos = Todo::findOrFail($id);
        $todos->status = true;
        $todos->save();
        return Redirect('/');
    }
    public function status2($id)
    {
        $todos = Todo::findOrFail($id);
        $todos->status = false;
        $todos->save();
        return Redirect('/');
    }
}
