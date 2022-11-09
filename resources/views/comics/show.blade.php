<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dettaglio{{$comic->title}}</title>
</head>
<body>
    <h1>{{$comic->title}}</h1>
    <div>
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    </div>
    <p>{{$comic->description}}</p>
    <p>{{$comic->price}}</p>
    <p>{{$comic->sale_date}}</p>
    <p>{{$comic->series}}</p>
    <p>{{$comic->type}}</p>

    <div>
        <a href="{{route('comics.edit', $comic->id)}}">Edita</a>
    </div>
</body>
</html>
