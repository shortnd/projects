@extends('layouts.app')

@section('content')
  <form action="{{ route('projects.store') }}" method="post">
    @csrf

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" class="form-control {{ ($errors->has('title')) ? 'is-invalid' : '' }}" value="{{ old('title') }}" required>
      @if($errors->has('title'))
        <small class="text-danger">{{ $errors->first('title') }}</small>
      @endif
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea name="description" class="form-control {{ ($errors->has('description')) ? 'is-invalid' : '' }}" rows="10" required>{{ old('description') }}</textarea>
      @if($errors->has('description'))
        <small class="text-danger">{{ $errors->first('description') }}</small>
      @endif
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Add Project</button>
    </div>
  </form>
@endsection
