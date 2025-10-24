@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                <div class="card-header">Data Murid</div>

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
                            <th scope="col">ID</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Email</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($murids as $m)
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$m->nama_lengkap}}</td>
                            <td>{{$m->jenis_kelamin}}</td>
                            <td>{{$m->tanggal_lahir}}</td>
                            <td>{{$m->tempat_lahir}}</td>
                            <td>{{$m->agama}}</td>
                            <td>{{$m->alamat}}</td>
                            <td>{{$m->email}}</td>
                            <td>{{$m->kelas->nama}}</td>            
                            <td>
                                <a href="{{ Route('murid.edit', $m->id)  }}" class="btn btn-success">Edit</a>
                                <a href="{{ Route('murid.show', $m->id)  }}" class="btn btn-primary">Tampilkan</a>
                                <form action="{{ Route('murid.destroy', $m->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{Route('murid.create')}}" class="btn btn-primary w-50">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
