@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Transaksi</div>

                <div class="card-body">
                    <form action="{{ route('transaksi.update', $transaksis->id) }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="tanggal_transaksi" value="{{ $transaksis->tanggal_transaksi }}">
                            @error('tanggal_transaksi')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror                        
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" value="{{ $transaksis->jumlah }}">
                            @error('jumlah')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Total Harga</label>
                            <input type="number" class="form-control" name="total_harga" value="{{ $transaksis->total_harga }}">
                            @error('total_harga')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ID Barang</label>
                            <select class="form-select" name="id_barang" value="{{ $transaksis->id_barang }}">
                                <option value="" selected disabled>-- Pilih Barang --</option>
                            @foreach($barangs as $b)
                                <option value="{{ $b->id }}" {{ $b->id == $transaksis->id_barang ? 'selected' : ''}}>{{ $b->nama_barang }}</option>
                            @endforeach
                            </select>
                            @error('id_barang')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror                        
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ID Pembeli</label>
                            <select class="form-select" name="id_pembeli" value="{{ $transaksis->id_pembeli }}">
                                <option value="" selected disabled>-- Pilih Pembeli --</option>
                            @foreach($pembelis as $p)
                                <option value="{{ $p->id }}" {{ $p->id == $transaksis->id_pembeli ? 'selected' : ''}}>{{ $p->nama_pembeli }}</option>
                            @endforeach
                            </select>
                            @error('id_pembeli')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror                        
                        </div>                    
                        <div class="text-center"><button type="submit" class="btn btn-primary w-50">Tambah</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
