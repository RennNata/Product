@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Pembeli</div>

                <div class="card-body">
                    <form action="{{ route('pembeli.update', $pembelis->id) }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Nama Pembeli</label>
                            <input type="text" class="form-control" name="nama_pembeli" value="{{ $pembelis->nama_pembeli }}" placeholder="Masukkan nama pembeli">
                            @error('nama_pembeli')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" value="{{ $pembelis->jenis_kelamin }}">                            
                                <option value="Laki-laki" {{$pembelis->jenis_kelamin == 'Laki-laki' ? 'selected' : ''}}>Laki-laki</option>
                                <option value="Perempuan" {{$pembelis->jenis_kelamin == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Telepon</label>
                            <input type="text" class="form-control" name="telepon" value="{{ $pembelis->telepon }}" placeholder="Masukkan telepon">
                            @error('telepon')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>                
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
