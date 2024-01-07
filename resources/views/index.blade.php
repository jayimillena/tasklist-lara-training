@extends('layouts.app')

@section('title', 'Home')
@section('section')
<div class="main">
  @if(Session::has('success'))
    <p class="alert alert-info">{{ Session::get('message') }}</p>
  @endif
  <h3>Tasks</h3>
  <h4><a href="{{ route('task.create') }}">Add task</a></h4>
  @foreach ($tasks as $task)
    <label for="title">{{ $task->title }}</label>
    <a href="{{ route('task.edit', ['id' => $task->id]) }}">Edit</a>
    <p>{{ $task->description }}</p>
    <p>{{ $task->long_description }}</p>
  @endforeach
</div>
@endsection