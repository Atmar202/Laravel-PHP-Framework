@extends('todos.layout')

@section('content')
<div class="flex justify-center border-b pb-4">
<h1 class="text-2xl">All your todos</h1>
<a href="/todos/create" class="mx-5 py-1 px-1 bg-blue-400 cursor-pointer rounded text white">Create New</a>
</div>
        <ul>
        <x alert />
            @foreach($todos as $todo)
            <li class="flex justify-center py-2">
            @if($todo->completed)
                <p class="line-through">{{$todo->title }}</p>
                @else
                <p>{{$todo->title }}</p>
                @endif
                <div>
                <a href="{{'/todos/'.$todo->id.'/edit'}}" class="text-orange-400 border cursor-pointer text-white">Edit
                <span class="fas fa-edit px-2"></span></a>
                @if($todo->completed)
                <span class="fas fa-check text-green-400 px-4"></span>
                @else
                <span class="fas fa-check text-gray-300 cursor-pointer px-4"></span>
                @endif
                </div>
            </li>
            @endforeach
            <ul>
@endsection