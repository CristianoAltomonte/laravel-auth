@extends('layouts.dashboard')

@section('content')

  <div class="container p-5">

    <h1 class="text-center p-4">Modify Post</h1>

    <form method="POST" action="{{ route('admin.posts.update', $post->id) }}">

      @csrf
      @method('PUT')

      <div class="mb-3">
        <label class="form-label">Title</label>
        <input name="title" value="{{$post->title}}" type="text" class="form-control @error('title') is-invalid @enderror">
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="body" class="form-control @error('body') is-invalid @enderror">
          {{$post->body}}
        </textarea>
        @error('description')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary">Modify Post</button>

    </form>

  </div>

@endsection
