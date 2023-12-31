<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index', [
            'tasks' => Task::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
        $validated = $request->validated();
        $task = Task::create($validated);

        return redirect()->route('home.index')
            ->with('success', 'Task has been created succesfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('edit', ['task' => Task::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id, TaskRequest $request)
    {
        $validated = $request->validated();
        $task = Task::find($id);
        $task->fill($validated);
        $task->save();

        return redirect()->route('home.index')
            ->with('success', 'Task has been updated succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
