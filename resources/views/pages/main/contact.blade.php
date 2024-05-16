@extends('layouts.layout')

@section('description') This is the contact page of Hexashop. Feel freely to ask us any questions You got about our store and products! We are here for You and Your questions! @endsection
@section('keywords') Hexashop, contact, email, questions, ask, freely @endsection
@section('title') Contact Us @endsection

@section('content')

<!-- ***** Main Banner Area Start ***** -->
<div class="page-heading about-page-heading" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>Contact Us</h2>
                    <span>Here You can ask us anything about store and our products!</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Contact Area Starts ***** -->
<div class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div id="map">
                    <iframe src="https://maps.google.com/maps?q=Juzni%20Bulevar%20105,%20Belgrade&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <!-- You can simply copy and paste "Embed a map" code from Google Maps for any location. -->

                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Say Hello. Don't Be Shy!</h2>
                    <span>If You have any questions, feel freely to ask anything about our store and products.</span>
                </div>
                <form id="contact">
                    <div class="row">
                        <div class="col-lg-6">
                            <fieldset>
                                <input name="nameContact" type="text" id="nameContact" placeholder="Your name">
                                <p class="text-danger" id="nameContactError"></p>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <input name="emailContact" type="text" id="emailContact" placeholder="Your email" required="">
                                <p class="text-danger" id="emailContactError"></p>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <textarea name="messageContact" rows="6" id="messageContact" placeholder="Your message" required=""></textarea>
                                <p class="text-danger" id="messageContactError"></p>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="button" id="contactBtn" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                                <p id="errorContact"></p>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ***** Contact Area Ends ***** -->
@endsection
