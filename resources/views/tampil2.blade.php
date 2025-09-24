<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil 2</title>
</head>
<body>
    <h1>Yow, aku {{$siswa2}} :)</h1>
    <h1>hobi aku {{$hobi2}}</h1>
    <hr>
    <h1>Daftar Makanan</h1>
    <ul>
        @foreach($makanan as $daharen)
        <li>{{$daharen}}</li>
        @endforeach
    </ul>
</body>
</html>