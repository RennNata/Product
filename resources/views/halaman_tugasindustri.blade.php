<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata orang</title>
</head>
<body>
    <center>
        <h1>
            Biodata orang
        </h1>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nama Lengkap</td>
            <td>Jenis Kelamin</td>
            <td>Tanggal Lahir</td>
            <td>Tempat Lahir</td>
            <td>Agama</td>
            <td>Alamat</td>
            <td>Aksi</td>
        </tr>
        @foreach ($tugasIndustri as $t)
        <tr>
            <td>{{ $t->id }}</td>
            <td>{{ $t->nama_lengkap }}</td>
            <td>{{ $t->jenis_kelamin }}</td>
            <td>{{ $t->tanggal_lahir }}</td>
            <td>{{ $t->tempat_lahir }}</td>
            <td>{{ $t->agama }}</td>
            <td>{{ $t->alamat }}</td>
            <td>
                <a href="/tugasIndustri/edit/{{ $t->id }}">Edit</a>
                |
                <a href="/tugasIndustri/hapus/{{ $t->id }}">Hapus</a>
        </tr>
        @endforeach
    </center>
</body>
</html>