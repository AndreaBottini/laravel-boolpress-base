<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
<form action="{{route('posts.store')}}" method="POST">
@csrf

    <div>
        <input type="text" name="title" id="" placeholder="titolo">
    </div>
    <div>
        <input type="text" name="img" id="" placeholder="immagine">
    </div>
    <div>
        <input type="text" name="author" id="" placeholder="autore">
    </div>
    <div>
        <input type="text" name="article" id="" placeholder="articolo">
    </div>
@method('POST')
<button type="submit">Salva</button>
</form>
</body>
</html>