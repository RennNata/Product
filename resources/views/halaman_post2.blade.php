<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <center>
        <h2>Data Post</h2>

        <table border="1">
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Content</td>
            </tr>
            @foreach($post as $p)
            <tr>                
                <td>{{ $p->id }}</td>
                <td>{{ $p->title }}</td>
                <td>{{ $p->content }}</td>
            </tr>
            @endforeach
        </table>
    </center>

</body>
</html>