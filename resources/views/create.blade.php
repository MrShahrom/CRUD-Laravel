@extends('layouts')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Add post</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('post.index')}}" class="btn btn-primary float-end">All Post</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('post.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <strong>Title</strong>
                        <input type="text" class="form-control" name="title" placeholder="Post Title" autofocus></input>
                    </div>
                    <div class="form-group">
                        <strong>Description</strong>
                        <textarea name="description" rows="6" class="form-control" placeholder="Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
