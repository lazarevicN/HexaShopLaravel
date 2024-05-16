@extends('layouts.layout')

@section('description') Checkout Hexashop and the look of their products! Here, You can see if there are sizes, fits, name, price and other stuff of single product!@endsection
@section('keywords') Hexashop, products, product, checkout, fits, sizes @endsection
@section('title') Product - {{$product->productName}} @endsection

@section('content')
<!-- ***** Product Area Starts ***** -->
<section class="section moveDiv" id="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="left-images">
                    @foreach($images as $img)
                        <img src="{{asset('assets/images/' . $img->path)}}" alt="{{$product->productName}}">
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <h4 class="mt-5">"{{$product->productName}}"</h4>
                    @if(isset($onSale))
                        @if($onSale->dateFrom <= $date && $onSale->dateTo>$date)
                            <span><del>$ {{$product->price}}</del></span>
                            <span class="price text-danger">$ {{$onSale->newPrice}}</span>
                        @endif
                    @else
                        <span class="price">$ {{$product->price}}</span>
                    @endif
                    <span>Brand: {{$product->brand}}</span>
                    <span>Category: {{$product->category}}</span>
                    <span>Fit: {{$product->fit}}</span>
                    <div class="mb-3">
                        <span>Sizes:</span>
                        <div class="mt-3">
                            <select id="sizesProduct" @if(!session()->has('user')) disabled="disabled" @endif name="sizesProduct" class="bg-light border border-light">
                                <option value="0">Choose size...</option>
                                @foreach($sizes as $size)
                                    <option @if($size->quantity == 0) disabled="disabled" @endif value="{{$size->id}}">{{$size->size}}({{$size->quantity}})</option>
                                @endforeach
                            </select>
                        </div>
                        @if(!session()->has('user')) <p class="text-warning">You must login in order to choose size of product.</p>  @endif
                        <p class="text-danger" id="sizesProductError"></p>
                    </div>
                    <div class="quantity-content">
                        <div class="left-content">
                            <h6>Quantity</h6>
                        </div>
                        <div class="right-content">
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus" id="minusQuantity"><input type="number" step="1" min="1" max="10" name="quantity" id="quantity" value="1" title="Qty" class="input-text qty text" size="4" disabled="disabled"><input type="button" value="+" class="plus" id="plusQuantity">
                            </div>
                        </div>
                    </div>
                    <div class="total">
                        <div class="main-border-button">
                            <button type="button" class="btn btn-lg float-right addToCart border border-dark" name="submit" data-id="{{ $product->id }}" >Add To Cart</button>
                            <p id="addToCartError"></p>
                        </div>
                    </div>
                    @if(!session()->has('user')) <p class="text-warning">You must login in order to add to cart.</p>  @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Product Area Ends ***** -->
@endsection
