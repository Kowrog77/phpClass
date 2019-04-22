@extends('layout')
@section('content')
<h1>Task go here</h1>
<h2> {{$title}}</h2>
<ul>
    @foreach ($tasklist as $task)
    <li>
        {{$task->taskDescription}}
    </li>
        
    
    @endforeach
</ul>

@endsection('content')
