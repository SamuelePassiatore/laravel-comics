<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <title>{{ env('APP_NAME') }} | Home</title>

    @vite('resources/js/app.js')
</head>

<body>
    <header class="container">
        <figure>
            <a href="{{ url('/') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}"
                    alt="Logo dc comics"></a>
        </figure>
        <ul>
            <li><a href="{{ route('characters') }}">Characters</a></li>
            <li><a href="{{ route('comics') }}">Comics</a></li>
            <li><a href="{{ route('movies') }}">Movies</a></li>
            <li><a href="{{ route('tv') }}">Tv</a></li>
            <li><a href="{{ route('games') }}">Games</a></li>
            <li><a href="{{ route('collectibles') }}">Collectibles</a></li>
            <li><a href="{{ route('videos') }}">Videos</a></li>
            <li><a href="{{ route('fans') }}">Fans</a></li>
            <li><a href="{{ route('news') }}">News</a></li>
            <li><a href="{{ route('shop') }}">Shop</a></li>
        </ul>
    </header>
</body>

</html>
