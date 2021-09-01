@extends('layouts.home')

@section('title', __('Add Product'))

@section('content')

        <div class="container">
            <h1>Add Product</h1>
            @if (session('errors'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    <strong>{{ session('errors') }}</strong>
                </div>
            @endif
            <a href="{{ route('products.index') }}"><button type="button" class="btn btn-primary">Back</button></a>
            <form  action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter product name..." value="{{ old('name') }}">
                    @error('name')
                    <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="Enter price product..." value="{{ old('price') }}">
                    @error('price')
                    <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Enter description product..." value="{{ old('description') }}">
                    @error('description')
                    <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                    @error('image')
                    <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Enter quantity product..." value="{{ old('quantity') }}">
                    @error('quantity')
                    <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-success">Add Product</button>
                </div>
            </form>
        </div>

@endsection