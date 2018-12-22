<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function store(Request $request, Project $project)
    {
        $request->validate(['description' => 'required|max:255|min:3']);

        $project->addTask($request->description);

        return back();
    }

    public function update(Task $task, Request $request)
    {
        $task->update([
            'completed' => $request->has('completed')
        ]);

        return back();
    }
}
