<div class="header-top">
    <div class="container header-top-content">
        <div class="header-top-power">DC POWER℠ VISA®</div>
        <div class="header-top-additional">ADDITIONAL DC SITES
            <span class="triangle-down">&blacktriangledown;</span>
        </div>
    </div>
</div>
<header class="container">
    <figure>
        <a href="{{ url('/') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo dc comics"></a>
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
        <li><a href="{{ route('shop') }}">Shop<span class="triangle-down">&blacktriangledown;</span></a></li>
    </ul>
    <div class="input-group">
        <form action="#">
            <input type="text" placeholder="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </form>
    </div>
</header>
<div class="jumbotron"></div>
