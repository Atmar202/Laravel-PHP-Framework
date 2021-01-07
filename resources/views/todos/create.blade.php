@extends('todos.layout')

@section('content')
<div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl pb-4">What next you need To-DO</h1>
        <a href="{{'todo.index'}}" class="mx-5 py-2 text-gray-400 cursor-pointer text-white">
        <span class="fas fa-arrow-left"></span></a>
        </div>
        <x alert />
        <form method="post" action="/todo/create" class="py-5">
        @csrf
        <div class="py-1">
            <input type="text" name="title" class="py-2 px-2 border rounded" placeholder="title" />
        </div>
        <div class="py-1">
            <textarea name="description" name="description" class="py-2 px-2 border rounded" placeholder="description"></textarea>
        </div>

        <div class="py-2">
        <div class="flex justify-center pb-4 px-4">
        <h2 class="text-lg pb-4">Add Steps for Task</h1>
        <span class="fas fa-plus px-2 py-1 cursor-pointer"></span>
        </div>

        <input type="text" name="step" class="py-2 px-2 border rounded" placeholder="Describe Step" />
        </div>
        <div class="py-1">
            <input type="submit" value="Create" class="p-2 border rounded" />
        </div>
    </form>
    @livewire('counter')
@endsection