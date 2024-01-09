@extends('layouts.app')

@section('title', 'Edit task')
@section('section')
<div class="main">
  <form action="{{ route('task.update', ['id' => $task->id]) }}" method="POST">
    @csrf 
    @method('PUT')
    <div>
      <label for="title">Title</label>
      <input type="text" name="title" id="title" value="{{ $task->title }}" /> 
      @error('title')
        <p>{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label for="description">Description</label>
      <textarea name="description" id="description" cols="30" rows="10">{{ $task->description }}</textarea>
      @error('description')
        <p>{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label for="long_description">Long Description</label>
      <textarea name="long_description" id="long_description" cols="30" rows="10">{{ $task->long_description }}</textarea>
      @error('long_description')
        <p>{{ $message }}</p>
      @enderror
    </div>
    <div>
      <button type="submit">Update Task</button>
    </div>
  </form>
</div>
@endsection