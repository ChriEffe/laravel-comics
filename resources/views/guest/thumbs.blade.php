@extends('guest.layout.base')

@section('documentTitle')
    Thumbs
@endsection

@section('content')
<main>
    <div class="main-top">
        <img src="{{ $comicsThumb['thumb'] }}" alt="{{ $comicsThumb['title'] }}">
        <span class="book">comic book</span>
        <span class="gallery">view gallery</span>
    </div>
    <div>
        <h1>{{ $comicsThumb['title'] }}</h1>
    </div>
</main>
    {{-- <img src="{{ $comicsThumb['thumb'] }}" alt="{{ $comicsThumb['title'] }}">
    <h1>{{ $comicsThumb['title'] }}</h1> --}}
@endsection