<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <center>
        <h1>Biodata</h1>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nama Lengkap</td>
            <td>Jenis Kelamin</td>
            <td>Tanggal Lahir</td>
            <td>Tempat Lahir</td>
            <td>Agama</td>
            <td>Alamat</td>
            <td>Telepon</td>
            <td>Email</td>
        </tr>
        @foreach ($biodata as $b)
        <tr>
            <td>{{ $b->id }}</td>
            <td>{{ $b->nama_lengkap }}</td>
            <td>{{ $b->jenis_kelamin }}</td>
            <td>{{ $b->tanggal_lahir }}</td>
            <td>{{ $b->tempat_lahir }}</td>
            <td>{{ $b->agama }}</td>
            <td>{{ $b->alamat }}</td>
            <td>{{ $b->telepon }}</td>
            <td>{{ $b->email }}</td>
        </tr>
        @endforeach
    </table>
    </center>
</body>
</html>