@extends('layouts.app')

@section('content')
  <h2>Projects</h2>
  @if($projects->count())
    @foreach($projects as $project)
      {{ $project->title }}
    @endforeach
  @endif
@endsection