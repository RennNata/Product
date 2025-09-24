<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Buku-buku</title>
</head>
<body>
    <center>
        <h1>Daftar Buku</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Penerbit</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Jenis Buku</th>
            <th>Stok</th>
        </tr>
        @foreach($books as $b)
        <tr>
            <td>{{$b->id}}</td>
            <td>{{$b->judul}}</td>
            <td>{{$b->penerbit}}</td>
            <td>{{$b->penulis}}</td>
            <td>{{$b->tahun_terbit}}</td>
            <td>{{$b->jenis_buku}}</td>
            <td>{{$b->stok}}</td>
        </tr>
        @endforeach
    </table>
    </center>
</body>
</html>