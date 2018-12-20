@extends('layouts.app')

@section('content')
    <form action="{{ route('projects.update', $project->id) }}" method="post">
        @csrf
        @method("PATCH")

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ $project->title }}" class="form-control">
            @if($errors->has('title'))
                <small class="text-danger">
                    {{ $errors->first('title') }}
                </small>
            @endif
        </div><!--/.form-group-->

        <div class="form-group">
            <label for="description">Description</label>
        <textarea name="description" rows="10" class="form-control">{{ $project->description }}</textarea>
        </div><!--/.form-group-->

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div><!--/.form-group-->
    </form>
@endsection
