@extends('layouts.layout')

@section('description') Hexashop is an extra ordinary clothing store! Please, be sure to checkout whats in store for You! Come and take a look, we make sure that our customers can find the latest and trending models of clothes here!@endsection
@section('keywords') Hexa shop, clothes, women, men, kids, best, awesome, online, shopping, shop, unique, trendiest, coolest, products @endsection
@section('title') Home @endsection

@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>We Are Hexashop</h4>
                                <span>Here You can find some of the best urban and coolest clothes! </span>
                            </div>
                            <img src="{{asset('assets/images/team-member-02.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Men</h4>
                                            <span>Best Clothes For Men</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Men</h4>
                                                <p>Checkout what we got in stock for him!</p>
                                                <div class="main-border-button">
                                                    <a href="{{route('men')}}">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="{{asset('assets/images/adidasPrslukPufferMain.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Kids</h4>
                                            <span>Best Clothes For Kids</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Kids</h4>
                                                <p>Checkout what we got in stock for little ones!</p>
                                                <div class="main-border-button">
                                                    <a href="{{route('kids')}}">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="{{asset('assets/images/nikeDuksericaBlackTreeBackMain.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Hexashop</h4>
                                            <span>Be part of the largest urban clothing store</span>
                                        </div>
                                        <img src="{{asset('assets/images/nikeMajicaJumpman3DKidsMain.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Women</h4>
                                            <span>Best clothes for women</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Women</h4>
                                                <p>Checkout what we got in stock for her!</p>
                                                <div class="main-border-button">
                                                    <a href="{{route('women')}}">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="{{asset('assets/images/adidasJaknaMarimekkoMain.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Men's Latest</h2>
                        <span>Here You can see some of the latest clothes for men that awaits You in our store.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            @foreach($latestProductsMen as $product)
                                @include('partials.product')
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Women Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Women's Latest</h2>
                        <span>Here You can see some of the latest clothes for women that awaits You in our store.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="women-item-carousel">
                        <div class="owl-women-item owl-carousel">
                            @foreach($latestProductsWomen as $product)
                                @include('partials.product')
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Women Area Ends ***** -->

    <!-- ***** Kids Area Starts ***** -->
    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Kid's Latest</h2>
                        <span>Here You can see some of the latest clothes for kids that awaits You in our store.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kid-item-carousel">
                        <div class="owl-kid-item owl-carousel">
                            @foreach($latestProductsKids as $product)
                                @include('partials.product')
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Kids Area Ends ***** -->

    <!-- ***** Explore Area Starts ***** -->
    <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h2>Explore Our Products</h2>
                        <span>In Hexashop store, You can find some of the coolest, newest and trendiest products on market.</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i><p>Style is a way to say who you are without having to speak</p>
                        </div>
                        <p>We are here to offer You some of the most incredible unique clothes that You can buy and wear, that speaks for it self.</p>
                        <p>There are clothes for him, her and never forget the little ones! Your style speaks for You, so wear it like You mean it, show it off to the world, we guarantee You - there will be eyes from everywhere, because of our clothes that is stored. Come and grab it!</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="leather">
                                    <h4>T-shirts, Sweatshirts & More</h4>
                                    <span>Latest Collection</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="first-image">
                                    <img src="{{asset('assets/images/adidasDuksericaAlien2.jpg')}}" alt="Adidas Alien">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="second-image">
                                    <img src="{{asset('assets/images/championDuksericaPatternCrewneckPurpleMain.jpg')}}" alt="Champion Pattern Crewneck">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="types">
                                    <h4>Different Types</h4>
                                    <span>Over {{$numberOfProducts}} Products</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Explore Area Ends ***** -->
@endsection
