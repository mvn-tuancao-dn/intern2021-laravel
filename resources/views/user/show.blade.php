@extends('layouts.home')

@section('title', __('Show All Post'))

@section('content')
    <div class="container">
       <h1>Show All Post</h1>
        <a href="{{ route('users.index') }}"><button type="button" class="btn btn-primary">Back</button></a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                
                    @foreach($listAllPost as $listpost)
                        @foreach($listpost->posts as $key => $post)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            </tr>
                        @endforeach
                    @endforeach
               
            </tbody>
        </table>
    </div>
@endsection
