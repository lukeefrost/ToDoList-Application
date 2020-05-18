@extends('layouts.app')

@section('content')
<h1>Create New ToDo</h1>
<form method="post" action="/todo">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title "id="title" placeholder="Enter Title" value="{{ old('title') }}">
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <input type="text" class="form-control" name="content" id="content" placeholder="Enter Content" value="{{ old('content') }}">
  </div>
  <div class="form-group">
    <label for="due">Due</label>
    <input type="text" class="form-control" name="due" id="due" placeholder="Enter Due" value="{{ old('due') }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
