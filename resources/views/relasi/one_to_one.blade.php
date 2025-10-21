@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Relasi One To One (Mahasiswa - Wali)</h3>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Nama Wali</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mhs as $m)
            <tr>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->nim }}</td>
                <td>{{ $m->wali->nama ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
