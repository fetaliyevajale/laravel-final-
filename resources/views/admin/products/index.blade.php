@extends('admin.layout')

@section('content')
    <h1>Products</h1>
    <a href="{{ route('admin.products.create') }}">Add New Product</a>
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Price</th>
                <th>Size</th>
                <th>Bedrooms</th>
                <th>Bathrooms</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->address }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->size }}</td>
                    <td>{{ $product->bedrooms }}</td>
                    <td>{{ $product->bathrooms }}</td>
                    <td>
                        <a href="{{ route('admin.products.edit', $product->id) }}">Edit</a>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
