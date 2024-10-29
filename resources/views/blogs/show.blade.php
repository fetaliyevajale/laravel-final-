@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $blog->title }}</h1>
    <p><strong>Category:</strong> {{ $blog->category }}</p>
    <p>{{ $blog->content }}</p>

    <a href="{{ route('blogs.index') }}" class="btn btn-primary">Back to Blog List</a>
    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning">Edit</a>

    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection
