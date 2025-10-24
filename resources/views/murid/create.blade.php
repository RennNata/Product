@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Murid</div>

                <div class="card-body">
                    <form action="{{ route('murid.store') }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan nama lengkap">
                            @error('nama_lengkap')
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
                            <label class="form-label">Tanggal lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir">
                            @error('tanggal_lahir')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                            @error('tempat_lahir')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Agama</label>
                            <select name="agama" id="agama" class="form-select">
                                <option value="" selected disabled>-- Pilih Agama --</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                            @error('agama')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat"></textarea>                           
                            @error('alamat')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>            
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
                            @error('email')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kelas</label>
                            <select class="form-select" name="id_kelas">
                                <option value="" selected disabled>-- Pilih Kelas --</option>
                            @foreach($kelas as $kls)
                                <option value="{{ $kls->id }}">{{ $kls->nama }}</option>
                            @endforeach
                            </select>
                            @error('id_kelas')
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
