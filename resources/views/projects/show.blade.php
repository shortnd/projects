@extends('layouts.app')

@section('content')
    <h2>{{ $project->title }}</h2>

    <div class="mb-4">
        {!! $project->description !!}
    </div>

    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-secondary mb-2">Edit</a>

    <form action="{{ route('projects.destroy', $project->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
