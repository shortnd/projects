@extends('layouts.app')

@section('content')
  <h2>Projects</h2>
  @if($projects->count())
  <ul>
      @foreach($projects as $project)
      <li>
          <a href="{{ route('projects.show', $project->id) }}">{{ $project->title }}</a>
      </li>
      @endforeach
  </ul>
  @endif
@endsection
