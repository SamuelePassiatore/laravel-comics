<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'
        integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=='
        crossorigin='anonymous' />
    <link rel="stylesheet" href="">
    <title>{{ env('APP_NAME') }} | Home</title>

    @vite('resources/js/app.js')
</head>

<body>
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
    <main></main>

    <footer>
        <div class="container">
            <!-- Footer button -->
            <div class="footer-button"><button>SIGN-UP NOW!</button></div>
            <!-- Footer icons -->
            <div class="footer-icons">
                <!-- Footer icons text -->
                <div class="footer-text">FOLLOW US</div>
                <!-- Footer icons social -->
                <div class="footer-social">
                    <ul>
                        <!-- Images -->
                        <li>
                            <a href="#">
                                <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="facebook">
                            </a>
                            <a href="#">
                                <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="twitter">
                            </a>
                            <a href="#">
                                <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="you-tube">
                            </a>
                            <a href="#">
                                <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="pinterest">
                            </a>
                            <a href="#">
                                <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="maps">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
