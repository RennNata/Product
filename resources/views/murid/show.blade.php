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
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" value="{{ $murids->nama_lengkap }}" disabled>
                                                   
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" value="{{ $murids->jenis_kelamin }}" disabled>
                                <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki" {{$murids->jenis_kelamin == 'Laki-laki' ? 'selected' : ''}}>Laki-laki</option>
                                <option value="Perempuan" {{$murids->jenis_kelamin == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                            </select>
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" value="{{ $murids->tanggal_lahir }}" disabled>
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="{{$murids->tempat_lahir}}" disabled>
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Agama</label>                            
                            <select name="agama" id="agama" class="form-select" value="{{ $murids->agama }}" disabled>
                                <option value="" selected disabled>-- Pilih Agama --</option>
                                <option value="Islam" {{$murids->agama == 'Islam' ? 'selected' : ''}}>Islam</option>
                                <option value="Kristen" {{$murids->agama == 'Kristen' ? 'selected' : ''}}>Kristen</option>
                                <option value="Katolik" {{$murids->agama == 'Katolik' ? 'selected' : ''}}>Katolik</option>
                                <option value="Hindu" {{$murids->agama == 'Hindu' ? 'selected' : ''}}>Hindu</option>
                                <option value="Budha" {{$murids->agama == 'Budha' ? 'selected' : ''}}>Budha</option>
                                <option value="Konghucu" {{$murids->agama == 'Konghucu' ? 'selected' : ''}}>Konghucu</option>
                            </select>                      
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" value="" disabled>{{$murids->alamat}}</textarea>                           
                            
                        </div>            
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" disabled
                            value="{{ $murids->email }}">
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kelas</label>                        
                                <input type="text" class="form-control" name="id_kelas" value="{{ $murids->kelas->nama }}" disabled>                                                    
                        </div>
                        <a href="{{ Route('murid.index') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
