@extends('layouts.layout')

@section('description') Admin panel @endsection
@section('keywords') admin, panel, products, categories, brands @endsection
@section('title') Update Product @endsection

@section('content')

    <div class="container moveDiv mb-3">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mt-5 mb-4">Update Choosen Product</h1>
            </div>
        </div>
        <hr/>
    </div>
    <div class="container mt-3">
        <div class="row d-flex justify-content-center">
            @include('pages.admin.form', ['action' => 'admin.update'])
        </div>
    </div>

@endsection

