@extends('layouts.layout')

@section('description') Welcome to Hexashop! If You have an account, please, make sure that You login first!@endsection
@section('keywords') Hexashop, login, email, password @endsection
@section('title') Login @endsection

@section('content')

    <div class="container moveDiv">
        <div class="row d-flex justify-content-center">
            <div class="col-6 d-flex flex-column align-items-center bg-light">
                <form class="text-center">
                    <img class="mt-4 mb-4" src="{{asset('assets/images/logo.png')}}" alt="Logo" />
                    <h1 class="mt-2 mb-4 ">Login</h1>
                    <div class="mb-3">
                        <label for="emailLogin" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailLogin" name="emailLogin" />
                        <p class="text-danger" id="emailLoginError"></p>
                    </div>
                    <div class="mb-5">
                        <label for="passLogin" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passLogin" name="passLogin" />
                        <p class="text-danger" id="passLoginError"></p>
                    </div>
                    <button type="button" class="btn btn-lg border border-dark" id="loginBtn">Login</button>
                    <p class='mt-4 mb-4' id="errorLogin"></p>
                </form>
                <p class="mb-5">You dont own an account? Make sure to register <a href="{{route('registration')}}"> here</a></p>
            </div>
        </div>
    </div>

@endsection
