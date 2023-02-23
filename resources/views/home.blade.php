@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <section id="home">
        <div class="main-home-top">
            <div class="container">
                <h2>CURRENT SERIES</h2>
                <div class="home-card-container">
                    @foreach ($comics as $comic)
                        <div class="home-series-card">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            <h6>{{ $comic['series'] }}</h6>
                        </div>
                    @endforeach
                </div>
                <div class="home-button">
                    <button>LOAD MORE</button>
                </div>
            </div>
        </div>
    </section>
@endsection
