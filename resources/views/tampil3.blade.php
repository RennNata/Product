<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil 3</title>
</head>
<body>
    <!-- <h1>Uyy, aku $siswa3 :)</h1>
    <h1>Hobi aku $hobi3</h1> -->

    <h1>Daftar Minuman</h1>
    <ul>
        @foreach($minuman as $nginumen)
        <li>{{$nginumen}}</li>
        @endforeach
    </ul> 
</body>
</html>