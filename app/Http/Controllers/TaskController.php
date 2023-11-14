<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function fetch(Request $request) : View {
        $tasks = Task::all();
        return view('task-manager', ['tasks' => $tasks]);
    }

    public function store (Request $request) {
        $validatedData = $request->validate([
            'title' => 'required|max:255'
        ]);
        
        $task = new Task();
        $task->title = $validatedData['title'];

        $task->save();

        return redirect('/')->with('success', 'Task created successfully!');
    }
}
