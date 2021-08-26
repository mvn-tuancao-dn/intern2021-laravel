@extends('layouts.home')

@section('title', __('Add Product'))

@section('content')

        <div class="container">
            <h1>Add Product</h1>
            <a href="{{ route('list-product') }}"><button type="button" class="btn btn-primary">Back</button></a>
            <form  action="{{ route('store-product') }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter product name...">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="Enter price product...">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Enter description product...">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Enter quantity product...">
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-success">Add Product</button>
                </div>
            </form>
        </div>

@endsection