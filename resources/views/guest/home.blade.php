@extends('guest.layout.base')

@section('documentTitle')
{{ $nomePagina }}
@endsection

@section('content')
<main>
    <div class="main-top">
        <div class="container">
            <div class="thumbs-container">
                <div class="title">
                    <h1 class="text-white">current series</h1>
                </div>
                @foreach ($comics as $comicsThumb)
                <div class="thumb-container">
                    <div class="thumb">
                        <a href="{{ route('thumb', $comicsThumb['id']) }}"><img src="{{ $comicsThumb['thumb'] }}" alt="{{ $comicsThumb['title'] }}"></a>
                    </div>
                    <span class="caption">{{ $comicsThumb['title'] }}</span>
                </div>
                @endforeach
                <div class="container-bottom">
                    <button class="load">load more</button>
                </div>
            </div>
        </div>
    </div>
    <div class="main-bottom">
        <ul class="container">
            <li class="content">
                <img src="../images/buy-comics-digital-comics.png" alt="">
                <p class="caption">digital comics</p>
            </li>
            <li class="content">
                <img src="../images/buy-comics-merchandise.png" alt="">
                <p class="caption">dc merchandise</p>
            </li>
            <li class="content">
                <img src="../images/buy-comics-subscriptions.png" alt="">
                <p class="caption">subscriptions</p>
            </li>
            <li class="content">
                <img src="../images/buy-comics-shop-locator.png" alt="">
                <p class="caption">dc shop locator</p>
            </li>
            <li class="content">
                <img src="../images/buy-dc-power-visa.svg" alt="">
                <p class="caption">dc power visa</p>
            </li>
        </ul>
    </div>
</main>
@endsection

@section('scripts')
<script src="{{asset('js/app.js')}}"></script>
@endsection