@extends('guest.layout.base')

@section('documentTitle')
    Thumbs
@endsection

@section('content')
<main>
    <div class="main-content-top">
        <img src="{{ $comicsThumb['thumb'] }}" alt="{{ $comicsThumb['title'] }}">
        <span class="book">comic book</span>
        <span class="gallery">view gallery</span>
    </div>
    <div class="main-content container">
        <div class="main-content-left">
            <h1>{{ $comicsThumb['title'] }}</h1>
            <div class="price-box">
                <div>
                    U.S Price: <span>{{$comicsThumb["price"]}}</span>
                </div>
                <div>
                    <span>AVAILABLE</span>
                    <button>Check availability <i class="fas fa-sort-down"></i></button>
                </div>
            </div>
            <p class="caption">{{ $comicsThumb['description'] }}</p>
        </div>
        <div class="main-content-right">
            <img src="{{asset('images/adv.jpg')}}" alt="adv">
        </div>
    </div>
</main>
@endsection