@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilkan Data Pembeli</div>

                <div class="card-body">
                    <form action=""  method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Nama Pembeli</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{ $pembelis->nama_pembeli }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" value="{{ $pembelis->jenis_kelamin }}" disabled>                            
                                <option value="Laki-laki" {{$pembelis->jenis_kelamin == 'Laki-laki' ? 'selected' : ''}}>Laki-laki</option>
                                <option value="Perempuan" {{$pembelis->jenis_kelamin == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                            </select>                       
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Telepon</label>
                            <input type="text" class="form-control" name="telepon" value="{{ $pembelis->telepon }}" disabled>
                        </div>                        
                        <a href="{{ Route('pembeli.index') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
