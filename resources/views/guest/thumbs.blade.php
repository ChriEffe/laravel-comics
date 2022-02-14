@extends('guest.layout.base')

@section('documentTitle')
    Thumbs
@endsection

@section('content')
    <img src="{{ $comicsThumb['thumb'] }}" alt="{{ $comicsThumb['title'] }}">
    <h1>{{ $comicsThumb['title'] }}</h1>
@endsection