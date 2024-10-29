@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Blog</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('blogs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" rows="5" required></textarea>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" name="category" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Create Blog</button>
    </form>
</div>
@endsection
