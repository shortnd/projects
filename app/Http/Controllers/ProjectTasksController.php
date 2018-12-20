<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function store(Request $request, Project $project)
    {
        $project->addTask($this->validate($request, [
            'description' => 'required'
        ]));
        // return back();
    }

    public function update(Task $task, Request $request)
    {
        $task->update([
            'completed' => $request->has('completed')
        ]);

        return back();
    }
}
