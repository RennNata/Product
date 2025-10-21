@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilkan Data</div>

                <div class="card-body">
                    <form action=""  method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">ID</label>
                            <input type="text" class="form-control" name="id_peng" value="{{ $penggunas->id }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $penggunas->nama }}" disabled>
                        </div>
                        <a href="{{ Route('pengguna.index') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
