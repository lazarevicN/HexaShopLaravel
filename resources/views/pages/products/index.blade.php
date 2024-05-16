@extends('layouts.layout')

@section('description') Here You can find Hexashop products that are unique, the most trendiest and coolest clother You will ever see! You can find for him, her and the little ones! @endsection
@section('keywords') Hexashop, products, him, her, little ones, unique, the most trendiest, coolest @endsection
@section('title') Products @endsection

@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <div class="section mt-5" id="filters">
        <div class="container">
            <form method="GET" @if(request()->routeIs('men')) action="{{route('men')}}"
                  @elseif(request()->routeIs('women')) action="{{route('women')}}"
                  @elseif(request()->routeIs('kids')) action="{{route('kids')}}"
                  @endif>
                @csrf
                <div class="row">
                    <div class="col-9 d-flex flex-row justify-content-around">
                        <div class="btn-group col-2">
                            <a class="btn dropdown-toggle bg-light" data-toggle="dropdown" href="#">
                                Categories
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($categories as $category)
                                    <li>
                                        <input type="checkbox" value="{{ $category->id }}" {{ (isset($qs["categories"]) && in_array($category->id, $qs["categories"])) ? "checked" : "" }} name="categories[]" /> {{ $category->name }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="btn-group col-2">
                            <a class="btn dropdown-toggle bg-light" data-toggle="dropdown" href="#">
                                Brands
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($brands as $brand)
                                    <li>
                                        <input type="checkbox" value="{{ $brand->id }}" {{ (isset($qs["brands"]) && in_array($brand->id, $qs["brands"])) ? "checked" : "" }} name="brands[]" /> {{ $brand->name }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="btn-group col-2">
                            <a class="btn dropdown-toggle bg-light" data-toggle="dropdown" href="#">
                                Fits
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($fits as $fit)
                                    <li>
                                        <input type="checkbox" value="{{ $fit->id }}" {{ (isset($qs["fits"]) && in_array($fit->id, $qs["fits"])) ? "checked" : "" }} name="fits[]" /> {{ $fit->name }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <select id="sort" name="sort" class="btn bg-light col-3">
                            <option value="0">Sort by</option>
                            <option value="lowToHigh">Price lowest to highest</option>
                            <option value="highToLow">Price highest to lowest</option>
                            <option value="latest">Latest</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <div class="input-group rounded">
                            <input type="search" id="search" @if(isset($qs["search"])) value="{{$qs["search"]}}" @endif name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 mt-5">
                        <button type="submit" class="btn btn-outline-secondary" id="filterBtn">Apply Filters</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>@if(request()->routeIs('men')) Men
                            @elseif(request()->routeIs('women')) Women
                            @elseif(request()->routeIs('kids')) Kids
                            @endif Products</h2>
                        <span>Check out all of @if(request()->routeIs('men')) men
                            @elseif(request()->routeIs('women')) women
                            @elseif(request()->routeIs('kids')) kids
                            @endif products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" id="products">
                @foreach($products as $product)
                    <div class="col-lg-4">
                        @include('partials.product')
                    </div>
                @endforeach
                <div class="col-lg-12 d-flex justify-content-center mt-5">
                    {{$products->links('pagination::bootstrap-4')}}
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->

@endsection

