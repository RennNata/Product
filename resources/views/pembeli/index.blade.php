@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Pembeli</div>

                <div class="card-body text-center">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif 
                    
                    <table class="table">
                        <thead class="Justify-content-center">
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Pembeli</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Telepon</th>                
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($pembelis as $p)
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$p->nama_pembeli}}</td>
                            <td>{{$p->jenis_kelamin}}</td>
                            <td>{{$p->telepon}}</td>                            
                            <td>
                                <a href="{{ Route('pembeli.edit', $p->id)  }}" class="btn btn-success">Edit</a>
                                <a href="{{ Route('pembeli.show', $p->id)  }}" class="btn btn-primary">Tampilkan</a>
                                <form action="{{ Route('pembeli.destroy', $p->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{Route('pembeli.create')}}" class="btn btn-primary w-50">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
