<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('todos.index');
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        if(!$request->title){
            return redirect()->back()->with('error', 'Please give title');
        }
        Todo::create($request->all());
        return redirect()->back()->with('message','Todo Created Successfully');
    }

    public function edit()
    {
        return view('todos.edit');
    }
}
