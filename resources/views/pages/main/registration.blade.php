@extends('layouts.layout')

@section('description') Welcome to Hexashop! If You have an account, please, make sure that You login first!@endsection
@section('keywords') Hexashop, login, email, password @endsection
@section('title') Registration @endsection

@section('content')

    <div class="container moveDiv">
        <div class="row d-flex justify-content-center">
            <div class="col-6 d-flex flex-column align-items-center bg-light">
                <form class="text-center">
                    <img class="mt-4 mb-4" src="{{asset('assets/images/logo.png')}}" alt="Logo" />
                    <h1 class="mt-2 mb-4 ">Register</h1>
                    <div class="mb-3">
                        <label for="firstNameRegister" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstNameRegister" name="firstNameRegister" />
                        <p class="text-danger" id="firstNameRegisterError"></p>
                    </div>
                    <div class="mb-3">
                        <label for="lastNameRegister" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastNameRegister" name="lastNameRegister" />
                        <p class="text-danger" id="lastNameRegisterError"></p>
                    </div>
                    <div class="mb-3">
                        <label for="cityRegister" class="form-label">City</label>
                        <div class="mb-3">
                            <select id="cityRegister" name="city">
                                <option value="0">Choose city...</option>
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <p class="text-danger" id="cityRegisterError"></p>
                    </div>
                    <div class="mb-3">
                        <label for="streetRegister" class="form-label">Street</label>
                        <input type="text" class="form-control" id="streetRegister" name="streetRegister" />
                        <p class="text-danger" id="streetRegisterError"></p>
                    </div>
                    <div class="mb-3">
                        <label for="emailRegister" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailRegister" name="emailRegister" />
                        <p class="text-danger" id="emailRegisterError"></p>
                    </div>
                    <div class="mb-5">
                        <label for="passRegister" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passRegister" name="passRegister" />
                        <p class="text-danger" id="passRegisterError"></p>
                    </div>
                    <div class="mb-5">
                        <label for="passConfirmRegister" class="form-label">Password confirm</label>
                        <input type="password" class="form-control" id="passConfirmRegister" name="passConfirmRegister" />
                        <p class="text-danger" id="passConfirmRegisterError"></p>
                    </div>
                    <button type="button" class="btn btn-lg border border-dark" id="registerBtn">Register</button>
                    <p class='mt-4 mb-4' id="errorRegistration"></p>
                </form>
                <p class="mb-5">You own an account? Make sure to login <a href="{{route('login')}}"> here.</a></p>
            </div>
        </div>
    </div>

@endsection

