<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/album/1">
        @method('DELETE')
        @csrf
    <input  name="nome" />
    <input type='time' name="duracao" />
    <input  name="album_id" />
    <button type="submit">test</button>
    </form >
</body>
</html>
