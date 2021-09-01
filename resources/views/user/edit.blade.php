@extends('layouts.home')

@section('title', __('Edit User'))

@section('content')
    <div class="container">
        <h1>Edit User</h1>
        <a href="{{ route('users.index') }}"><button type="button" class="btn btn-primary">Back</button></a>
        <form  action="{{ route('users.update', $user->id) }}" method="post">
                    @csrf
                    @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name..." value="{{ $user->name, old('name') }}">
                    @error('name')
                    <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email ..." value="{{ $user->email, old('email') }}">
                    @error('email')
                    <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender">
                        <option @if ($user->gender=='Male') selected @endif value="1">Male</option>
                        <option @if ($user->gender=='Female') selected @endif value="2">Female</option>
                    </select>
                    @error('gender')
                    <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="birthday">Birthday</label>
                    <input type="date" class="form-control" name="birthday" id="birthday" value="{{ $user->birthday}}">
                    @error('birthday')
                    <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                </div>
               
                <div class="form-group">
                   <button type="submit" class="btn btn-success">Update User</button>
                </div>
            </form>
    </div>
@endsection
