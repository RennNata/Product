@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                <div class="card-header">Data Transaksi</div>

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
                            <th scope="col">Tanggal Transaksi</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">ID Barang</th>
                            <th scope="col">ID Pembeli</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($transaksis as $t)
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$t->tanggal_transaksi}}</td>
                            <td>{{$t->jumlah}}</td>
                            <td>{{$t->total_harga}}</td>
                            <td>{{$t->barang->nama_barang}}</td>
                            <td>{{$t->pembeli->nama_pembeli}}</td>                            
                            <td>
                                <a href="{{ Route('transaksi.edit', $t->id)  }}" class="btn btn-success">Edit</a>
                                <a href="{{ Route('transaksi.show', $t->id)  }}" class="btn btn-primary">Tampilkan</a>
                                <form action="{{ Route('transaksi.destroy', $t->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{Route('transaksi.create')}}" class="btn btn-primary w-50">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
