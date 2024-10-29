@extends('admin.layout')

@section('content')
    <h1>Edit Product</h1>

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>

        <label for="address">Address:</label>
        <input type="text" name="address" value="{{ $product->address }}" required>

        <label for="price">Price:</label>
        <input type="number" name="price" value="{{ $product->price }}" required>

        <label for="size">Size:</label>
        <input type="text" name="size" value="{{ $product->size }}" required>

        <label for="bedrooms">Bedrooms:</label>
        <input type="number" name="bedrooms" value="{{ $product->bedrooms }}" required>

        <label for="bathrooms">Bathrooms:</label>
        <input type="number" name="bathrooms" value="{{ $product->bathrooms }}" required>

        <button type="submit">Update Product</button>
    </form>
@endsection
