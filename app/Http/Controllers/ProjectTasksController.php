<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function store(Request $request, Project $project)
    {
        $project->addTask($request->validate([
            'description' => 'required|min:3|max:255'
        ]));

        return back();
    }
}
