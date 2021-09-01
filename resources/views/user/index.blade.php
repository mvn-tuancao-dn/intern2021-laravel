@extends('layouts.home')

@section('title', __('List User'))

@section('content')
    <div class="container">
        <h1>List User</h1>
        <a href="{{ route('users.create') }}"><button type="button" class="btn btn-primary">Add User</button></a>
        @if (session('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>    
                <strong>{{ session('success') }}</strong>
            </div>
        @endif
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Age</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($listUser as $key => $user)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->birthday }}</td>
                        <td>
                            <form action="{{ route('users.destroy', $user->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            
                            <a href="{{ route('users.edit', $user->id) }}"><button type="button" class="btn btn-info">Edit</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@push('scripts')
    <script>
       $("document").ready(function(){
            setTimeout(function(){
            $("div.alert").remove();
            }, 5000 );
        });
    </script>
@endpush