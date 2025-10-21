@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Post</div>

                <div class="card-body text-center">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif 
                    
                    <table class="table">
                        <thead class="Justify-content-center">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Title</th>
                            <th scope="col">Content</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($posts as $post)
                            <tr>
                            <th>{{ $no++ }}</th>
                            <td>{{$post->title}}</td>
                            <td>{{ $post->content }}</td>
                            <td>
                                <img src="{{ asset('images/post/'. $post->cover) }}" width="100">
                            </td>
                            <td>
                                <a href="{{ Route('post.edit', $post->id)  }}" class="btn btn-success">Edit</a>
                                <a href="{{ Route('post.show', $post->id)  }}" class="btn btn-primary">Show</a>
                                <form action="{{ Route('post.destroy', $post->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                                </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{Route('post.create')}}" class="btn btn-primary w-50">Add</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
