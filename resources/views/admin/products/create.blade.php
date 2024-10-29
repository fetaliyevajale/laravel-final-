@extends('admin.layout')

@section('content')
    <h1>Add New Product</h1>

    <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="address">Address:</label>
        <input type="text" name="address" required>

        <label for="price">Price:</label>
        <input type="number" name="price" required>

        <label for="size">Size:</label>
        <input type="text" name="size" required>

        <label for="bedrooms">Bedrooms:</label>
        <input type="number" name="bedrooms" required>

        <label for="bathrooms">Bathrooms:</label>
        <input type="number" name="bathrooms" required>

        <button type="submit">Add Product</button>
    </form>
@endsection
