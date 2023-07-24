<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function show(Request $request)
    {
        $tasks = Task::all();
        return view('components.lists', ['tasks' => $tasks]);
    }

    public function create(Request $request)//создание задачи
    {
        $request->file('image')->store('public/images');
        $imagePath = "/storage/{$request->file('image')->store('images')}";

        $tasks = new Task();
        $tasks->title = $request->input('title');
        $tasks->body = $request->input('body');
        $tasks->tags = $request->input('tags');
        $tasks->image = $imagePath;
        $tasks->save();

        return redirect()->route('tasks.create');
    }

    public function edit(Task $task)
    {
        return view('components.edit', ['task' => $task]);
    }

    public function delete(Task $task): RedirectResponse
    {
        $task->delete();
        return redirect()->route('tasks.show');
    }
}
