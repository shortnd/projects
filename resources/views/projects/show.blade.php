@extends('layouts.app')

@section('content')
    <h2>{{ $project->title }}</h2>

    <div class="mb-4">
        {{ $project->description }}
    </div>

    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-secondary mb-2">Edit</a>

    <form action="{{ route('projects.destroy', $project->id) }}" method="post" class="mb-4">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>

    <div class="card">
        @if($project->tasks->count())
            <div class="card-header">
                @foreach ($project->tasks as $task)
                <form action="/completed-tasks/{{ $task->id }}" method="post">
                    @csrf
                    @if($task->completed)
                        @method('DELETE')
                    @endif
                    <label for="completed" class="{{ $task->completed ? 'is-completed' : '' }}">
                        <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                        {{ $task->description }}
                    </label>
                </form>
                @endforeach
            </div>
        @endif
        <div class="card-body">
            <form action="/projects/{{ $project->id }}/tasks" method="post">
                @csrf
                <div class="form-group">
                    <label for="description">New Task</label>
                    <input name="description" class="form-control {{ ($errors->has('description')) ? 'is-invalid' : '' }}" type="text" value="{{ old('description') }}" />
                    @if($errors->has('description'))
                        <small class="text-danger">{{ $errors->first('description') }}</small>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Task</button>
                </div>
            </form>
        </div>
    </div>

@endsection
