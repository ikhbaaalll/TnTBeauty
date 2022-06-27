@extends('layouts.user')

@section('content')
    <div class="row pb-3" id="home">
        <div class="col-6 align-self-center px-5">
            <div class="row px-5">
                <h1 class="text-light">Beauty from within naturally</h1>
            </div>
            <div class="row px-5">
                <h5 class="text-light">Taking care of your overall health is the first step towards achieving naturally
                    glowing
                    skin.</h5>
            </div>
            <div class="row px-5">
                <span class="badge badge-danger p-3 m-3">
                    <a href="{{ route('user.products') }}" class="text-light text-decoration-none">Product</a>
                </span>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <img class="mx-auto"src="{{ asset('image/home.png') }}" alt="" height="500">
            </div>
        </div>
    </div>
    <div class="row bg-light pb-4" id="aboutus">
        <h2 class="text-center mx-auto mt-2">About Us</h2>
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <img class="mx-auto"src="{{ asset('image/aboutus.png') }}" alt="" height="500">
                </div>
            </div>
            <div class="col-6 align-self-center">
                <div class="row px-5">
                    <h3 class="text-center mx-auto">TnT Beauty Shop merupakan salah satu online shop yang menjual berbagai
                        macam brand perawatan kulit
                    </h3>
                </div>
                <div class="row px-5 mt-5">
                    <h5 class="text-center mx-auto font-weight-bold">Stop wishing you had great skin and get
                        it!
                    </h5>
                </div>
                <div class="row px-5">
                    <h5 class="text-center mx-auto font-weight-bold">Ask me how!</h5>
                </div>
                <div class="row px-5 mt-5">
                    <h6 class="text-center mx-auto">Tnt Beauty Shop</h6>
                </div>
                <div class="row px-5">
                    <h6 class="text-center mx-auto">Solusi untuk semua masalah kulit Anda</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="features">
        <h2 class="text-center text-light mx-auto mt-2">Features</h2>
    </div>
    <div class="row justify-content-around">
        <a href="{{ route('user.products.recommend') }}" class="mx-auto">
            <img class=""src="{{ asset('image/recommend.png') }}" alt="" height="500">
        </a>
        <a href="{{ route('user.products') }}" class="mx-auto">
            <img src="{{ asset('image/gallery.png') }}" alt="" height="500">
        </a>
    </div>
    <div class="row bg-light" id="contact">
        <h2 class="text-center mx-auto mt-2">Contact</h2>
    </div>
    <div class="row bg-light justify-content-around pb-4">
        <a href="https://www.instagram.com/tntbeautyofficial/"
            class="d-flex mt-3 align-items-center flex-column text-dark text-decoration-none">
            <img class="text-center"src="{{ asset('image/instagram.png') }}" alt="" height="100">
            <h5 class="mt-2 text-center">@tntbeautyofficial</h5>
        </a>
        <a href="https://api.whatsapp.com/send?phone=6287771698799"
            class="d-flex mt-3 align-items-center flex-column text-dark text-decoration-none">
            <img src="{{ asset('image/message.png') }}" alt="" height="100">
            <h5 class="mt-2 text-center">0877-7169-8799</h5>
        </a>
        <a href="https://shopee.co.id/tntbeautyshop"
            class="d-flex mt-3 align-items-center flex-column text-dark text-decoration-none">
            <img src="{{ asset('image/shopee.png') }}" alt="" height="100">
            <h5 class="mt-2 text-center">TnT Beauty Shop</h5>
        </a>
    </div>
    <div class="row">
        <h4 class="mx-auto text-light mt-2">Copyright</h4>
    </div>
@endsection
