@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Post</div>

                <div class="card-body">
                    <form action=""  method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $posts->title }}" placeholder="Enter Title" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <input type="text" class="form-control" name="content" value="{{ $posts->content }}" placeholder="Enter Content" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cover</label>
                            <img src="{{ asset('images/post/' . $posts->cover) }}" class="form-control" alt="Cover Image" style="max-width: 200px; margin-top: 10px;">
                        </div>
                        <a href="{{ Route('post.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
