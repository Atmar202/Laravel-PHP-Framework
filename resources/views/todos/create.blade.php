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
        <input type="text" name="title" class="py-2 px-2 border rounded" />
        <input type="submit" value="Create" class="p-2 border rounded" />
    </form>

    <a href="/todos" class="m-5 py-1 px-1 bg-white-400 border cursor-pointer rounded">Back</a>
@endsection