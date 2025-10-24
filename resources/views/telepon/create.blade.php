@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Telepon Pengguna</div>

                <div class="card-body">
                    <form action="{{ route('telepon.store') }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nomor</label>
                            <input type="text" class="form-control" name="nomor_telepon" placeholder="Masukkan nomor telepon">
                            @error('nomor_telepon')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror                        
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Pengguna</label>
                            <select class="form-select" name="id_pengguna">
                            @foreach($penggunas as $peng)
                                <option value="{{ $peng->id }}">{{ $peng->nama }}</option>
                            @endforeach
                            </select>
                            @error('id_pengguna')
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
