@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilkan Data Nomor Pengguna</div>

                <div class="card-body">
                    <form action=""  method="POST" enctype="multipart/form-data">
                        <!-- <div class="mb-3">
                            <label class="form-label">ID</label>
                            <input type="text" class="form-control" name="id_peng" value="{{ $telepons->id }}" disabled>
                        </div> -->
                        <div class="mb-3">
                            <label class="form-label">Nomor</label>
                            <input type="text" class="form-control" name="nama" value="{{ $telepons->nomor_telepon }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ID Pengguna</label>
                            <input type="text" class="form-control" name="id_pengguna" value="{{ $telepons->pengguna->nama }}" disabled>
                        </div>
                        <a href="{{ Route('telepon.index') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
