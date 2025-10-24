@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilkan Data Barang</div>

                <div class="card-body">
                    <form action=""  method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{ $barangs->nama_barang }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Merk</label>
                            <input type="text" class="form-control" name="merk" value="{{ $barangs->merk }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="text" class="form-control" name="harga" value="{{ $barangs->harga }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stok</label>
                            <input type="number" class="form-control" name="stok" value="{{ $barangs->stok }}" disabled>
                        </div>
                        <a href="{{ Route('barang.index') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
