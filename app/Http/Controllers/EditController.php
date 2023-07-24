<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function update(Request $request, Task $task)
    {
        if($request->hasFile('image')){
            $request->file('image')->store('public/images');
            $imagePath = "/storage/{$request->file('image')->store('images')}";
        }
        $task->title = $request->input('title');
        $task->body = $request->input('body');
        $task->tags = $request->input('tags');
        $task->image = $imagePath;
        $task->save();

        return redirect()->route('tasks.show');
    }
}
