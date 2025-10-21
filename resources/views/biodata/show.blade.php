@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Biodata</div>

                <div class="card-body">
                    <form action=""  method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" value="{{ $biodata->nama_lengkap }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="{{ $biodata->jenis_kelamin }}" disabled>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal lahir/label>
                            <input type="date" class="form-control" name="tanggal_lahir" value="{{ $biodata->tanggal_lahir }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="{{ $biodata->tempat_lahir }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Agama</label>
                            <select name="agama" id="agama" class="form-control" value="{{ $biodata->agama }}" disabled>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="textarea" class="form-control" name="alamat" placeholder="Masukkan Alamat" value="{{ $biodata->alamat }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor Telepon</label>
                            <input type="number" class="form-control" name="telepon" placeholder="Masukkan Nomor Telepon" value="{{ $biodata->telepon }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Masukkan Email" value="{{ $biodata->email }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto</label>
                            <img src="{{ asset('images/bio/' . $biodata->foto) }}" class="form-control" alt="foto" style="max-width: 200px; margin-top: 10px;">
                        </div>
                        <div class="text-center"><a href="{{ Route('biodata.index') }}" class="btn btn-primary w-50">Kembali</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
