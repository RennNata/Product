

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Telepon Pengguna</div>

                <div class="card-body">
                    <form action="{{ route('telepon.update', $telepons->id) }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Nomor</label>
                            <input type="text" class="form-control" name="nomor_telepon" value="{{ $telepons->nomor_telepon }}" placeholder="Masukkan Nomor Telepon">
                            @error('nomor_telepon')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ID Pengguna</label>
                            <select class="form-select" name="id_pengguna" value="{{ $telepons->id_pengguna }}">
                            @foreach($penggunas as $peng)
                                <option value="{{ $peng->id }}" {{ $peng->id == $telepons->id_pengguna ? 'selected' : ''}}>{{ $peng->nama }}</option>
                            @endforeach
                            </select>
                            @error('id_pengguna')
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
