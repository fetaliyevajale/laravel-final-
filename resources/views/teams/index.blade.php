@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Our Team</h1>
    <a href="{{ route('teams.create') }}" class="btn btn-primary">Add Team Member</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Image</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
                <tr>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->position }}</td>
                    <td><img src="{{ asset('images/'.$team->image) }}" alt="{{ $team->name }}" width="100"></td>
                    <td>{{ $team->description }}</td>
                    <td>
                        <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('teams.destroy', $team->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
