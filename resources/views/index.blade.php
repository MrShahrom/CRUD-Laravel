@extends('layouts')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Post</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('post.create')}}" class="btn btn-primary float-end">Add post</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session::get('message')}}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->description}}</td>
                                <td>
                                    <form action="{{route('post.destroy', $post->id)}}" method="post">
                                        <a href="{{route('post.edit', $post->id)}}" class="btn btn-info">Edit</a>
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
            {{$posts->links()}}
        </div>
    </div>
@endsection
