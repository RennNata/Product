@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Post</div>

                <div class="card-body">
                    <form action="{{ route('post.store') }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Title">
                            @error('title')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <input type="text" class="form-control" name="content" placeholder="Enter Content">
                            @error('content')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cover</label>
                            <input type="file" class="form-control" name="cover" placeholder="Enter Cover">
                            @error('cover')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="text-center"><button type="submit" class="btn btn-primary w-50">Save</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
