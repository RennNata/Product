@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Barang</div>

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
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Merk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($barangs as $b)
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$b->nama_barang}}</td>
                            <td>{{$b->merk}}</td>
                            <td>{{$b->harga}}</td>
                            <td>{{$b->stok}}</td>
                            <td>
                                <a href="{{ Route('barang.edit', $b->id)  }}" class="btn btn-success">Edit</a>
                                <a href="{{ Route('barang.show', $b->id)  }}" class="btn btn-primary">Tampilkan</a>
                                <form action="{{ Route('barang.destroy', $b->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{Route('barang.create')}}" class="btn btn-primary w-50">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
