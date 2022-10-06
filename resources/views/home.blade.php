<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Primi Passi</title>
    </head>
    <body>
        <h1>{{ $title }}</h1>

        <ul>
            @foreach ($lista_lorem as $lorem)
                <li>{{ $lorem }}</li>
            @endforeach
        </ul>
    </body>
</html>
