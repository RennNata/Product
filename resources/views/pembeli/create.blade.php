@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Pembeli</div>

                <div class="card-body">
                    <form action="{{ route('pembeli.store') }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Pembeli</label>
                            <input type="text" class="form-control" name="nama_pembeli" placeholder="Masukkan nama pembeli">
                            @error('nama_pembeli')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror                        
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror                        
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Telepon</label>
                            <input type="string" class="form-control" name="telepon" placeholder="Masukkan telepon">
                            @error('telepon')
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
