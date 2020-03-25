<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('posts.create')}}" method="get">
<button>VAI AL FORM</button>
</form>
    @foreach ($posts as $post)
    <ul>
        <li>{{$post->title}}</li>
        <li><img src="{{$post->img}}" alt=""></li>
        <li>{{$post->author}}</li>
        <li>{{$post->article}}</li>
    </ul>
    @endforeach
    
</body>
</html>