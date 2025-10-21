@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Pengguna</div>

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
                            <th scope="col">Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($penggunas as $peng)
                            <tr>
                            <td>{{$peng->id_peng}}</td>
                            <td>{{$peng->nama}}</td>            
                            <td>
                                <a href="{{ Route('pengguna.edit', $peng->id)  }}" class="btn btn-success">Edit</a>
                                <a href="{{ Route('pengguna.show', $peng->id)  }}" class="btn btn-primary">Tampilkan</a>
                                <form action="{{ Route('pengguna.destroy', $peng->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{Route('pengguna.create')}}" class="btn btn-primary w-50">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
