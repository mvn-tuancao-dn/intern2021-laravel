@extends('layouts.home')

@section('title', __('List Product'))

@section('content')
    <div class="container">
        <h1>List Product</h1>
        <a href="{{ route('create-product') }}"><button type="button" class="btn btn-primary">Add Product</button></a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list_products as $key => $product)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $product->name }}</td>
                        <td>${{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td style = "text-align: center;">
                            <img src="/upload/product/{{ $product->image }}" alt="Anh san pham" width = 100px>
                        </td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                            <button type="button" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-info">Edit</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection