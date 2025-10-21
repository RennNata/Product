@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Post</div>

                <div class="card-body">
                    <form action="{{ route('post.update', $posts->id) }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $posts->title }}" placeholder="Enter Title">
                            @error('title')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <input type="text" class="form-control" name="content" value="{{ $posts->content }}" placeholder="Enter Content">
                            @error('content')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                        
                            <label class="form-label">Cover :</label>
                            <img src="{{ asset('images/bio/' . $biodata->cover) }}" class="form-control" alt="foto" style="max-width: 200px; margin-top: 10px;">                                    
                            <input type="file" class="form-control" name="cover" value="{{ $biodata->cover }}" placeholder="Masukkan foto">                            
                            @error('cover')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
