@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Biodata</div>

                <div class="card-body text-center">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif 
                    
                    <table class="table">
                        <thead class="justify-content-center">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No. Telepon</th>
                            <th scope="col">Email</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($biodatas as $b)
                            <tr>
                            <th>{{ $no++ }}</th>
                            <td>{{ $b->nama_lengkap }}</td>
                            <td>{{ $b->jenis_kelamin }}</td>
                            <td>{{ $b->tanggal_lahir }}</td>
                            <td>{{ $b->tempat_lahir }}</td>
                            <td>{{ $b->agama }}</td>
                            <td>{{ $b->alamat }}</td>
                            <td>{{ $b->telepon }}</td>
                            <td>{{ $b->email }}</td>
                            <td>
                                <img src="{{ asset('images/bio/'. $b->foto) }}" width="100">
                            </td>
                            <td class="d-flex">
                                <a href="{{ Route('biodata.edit', $b->id)  }}" class="btn btn-success">Edit</a>
                                <a href="{{ Route('biodata.show', $b->id)  }}" class="btn btn-primary ms-1">Show</a>
                                <form action="{{ Route('biodata.destroy', $b->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger ms-1" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                                </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{Route('biodata.create')}}" class="btn btn-primary w-50">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
