@extends('layouts.layout')

@section('description')  If You would like to checkout what You stored in Your cart, You can check it here, on our page called Shopping Cart! @endsection
@section('keywords') Hexashop, products, product, shopping cart, buy, bought, choose @endsection
@section('title') Shopping Cart @endsection

@section('content')

    <div id="empty"></div>
    <div class="container moveDiv">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="mb-5">YOUR CART</h2>
            </div>
        </div>
    </div>
    <div class="container" id="productsCart">
    </div>
    <div class="container mt-5" id="bought">

    </div>

@endsection
