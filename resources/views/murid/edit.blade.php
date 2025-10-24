@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Murid</div>

                <div class="card-body">
                    <form action="{{ route('murid.update', $murids->id) }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" value="{{ $murids->nama_lengkap }}" placeholder="Masukkan Nama Lengkap">
                            @error('nama_lengkap')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror                        
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" value="{{ $murids->jenis_kelamin }}">
                                <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki" {{$murids->jenis_kelamin == 'Laki-laki' ? 'selected' : ''}}>Laki-laki</option>
                                <option value="Perempuan" {{$murids->jenis_kelamin == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" value="{{ $murids->tanggal_lahir }}">
                            @error('tanggal_lahir')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="{{$murids->tempat_lahir}}" placeholder="Masukkan Tempat Lahir">
                            @error('tempat_lahir')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Agama</label>
                            <select name="agama" id="agama" class="form-select" value="{{ $murids->agama }}">
                                <option value="" selected disabled>-- Pilih Agama --</option>
                                <option value="Islam" {{$murids->agama == 'Islam' ? 'selected' : ''}}>Islam</option>
                                <option value="Kristen" {{$murids->agama == 'Kristen' ? 'selected' : ''}}>Kristen</option>
                                <option value="Katolik" {{$murids->agama == 'Katolik' ? 'selected' : ''}}>Katolik</option>
                                <option value="Hindu" {{$murids->agama == 'Hindu' ? 'selected' : ''}}>Hindu</option>
                                <option value="Budha" {{$murids->agama == 'Budha' ? 'selected' : ''}}>Budha</option>
                                <option value="Konghucu" {{$murids->agama == 'Konghucu' ? 'selected' : ''}}>Konghucu</option>
                            </select>
                            @error('agama')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat" value="">{{$murids->alamat}}</textarea>                           
                            @error('alamat')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>            
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Masukkan Email"
                            value="{{ $murids->email }}">
                            @error('email')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kelas</label>
                            <select class="form-select" name="id_kelas" value="{{ $murids->id_kelas }}">
                                <option value="" selected disabled>-- Pilih Kelas --</option>
                            @foreach($kelas as $kls)
                                <option value="{{ $kls->id }}" {{ $kls->id == $murids->id_kelas ? 'selected' : ''}}>{{ $kls->nama }}</option>
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
