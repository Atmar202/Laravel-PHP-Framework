@extends('todos.layout')

@section('content')
<div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl pb-4">Update this todo list</h1>
        <a href="{{'todo.index'}}" class="mx-5 py-2 text-gray-400 cursor-pointer text-white">
        <span class="fas fa-arrow-left"></span></a>
        </div>
        <x alert />
        <form method="post" action="{{route('todo.update',$todo->id)}}" class="py-5">
        @csrf
        @method('patch')
        <div class="py-1">
            <input type="text" name="title" class="py-2 px-2 border rounded" placeholder="title" value="{{$todo->title}}" />
        </div>
        <div class="py-1">
            <textarea name="description" class="p-2 rounded border" placeholder="description" value="{{$todo->description}}"></textarea>
        </div>
        <div class="py-1">
            <input type="submit" value="Create" class="p-2 border rounded" />
        </div>

        <input type="submit" value="Update" class="p-2 border rounded" />
    </form>
@endsection