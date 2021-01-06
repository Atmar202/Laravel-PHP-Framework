<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(TodoCreateRequest $request)
    {
        //$rules = [
        //    'title' => 'required|max:255',
        //];
        //$messages = [
        //    'title.max' => 'Todo title should not be greater than 255 chars.',
        //]
        //$validator = Validator::make($request->all(), $rules, $messages);
        //if($validator->fails()) {
        //    return redirect()->back()->withErrors($validator)->withInput();
        //}
        //$request->validate([
        //    'title' => 'required|max:255',
        //]);
        //if(!$request->title){
        //    return redirect()->back()->with('error', 'Please give title');
        //}
        Todo::create($request->all());
        return redirect()->back()->with('message','Todo Created Successfully');
    }

    public function edit()
    {
        $todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }
}
