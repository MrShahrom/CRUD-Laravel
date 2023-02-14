@extends('layouts')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Update post</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('post.index')}}" class="btn btn-primary float-end">All Post</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('post.update', $post->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <strong>Title</strong>
                        <input type="text" class="form-control" name="title" value="{{$post->title}}" placeholder="Post Title"></input>
                    </div>
                    <div class="form-group">
                        <strong>Description</strong>
                        <textarea name="description" rows="6" class="form-control" placeholder="Description">{{$post->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
