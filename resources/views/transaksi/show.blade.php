@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilkan Data Murid</div>

                <div class="card-body">
                    <form action=""  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="tanggal_transaksi" value="{{ $transaksis->tanggal_transaksi }}" disabled>                                                 
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" value="{{ $transaksis->jumlah }}" disabled>                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Total Harga</label>
                            <input type="number" class="form-control" name="total_harga" value="{{ $transaksis->total_harga }}" disabled>                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ID Barang</label>
                            <input type="text" class="form-control" name="id_barang" value="{{ $transaksis->barang->nama_barang }}" disabled>                 
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ID Pembeli</label>                            
                            <input type="text" class="form-control" name="id_pembeli" value="{{ $transaksis->pembeli->nama_pembeli }}" disabled>                         
                        </div>             
                        <a href="{{ Route('transaksi.index') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
